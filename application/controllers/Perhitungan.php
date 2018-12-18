<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Perhitungan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('Biodata_balita_model', 'Biodata_bayi_model', 'Biodata_ibu_hamil_model', 'Imunisasi_bayi_model', 'Imunisasi_lanjutan_model', 'Kelahiran_model', 'Nama_model', 'Umur_model'));
        $this->load->library('form_validation');
    }

    public function pelayanan(){
    
        $data['konten'] = 'perhitungan/pelayanan';
        $data['pasien'] = $this->Biodata_ibu_hamil_model->get_all();
        $this->load->view('templates/admin/index', $data);
    }

    public function anc(){
        $data['anc_data'] = $this->db->query(" SELECT * FROM tbl_anc a JOIN tbl_biodata_ibu_hamil b ON b.id=a.id_pasien  ")->result();
        $data['konten'] = 'perhitungan/anc';
        $data['pasien'] = $this->Biodata_ibu_hamil_model->get_all();
        $this->load->view('templates/admin/index', $data);
    }

   

    public function anc_awal(){
        // print_r($_POST);exit;
        $date = date('Y-m-d');
        $id_pasien = $this->input->post('id_pasien');
        $tgl_hpht = $this->input->post('tgl_hpht');
        $so = $this->input->post('obsetri') ? 10:0;
        $sp = $this->input->post('paritas') ? 10:0;
        $jk = $this->input->post('jarak_kehamilan') ? 10:0;
        $um = $this->input->post('umur') ? 30:0;
        $kom = $this->input->post('komplikasi') ? 30:10;

        $np = $so + $sp + $jk + $um + $kom;
        $check_sudah = $this->db->query("SELECT * FROM tbl_kunjungan WHERE id_pasien='$id_pasien' ")->row();
        if ($check_sudah) {
            $this->session->set_flashdata('error', 'Pasien ini sudah mengisi Form sebelumnya. Silahkan ke menu Master Pemeriksaan utk pengecekan lebih lanjut');
            redirect('perhitungan/pelayanan');
        }

        // echo $np;
        $check = $this->db->query("SELECT * FROM tbl_anc WHERE id_pasien='$id_pasien' ")->row();
        if (!$check) {
            $insert_anc = $this->db->query("INSERT INTO tbl_anc (id_pasien, anc_awal) VALUES ('$id_pasien','$np') ");
        }else{
            $update_anc = $this->db->query("UPDATE tbl_anc SET anc_awal = '$np' WHERE id_pasien='$id_pasien' ");
        }

        $insert_k1 = $this->db->query("INSERT INTO tbl_kunjungan (id_pasien, kunjungan_ke, tekanan_darah, berat_badan, lingkar_perut, nilai_kunjungan, status ) VALUES('$id_pasien', 'k1','','','','','belum dihitung') ");
        $insert_k2 = $this->db->query("INSERT INTO tbl_kunjungan (id_pasien, kunjungan_ke, tekanan_darah, berat_badan, lingkar_perut, nilai_kunjungan, status ) VALUES('$id_pasien', 'k2','','','','','belum dihitung') ");
        $insert_k3 = $this->db->query("INSERT INTO tbl_kunjungan (id_pasien, kunjungan_ke, tekanan_darah, berat_badan, lingkar_perut, nilai_kunjungan, status ) VALUES('$id_pasien', 'k3','','','','','belum dihitung') ");
        $insert_k4 = $this->db->query("INSERT INTO tbl_kunjungan (id_pasien, kunjungan_ke, tekanan_darah, berat_badan, lingkar_perut, nilai_kunjungan, status ) VALUES('$id_pasien', 'k4','','','','','belum dihitung') ");
        $insert = $this->db->query("INSERT INTO tbl_pelayanan (id_pasien, tgl_pelayanan, tgl_hpht, anc_awal) VALUES ('$id_pasien', '$date', '$tgl_hpht', '$np') ");
        $this->session->set_flashdata('success', 'Berhasil menyimpan data. Silahkan ke Menu Pemeriksaan untuk melakukan pemeriksaan lebih lanjut');
        redirect('perhitungan/pelayanan');
    }

    public function pemeriksaan(){
        if (isset($_POST['submit'])) {

        }else{

            $data['konten'] = 'perhitungan/pemeriksaan';
            $data['pasien'] = $this->Biodata_ibu_hamil_model->get_all();
            $this->load->view('templates/admin/index', $data);
        }
    }

    public function get_pemeriksaan(){
        $id = $this->input->post('id_pasien');

        $anc = $this->db->query("SELECT sum(nilai_kunjungan) as anc FROM tbl_kunjungan WHERE id_pasien='$id' ")->row();
     
        $get_kunjungan = $this->db->query(" SELECT * FROM tbl_kunjungan where id_pasien='$id' order by id ")->result();
        if ($get_kunjungan) {
            echo json_encode(['data'=>$get_kunjungan, 'anc_akhir'=>$anc]);
            exit;
        }
       echo json_encode(['data'=>'no data']);
    }

    public function get_pemeriksaan_row(){
        $id = $this->input->post('id_pasien');
        $k = $this->input->post('kunjungan');

        if ($k) {
            $anc = $this->db->query("SELECT sum(nilai_kunjungan) as anc FROM tbl_kunjungan WHERE id_pasien='$id' ")->row();
            $get_kunjungan = $this->db->query(" SELECT * FROM tbl_kunjungan where id_pasien='$id' AND kunjungan_ke='$k' ")->row();
            echo json_encode(['data'=>$get_kunjungan, 'anc_akhir'=>$anc]);

        }
       
    }


    public function update_pemeriksaan(){
        $id_pasien = $this->input->post('id_pasien');
        $kunjungan = $this->input->post('kunjungan');
        $tekanan_darah = $this->input->post('tekanan_darah');
        $berat_badan = $this->input->post('berat_badan');
        $lingkar_perut = $this->input->post('lingkar_perut');
        $nk = (($tekanan_darah / 3) + $lingkar_perut + $berat_badan) / 3;
        $nilai_kunjungan = round($nk, 2);
        $status = '';
        
        if ($kunjungan == 'k1') {
            if ($nilai_kunjungan >= 50 && $nilai_kunjungan <= 75) {
                $status = 'normal';
            }else{
                $status = 'tidak normal';
            }
        }elseif($kunjungan == 'k2'){
            if ($nilai_kunjungan >= 75 && $nilai_kunjungan <= 100) {
                $status = 'normal';
            }else{
                $status = 'tidak normal';
            }
        }elseif($kunjungan == 'k3'){
            if ($nilai_kunjungan >= 100 && $nilai_kunjungan <= 125) {
                $status = 'normal';
            }else{
                $status = 'tidak normal';
            }
        }else{
            if ($nilai_kunjungan >= 125 && $nilai_kunjungan <= 150) {
                $status = 'normal';
            }else{
                $status = 'tidak normal';
            }
        }
        
        $anc = $this->db->query("SELECT sum(nilai_kunjungan) as anc FROM tbl_kunjungan WHERE id_pasien='$id_pasien' ")->row();
        $update_kunjungan = $this->db->query(" UPDATE tbl_kunjungan SET tekanan_darah='$tekanan_darah', berat_badan='$berat_badan', lingkar_perut='$lingkar_perut', nilai_kunjungan='$nilai_kunjungan', status='$status' WHERE id_pasien='$id_pasien' AND kunjungan_ke='$kunjungan' ");
       
        $get_kunjungan = $this->db->query(" SELECT * FROM tbl_kunjungan where id_pasien='$id_pasien' order by id ")->result();
       
       echo json_encode(['data'=>$get_kunjungan, 'anc_akhir'=>$anc]);
    }





}

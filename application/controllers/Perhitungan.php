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

    public function anc(){
    
        $data['konten'] = 'perhitungan/anc';
        $data['pasien'] = $this->Biodata_ibu_hamil_model->get_all();
        $data['action'] = 'anc_awal';
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
        // echo $np;

        $insert = $this->db->query("INSERT INTO tbl_pelayanan (id_pasien, tgl_pelayanan, tgl_hpht, anc_awal) VALUES ('$id_pasien', '$date', '$tgl_hpht', '$np') ");
        $this->session->flashdata('success', 'Berhasil menyimpan data. Silahkan ke Menu Pemeriksaan untuk melakukan pemeriksaan lebih lanjut');
        redirect('anc');
    }



}

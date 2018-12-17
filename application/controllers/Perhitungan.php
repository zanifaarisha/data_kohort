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
        $data['action'] = '';
        $this->load->view('templates/admin/index', $data);
    }



}

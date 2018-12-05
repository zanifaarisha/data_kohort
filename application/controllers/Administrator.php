<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model(array('Login_model'));
    }


	public function index()
	{
        $data['admin_data'] = $this->Login_model->get_data()->result();
		$data['konten'] = 'administrator/list';
		$this->load->view('templates/admin/index', $data);
	}

}

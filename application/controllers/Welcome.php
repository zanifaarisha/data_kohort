<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$data['konten'] = 'dashboard';
		$this->load->view('templates/admin/index', $data);
	}

	public function user()
	{
		$this->load->view('templates/user/home/index');
	}
}

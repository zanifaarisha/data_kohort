<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Login_model'); //load model login
	}
	
	public function index()
	{
		$this->load->view('login/index');
	}

	public function login()
	{
		if (isset($_POST['submit'])){
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$check = $this->Login_model->checkLogin($username, $password);
			if (!$check) {
				redirect('login');
			}else{

				$data = array(
					'username' => $username,
					'nama' => $check->nama,
					'level' => 'admin',
				);
				
				$this->session->set_userdata( $data );
				redirect('welcome');
			}

		}
	}

	public function logout(){
		$data = array('username','password', 'level');
		$this->session->unset_userdata($data);
		redirect('login');
		}

}

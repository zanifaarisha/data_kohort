<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	// function __construct(){
	// 	parent::__construct();
	// 	$this->load->model('Login_model'); //load model login
	// }
	
	public function checkLogin($username, $password)
	{
		return $this->db->query(" SELECT * FROM tbl_admin WHERE username='$username' AND password='$password' ")->row();
	}

}

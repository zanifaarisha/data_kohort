<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	public $table ='tbl_admin';
	public $id ='id_admin';
	
	public function checkLogin($username, $password)
	{
		return $this->db->query(" SELECT * FROM tbl_admin WHERE username='$username' AND password='$password' ")->row();
	}
	
	public function get_data(){
		return $this->db->get($this->table);
	}

	public function delete($id){
		$this->db->delete($this->table, $id);
	}


}

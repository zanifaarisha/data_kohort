<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Biodata_bayi_model extends CI_Model
{

    public $table = 'tbl_biodata_bayi';
    public $id = 'id_bayi';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_bayi', $q);
	$this->db->or_like('no_urut', $q);
	$this->db->or_like('nik', $q);
	$this->db->or_like('nama_bayi', $q);
	$this->db->or_like('tgl_lahir', $q);
	$this->db->or_like('jenis kelamin', $q);
	$this->db->or_like('nama_ibu', $q);
	$this->db->or_like('alamat', $q);
	$this->db->or_like('no_tlp', $q);
	$this->db->or_like('punya_buku_kia', $q);
	$this->db->or_like('berat_panjang', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_bayi', $q);
	$this->db->or_like('no_urut', $q);
	$this->db->or_like('nik', $q);
	$this->db->or_like('nama_bayi', $q);
	$this->db->or_like('tgl_lahir', $q);
	$this->db->or_like('jenis kelamin', $q);
	$this->db->or_like('nama_ibu', $q);
	$this->db->or_like('alamat', $q);
	$this->db->or_like('no_tlp', $q);
	$this->db->or_like('punya_buku_kia', $q);
	$this->db->or_like('berat_panjang', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Biodata_bayi_model.php */
/* Location: ./application/models/Biodata_bayi_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-09-21 05:13:52 */
/* http://harviacode.com */
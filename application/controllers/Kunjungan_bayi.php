<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kunjungan_bayi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kunjungan_bayi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'kunjungan_bayi/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'kunjungan_bayi/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'kunjungan_bayi/index.html';
            $config['first_url'] = base_url() . 'kunjungan_bayi/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Kunjungan_bayi_model->total_rows($q);
        $kunjungan_bayi = $this->Kunjungan_bayi_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'kunjungan_bayi_data' => $kunjungan_bayi,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $data['konten'] = 'kunjungan_bayi/tbl_kunjungan_bayi_list';
        $this->load->view('templates/admin/index', $data);
    }

    public function read($id) 
    {
        $row = $this->Kunjungan_bayi_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_kunjungan_bayi' => $row->id_kunjungan_bayi,
		'id_tahun_pertama' => $row->id_tahun_pertama,
		'id_tahun_kedua' => $row->id_tahun_kedua,
	    );
            $data['konten'] = 'kunjungan_bayi/tbl_kunjungan_bayi_read';
            $this->load->view('templates/admin/index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kunjungan_bayi'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('kunjungan_bayi/create_action'),
	    'id_kunjungan_bayi' => set_value('id_kunjungan_bayi'),
	    'id_tahun_pertama' => set_value('id_tahun_pertama'),
	    'id_tahun_kedua' => set_value('id_tahun_kedua'),
	);
        $data['konten'] = 'kunjungan_bayi/tbl_kunjungan_bayi_form';
        $this->load->view('templates/admin/index', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_tahun_pertama' => $this->input->post('id_tahun_pertama',TRUE),
		'id_tahun_kedua' => $this->input->post('id_tahun_kedua',TRUE),
	    );

            $this->Kunjungan_bayi_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('kunjungan_bayi'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Kunjungan_bayi_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('kunjungan_bayi/update_action'),
		'id_kunjungan_bayi' => set_value('id_kunjungan_bayi', $row->id_kunjungan_bayi),
		'id_tahun_pertama' => set_value('id_tahun_pertama', $row->id_tahun_pertama),
		'id_tahun_kedua' => set_value('id_tahun_kedua', $row->id_tahun_kedua),
	    );
            $data['konten'] = 'kunjungan_bayi/tbl_kunjungan_bayi_form';
            $this->load->view('templates/admin/index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kunjungan_bayi'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_kunjungan_bayi', TRUE));
        } else {
            $data = array(
		'id_tahun_pertama' => $this->input->post('id_tahun_pertama',TRUE),
		'id_tahun_kedua' => $this->input->post('id_tahun_kedua',TRUE),
	    );

            $this->Kunjungan_bayi_model->update($this->input->post('id_kunjungan_bayi', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('kunjungan_bayi'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Kunjungan_bayi_model->get_by_id($id);

        if ($row) {
            $this->Kunjungan_bayi_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('kunjungan_bayi'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kunjungan_bayi'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_tahun_pertama', 'id tahun pertama', 'trim|required');
	$this->form_validation->set_rules('id_tahun_kedua', 'id tahun kedua', 'trim|required');

	$this->form_validation->set_rules('id_kunjungan_bayi', 'id_kunjungan_bayi', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Kunjungan_bayi.php */
/* Location: ./application/controllers/Kunjungan_bayi.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-09-21 05:20:19 */
/* http://harviacode.com */
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Nama extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Nama_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'nama/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'nama/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'nama/index.html';
            $config['first_url'] = base_url() . 'nama/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Nama_model->total_rows($q);
        $nama = $this->Nama_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'nama_data' => $nama,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

        $data['konten'] = 'nama/tbl_nama_list';
        $this->load->view('templates/admin/index', $data);
    }

    public function read($id) 
    {
        $row = $this->Nama_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_nama' => $row->id_nama,
		'nama_ibu' => $row->nama_ibu,
		'nama_suami' => $row->nama_suami,
        );

        $data['konten'] = 'nama/tbl_nama_read';
        $this->load->view('templates/admin/index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('nama'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('nama/create_action'),
	    'id_nama' => set_value('id_nama'),
	    'nama_ibu' => set_value('nama_ibu'),
	    'nama_suami' => set_value('nama_suami'),
    );
        $data['konten'] = 'nama/tbl_nama_form';
        $this->load->view('templates/admin/index', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_ibu' => $this->input->post('nama_ibu',TRUE),
		'nama_suami' => $this->input->post('nama_suami',TRUE),
	    );

            $this->Nama_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('nama'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Nama_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('nama/update_action'),
		'id_nama' => set_value('id_nama', $row->id_nama),
		'nama_ibu' => set_value('nama_ibu', $row->nama_ibu),
		'nama_suami' => set_value('nama_suami', $row->nama_suami),
        );
        
            $data['konten'] = 'nama/tbl_nama_form';
            $this->load->view('templates/admin/index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('nama'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_nama', TRUE));
        } else {
            $data = array(
		'nama_ibu' => $this->input->post('nama_ibu',TRUE),
		'nama_suami' => $this->input->post('nama_suami',TRUE),
	    );

            $this->Nama_model->update($this->input->post('id_nama', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('nama'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Nama_model->get_by_id($id);

        if ($row) {
            $this->Nama_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('nama'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('nama'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_ibu', 'nama ibu', 'trim|required');
	$this->form_validation->set_rules('nama_suami', 'nama suami', 'trim|required');

	$this->form_validation->set_rules('id_nama', 'id_nama', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Nama.php */
/* Location: ./application/controllers/Nama.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-09-21 04:13:28 */
/* http://harviacode.com */
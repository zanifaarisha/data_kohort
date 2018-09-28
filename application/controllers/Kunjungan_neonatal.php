<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kunjungan_neonatal extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kunjungan_neonatal_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'kunjungan_neonatal/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'kunjungan_neonatal/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'kunjungan_neonatal/index.html';
            $config['first_url'] = base_url() . 'kunjungan_neonatal/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Kunjungan_neonatal_model->total_rows($q);
        $kunjungan_neonatal = $this->Kunjungan_neonatal_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'kunjungan_neonatal_data' => $kunjungan_neonatal,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('kunjungan_neonatal/tbl_kunjungan_neonatal_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Kunjungan_neonatal_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_kunjungan_neonatal' => $row->id_kunjungan_neonatal,
		'pertama' => $row->pertama,
		'kedua' => $row->kedua,
		'ketiga' => $row->ketiga,
	    );
            $this->load->view('kunjungan_neonatal/tbl_kunjungan_neonatal_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kunjungan_neonatal'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('kunjungan_neonatal/create_action'),
	    'id_kunjungan_neonatal' => set_value('id_kunjungan_neonatal'),
	    'pertama' => set_value('pertama'),
	    'kedua' => set_value('kedua'),
	    'ketiga' => set_value('ketiga'),
	);
        $this->load->view('kunjungan_neonatal/tbl_kunjungan_neonatal_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'pertama' => $this->input->post('pertama',TRUE),
		'kedua' => $this->input->post('kedua',TRUE),
		'ketiga' => $this->input->post('ketiga',TRUE),
	    );

            $this->Kunjungan_neonatal_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('kunjungan_neonatal'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Kunjungan_neonatal_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('kunjungan_neonatal/update_action'),
		'id_kunjungan_neonatal' => set_value('id_kunjungan_neonatal', $row->id_kunjungan_neonatal),
		'pertama' => set_value('pertama', $row->pertama),
		'kedua' => set_value('kedua', $row->kedua),
		'ketiga' => set_value('ketiga', $row->ketiga),
	    );
            $this->load->view('kunjungan_neonatal/tbl_kunjungan_neonatal_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kunjungan_neonatal'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_kunjungan_neonatal', TRUE));
        } else {
            $data = array(
		'pertama' => $this->input->post('pertama',TRUE),
		'kedua' => $this->input->post('kedua',TRUE),
		'ketiga' => $this->input->post('ketiga',TRUE),
	    );

            $this->Kunjungan_neonatal_model->update($this->input->post('id_kunjungan_neonatal', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('kunjungan_neonatal'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Kunjungan_neonatal_model->get_by_id($id);

        if ($row) {
            $this->Kunjungan_neonatal_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('kunjungan_neonatal'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kunjungan_neonatal'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('pertama', 'pertama', 'trim|required');
	$this->form_validation->set_rules('kedua', 'kedua', 'trim|required');
	$this->form_validation->set_rules('ketiga', 'ketiga', 'trim|required');

	$this->form_validation->set_rules('id_kunjungan_neonatal', 'id_kunjungan_neonatal', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Kunjungan_neonatal.php */
/* Location: ./application/controllers/Kunjungan_neonatal.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-09-21 05:15:23 */
/* http://harviacode.com */
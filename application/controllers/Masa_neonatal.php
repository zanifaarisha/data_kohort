<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Masa_neonatal extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Masa_neonatal_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'masa_neonatal/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'masa_neonatal/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'masa_neonatal/index.html';
            $config['first_url'] = base_url() . 'masa_neonatal/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Masa_neonatal_model->total_rows($q);
        $masa_neonatal = $this->Masa_neonatal_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'masa_neonatal_data' => $masa_neonatal,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('masa_neonatal/tbl_masa_neonatal_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Masa_neonatal_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_masa_neonatal' => $row->id_masa_neonatal,
		'id_kunjungan_neonatal' => $row->id_kunjungan_neonatal,
		'lahir_5jam' => $row->lahir_5jam,
	    );
            $this->load->view('masa_neonatal/tbl_masa_neonatal_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('masa_neonatal'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('masa_neonatal/create_action'),
	    'id_masa_neonatal' => set_value('id_masa_neonatal'),
	    'id_kunjungan_neonatal' => set_value('id_kunjungan_neonatal'),
	    'lahir_5jam' => set_value('lahir_5jam'),
	);
        $this->load->view('masa_neonatal/tbl_masa_neonatal_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_kunjungan_neonatal' => $this->input->post('id_kunjungan_neonatal',TRUE),
		'lahir_5jam' => $this->input->post('lahir_5jam',TRUE),
	    );

            $this->Masa_neonatal_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('masa_neonatal'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Masa_neonatal_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('masa_neonatal/update_action'),
		'id_masa_neonatal' => set_value('id_masa_neonatal', $row->id_masa_neonatal),
		'id_kunjungan_neonatal' => set_value('id_kunjungan_neonatal', $row->id_kunjungan_neonatal),
		'lahir_5jam' => set_value('lahir_5jam', $row->lahir_5jam),
	    );
            $this->load->view('masa_neonatal/tbl_masa_neonatal_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('masa_neonatal'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_masa_neonatal', TRUE));
        } else {
            $data = array(
		'id_kunjungan_neonatal' => $this->input->post('id_kunjungan_neonatal',TRUE),
		'lahir_5jam' => $this->input->post('lahir_5jam',TRUE),
	    );

            $this->Masa_neonatal_model->update($this->input->post('id_masa_neonatal', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('masa_neonatal'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Masa_neonatal_model->get_by_id($id);

        if ($row) {
            $this->Masa_neonatal_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('masa_neonatal'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('masa_neonatal'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_kunjungan_neonatal', 'id kunjungan neonatal', 'trim|required');
	$this->form_validation->set_rules('lahir_5jam', 'lahir 5jam', 'trim|required');

	$this->form_validation->set_rules('id_masa_neonatal', 'id_masa_neonatal', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Masa_neonatal.php */
/* Location: ./application/controllers/Masa_neonatal.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-09-21 05:15:42 */
/* http://harviacode.com */
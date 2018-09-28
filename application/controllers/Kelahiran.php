<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kelahiran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kelahiran_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'kelahiran/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'kelahiran/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'kelahiran/index.html';
            $config['first_url'] = base_url() . 'kelahiran/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Kelahiran_model->total_rows($q);
        $kelahiran = $this->Kelahiran_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'kelahiran_data' => $kelahiran,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('kelahiran/tbl_kelahiran_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Kelahiran_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_kelahiran' => $row->id_kelahiran,
		'lahir_mati' => $row->lahir_mati,
		'lahir_hidup' => $row->lahir_hidup,
	    );
            $this->load->view('kelahiran/tbl_kelahiran_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kelahiran'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('kelahiran/create_action'),
	    'id_kelahiran' => set_value('id_kelahiran'),
	    'lahir_mati' => set_value('lahir_mati'),
	    'lahir_hidup' => set_value('lahir_hidup'),
	);
        $this->load->view('kelahiran/tbl_kelahiran_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'lahir_mati' => $this->input->post('lahir_mati',TRUE),
		'lahir_hidup' => $this->input->post('lahir_hidup',TRUE),
	    );

            $this->Kelahiran_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('kelahiran'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Kelahiran_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('kelahiran/update_action'),
		'id_kelahiran' => set_value('id_kelahiran', $row->id_kelahiran),
		'lahir_mati' => set_value('lahir_mati', $row->lahir_mati),
		'lahir_hidup' => set_value('lahir_hidup', $row->lahir_hidup),
	    );
            $this->load->view('kelahiran/tbl_kelahiran_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kelahiran'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_kelahiran', TRUE));
        } else {
            $data = array(
		'lahir_mati' => $this->input->post('lahir_mati',TRUE),
		'lahir_hidup' => $this->input->post('lahir_hidup',TRUE),
	    );

            $this->Kelahiran_model->update($this->input->post('id_kelahiran', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('kelahiran'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Kelahiran_model->get_by_id($id);

        if ($row) {
            $this->Kelahiran_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('kelahiran'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kelahiran'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('lahir_mati', 'lahir mati', 'trim|required');
	$this->form_validation->set_rules('lahir_hidup', 'lahir hidup', 'trim|required');

	$this->form_validation->set_rules('id_kelahiran', 'id_kelahiran', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Kelahiran.php */
/* Location: ./application/controllers/Kelahiran.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-09-21 05:10:30 */
/* http://harviacode.com */
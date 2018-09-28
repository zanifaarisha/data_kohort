<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Penolak_persalinan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Penolak_persalinan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'penolak_persalinan/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'penolak_persalinan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'penolak_persalinan/index.html';
            $config['first_url'] = base_url() . 'penolak_persalinan/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Penolak_persalinan_model->total_rows($q);
        $penolak_persalinan = $this->Penolak_persalinan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'penolak_persalinan_data' => $penolak_persalinan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('penolak_persalinan/tbl_penolak_persalinan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Penolak_persalinan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_persalinan' => $row->id_persalinan,
		'nakes_kongisten' => $row->nakes_kongisten,
		'dukun' => $row->dukun,
	    );
            $this->load->view('penolak_persalinan/tbl_penolak_persalinan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('penolak_persalinan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('penolak_persalinan/create_action'),
	    'id_persalinan' => set_value('id_persalinan'),
	    'nakes_kongisten' => set_value('nakes_kongisten'),
	    'dukun' => set_value('dukun'),
	);
        $this->load->view('penolak_persalinan/tbl_penolak_persalinan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nakes_kongisten' => $this->input->post('nakes_kongisten',TRUE),
		'dukun' => $this->input->post('dukun',TRUE),
	    );

            $this->Penolak_persalinan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('penolak_persalinan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Penolak_persalinan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('penolak_persalinan/update_action'),
		'id_persalinan' => set_value('id_persalinan', $row->id_persalinan),
		'nakes_kongisten' => set_value('nakes_kongisten', $row->nakes_kongisten),
		'dukun' => set_value('dukun', $row->dukun),
	    );
            $this->load->view('penolak_persalinan/tbl_penolak_persalinan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('penolak_persalinan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_persalinan', TRUE));
        } else {
            $data = array(
		'nakes_kongisten' => $this->input->post('nakes_kongisten',TRUE),
		'dukun' => $this->input->post('dukun',TRUE),
	    );

            $this->Penolak_persalinan_model->update($this->input->post('id_persalinan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('penolak_persalinan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Penolak_persalinan_model->get_by_id($id);

        if ($row) {
            $this->Penolak_persalinan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('penolak_persalinan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('penolak_persalinan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nakes_kongisten', 'nakes kongisten', 'trim|required');
	$this->form_validation->set_rules('dukun', 'dukun', 'trim|required');

	$this->form_validation->set_rules('id_persalinan', 'id_persalinan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Penolak_persalinan.php */
/* Location: ./application/controllers/Penolak_persalinan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-09-21 05:08:29 */
/* http://harviacode.com */
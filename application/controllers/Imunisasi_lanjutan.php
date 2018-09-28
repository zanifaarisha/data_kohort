<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Imunisasi_lanjutan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Imunisasi_lanjutan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'imunisasi_lanjutan/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'imunisasi_lanjutan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'imunisasi_lanjutan/index.html';
            $config['first_url'] = base_url() . 'imunisasi_lanjutan/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Imunisasi_lanjutan_model->total_rows($q);
        $imunisasi_lanjutan = $this->Imunisasi_lanjutan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'imunisasi_lanjutan_data' => $imunisasi_lanjutan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('imunisasi_lanjutan/tbl_imunisasi_lanjutan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Imunisasi_lanjutan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_imunisasi' => $row->id_imunisasi,
		'dpt_hb_hib' => $row->dpt_hb_hib,
		'Campak' => $row->Campak,
	    );
            $this->load->view('imunisasi_lanjutan/tbl_imunisasi_lanjutan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('imunisasi_lanjutan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('imunisasi_lanjutan/create_action'),
	    'id_imunisasi' => set_value('id_imunisasi'),
	    'dpt_hb_hib' => set_value('dpt_hb_hib'),
	    'Campak' => set_value('Campak'),
	);
        $this->load->view('imunisasi_lanjutan/tbl_imunisasi_lanjutan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'dpt_hb_hib' => $this->input->post('dpt_hb_hib',TRUE),
		'Campak' => $this->input->post('Campak',TRUE),
	    );

            $this->Imunisasi_lanjutan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('imunisasi_lanjutan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Imunisasi_lanjutan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('imunisasi_lanjutan/update_action'),
		'id_imunisasi' => set_value('id_imunisasi', $row->id_imunisasi),
		'dpt_hb_hib' => set_value('dpt_hb_hib', $row->dpt_hb_hib),
		'Campak' => set_value('Campak', $row->Campak),
	    );
            $this->load->view('imunisasi_lanjutan/tbl_imunisasi_lanjutan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('imunisasi_lanjutan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_imunisasi', TRUE));
        } else {
            $data = array(
		'dpt_hb_hib' => $this->input->post('dpt_hb_hib',TRUE),
		'Campak' => $this->input->post('Campak',TRUE),
	    );

            $this->Imunisasi_lanjutan_model->update($this->input->post('id_imunisasi', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('imunisasi_lanjutan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Imunisasi_lanjutan_model->get_by_id($id);

        if ($row) {
            $this->Imunisasi_lanjutan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('imunisasi_lanjutan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('imunisasi_lanjutan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('dpt_hb_hib', 'dpt hb hib', 'trim|required');
	$this->form_validation->set_rules('Campak', 'campak', 'trim|required');

	$this->form_validation->set_rules('id_imunisasi', 'id_imunisasi', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Imunisasi_lanjutan.php */
/* Location: ./application/controllers/Imunisasi_lanjutan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-09-21 05:49:15 */
/* http://harviacode.com */
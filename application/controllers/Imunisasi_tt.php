<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Imunisasi_tt extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Imunisasi_tt_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'imunisasi_tt/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'imunisasi_tt/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'imunisasi_tt/index.html';
            $config['first_url'] = base_url() . 'imunisasi_tt/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Imunisasi_tt_model->total_rows($q);
        $imunisasi_tt = $this->Imunisasi_tt_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'imunisasi_tt_data' => $imunisasi_tt,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $data['konten'] = 'imunisasi_tt/tbl_imunisasi_tt_list';
        $this->load->view('templates/admin/index', $data);
    }

    public function read($id) 
    {
        $row = $this->Imunisasi_tt_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_imunisasi' => $row->id_imunisasi,
		'status_imunisasi_tt' => $row->status_imunisasi_tt,
		'pemberian_imunisasi_tt' => $row->pemberian_imunisasi_tt,
	    );
            $data['konten'] = 'imunisasi_tt/tbl_imunisasi_tt_read';
            $this->load->view('templates/admin/index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('imunisasi_tt'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('imunisasi_tt/create_action'),
	    'id_imunisasi' => set_value('id_imunisasi'),
	    'status_imunisasi_tt' => set_value('status_imunisasi_tt'),
	    'pemberian_imunisasi_tt' => set_value('pemberian_imunisasi_tt'),
	);
        $data['konten'] = 'imunisasi_tt/tbl_imunisasi_tt_form';
        $this->load->view('templates/admin/index', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'status_imunisasi_tt' => $this->input->post('status_imunisasi_tt',TRUE),
		'pemberian_imunisasi_tt' => $this->input->post('pemberian_imunisasi_tt',TRUE),
	    );

            $this->Imunisasi_tt_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('imunisasi_tt'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Imunisasi_tt_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('imunisasi_tt/update_action'),
		'id_imunisasi' => set_value('id_imunisasi', $row->id_imunisasi),
		'status_imunisasi_tt' => set_value('status_imunisasi_tt', $row->status_imunisasi_tt),
		'pemberian_imunisasi_tt' => set_value('pemberian_imunisasi_tt', $row->pemberian_imunisasi_tt),
	    );
            $data['konten'] = 'imunisasi_tt/tbl_imunisasi_tt_form';
            $this->load->view('templates/admin/index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('imunisasi_tt'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_imunisasi', TRUE));
        } else {
            $data = array(
		'status_imunisasi_tt' => $this->input->post('status_imunisasi_tt',TRUE),
		'pemberian_imunisasi_tt' => $this->input->post('pemberian_imunisasi_tt',TRUE),
	    );

            $this->Imunisasi_tt_model->update($this->input->post('id_imunisasi', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('imunisasi_tt'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Imunisasi_tt_model->get_by_id($id);

        if ($row) {
            $this->Imunisasi_tt_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('imunisasi_tt'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('imunisasi_tt'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('status_imunisasi_tt', 'status imunisasi tt', 'trim|required');
	$this->form_validation->set_rules('pemberian_imunisasi_tt', 'pemberian imunisasi tt', 'trim|required');

	$this->form_validation->set_rules('id_imunisasi', 'id_imunisasi', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Imunisasi_tt.php */
/* Location: ./application/controllers/Imunisasi_tt.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-09-21 05:01:39 */
/* http://harviacode.com */
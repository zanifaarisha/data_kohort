<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pendeteksi_faktor_resiko extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pendeteksi_faktor_resiko_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'pendeteksi_faktor_resiko/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'pendeteksi_faktor_resiko/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'pendeteksi_faktor_resiko/index.html';
            $config['first_url'] = base_url() . 'pendeteksi_faktor_resiko/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Pendeteksi_faktor_resiko_model->total_rows($q);
        $pendeteksi_faktor_resiko = $this->Pendeteksi_faktor_resiko_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pendeteksi_faktor_resiko_data' => $pendeteksi_faktor_resiko,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('pendeteksi_faktor_resiko/tbl_pendeteksi_faktor_resiko_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Pendeteksi_faktor_resiko_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_resiko' => $row->id_resiko,
		'nakes' => $row->nakes,
		'masyarakat' => $row->masyarakat,
	    );
            $this->load->view('pendeteksi_faktor_resiko/tbl_pendeteksi_faktor_resiko_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pendeteksi_faktor_resiko'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pendeteksi_faktor_resiko/create_action'),
	    'id_resiko' => set_value('id_resiko'),
	    'nakes' => set_value('nakes'),
	    'masyarakat' => set_value('masyarakat'),
	);
        $this->load->view('pendeteksi_faktor_resiko/tbl_pendeteksi_faktor_resiko_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nakes' => $this->input->post('nakes',TRUE),
		'masyarakat' => $this->input->post('masyarakat',TRUE),
	    );

            $this->Pendeteksi_faktor_resiko_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pendeteksi_faktor_resiko'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pendeteksi_faktor_resiko_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pendeteksi_faktor_resiko/update_action'),
		'id_resiko' => set_value('id_resiko', $row->id_resiko),
		'nakes' => set_value('nakes', $row->nakes),
		'masyarakat' => set_value('masyarakat', $row->masyarakat),
	    );
            $this->load->view('pendeteksi_faktor_resiko/tbl_pendeteksi_faktor_resiko_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pendeteksi_faktor_resiko'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_resiko', TRUE));
        } else {
            $data = array(
		'nakes' => $this->input->post('nakes',TRUE),
		'masyarakat' => $this->input->post('masyarakat',TRUE),
	    );

            $this->Pendeteksi_faktor_resiko_model->update($this->input->post('id_resiko', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pendeteksi_faktor_resiko'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pendeteksi_faktor_resiko_model->get_by_id($id);

        if ($row) {
            $this->Pendeteksi_faktor_resiko_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pendeteksi_faktor_resiko'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pendeteksi_faktor_resiko'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nakes', 'nakes', 'trim|required');
	$this->form_validation->set_rules('masyarakat', 'masyarakat', 'trim|required');

	$this->form_validation->set_rules('id_resiko', 'id_resiko', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pendeteksi_faktor_resiko.php */
/* Location: ./application/controllers/Pendeteksi_faktor_resiko.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-09-21 04:57:08 */
/* http://harviacode.com */
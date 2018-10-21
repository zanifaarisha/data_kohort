<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kematian_post_natal extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kematian_post_natal_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'kematian_post_natal/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'kematian_post_natal/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'kematian_post_natal/index.html';
            $config['first_url'] = base_url() . 'kematian_post_natal/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Kematian_post_natal_model->total_rows($q);
        $kematian_post_natal = $this->Kematian_post_natal_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'kematian_post_natal_data' => $kematian_post_natal,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $data['konten'] = 'kematian_post_natal/tbl_kematian_post_natal_list';
        $this->load->view('templates/admin/index', $data);
    }

    public function read($id) 
    {
        $row = $this->Kematian_post_natal_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_kematian' => $row->id_kematian,
		'ket' => $row->ket,
	    );
            $data['konten'] = 'kematian_post_natal/tbl_kematian_post_natal_read';
            $this->load->view('templates/admin/index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kematian_post_natal'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('kematian_post_natal/create_action'),
	    'id_kematian' => set_value('id_kematian'),
	    'ket' => set_value('ket'),
	);
        $data['konten'] = 'kematian_post_natal/tbl_kematian_post_natal_form';
        $this->load->view('templates/admin/index', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'ket' => $this->input->post('ket',TRUE),
	    );

            $this->Kematian_post_natal_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('kematian_post_natal'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Kematian_post_natal_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('kematian_post_natal/update_action'),
		'id_kematian' => set_value('id_kematian', $row->id_kematian),
		'ket' => set_value('ket', $row->ket),
	    );
            $data['konten'] = 'kematian_post_natal/tbl_kematian_post_natal_form';
            $this->load->view('templates/admin/index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kematian_post_natal'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_kematian', TRUE));
        } else {
            $data = array(
		'ket' => $this->input->post('ket',TRUE),
	    );

            $this->Kematian_post_natal_model->update($this->input->post('id_kematian', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('kematian_post_natal'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Kematian_post_natal_model->get_by_id($id);

        if ($row) {
            $this->Kematian_post_natal_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('kematian_post_natal'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kematian_post_natal'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('ket', 'ket', 'trim|required');

	$this->form_validation->set_rules('id_kematian', 'id_kematian', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Kematian_post_natal.php */
/* Location: ./application/controllers/Kematian_post_natal.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-09-21 05:21:27 */
/* http://harviacode.com */
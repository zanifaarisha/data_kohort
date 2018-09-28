<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Meninggal extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Meninggal_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'meninggal/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'meninggal/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'meninggal/index.html';
            $config['first_url'] = base_url() . 'meninggal/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Meninggal_model->total_rows($q);
        $meninggal = $this->Meninggal_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'meninggal_data' => $meninggal,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('meninggal/tbl_meninggal_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Meninggal_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_meninggal' => $row->id_meninggal,
		'tgl_penyebab_kematian' => $row->tgl_penyebab_kematian,
		'ket' => $row->ket,
	    );
            $this->load->view('meninggal/tbl_meninggal_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('meninggal'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('meninggal/create_action'),
	    'id_meninggal' => set_value('id_meninggal'),
	    'tgl_penyebab_kematian' => set_value('tgl_penyebab_kematian'),
	    'ket' => set_value('ket'),
	);
        $this->load->view('meninggal/tbl_meninggal_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'tgl_penyebab_kematian' => $this->input->post('tgl_penyebab_kematian',TRUE),
		'ket' => $this->input->post('ket',TRUE),
	    );

            $this->Meninggal_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('meninggal'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Meninggal_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('meninggal/update_action'),
		'id_meninggal' => set_value('id_meninggal', $row->id_meninggal),
		'tgl_penyebab_kematian' => set_value('tgl_penyebab_kematian', $row->tgl_penyebab_kematian),
		'ket' => set_value('ket', $row->ket),
	    );
            $this->load->view('meninggal/tbl_meninggal_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('meninggal'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_meninggal', TRUE));
        } else {
            $data = array(
		'tgl_penyebab_kematian' => $this->input->post('tgl_penyebab_kematian',TRUE),
		'ket' => $this->input->post('ket',TRUE),
	    );

            $this->Meninggal_model->update($this->input->post('id_meninggal', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('meninggal'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Meninggal_model->get_by_id($id);

        if ($row) {
            $this->Meninggal_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('meninggal'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('meninggal'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('tgl_penyebab_kematian', 'tgl penyebab kematian', 'trim|required');
	$this->form_validation->set_rules('ket', 'ket', 'trim|required');

	$this->form_validation->set_rules('id_meninggal', 'id_meninggal', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Meninggal.php */
/* Location: ./application/controllers/Meninggal.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-09-21 08:08:28 */
/* http://harviacode.com */
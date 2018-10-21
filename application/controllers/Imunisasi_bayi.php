<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Imunisasi_bayi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Imunisasi_bayi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'imunisasi_bayi/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'imunisasi_bayi/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'imunisasi_bayi/index.html';
            $config['first_url'] = base_url() . 'imunisasi_bayi/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Imunisasi_bayi_model->total_rows($q);
        $imunisasi_bayi = $this->Imunisasi_bayi_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'imunisasi_bayi_data' => $imunisasi_bayi,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $data['konten'] = 'imunisasi_bayi/tbl_imunisasi_bayi_list';
        $this->load->view('templates/admin/index', $data);
    }

    public function read($id) 
    {
        $row = $this->Imunisasi_bayi_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_imunisasi' => $row->id_imunisasi,
		'hb_tujuh_hr' => $row->hb_tujuh_hr,
		'polio_satu' => $row->polio_satu,
		'polio_dua' => $row->polio_dua,
		'polio_tiga' => $row->polio_tiga,
		'polio_empat' => $row->polio_empat,
		'campak' => $row->campak,
		'IDL' => $row->IDL,
	    );
            $data['konten'] = 'imunisasi_bayi/tbl_imunisasi_bayi_read';
            $this->load->view('templates/admin/index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('imunisasi_bayi'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('imunisasi_bayi/create_action'),
	    'id_imunisasi' => set_value('id_imunisasi'),
	    'hb-7hr' => set_value('hb-7hr'),
	    'polio 1' => set_value('polio 1'),
	    'polio 2' => set_value('polio 2'),
	    'polio 3' => set_value('polio 3'),
	    'polio 4' => set_value('polio 4'),
	    'campak' => set_value('campak'),
	    'IDL' => set_value('IDL'),
	);
        $data['konten'] = 'imunisasi_bayi/tbl_imunisasi_bayi_form';
        $this->load->view('templates/admin/index', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'hb-7hr' => $this->input->post('hb-7hr',TRUE),
		'polio 1' => $this->input->post('polio 1',TRUE),
		'polio 2' => $this->input->post('polio 2',TRUE),
		'polio 3' => $this->input->post('polio 3',TRUE),
		'polio 4' => $this->input->post('polio 4',TRUE),
		'campak' => $this->input->post('campak',TRUE),
		'IDL' => $this->input->post('IDL',TRUE),
	    );

            $this->Imunisasi_bayi_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('imunisasi_bayi'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Imunisasi_bayi_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('imunisasi_bayi/update_action'),
		'id_imunisasi' => set_value('id_imunisasi', $row->id_imunisasi),
		'hb_tujuh_hr' => set_value('hb_tujuh_hr', $row->hb_tujuh_hr),
		'polio_satu' => set_value('polio_satu', $row->polio_satu),
		'polio_dua' => set_value('polio_dua', $row->polio_dua),
		'polio_tiga' => set_value('polio_tiga', $row->polio_tiga),
		'polio_empat' => set_value('polio_empat', $row->polio_empat),
		'campak' => set_value('campak', $row->campak),
		'IDL' => set_value('IDL', $row->IDL),
	    );
            $data['konten'] = 'imunisasi_bayi/tbl_imunisasi_bayi_form';
            $this->load->view('templates/admin/index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('imunisasi_bayi'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_imunisasi', TRUE));
        } else {
            $data = array(
		'hb-7hr' => $this->input->post('hb-7hr',TRUE),
		'polio 1' => $this->input->post('polio 1',TRUE),
		'polio 2' => $this->input->post('polio 2',TRUE),
		'polio 3' => $this->input->post('polio 3',TRUE),
		'polio 4' => $this->input->post('polio 4',TRUE),
		'campak' => $this->input->post('campak',TRUE),
		'IDL' => $this->input->post('IDL',TRUE),
	    );

            $this->Imunisasi_bayi_model->update($this->input->post('id_imunisasi', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('imunisasi_bayi'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Imunisasi_bayi_model->get_by_id($id);

        if ($row) {
            $this->Imunisasi_bayi_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('imunisasi_bayi'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('imunisasi_bayi'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('hb-7hr', 'hb-7hr', 'trim|required');
	$this->form_validation->set_rules('polio 1', 'polio 1', 'trim|required');
	$this->form_validation->set_rules('polio 2', 'polio 2', 'trim|required');
	$this->form_validation->set_rules('polio 3', 'polio 3', 'trim|required');
	$this->form_validation->set_rules('polio 4', 'polio 4', 'trim|required');
	$this->form_validation->set_rules('campak', 'campak', 'trim|required');
	$this->form_validation->set_rules('IDL', 'idl', 'trim|required');

	$this->form_validation->set_rules('id_imunisasi', 'id_imunisasi', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Imunisasi_bayi.php */
/* Location: ./application/controllers/Imunisasi_bayi.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-09-21 05:21:07 */
/* http://harviacode.com */
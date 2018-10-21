<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pelayanan_balita extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pelayanan_balita_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'pelayanan_balita/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'pelayanan_balita/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'pelayanan_balita/index.html';
            $config['first_url'] = base_url() . 'pelayanan_balita/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Pelayanan_balita_model->total_rows($q);
        $pelayanan_balita = $this->Pelayanan_balita_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pelayanan_balita_data' => $pelayanan_balita,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $data['konten'] = 'pelayanan_balita/tbl_pelayanan_balita_list';
        $this->load->view('templates/admin/index', $data);
    }

    public function read($id) 
    {
        $row = $this->Pelayanan_balita_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_pelayanan_balita' => $row->id_pelayanan_balita,
		'id_tahun_pertama' => $row->id_tahun_pertama,
		'id_tahun_kedua' => $row->id_tahun_kedua,
		'id_tahun_ketiga' => $row->id_tahun_ketiga,
		'id_tahun_keempat' => $row->id_tahun_keempat,
		'id_tahun_kelima' => $row->id_tahun_kelima,
	    );
            $data['konten'] = 'pelayanan_balita/tbl_pelayanan_balita_read';
            $this->load->view('templates/admin/index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pelayanan_balita'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pelayanan_balita/create_action'),
	    'id_pelayanan_balita' => set_value('id_pelayanan_balita'),
	    'id_tahun_pertama' => set_value('id_tahun_pertama'),
	    'id_tahun_kedua' => set_value('id_tahun_kedua'),
	    'id_tahun_ketiga' => set_value('id_tahun_ketiga'),
	    'id_tahun_keempat' => set_value('id_tahun_keempat'),
	    'id_tahun_kelima' => set_value('id_tahun_kelima'),
	);
        $data['konten'] = 'pelayanan_balita/tbl_pelayanan_balita_form';
        $this->load->view('templates/admin/index', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_tahun_pertama' => $this->input->post('id_tahun_pertama',TRUE),
		'id_tahun_kedua' => $this->input->post('id_tahun_kedua',TRUE),
		'id_tahun_ketiga' => $this->input->post('id_tahun_ketiga',TRUE),
		'id_tahun_keempat' => $this->input->post('id_tahun_keempat',TRUE),
		'id_tahun_kelima' => $this->input->post('id_tahun_kelima',TRUE),
	    );

            $this->Pelayanan_balita_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pelayanan_balita'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pelayanan_balita_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pelayanan_balita/update_action'),
		'id_pelayanan_balita' => set_value('id_pelayanan_balita', $row->id_pelayanan_balita),
		'id_tahun_pertama' => set_value('id_tahun_pertama', $row->id_tahun_pertama),
		'id_tahun_kedua' => set_value('id_tahun_kedua', $row->id_tahun_kedua),
		'id_tahun_ketiga' => set_value('id_tahun_ketiga', $row->id_tahun_ketiga),
		'id_tahun_keempat' => set_value('id_tahun_keempat', $row->id_tahun_keempat),
		'id_tahun_kelima' => set_value('id_tahun_kelima', $row->id_tahun_kelima),
	    );
            $data['konten'] = 'pelayanan_balita/tbl_pelayanan_balita_form';
            $this->load->view('templates/admin/index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pelayanan_balita'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_pelayanan_balita', TRUE));
        } else {
            $data = array(
		'id_tahun_pertama' => $this->input->post('id_tahun_pertama',TRUE),
		'id_tahun_kedua' => $this->input->post('id_tahun_kedua',TRUE),
		'id_tahun_ketiga' => $this->input->post('id_tahun_ketiga',TRUE),
		'id_tahun_keempat' => $this->input->post('id_tahun_keempat',TRUE),
		'id_tahun_kelima' => $this->input->post('id_tahun_kelima',TRUE),
	    );

            $this->Pelayanan_balita_model->update($this->input->post('id_pelayanan_balita', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pelayanan_balita'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pelayanan_balita_model->get_by_id($id);

        if ($row) {
            $this->Pelayanan_balita_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pelayanan_balita'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pelayanan_balita'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_tahun_pertama', 'id tahun pertama', 'trim|required');
	$this->form_validation->set_rules('id_tahun_kedua', 'id tahun kedua', 'trim|required');
	$this->form_validation->set_rules('id_tahun_ketiga', 'id tahun ketiga', 'trim|required');
	$this->form_validation->set_rules('id_tahun_keempat', 'id tahun keempat', 'trim|required');
	$this->form_validation->set_rules('id_tahun_kelima', 'id tahun kelima', 'trim|required');

	$this->form_validation->set_rules('id_pelayanan_balita', 'id_pelayanan_balita', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pelayanan_balita.php */
/* Location: ./application/controllers/Pelayanan_balita.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-09-21 06:34:47 */
/* http://harviacode.com */
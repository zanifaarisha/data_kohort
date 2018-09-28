<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tahun_kedua extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tahun_kedua_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'tahun_kedua/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'tahun_kedua/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'tahun_kedua/index.html';
            $config['first_url'] = base_url() . 'tahun_kedua/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Tahun_kedua_model->total_rows($q);
        $tahun_kedua = $this->Tahun_kedua_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tahun_kedua_data' => $tahun_kedua,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('tahun_kedua/tbl_tahun_kedua_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tahun_kedua_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_tahun_kedua' => $row->id_tahun_kedua,
		'jan' => $row->jan,
		'feb' => $row->feb,
		'maret' => $row->maret,
		'april' => $row->april,
		'mei' => $row->mei,
		'juni' => $row->juni,
		'july' => $row->july,
		'agst' => $row->agst,
		'sept' => $row->sept,
		'okt' => $row->okt,
		'nov' => $row->nov,
		'des' => $row->des,
	    );
            $this->load->view('tahun_kedua/tbl_tahun_kedua_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tahun_kedua'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tahun_kedua/create_action'),
	    'id_tahun_kedua' => set_value('id_tahun_kedua'),
	    'jan' => set_value('jan'),
	    'feb' => set_value('feb'),
	    'maret' => set_value('maret'),
	    'april' => set_value('april'),
	    'mei' => set_value('mei'),
	    'juni' => set_value('juni'),
	    'july' => set_value('july'),
	    'agst' => set_value('agst'),
	    'sept' => set_value('sept'),
	    'okt' => set_value('okt'),
	    'nov' => set_value('nov'),
	    'des' => set_value('des'),
	);
        $this->load->view('tahun_kedua/tbl_tahun_kedua_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'jan' => $this->input->post('jan',TRUE),
		'feb' => $this->input->post('feb',TRUE),
		'maret' => $this->input->post('maret',TRUE),
		'april' => $this->input->post('april',TRUE),
		'mei' => $this->input->post('mei',TRUE),
		'juni' => $this->input->post('juni',TRUE),
		'july' => $this->input->post('july',TRUE),
		'agst' => $this->input->post('agst',TRUE),
		'sept' => $this->input->post('sept',TRUE),
		'okt' => $this->input->post('okt',TRUE),
		'nov' => $this->input->post('nov',TRUE),
		'des' => $this->input->post('des',TRUE),
	    );

            $this->Tahun_kedua_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tahun_kedua'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tahun_kedua_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tahun_kedua/update_action'),
		'id_tahun_kedua' => set_value('id_tahun_kedua', $row->id_tahun_kedua),
		'jan' => set_value('jan', $row->jan),
		'feb' => set_value('feb', $row->feb),
		'maret' => set_value('maret', $row->maret),
		'april' => set_value('april', $row->april),
		'mei' => set_value('mei', $row->mei),
		'juni' => set_value('juni', $row->juni),
		'july' => set_value('july', $row->july),
		'agst' => set_value('agst', $row->agst),
		'sept' => set_value('sept', $row->sept),
		'okt' => set_value('okt', $row->okt),
		'nov' => set_value('nov', $row->nov),
		'des' => set_value('des', $row->des),
	    );
            $this->load->view('tahun_kedua/tbl_tahun_kedua_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tahun_kedua'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_tahun_kedua', TRUE));
        } else {
            $data = array(
		'jan' => $this->input->post('jan',TRUE),
		'feb' => $this->input->post('feb',TRUE),
		'maret' => $this->input->post('maret',TRUE),
		'april' => $this->input->post('april',TRUE),
		'mei' => $this->input->post('mei',TRUE),
		'juni' => $this->input->post('juni',TRUE),
		'july' => $this->input->post('july',TRUE),
		'agst' => $this->input->post('agst',TRUE),
		'sept' => $this->input->post('sept',TRUE),
		'okt' => $this->input->post('okt',TRUE),
		'nov' => $this->input->post('nov',TRUE),
		'des' => $this->input->post('des',TRUE),
	    );

            $this->Tahun_kedua_model->update($this->input->post('id_tahun_kedua', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tahun_kedua'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tahun_kedua_model->get_by_id($id);

        if ($row) {
            $this->Tahun_kedua_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tahun_kedua'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tahun_kedua'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('jan', 'jan', 'trim|required');
	$this->form_validation->set_rules('feb', 'feb', 'trim|required');
	$this->form_validation->set_rules('maret', 'maret', 'trim|required');
	$this->form_validation->set_rules('april', 'april', 'trim|required');
	$this->form_validation->set_rules('mei', 'mei', 'trim|required');
	$this->form_validation->set_rules('juni', 'juni', 'trim|required');
	$this->form_validation->set_rules('july', 'july', 'trim|required');
	$this->form_validation->set_rules('agst', 'agst', 'trim|required');
	$this->form_validation->set_rules('sept', 'sept', 'trim|required');
	$this->form_validation->set_rules('okt', 'okt', 'trim|required');
	$this->form_validation->set_rules('nov', 'nov', 'trim|required');
	$this->form_validation->set_rules('des', 'des', 'trim|required');

	$this->form_validation->set_rules('id_tahun_kedua', 'id_tahun_kedua', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tahun_kedua.php */
/* Location: ./application/controllers/Tahun_kedua.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-09-21 06:33:20 */
/* http://harviacode.com */
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Biodata_ibu_hamil extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Biodata_ibu_hamil_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'biodata_ibu_hamil/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'biodata_ibu_hamil/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'biodata_ibu_hamil/index.html';
            $config['first_url'] = base_url() . 'biodata_ibu_hamil/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Biodata_ibu_hamil_model->total_rows($q);
        $biodata_ibu_hamil = $this->Biodata_ibu_hamil_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'biodata_ibu_hamil_data' => $biodata_ibu_hamil,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('biodata_ibu_hamil/tbl_biodata_ibu_hamil_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Biodata_ibu_hamil_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_ibu_hamil' => $row->id_ibu_hamil,
		'no_urut' => $row->no_urut,
		'no_indek' => $row->no_indek,
		'id_nama' => $row->id_nama,
		'alamat' => $row->alamat,
		'id_umur' => $row->id_umur,
		'hamil_ke' => $row->hamil_ke,
		'bb_tb' => $row->bb_tb,
		'lila_mt' => $row->lila_mt,
		'hb_goldar' => $row->hb_goldar,
		'tensi' => $row->tensi,
		'id_resiko' => $row->id_resiko,
	    );
            $this->load->view('biodata_ibu_hamil/tbl_biodata_ibu_hamil_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('biodata_ibu_hamil'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('biodata_ibu_hamil/create_action'),
	    'id_ibu_hamil' => set_value('id_ibu_hamil'),
	    'no_urut' => set_value('no_urut'),
	    'no_indek' => set_value('no_indek'),
	    'id_nama' => set_value('id_nama'),
	    'alamat' => set_value('alamat'),
	    'id_umur' => set_value('id_umur'),
	    'hamil_ke' => set_value('hamil_ke'),
	    'bb_tb' => set_value('bb_tb'),
	    'lila_mt' => set_value('lila_mt'),
	    'hb_goldar' => set_value('hb_goldar'),
	    'tensi' => set_value('tensi'),
	    'id_resiko' => set_value('id_resiko'),
	);
        $this->load->view('biodata_ibu_hamil/tbl_biodata_ibu_hamil_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'no_urut' => $this->input->post('no_urut',TRUE),
		'no_indek' => $this->input->post('no_indek',TRUE),
		'id_nama' => $this->input->post('id_nama',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'id_umur' => $this->input->post('id_umur',TRUE),
		'hamil_ke' => $this->input->post('hamil_ke',TRUE),
		'bb_tb' => $this->input->post('bb_tb',TRUE),
		'lila_mt' => $this->input->post('lila_mt',TRUE),
		'hb_goldar' => $this->input->post('hb_goldar',TRUE),
		'tensi' => $this->input->post('tensi',TRUE),
		'id_resiko' => $this->input->post('id_resiko',TRUE),
	    );

            $this->Biodata_ibu_hamil_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('biodata_ibu_hamil'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Biodata_ibu_hamil_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('biodata_ibu_hamil/update_action'),
		'id_ibu_hamil' => set_value('id_ibu_hamil', $row->id_ibu_hamil),
		'no_urut' => set_value('no_urut', $row->no_urut),
		'no_indek' => set_value('no_indek', $row->no_indek),
		'id_nama' => set_value('id_nama', $row->id_nama),
		'alamat' => set_value('alamat', $row->alamat),
		'id_umur' => set_value('id_umur', $row->id_umur),
		'hamil_ke' => set_value('hamil_ke', $row->hamil_ke),
		'bb_tb' => set_value('bb_tb', $row->bb_tb),
		'lila_mt' => set_value('lila_mt', $row->lila_mt),
		'hb_goldar' => set_value('hb_goldar', $row->hb_goldar),
		'tensi' => set_value('tensi', $row->tensi),
		'id_resiko' => set_value('id_resiko', $row->id_resiko),
	    );
            $this->load->view('biodata_ibu_hamil/tbl_biodata_ibu_hamil_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('biodata_ibu_hamil'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_ibu_hamil', TRUE));
        } else {
            $data = array(
		'no_urut' => $this->input->post('no_urut',TRUE),
		'no_indek' => $this->input->post('no_indek',TRUE),
		'id_nama' => $this->input->post('id_nama',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'id_umur' => $this->input->post('id_umur',TRUE),
		'hamil_ke' => $this->input->post('hamil_ke',TRUE),
		'bb_tb' => $this->input->post('bb_tb',TRUE),
		'lila_mt' => $this->input->post('lila_mt',TRUE),
		'hb_goldar' => $this->input->post('hb_goldar',TRUE),
		'tensi' => $this->input->post('tensi',TRUE),
		'id_resiko' => $this->input->post('id_resiko',TRUE),
	    );

            $this->Biodata_ibu_hamil_model->update($this->input->post('id_ibu_hamil', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('biodata_ibu_hamil'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Biodata_ibu_hamil_model->get_by_id($id);

        if ($row) {
            $this->Biodata_ibu_hamil_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('biodata_ibu_hamil'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('biodata_ibu_hamil'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('no_urut', 'no urut', 'trim|required');
	$this->form_validation->set_rules('no_indek', 'no indek', 'trim|required');
	$this->form_validation->set_rules('id_nama', 'id nama', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('id_umur', 'id umur', 'trim|required');
	$this->form_validation->set_rules('hamil_ke', 'hamil ke', 'trim|required');
	$this->form_validation->set_rules('bb_tb', 'bb tb', 'trim|required');
	$this->form_validation->set_rules('lila_mt', 'lila mt', 'trim|required');
	$this->form_validation->set_rules('hb_goldar', 'hb goldar', 'trim|required');
	$this->form_validation->set_rules('tensi', 'tensi', 'trim|required');
	$this->form_validation->set_rules('id_resiko', 'id resiko', 'trim|required');

	$this->form_validation->set_rules('id_ibu_hamil', 'id_ibu_hamil', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Biodata_ibu_hamil.php */
/* Location: ./application/controllers/Biodata_ibu_hamil.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-09-21 04:50:41 */
/* http://harviacode.com */
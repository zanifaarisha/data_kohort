<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kehamilan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kehamilan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'kehamilan/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'kehamilan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'kehamilan/index.html';
            $config['first_url'] = base_url() . 'kehamilan/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Kehamilan_model->total_rows($q);
        $kehamilan = $this->Kehamilan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'kehamilan_data' => $kehamilan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $data['konten'] = 'kehamilan/tbl_kehamilan_list';
        $this->load->view('templates/admin/index', $data);
    }

    public function read($id) 
    {
        $row = $this->Kehamilan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_kehamilan' => $row->id_kehamilan,
		'jarakk_kehamilan' => $row->jarakk_kehamilan,
		'id_imunisasi' => $row->id_imunisasi,
		'buku_kia_pasang_stiker' => $row->buku_kia_pasang_stiker,
	    );
            $data['konten'] = 'kehamilan/tbl_kehamilan_read';
            $this->load->view('templates/admin/index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kehamilan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('kehamilan/create_action'),
	    'id_kehamilan' => set_value('id_kehamilan'),
	    'jarakk_kehamilan' => set_value('jarakk_kehamilan'),
	    'id_imunisasi' => set_value('id_imunisasi'),
	    'buku_kia_pasang_stiker' => set_value('buku_kia_pasang_stiker'),
	);
        $data['konten'] = 'kehamilan/tbl_kehamilan_form';
        $this->load->view('templates/admin/index', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'jarakk_kehamilan' => $this->input->post('jarakk_kehamilan',TRUE),
		'id_imunisasi' => $this->input->post('id_imunisasi',TRUE),
		'buku_kia_pasang_stiker' => $this->input->post('buku_kia_pasang_stiker',TRUE),
	    );

            $this->Kehamilan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('kehamilan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Kehamilan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('kehamilan/update_action'),
		'id_kehamilan' => set_value('id_kehamilan', $row->id_kehamilan),
		'jarakk_kehamilan' => set_value('jarakk_kehamilan', $row->jarakk_kehamilan),
		'id_imunisasi' => set_value('id_imunisasi', $row->id_imunisasi),
		'buku_kia_pasang_stiker' => set_value('buku_kia_pasang_stiker', $row->buku_kia_pasang_stiker),
	    );
            $data['konten'] = 'kehamilan/tbl_kehamilan_form';
            $this->load->view('templates/admin/index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kehamilan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_kehamilan', TRUE));
        } else {
            $data = array(
		'jarakk_kehamilan' => $this->input->post('jarakk_kehamilan',TRUE),
		'id_imunisasi' => $this->input->post('id_imunisasi',TRUE),
		'buku_kia_pasang_stiker' => $this->input->post('buku_kia_pasang_stiker',TRUE),
	    );

            $this->Kehamilan_model->update($this->input->post('id_kehamilan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('kehamilan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Kehamilan_model->get_by_id($id);

        if ($row) {
            $this->Kehamilan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('kehamilan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kehamilan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('jarakk_kehamilan', 'jarakk kehamilan', 'trim|required');
	$this->form_validation->set_rules('id_imunisasi', 'id imunisasi', 'trim|required');
	$this->form_validation->set_rules('buku_kia_pasang_stiker', 'buku kia pasang stiker', 'trim|required');

	$this->form_validation->set_rules('id_kehamilan', 'id_kehamilan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Kehamilan.php */
/* Location: ./application/controllers/Kehamilan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-09-21 04:59:17 */
/* http://harviacode.com */
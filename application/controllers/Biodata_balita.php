<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Biodata_balita extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Biodata_balita_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'biodata_balita/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'biodata_balita/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'biodata_balita/index.html';
            $config['first_url'] = base_url() . 'biodata_balita/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Biodata_balita_model->total_rows($q);
        $biodata_balita = $this->Biodata_balita_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'biodata_balita_data' => $biodata_balita,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('biodata_balita/tbl_biodata_balita_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Biodata_balita_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_balita' => $row->id_balita,
		'no_urut' => $row->no_urut,
		'nik' => $row->nik,
		'nama_anak' => $row->nama_anak,
		'tgl_lahir' => $row->tgl_lahir,
		'jenis_kelamin' => $row->jenis_kelamin,
		'nama_ibu' => $row->nama_ibu,
		'alamat' => $row->alamat,
		'no_tlp' => $row->no_tlp,
		'punya_buku_kia' => $row->punya_buku_kia,
	    );
            $this->load->view('biodata_balita/tbl_biodata_balita_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('biodata_balita'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('biodata_balita/create_action'),
	    'id_balita' => set_value('id_balita'),
	    'no_urut' => set_value('no_urut'),
	    'nik' => set_value('nik'),
	    'nama_anak' => set_value('nama_anak'),
	    'tgl_lahir' => set_value('tgl_lahir'),
	    'jenis_kelamin' => set_value('jenis_kelamin'),
	    'nama_ibu' => set_value('nama_ibu'),
	    'alamat' => set_value('alamat'),
	    'no_tlp' => set_value('no_tlp'),
	    'punya_buku_kia' => set_value('punya_buku_kia'),
	);
        $this->load->view('biodata_balita/tbl_biodata_balita_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'no_urut' => $this->input->post('no_urut',TRUE),
		'nik' => $this->input->post('nik',TRUE),
		'nama_anak' => $this->input->post('nama_anak',TRUE),
		'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
		'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
		'nama_ibu' => $this->input->post('nama_ibu',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'no_tlp' => $this->input->post('no_tlp',TRUE),
		'punya_buku_kia' => $this->input->post('punya_buku_kia',TRUE),
	    );

            $this->Biodata_balita_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('biodata_balita'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Biodata_balita_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('biodata_balita/update_action'),
		'id_balita' => set_value('id_balita', $row->id_balita),
		'no_urut' => set_value('no_urut', $row->no_urut),
		'nik' => set_value('nik', $row->nik),
		'nama_anak' => set_value('nama_anak', $row->nama_anak),
		'tgl_lahir' => set_value('tgl_lahir', $row->tgl_lahir),
		'jenis_kelamin' => set_value('jenis_kelamin', $row->jenis_kelamin),
		'nama_ibu' => set_value('nama_ibu', $row->nama_ibu),
		'alamat' => set_value('alamat', $row->alamat),
		'no_tlp' => set_value('no_tlp', $row->no_tlp),
		'punya_buku_kia' => set_value('punya_buku_kia', $row->punya_buku_kia),
	    );
            $this->load->view('biodata_balita/tbl_biodata_balita_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('biodata_balita'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_balita', TRUE));
        } else {
            $data = array(
		'no_urut' => $this->input->post('no_urut',TRUE),
		'nik' => $this->input->post('nik',TRUE),
		'nama_anak' => $this->input->post('nama_anak',TRUE),
		'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
		'jenis_kelamin' => $this->input->post('jenis_kelamin',TRUE),
		'nama_ibu' => $this->input->post('nama_ibu',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'no_tlp' => $this->input->post('no_tlp',TRUE),
		'punya_buku_kia' => $this->input->post('punya_buku_kia',TRUE),
	    );

            $this->Biodata_balita_model->update($this->input->post('id_balita', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('biodata_balita'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Biodata_balita_model->get_by_id($id);

        if ($row) {
            $this->Biodata_balita_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('biodata_balita'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('biodata_balita'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('no_urut', 'no urut', 'trim|required');
	$this->form_validation->set_rules('nik', 'nik', 'trim|required');
	$this->form_validation->set_rules('nama_anak', 'nama anak', 'trim|required');
	$this->form_validation->set_rules('tgl_lahir', 'tgl lahir', 'trim|required');
	$this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'trim|required');
	$this->form_validation->set_rules('nama_ibu', 'nama ibu', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('no_tlp', 'no tlp', 'trim|required');
	$this->form_validation->set_rules('punya_buku_kia', 'punya buku kia', 'trim|required');

	$this->form_validation->set_rules('id_balita', 'id_balita', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Biodata_balita.php */
/* Location: ./application/controllers/Biodata_balita.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-09-21 05:48:56 */
/* http://harviacode.com */
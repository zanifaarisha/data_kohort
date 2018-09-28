<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Biodata_bayi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Biodata_bayi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'biodata_bayi/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'biodata_bayi/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'biodata_bayi/index.html';
            $config['first_url'] = base_url() . 'biodata_bayi/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Biodata_bayi_model->total_rows($q);
        $biodata_bayi = $this->Biodata_bayi_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'biodata_bayi_data' => $biodata_bayi,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('biodata_bayi/tbl_biodata_bayi_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Biodata_bayi_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_bayi' => $row->id_bayi,
		'no_urut' => $row->no_urut,
		'nik' => $row->nik,
		'nama_bayi' => $row->nama_bayi,
		'tgl_lahir' => $row->tgl_lahir,
		'jenis kelamin' => $row->jenis kelamin,
		'nama_ibu' => $row->nama_ibu,
		'alamat' => $row->alamat,
		'no_tlp' => $row->no_tlp,
		'punya_buku_kia' => $row->punya_buku_kia,
		'berat_panjang' => $row->berat_panjang,
	    );
            $this->load->view('biodata_bayi/tbl_biodata_bayi_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('biodata_bayi'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('biodata_bayi/create_action'),
	    'id_bayi' => set_value('id_bayi'),
	    'no_urut' => set_value('no_urut'),
	    'nik' => set_value('nik'),
	    'nama_bayi' => set_value('nama_bayi'),
	    'tgl_lahir' => set_value('tgl_lahir'),
	    'jenis kelamin' => set_value('jenis kelamin'),
	    'nama_ibu' => set_value('nama_ibu'),
	    'alamat' => set_value('alamat'),
	    'no_tlp' => set_value('no_tlp'),
	    'punya_buku_kia' => set_value('punya_buku_kia'),
	    'berat_panjang' => set_value('berat_panjang'),
	);
        $this->load->view('biodata_bayi/tbl_biodata_bayi_form', $data);
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
		'nama_bayi' => $this->input->post('nama_bayi',TRUE),
		'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
		'jenis kelamin' => $this->input->post('jenis kelamin',TRUE),
		'nama_ibu' => $this->input->post('nama_ibu',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'no_tlp' => $this->input->post('no_tlp',TRUE),
		'punya_buku_kia' => $this->input->post('punya_buku_kia',TRUE),
		'berat_panjang' => $this->input->post('berat_panjang',TRUE),
	    );

            $this->Biodata_bayi_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('biodata_bayi'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Biodata_bayi_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('biodata_bayi/update_action'),
		'id_bayi' => set_value('id_bayi', $row->id_bayi),
		'no_urut' => set_value('no_urut', $row->no_urut),
		'nik' => set_value('nik', $row->nik),
		'nama_bayi' => set_value('nama_bayi', $row->nama_bayi),
		'tgl_lahir' => set_value('tgl_lahir', $row->tgl_lahir),
		'jenis kelamin' => set_value('jenis kelamin', $row->jenis kelamin),
		'nama_ibu' => set_value('nama_ibu', $row->nama_ibu),
		'alamat' => set_value('alamat', $row->alamat),
		'no_tlp' => set_value('no_tlp', $row->no_tlp),
		'punya_buku_kia' => set_value('punya_buku_kia', $row->punya_buku_kia),
		'berat_panjang' => set_value('berat_panjang', $row->berat_panjang),
	    );
            $this->load->view('biodata_bayi/tbl_biodata_bayi_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('biodata_bayi'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_bayi', TRUE));
        } else {
            $data = array(
		'no_urut' => $this->input->post('no_urut',TRUE),
		'nik' => $this->input->post('nik',TRUE),
		'nama_bayi' => $this->input->post('nama_bayi',TRUE),
		'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
		'jenis kelamin' => $this->input->post('jenis kelamin',TRUE),
		'nama_ibu' => $this->input->post('nama_ibu',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'no_tlp' => $this->input->post('no_tlp',TRUE),
		'punya_buku_kia' => $this->input->post('punya_buku_kia',TRUE),
		'berat_panjang' => $this->input->post('berat_panjang',TRUE),
	    );

            $this->Biodata_bayi_model->update($this->input->post('id_bayi', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('biodata_bayi'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Biodata_bayi_model->get_by_id($id);

        if ($row) {
            $this->Biodata_bayi_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('biodata_bayi'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('biodata_bayi'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('no_urut', 'no urut', 'trim|required');
	$this->form_validation->set_rules('nik', 'nik', 'trim|required');
	$this->form_validation->set_rules('nama_bayi', 'nama bayi', 'trim|required');
	$this->form_validation->set_rules('tgl_lahir', 'tgl lahir', 'trim|required');
	$this->form_validation->set_rules('jenis kelamin', 'jenis kelamin', 'trim|required');
	$this->form_validation->set_rules('nama_ibu', 'nama ibu', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('no_tlp', 'no tlp', 'trim|required');
	$this->form_validation->set_rules('punya_buku_kia', 'punya buku kia', 'trim|required');
	$this->form_validation->set_rules('berat_panjang', 'berat panjang', 'trim|required');

	$this->form_validation->set_rules('id_bayi', 'id_bayi', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Biodata_bayi.php */
/* Location: ./application/controllers/Biodata_bayi.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-09-21 05:13:52 */
/* http://harviacode.com */
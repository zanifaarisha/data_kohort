<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Umur extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Umur_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'umur/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'umur/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'umur/index.html';
            $config['first_url'] = base_url() . 'umur/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Umur_model->total_rows($q);
        $umur = $this->Umur_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'umur_data' => $umur,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
       
        $data['konten']='umur/tbl_umur_list';
        $this->load->view('templates/admin/index',$data);
    }

    public function read($id) 
    {
        $row = $this->Umur_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_umur' => $row->id_umur,
		'umur_ibu' => $row->umur_ibu,
		'kehamilan_ibu' => $row->kehamilan_ibu,
	    );
            $data['konten']='umur/tbl_umur_read';
            $this->load->view('templates/admin/index',$data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('umur'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('umur/create_action'),
	    'id_umur' => set_value('id_umur'),
	    'umur_ibu' => set_value('umur_ibu'),
	    'kehamilan_ibu' => set_value('kehamilan_ibu'),
	);
        $data['konten']='umur/tbl_umur_form';
        $this->load->view('templates/admin/index',$data);

    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'umur_ibu' => $this->input->post('umur_ibu',TRUE),
		'kehamilan_ibu' => $this->input->post('kehamilan_ibu',TRUE),
	    );

            $this->Umur_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('umur'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Umur_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('umur/update_action'),
		'id_umur' => set_value('id_umur', $row->id_umur),
		'umur_ibu' => set_value('umur_ibu', $row->umur_ibu),
		'kehamilan_ibu' => set_value('kehamilan_ibu', $row->kehamilan_ibu),
	    );
            $data['konten']='umur/tbl_umur_form';
            $this->load->view('templates/admin/index',$data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('umur'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_umur', TRUE));
        } else {
            $data = array(
		'umur_ibu' => $this->input->post('umur_ibu',TRUE),
		'kehamilan_ibu' => $this->input->post('kehamilan_ibu',TRUE),
	    );

            $this->Umur_model->update($this->input->post('id_umur', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('umur'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Umur_model->get_by_id($id);

        if ($row) {
            $this->Umur_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('umur'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('umur'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('umur_ibu', 'umur ibu', 'trim|required');
	$this->form_validation->set_rules('kehamilan_ibu', 'kehamilan ibu', 'trim|required');

	$this->form_validation->set_rules('id_umur', 'id_umur', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Umur.php */
/* Location: ./application/controllers/Umur.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-09-21 04:48:16 */
/* http://harviacode.com */
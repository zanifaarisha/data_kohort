<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Nifas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Nifas_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'nifas/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'nifas/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'nifas/index.html';
            $config['first_url'] = base_url() . 'nifas/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Nifas_model->total_rows($q);
        $nifas = $this->Nifas_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'nifas_data' => $nifas,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $data['konten'] = 'nifas/tbl_nifas_list';
        $this->load->view('templates/admin/index', $data);
    }

    public function read($id) 
    {
        $row = $this->Nifas_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_nifas' => $row->id_nifas,
		'enam_jam_tiga_hr' => $row->enam_jam_tiga_hr,
		'empat_duadelapan_hr' => $row->empat_duadelapan_hr,
		'duasembilan_empatdua_hr' => $row->duasembilan_empatdua_hr,
		'ket' => $row->ket,
	    );
            $data['konten'] = 'nifas/tbl_nifas_read';
            $this->load->view('templates/admin/index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('nifas'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('nifas/create_action'),
	    'id_nifas' => set_value('id_nifas'),
	    '6jam_3hr' => set_value('6jam_3hr'),
	    '4_28hr' => set_value('4_28hr'),
	    '29_42hr' => set_value('29_42hr'),
	    'ket' => set_value('ket'),
	);
        $data['konten'] = 'nifas/tbl_nifas_form';
        $this->load->view('templates/admin/index', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'6jam_3hr' => $this->input->post('6jam_3hr',TRUE),
		'4_28hr' => $this->input->post('4_28hr',TRUE),
		'29_42hr' => $this->input->post('29_42hr',TRUE),
		'ket' => $this->input->post('ket',TRUE),
	    );

            $this->Nifas_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('nifas'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Nifas_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('nifas/update_action'),
		'id_nifas' => set_value('id_nifas', $row->id_nifas),
		'enam_jam_tiga_hr' => set_value('enam_jam_tiga_hr', $row->enam_jam_tiga_hr),
		'empat_duadelapan_hr' => set_value('empat_duadelapan_hr', $row->empat_duadelapan_hr),
		'duasembilan_empatdua_hr' => set_value('duasembilan_empatdua_hr', $row->duasembilan_empatdua_hr ),
		'ket' => set_value('ket', $row->ket),
	    );
            $data['konten'] = 'nifas/tbl_nifas_form';
            $this->load->view('templates/admin/index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('nifas'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_nifas', TRUE));
        } else {
            $data = array(
		'6jam_3hr' => $this->input->post('6jam_3hr',TRUE),
		'4_28hr' => $this->input->post('4_28hr',TRUE),
		'29_42hr' => $this->input->post('29_42hr',TRUE),
		'ket' => $this->input->post('ket',TRUE),
	    );

            $this->Nifas_model->update($this->input->post('id_nifas', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('nifas'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Nifas_model->get_by_id($id);

        if ($row) {
            $this->Nifas_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('nifas'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('nifas'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('6jam_3hr', '6jam 3hr', 'trim|required');
	$this->form_validation->set_rules('4_28hr', '4 28hr', 'trim|required');
	$this->form_validation->set_rules('29_42hr', '29 42hr', 'trim|required');
	$this->form_validation->set_rules('ket', 'ket', 'trim|required');

	$this->form_validation->set_rules('id_nifas', 'id_nifas', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Nifas.php */
/* Location: ./application/controllers/Nifas.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-09-21 05:10:48 */
/* http://harviacode.com */
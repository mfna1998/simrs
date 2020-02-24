<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Keluarga_pasien extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Keluarga_pasien_model');
        $this->load->library('form_validation');
        $db2 = $this->load->database('db2', TRUE);
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'keluarga_pasien/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'keluarga_pasien/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'keluarga_pasien/index.html';
            $config['first_url'] = base_url() . 'keluarga_pasien/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Keluarga_pasien_model->total_rows($q);
        $keluarga_pasien = $this->Keluarga_pasien_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'keluarga_pasien_data' => $keluarga_pasien,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('keluarga_pasien/keluarga_pasien_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Keluarga_pasien_model->get_by_id($id);
        if ($row) {
            $data = array(
		'SHDK' => $row->SHDK,
		'NORM' => $row->NORM,
		'JENIS_KELAMIN' => $row->JENIS_KELAMIN,
		'ID' => $row->ID,
		'NAMA' => $row->NAMA,
		'ALAMAT' => $row->ALAMAT,
		'PENDIDIKAN' => $row->PENDIDIKAN,
		'PEKERJAAN' => $row->PEKERJAAN,
	    );
            $this->load->view('keluarga_pasien/keluarga_pasien_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('keluarga_pasien'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('keluarga_pasien/create_action'),
	    'SHDK' => set_value('SHDK'),
	    'NORM' => set_value('NORM'),
	    'JENIS_KELAMIN' => set_value('JENIS_KELAMIN'),
	    'ID' => set_value('ID'),
	    'NAMA' => set_value('NAMA'),
	    'ALAMAT' => set_value('ALAMAT'),
	    'PENDIDIKAN' => set_value('PENDIDIKAN'),
	    'PEKERJAAN' => set_value('PEKERJAAN'),
	);
        $this->load->view('keluarga_pasien/keluarga_pasien_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'NORM' => $this->input->post('NORM',TRUE),
		'JENIS_KELAMIN' => $this->input->post('JENIS_KELAMIN',TRUE),
		'ID' => $this->input->post('ID',TRUE),
		'NAMA' => $this->input->post('NAMA',TRUE),
		'ALAMAT' => $this->input->post('ALAMAT',TRUE),
		'PENDIDIKAN' => $this->input->post('PENDIDIKAN',TRUE),
		'PEKERJAAN' => $this->input->post('PEKERJAAN',TRUE),
	    );

            $this->Keluarga_pasien_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('keluarga_pasien'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Keluarga_pasien_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('keluarga_pasien/update_action'),
		'SHDK' => set_value('SHDK', $row->SHDK),
		'NORM' => set_value('NORM', $row->NORM),
		'JENIS_KELAMIN' => set_value('JENIS_KELAMIN', $row->JENIS_KELAMIN),
		'ID' => set_value('ID', $row->ID),
		'NAMA' => set_value('NAMA', $row->NAMA),
		'ALAMAT' => set_value('ALAMAT', $row->ALAMAT),
		'PENDIDIKAN' => set_value('PENDIDIKAN', $row->PENDIDIKAN),
		'PEKERJAAN' => set_value('PEKERJAAN', $row->PEKERJAAN),
	    );
            $this->load->view('keluarga_pasien/keluarga_pasien_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('keluarga_pasien'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('SHDK', TRUE));
        } else {
            $data = array(
		'NORM' => $this->input->post('NORM',TRUE),
		'JENIS_KELAMIN' => $this->input->post('JENIS_KELAMIN',TRUE),
		'ID' => $this->input->post('ID',TRUE),
		'NAMA' => $this->input->post('NAMA',TRUE),
		'ALAMAT' => $this->input->post('ALAMAT',TRUE),
		'PENDIDIKAN' => $this->input->post('PENDIDIKAN',TRUE),
		'PEKERJAAN' => $this->input->post('PEKERJAAN',TRUE),
	    );

            $this->Keluarga_pasien_model->update($this->input->post('SHDK', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('keluarga_pasien'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Keluarga_pasien_model->get_by_id($id);

        if ($row) {
            $this->Keluarga_pasien_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('keluarga_pasien'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('keluarga_pasien'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('NORM', 'norm', 'trim|required');
	$this->form_validation->set_rules('JENIS_KELAMIN', 'jenis kelamin', 'trim|required');
	$this->form_validation->set_rules('ID', 'id', 'trim|required');
	$this->form_validation->set_rules('NAMA', 'nama', 'trim|required');
	$this->form_validation->set_rules('ALAMAT', 'alamat', 'trim|required');
	$this->form_validation->set_rules('PENDIDIKAN', 'pendidikan', 'trim|required');
	$this->form_validation->set_rules('PEKERJAAN', 'pekerjaan', 'trim|required');

	$this->form_validation->set_rules('SHDK', 'SHDK', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Keluarga_pasien.php */
/* Location: ./application/controllers/Keluarga_pasien.php */

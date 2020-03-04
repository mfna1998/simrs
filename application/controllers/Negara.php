<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Negara extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Negara_model');
        $this->load->library('form_validation');
        $db2 = $this->load->database('db2', TRUE);
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'negara?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'negara?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'negara';
            $config['first_url'] = base_url() . 'negara';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Negara_model->total_rows($q);
        $negara = $this->Negara_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'negara_data' => $negara,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('negara/negara_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Negara_model->get_by_id($id);
        if ($row) {
            $data = array(
		'ID' => $row->ID,
		'DESKRIPSI' => $row->DESKRIPSI,
		'SINGKATAN' => $row->SINGKATAN,
		'STATUS' => $row->STATUS,
	    );
            $this->load->view('negara/negara_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Data Negara Tidak Ditemukan');
            redirect(site_url('negara'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('negara/create_action'),
	    'ID' => set_value('ID'),
	    'DESKRIPSI' => set_value('DESKRIPSI'),
	    'SINGKATAN' => set_value('SINGKATAN'),
	    'STATUS' => set_value('STATUS'),
	);
        $this->load->view('negara/negara_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'DESKRIPSI' => $this->input->post('DESKRIPSI',TRUE),
		'SINGKATAN' => $this->input->post('SINGKATAN',TRUE),
		'STATUS' => $this->input->post('STATUS',TRUE),
	    );

            $this->Negara_model->insert($data);
            $this->session->set_flashdata('message', 'Data Negara Berhasil Ditambah');
            redirect(site_url('negara'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Negara_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('negara/update_action'),
		'ID' => set_value('ID', $row->ID),
		'DESKRIPSI' => set_value('DESKRIPSI', $row->DESKRIPSI),
		'SINGKATAN' => set_value('SINGKATAN', $row->SINGKATAN),
		'STATUS' => set_value('STATUS', $row->STATUS),
	    );
            $this->load->view('negara/negara_update', $data);
        } else {
            $this->session->set_flashdata('message', 'Data Negara Tidak Ditemukan');
            redirect(site_url('negara'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('ID', TRUE));
        } else {
            $data = array(
		'DESKRIPSI' => $this->input->post('DESKRIPSI',TRUE),
		'SINGKATAN' => $this->input->post('SINGKATAN',TRUE),
		'STATUS' => $this->input->post('STATUS',TRUE),
	    );

            $this->Negara_model->update($this->input->post('ID', TRUE), $data);
            $this->session->set_flashdata('message', 'Data Negara Berhasil Dirubah');
            redirect(site_url('negara'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Negara_model->get_by_id($id);

        if ($row) {
            $this->Negara_model->delete($id);
            $this->session->set_flashdata('message', 'Data Negara Berhasil Dihapus');
            redirect(site_url('negara'));
        } else {
            $this->session->set_flashdata('message', 'Data Negara Tidak Ditemukan');
            redirect(site_url('negara'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('DESKRIPSI', 'deskripsi', 'trim|required');
	$this->form_validation->set_rules('SINGKATAN', 'singkatan', 'trim|required');
	$this->form_validation->set_rules('STATUS', 'status', 'trim|required');

	$this->form_validation->set_rules('ID', 'ID', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Negara.php */
/* Location: ./application/controllers/Negara.php */


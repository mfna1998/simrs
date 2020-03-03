<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jenis_referensi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Jenis_referensi_model');
        $this->load->library('form_validation');
        $db2 = $this->load->database('db2', TRUE);
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'jenis_referensi?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'jenis_referensi?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'jenis_referensi';
            $config['first_url'] = base_url() . 'jenis_referensi';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Jenis_referensi_model->total_rows($q);
        $jenis_referensi = $this->Jenis_referensi_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'jenis_referensi_data' => $jenis_referensi,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('jenis_referensi/jenis_referensi_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Jenis_referensi_model->get_by_id($id);
        if ($row) {
            $data = array(
		'ID' => $row->ID,
		'DESKRIPSI' => $row->DESKRIPSI,
		'SINGKATAN' => $row->SINGKATAN,
		'APLIKASI' => $row->APLIKASI,
	    );
            $this->load->view('jenis_referensi/jenis_referensi_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jenis_referensi'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('jenis_referensi/create_action'),
	    'ID' => set_value('ID'),
	    'DESKRIPSI' => set_value('DESKRIPSI'),
	    'SINGKATAN' => set_value('SINGKATAN'),
	    'APLIKASI' => set_value('APLIKASI'),
	);
        $this->load->view('jenis_referensi/jenis_referensi_form', $data);
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
		'APLIKASI' => $this->input->post('APLIKASI',TRUE),
	    );

            $this->Jenis_referensi_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('jenis_referensi'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Jenis_referensi_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('jenis_referensi/update_action'),
		'ID' => set_value('ID', $row->ID),
		'DESKRIPSI' => set_value('DESKRIPSI', $row->DESKRIPSI),
		'SINGKATAN' => set_value('SINGKATAN', $row->SINGKATAN),
		'APLIKASI' => set_value('APLIKASI', $row->APLIKASI),
	    );
            $this->load->view('jenis_referensi/jenis_referensi_update', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jenis_referensi'));
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
		'APLIKASI' => $this->input->post('APLIKASI',TRUE),
	    );

            $this->Jenis_referensi_model->update($this->input->post('ID', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('jenis_referensi'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Jenis_referensi_model->get_by_id($id);

        if ($row) {
            $this->Jenis_referensi_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('jenis_referensi'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jenis_referensi'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('DESKRIPSI', 'deskripsi', 'trim|required');
	$this->form_validation->set_rules('SINGKATAN', 'singkatan', 'trim|required');
	$this->form_validation->set_rules('APLIKASI', 'aplikasi', 'trim|required');

	$this->form_validation->set_rules('ID', 'ID', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Jenis_referensi.php */
/* Location: ./application/controllers/Jenis_referensi.php */


<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Referensi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Referensi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'referensi/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'referensi/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'referensi/index.html';
            $config['first_url'] = base_url() . 'referensi/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Referensi_model->total_rows($q);
        $referensi = $this->Referensi_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'referensi_data' => $referensi,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('referensi/referensi_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Referensi_model->get_by_id($id);
        if ($row) {
            $data = array(
		'JENIS' => $row->JENIS,
		'ID' => $row->ID,
		'DESKRIPSI' => $row->DESKRIPSI,
		'STATUS' => $row->STATUS,
	    );
            $this->load->view('referensi/referensi_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('referensi'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('referensi/create_action'),
	    'JENIS' => set_value('JENIS'),
	    'ID' => set_value('ID'),
	    'DESKRIPSI' => set_value('DESKRIPSI'),
	    'STATUS' => set_value('STATUS'),
	);
        $this->load->view('referensi/referensi_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'DESKRIPSI' => $this->input->post('DESKRIPSI',TRUE),
		'STATUS' => $this->input->post('STATUS',TRUE),
	    );

            $this->Referensi_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('referensi'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Referensi_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('referensi/update_action'),
		'JENIS' => set_value('JENIS', $row->JENIS),
		'ID' => set_value('ID', $row->ID),
		'DESKRIPSI' => set_value('DESKRIPSI', $row->DESKRIPSI),
		'STATUS' => set_value('STATUS', $row->STATUS),
	    );
            $this->load->view('referensi/referensi_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('referensi'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('JENIS', TRUE));
        } else {
            $data = array(
		'DESKRIPSI' => $this->input->post('DESKRIPSI',TRUE),
		'STATUS' => $this->input->post('STATUS',TRUE),
	    );

            $this->Referensi_model->update($this->input->post('JENIS', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('referensi'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Referensi_model->get_by_id($id);

        if ($row) {
            $this->Referensi_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('referensi'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('referensi'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('DESKRIPSI', 'deskripsi', 'trim|required');
	$this->form_validation->set_rules('STATUS', 'status', 'trim|required');

	$this->form_validation->set_rules('JENIS', 'JENIS', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Referensi.php */
/* Location: ./application/controllers/Referensi.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-02-18 02:51:34 */
/* http://harviacode.com */
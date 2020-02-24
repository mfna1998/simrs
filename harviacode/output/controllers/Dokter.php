<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dokter extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Dokter_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'dokter/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'dokter/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'dokter/index.html';
            $config['first_url'] = base_url() . 'dokter/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Dokter_model->total_rows($q);
        $dokter = $this->Dokter_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'dokter_data' => $dokter,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('dokter/dokter_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Dokter_model->get_by_id($id);
        if ($row) {
            $data = array(
		'ID' => $row->ID,
		'NIP' => $row->NIP,
		'SIP' => $row->SIP,
		'TANGGAL_BERLAKU_SIP' => $row->TANGGAL_BERLAKU_SIP,
		'TANGGAL_BERAKHIR_SIP' => $row->TANGGAL_BERAKHIR_SIP,
		'HAFIS' => $row->HAFIS,
		'STATUS' => $row->STATUS,
	    );
            $this->load->view('dokter/dokter_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dokter'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('dokter/create_action'),
	    'ID' => set_value('ID'),
	    'NIP' => set_value('NIP'),
	    'SIP' => set_value('SIP'),
	    'TANGGAL_BERLAKU_SIP' => set_value('TANGGAL_BERLAKU_SIP'),
	    'TANGGAL_BERAKHIR_SIP' => set_value('TANGGAL_BERAKHIR_SIP'),
	    'HAFIS' => set_value('HAFIS'),
	    'STATUS' => set_value('STATUS'),
	);
        $this->load->view('dokter/dokter_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'NIP' => $this->input->post('NIP',TRUE),
		'SIP' => $this->input->post('SIP',TRUE),
		'TANGGAL_BERLAKU_SIP' => $this->input->post('TANGGAL_BERLAKU_SIP',TRUE),
		'TANGGAL_BERAKHIR_SIP' => $this->input->post('TANGGAL_BERAKHIR_SIP',TRUE),
		'HAFIS' => $this->input->post('HAFIS',TRUE),
		'STATUS' => $this->input->post('STATUS',TRUE),
	    );

            $this->Dokter_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('dokter'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Dokter_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('dokter/update_action'),
		'ID' => set_value('ID', $row->ID),
		'NIP' => set_value('NIP', $row->NIP),
		'SIP' => set_value('SIP', $row->SIP),
		'TANGGAL_BERLAKU_SIP' => set_value('TANGGAL_BERLAKU_SIP', $row->TANGGAL_BERLAKU_SIP),
		'TANGGAL_BERAKHIR_SIP' => set_value('TANGGAL_BERAKHIR_SIP', $row->TANGGAL_BERAKHIR_SIP),
		'HAFIS' => set_value('HAFIS', $row->HAFIS),
		'STATUS' => set_value('STATUS', $row->STATUS),
	    );
            $this->load->view('dokter/dokter_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dokter'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('ID', TRUE));
        } else {
            $data = array(
		'NIP' => $this->input->post('NIP',TRUE),
		'SIP' => $this->input->post('SIP',TRUE),
		'TANGGAL_BERLAKU_SIP' => $this->input->post('TANGGAL_BERLAKU_SIP',TRUE),
		'TANGGAL_BERAKHIR_SIP' => $this->input->post('TANGGAL_BERAKHIR_SIP',TRUE),
		'HAFIS' => $this->input->post('HAFIS',TRUE),
		'STATUS' => $this->input->post('STATUS',TRUE),
	    );

            $this->Dokter_model->update($this->input->post('ID', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('dokter'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Dokter_model->get_by_id($id);

        if ($row) {
            $this->Dokter_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('dokter'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dokter'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('NIP', 'nip', 'trim|required');
	$this->form_validation->set_rules('SIP', 'sip', 'trim|required');
	$this->form_validation->set_rules('TANGGAL_BERLAKU_SIP', 'tanggal berlaku sip', 'trim|required');
	$this->form_validation->set_rules('TANGGAL_BERAKHIR_SIP', 'tanggal berakhir sip', 'trim|required');
	$this->form_validation->set_rules('HAFIS', 'hafis', 'trim|required');
	$this->form_validation->set_rules('STATUS', 'status', 'trim|required');

	$this->form_validation->set_rules('ID', 'ID', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Dokter.php */
/* Location: ./application/controllers/Dokter.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-02-18 02:51:32 */
/* http://harviacode.com */
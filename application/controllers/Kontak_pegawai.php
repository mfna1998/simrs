<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kontak_pegawai extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kontak_pegawai_model');
        $this->load->library('form_validation');
        $db2 = $this->load->database('db2', TRUE);
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'kontak_pegawai?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'kontak_pegawai?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'kontak_pegawai';
            $config['first_url'] = base_url() . 'kontak_pegawai';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Kontak_pegawai_model->total_rows($q);
        $kontak_pegawai = $this->Kontak_pegawai_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'kontak_pegawai_data' => $kontak_pegawai,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('kontak_pegawai/kontak_pegawai_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Kontak_pegawai_model->get_by_id($id);
        if ($row) {
            $data = array(
		'JENIS' => $row->JENIS,
		'NIP' => $row->NIP,
		'NOMOR' => $row->NOMOR,
	    );
            $this->load->view('kontak_pegawai/kontak_pegawai_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kontak_pegawai'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('kontak_pegawai/create_action'),
	    'JENIS' => set_value('JENIS'),
	    'NIP' => set_value('NIP'),
	    'NOMOR' => set_value('NOMOR'),
	);
        $this->load->view('kontak_pegawai/kontak_pegawai_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
	    );

            $this->Kontak_pegawai_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('kontak_pegawai'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Kontak_pegawai_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('kontak_pegawai/update_action'),
		'JENIS' => set_value('JENIS', $row->JENIS),
		'NIP' => set_value('NIP', $row->NIP),
		'NOMOR' => set_value('NOMOR', $row->NOMOR),
	    );
            $this->load->view('kontak_pegawai/kontak_pegawai_update', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kontak_pegawai'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('JENIS', TRUE));
        } else {
            $data = array(
	    );

            $this->Kontak_pegawai_model->update($this->input->post('JENIS', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('kontak_pegawai'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Kontak_pegawai_model->get_by_id($id);

        if ($row) {
            $this->Kontak_pegawai_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('kontak_pegawai'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kontak_pegawai'));
        }
    }

    public function _rules() 
    {

	$this->form_validation->set_rules('JENIS', 'JENIS', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Kontak_pegawai.php */
/* Location: ./application/controllers/Kontak_pegawai.php */
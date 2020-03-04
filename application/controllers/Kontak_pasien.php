<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kontak_pasien extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kontak_pasien_model');
        $this->load->library('form_validation');
        $db2 = $this->load->database('db2', TRUE);
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'kontak_pasien?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'kontak_pasien?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'kontak_pasien';
            $config['first_url'] = base_url() . 'kontak_pasien';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Kontak_pasien_model->total_rows($q);
        $kontak_pasien = $this->Kontak_pasien_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'kontak_pasien_data' => $kontak_pasien,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('kontak_pasien/kontak_pasien_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Kontak_pasien_model->get_by_id($id);
        if ($row) {
            $data = array(
		'JENIS' => $row->JENIS,
		'NORM' => $row->NORM,
		'NOMOR' => $row->NOMOR,
	    );
            $this->load->view('kontak_pasien/kontak_pasien_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Kontak Pasien Tidak Ditemukan');
            redirect(site_url('kontak_pasien'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('kontak_pasien/create_action'),
	    'JENIS' => set_value('JENIS'),
	    'NORM' => set_value('NORM'),
	    'NOMOR' => set_value('NOMOR'),
	);
        $this->load->view('kontak_pasien/kontak_pasien_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
	    );

            $this->Kontak_pasien_model->insert($data);
            $this->session->set_flashdata('message', 'Kontak Pasien Berhasil Ditambah');
            redirect(site_url('kontak_pasien'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Kontak_pasien_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('kontak_pasien/update_action'),
		'JENIS' => set_value('JENIS', $row->JENIS),
		'NORM' => set_value('NORM', $row->NORM),
		'NOMOR' => set_value('NOMOR', $row->NOMOR),
	    );
            $this->load->view('kontak_pasien/kontak_pasien_update', $data);
        } else {
            $this->session->set_flashdata('message', 'Kontak Pasien Tidak Ditemukan');
            redirect(site_url('kontak_pasien'));
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

            $this->Kontak_pasien_model->update($this->input->post('JENIS', TRUE), $data);
            $this->session->set_flashdata('message', 'Kontak Pasien Berhasil Dirubah');
            redirect(site_url('kontak_pasien'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Kontak_pasien_model->get_by_id($id);

        if ($row) {
            $this->Kontak_pasien_model->delete($id);
            $this->session->set_flashdata('message', 'Kontak Pasien Berhasil Dihapus');
            redirect(site_url('kontak_pasien'));
        } else {
            $this->session->set_flashdata('message', 'Kontak Pasien Tidak Ditemukan');
            redirect(site_url('kontak_pasien'));
        }
    }

    public function _rules() 
    {

	$this->form_validation->set_rules('JENIS', 'JENIS', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Kontak_pasien.php */
/* Location: ./application/controllers/Kontak_pasien.php */

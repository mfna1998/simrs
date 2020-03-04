<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Wilayah extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Wilayah_model');
        $this->load->library('form_validation');
        $db2 = $this->load->database('db2', TRUE);
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'wilayah?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'wilayah?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'wilayah';
            $config['first_url'] = base_url() . 'wilayah';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Wilayah_model->total_rows($q);
        $wilayah = $this->Wilayah_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'wilayah_data' => $wilayah,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('wilayah/wilayah_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Wilayah_model->get_by_id($id);
        if ($row) {
            $data = array(
		'ID' => $row->ID,
		'JENIS' => $row->JENIS,
		'DESKRIPSI' => $row->DESKRIPSI,
		'KOTA' => $row->KOTA,
		'STATUS' => $row->STATUS,
	    );
            $this->load->view('wilayah/wilayah_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Data Wilayah Tidak Ditemukan');
            redirect(site_url('wilayah'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('wilayah/create_action'),
	    'ID' => set_value('ID'),
	    'JENIS' => set_value('JENIS'),
	    'DESKRIPSI' => set_value('DESKRIPSI'),
	    'KOTA' => set_value('KOTA'),
	    'STATUS' => set_value('STATUS'),
	);
        $this->load->view('wilayah/wilayah_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'JENIS' => $this->input->post('JENIS',TRUE),
		'DESKRIPSI' => $this->input->post('DESKRIPSI',TRUE),
		'KOTA' => $this->input->post('KOTA',TRUE),
		'STATUS' => $this->input->post('STATUS',TRUE),
	    );

            $this->Wilayah_model->insert($data);
            $this->session->set_flashdata('message', 'Data Wilayah Berhasil Ditambah');
            redirect(site_url('wilayah'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Wilayah_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('wilayah/update_action'),
		'ID' => set_value('ID', $row->ID),
		'JENIS' => set_value('JENIS', $row->JENIS),
		'DESKRIPSI' => set_value('DESKRIPSI', $row->DESKRIPSI),
		'KOTA' => set_value('KOTA', $row->KOTA),
		'STATUS' => set_value('STATUS', $row->STATUS),
	    );
            $this->load->view('wilayah/wilayah_update', $data);
        } else {
            $this->session->set_flashdata('message', 'Data Wilayah Tidak Ditemukan');
            redirect(site_url('wilayah'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('ID', TRUE));
        } else {
            $data = array(
		'JENIS' => $this->input->post('JENIS',TRUE),
		'DESKRIPSI' => $this->input->post('DESKRIPSI',TRUE),
		'KOTA' => $this->input->post('KOTA',TRUE),
		'STATUS' => $this->input->post('STATUS',TRUE),
	    );

            $this->Wilayah_model->update($this->input->post('ID', TRUE), $data);
            $this->session->set_flashdata('message', 'Data Wilayah Berhasil Dirubah');
            redirect(site_url('wilayah'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Wilayah_model->get_by_id($id);

        if ($row) {
            $this->Wilayah_model->delete($id);
            $this->session->set_flashdata('message', 'Data Wilayah Berhasil Dihapus');
            redirect(site_url('wilayah'));
        } else {
            $this->session->set_flashdata('message', 'Data Wilayah Tidak Ditemukan');
            redirect(site_url('wilayah'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('JENIS', 'jenis', 'trim|required');
	$this->form_validation->set_rules('DESKRIPSI', 'deskripsi', 'trim|required');
	$this->form_validation->set_rules('KOTA', 'kota', 'trim|required');
	$this->form_validation->set_rules('STATUS', 'status', 'trim|required');

	$this->form_validation->set_rules('ID', 'ID', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Wilayah.php */
/* Location: ./application/controllers/Wilayah.php */

<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ruangan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Ruangan_model');
        $this->load->library('form_validation');
        $db2 = $this->load->database('db2', TRUE);
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'ruangan?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'ruangan?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'ruangan';
            $config['first_url'] = base_url() . 'ruangan';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Ruangan_model->total_rows($q);
        $ruangan = $this->Ruangan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'ruangan_data' => $ruangan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('ruangan/ruangan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Ruangan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'ID' => $row->ID,
		'JENIS' => $row->JENIS,
		'JENIS_KUNJUNGAN' => $row->JENIS_KUNJUNGAN,
		'DESKRIPSI' => $row->DESKRIPSI,
		'STATUS' => $row->STATUS,
	    );
            $this->load->view('ruangan/ruangan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ruangan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('ruangan/create_action'),
	    'ID' => set_value('ID'),
	    'JENIS' => set_value('JENIS'),
	    'JENIS_KUNJUNGAN' => set_value('JENIS_KUNJUNGAN'),
	    'DESKRIPSI' => set_value('DESKRIPSI'),
	    'STATUS' => set_value('STATUS'),
	);
        $this->load->view('ruangan/ruangan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'JENIS' => $this->input->post('JENIS',TRUE),
		'JENIS_KUNJUNGAN' => $this->input->post('JENIS_KUNJUNGAN',TRUE),
		'DESKRIPSI' => $this->input->post('DESKRIPSI',TRUE),
		'STATUS' => $this->input->post('STATUS',TRUE),
	    );

            $this->Ruangan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('ruangan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Ruangan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('ruangan/update_action'),
		'ID' => set_value('ID', $row->ID),
		'JENIS' => set_value('JENIS', $row->JENIS),
		'JENIS_KUNJUNGAN' => set_value('JENIS_KUNJUNGAN', $row->JENIS_KUNJUNGAN),
		'DESKRIPSI' => set_value('DESKRIPSI', $row->DESKRIPSI),
		'STATUS' => set_value('STATUS', $row->STATUS),
	    );
            $this->load->view('ruangan/ruangan_update', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ruangan'));
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
		'JENIS_KUNJUNGAN' => $this->input->post('JENIS_KUNJUNGAN',TRUE),
		'DESKRIPSI' => $this->input->post('DESKRIPSI',TRUE),
		'STATUS' => $this->input->post('STATUS',TRUE),
	    );

            $this->Ruangan_model->update($this->input->post('ID', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('ruangan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Ruangan_model->get_by_id($id);

        if ($row) {
            $this->Ruangan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('ruangan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ruangan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('JENIS', 'jenis', 'trim|required');
	$this->form_validation->set_rules('JENIS_KUNJUNGAN', 'jenis kunjungan', 'trim|required');
	$this->form_validation->set_rules('DESKRIPSI', 'deskripsi', 'trim|required');
	$this->form_validation->set_rules('STATUS', 'status', 'trim|required');

	$this->form_validation->set_rules('ID', 'ID', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Ruangan.php */
/* Location: ./application/controllers/Ruangan.php */


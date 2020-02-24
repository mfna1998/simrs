<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pegawai_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'pegawai/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'pegawai/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'pegawai/index.html';
            $config['first_url'] = base_url() . 'pegawai/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Pegawai_model->total_rows($q);
        $pegawai = $this->Pegawai_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pegawai_data' => $pegawai,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('pegawai/pegawai_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Pegawai_model->get_by_id($id);
        if ($row) {
            $data = array(
		'NIP' => $row->NIP,
		'NAMA' => $row->NAMA,
		'PANGGILAN' => $row->PANGGILAN,
		'GELAR_DEPAN' => $row->GELAR_DEPAN,
		'GELAR_BELAKANG' => $row->GELAR_BELAKANG,
		'TEMPAT_LAHIR' => $row->TEMPAT_LAHIR,
		'TANGGAL_LAHIR' => $row->TANGGAL_LAHIR,
		'AGAMA' => $row->AGAMA,
		'JENIS_KELAMIN' => $row->JENIS_KELAMIN,
		'PROFESI' => $row->PROFESI,
		'SMF' => $row->SMF,
		'ALAMAT' => $row->ALAMAT,
		'RT' => $row->RT,
		'RW' => $row->RW,
		'KODEPOS' => $row->KODEPOS,
		'WILAYAH' => $row->WILAYAH,
		'STATUS' => $row->STATUS,
	    );
            $this->load->view('pegawai/pegawai_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pegawai'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pegawai/create_action'),
	    'NIP' => set_value('NIP'),
	    'NAMA' => set_value('NAMA'),
	    'PANGGILAN' => set_value('PANGGILAN'),
	    'GELAR_DEPAN' => set_value('GELAR_DEPAN'),
	    'GELAR_BELAKANG' => set_value('GELAR_BELAKANG'),
	    'TEMPAT_LAHIR' => set_value('TEMPAT_LAHIR'),
	    'TANGGAL_LAHIR' => set_value('TANGGAL_LAHIR'),
	    'AGAMA' => set_value('AGAMA'),
	    'JENIS_KELAMIN' => set_value('JENIS_KELAMIN'),
	    'PROFESI' => set_value('PROFESI'),
	    'SMF' => set_value('SMF'),
	    'ALAMAT' => set_value('ALAMAT'),
	    'RT' => set_value('RT'),
	    'RW' => set_value('RW'),
	    'KODEPOS' => set_value('KODEPOS'),
	    'WILAYAH' => set_value('WILAYAH'),
	    'STATUS' => set_value('STATUS'),
	);
        $this->load->view('pegawai/pegawai_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'NAMA' => $this->input->post('NAMA',TRUE),
		'PANGGILAN' => $this->input->post('PANGGILAN',TRUE),
		'GELAR_DEPAN' => $this->input->post('GELAR_DEPAN',TRUE),
		'GELAR_BELAKANG' => $this->input->post('GELAR_BELAKANG',TRUE),
		'TEMPAT_LAHIR' => $this->input->post('TEMPAT_LAHIR',TRUE),
		'TANGGAL_LAHIR' => $this->input->post('TANGGAL_LAHIR',TRUE),
		'AGAMA' => $this->input->post('AGAMA',TRUE),
		'JENIS_KELAMIN' => $this->input->post('JENIS_KELAMIN',TRUE),
		'PROFESI' => $this->input->post('PROFESI',TRUE),
		'SMF' => $this->input->post('SMF',TRUE),
		'ALAMAT' => $this->input->post('ALAMAT',TRUE),
		'RT' => $this->input->post('RT',TRUE),
		'RW' => $this->input->post('RW',TRUE),
		'KODEPOS' => $this->input->post('KODEPOS',TRUE),
		'WILAYAH' => $this->input->post('WILAYAH',TRUE),
		'STATUS' => $this->input->post('STATUS',TRUE),
	    );

            $this->Pegawai_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pegawai'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pegawai_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pegawai/update_action'),
		'NIP' => set_value('NIP', $row->NIP),
		'NAMA' => set_value('NAMA', $row->NAMA),
		'PANGGILAN' => set_value('PANGGILAN', $row->PANGGILAN),
		'GELAR_DEPAN' => set_value('GELAR_DEPAN', $row->GELAR_DEPAN),
		'GELAR_BELAKANG' => set_value('GELAR_BELAKANG', $row->GELAR_BELAKANG),
		'TEMPAT_LAHIR' => set_value('TEMPAT_LAHIR', $row->TEMPAT_LAHIR),
		'TANGGAL_LAHIR' => set_value('TANGGAL_LAHIR', $row->TANGGAL_LAHIR),
		'AGAMA' => set_value('AGAMA', $row->AGAMA),
		'JENIS_KELAMIN' => set_value('JENIS_KELAMIN', $row->JENIS_KELAMIN),
		'PROFESI' => set_value('PROFESI', $row->PROFESI),
		'SMF' => set_value('SMF', $row->SMF),
		'ALAMAT' => set_value('ALAMAT', $row->ALAMAT),
		'RT' => set_value('RT', $row->RT),
		'RW' => set_value('RW', $row->RW),
		'KODEPOS' => set_value('KODEPOS', $row->KODEPOS),
		'WILAYAH' => set_value('WILAYAH', $row->WILAYAH),
		'STATUS' => set_value('STATUS', $row->STATUS),
	    );
            $this->load->view('pegawai/pegawai_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pegawai'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('NIP', TRUE));
        } else {
            $data = array(
		'NAMA' => $this->input->post('NAMA',TRUE),
		'PANGGILAN' => $this->input->post('PANGGILAN',TRUE),
		'GELAR_DEPAN' => $this->input->post('GELAR_DEPAN',TRUE),
		'GELAR_BELAKANG' => $this->input->post('GELAR_BELAKANG',TRUE),
		'TEMPAT_LAHIR' => $this->input->post('TEMPAT_LAHIR',TRUE),
		'TANGGAL_LAHIR' => $this->input->post('TANGGAL_LAHIR',TRUE),
		'AGAMA' => $this->input->post('AGAMA',TRUE),
		'JENIS_KELAMIN' => $this->input->post('JENIS_KELAMIN',TRUE),
		'PROFESI' => $this->input->post('PROFESI',TRUE),
		'SMF' => $this->input->post('SMF',TRUE),
		'ALAMAT' => $this->input->post('ALAMAT',TRUE),
		'RT' => $this->input->post('RT',TRUE),
		'RW' => $this->input->post('RW',TRUE),
		'KODEPOS' => $this->input->post('KODEPOS',TRUE),
		'WILAYAH' => $this->input->post('WILAYAH',TRUE),
		'STATUS' => $this->input->post('STATUS',TRUE),
	    );

            $this->Pegawai_model->update($this->input->post('NIP', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pegawai'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pegawai_model->get_by_id($id);

        if ($row) {
            $this->Pegawai_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pegawai'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pegawai'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('NAMA', 'nama', 'trim|required');
	$this->form_validation->set_rules('PANGGILAN', 'panggilan', 'trim|required');
	$this->form_validation->set_rules('GELAR_DEPAN', 'gelar depan', 'trim|required');
	$this->form_validation->set_rules('GELAR_BELAKANG', 'gelar belakang', 'trim|required');
	$this->form_validation->set_rules('TEMPAT_LAHIR', 'tempat lahir', 'trim|required');
	$this->form_validation->set_rules('TANGGAL_LAHIR', 'tanggal lahir', 'trim|required');
	$this->form_validation->set_rules('AGAMA', 'agama', 'trim|required');
	$this->form_validation->set_rules('JENIS_KELAMIN', 'jenis kelamin', 'trim|required');
	$this->form_validation->set_rules('PROFESI', 'profesi', 'trim|required');
	$this->form_validation->set_rules('SMF', 'smf', 'trim|required');
	$this->form_validation->set_rules('ALAMAT', 'alamat', 'trim|required');
	$this->form_validation->set_rules('RT', 'rt', 'trim|required');
	$this->form_validation->set_rules('RW', 'rw', 'trim|required');
	$this->form_validation->set_rules('KODEPOS', 'kodepos', 'trim|required');
	$this->form_validation->set_rules('WILAYAH', 'wilayah', 'trim|required');
	$this->form_validation->set_rules('STATUS', 'status', 'trim|required');

	$this->form_validation->set_rules('NIP', 'NIP', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */


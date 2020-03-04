<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pendaftaran_model');
        $this->load->model('Pasien_model');
        $this->load->model('Kontak_pasien_model');
        $this->load->model('Keluarga_pasien_model');
        $this->load->model('Kontak_keluarga_pasien_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'pendaftaran?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'pendaftaran?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'pendaftaran';
            $config['first_url'] = base_url() . 'pendaftaran';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Pendaftaran_model->total_rows($q);
        $pendaftaran = $this->Pendaftaran_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pendaftaran_data' => $pendaftaran,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('pendaftaran/pendaftaran_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Pendaftaran_model->get_by_id($id);
        if ($row) {
            $data = array(
		'NORM' => $row->NORM,
		'NAMA' => $row->NAMA,
		'PANGGILAN' => $row->PANGGILAN,
		'GELAR_DEPAN' => $row->GELAR_DEPAN,
		'GELAR_BELAKANG' => $row->GELAR_BELAKANG,
		'TEMPAT_LAHIR' => $row->TEMPAT_LAHIR,
		'TANGGAL_LAHIR' => $row->TANGGAL_LAHIR,
		'JENIS_KELAMIN' => $row->JENIS_KELAMIN,
		'ALAMAT' => $row->ALAMAT,
		'RT' => $row->RT,
		'RW' => $row->RW,
		'KODEPOS' => $row->KODEPOS,
		'WILAYAH' => $row->WILAYAH,
		'AGAMA' => $row->AGAMA,
		'PENDIDIKAN' => $row->PENDIDIKAN,
		'PEKERJAAN' => $row->PEKERJAAN,
		'STATUS_PERKAWINAN' => $row->STATUS_PERKAWINAN,
		'GOLONGAN_DARAH' => $row->GOLONGAN_DARAH,
		'KEWARGANEGARAAN' => $row->KEWARGANEGARAAN,
		'SUKUBANGSA' => $row->SUKUBANGSA,
		'BAHASA' => $row->BAHASA,
		'LINGKUNGANKERJA' => $row->LINGKUNGANKERJA,
		'TUJUANPERIKSA' => $row->TUJUANPERIKSA,
		'JENIS_PASIEN' => $row->JENIS_PASIEN,
		'CEKNIK' => $row->CEKNIK,
		'TANGGAL' => $row->TANGGAL,
        'STATUS' => $row->STATUS,
        'JENIS' => $row->JENIS,
        'NOMOR' => $row->NOMOR,
        'SHDK' => $row->SHDK,
        'JENIS_KELAMIN' => $row->JENIS_KELAMIN,
		'ID' => $row->ID,
		'NAMA' => $row->NAMA,
		'ALAMAT' => $row->ALAMAT,
		'PENDIDIKAN' => $row->PENDIDIKAN,
		'PEKERJAAN' => $row->PEKERJAAN,
	    );
            $this->load->view('pendaftaran/pendaftaran_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pendaftaran'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pendaftaran/create_action'),
	    'NORM' => set_value('NORM'),
	    'NAMA' => set_value('NAMA'),
	    'PANGGILAN' => set_value('PANGGILAN'),
	    'GELAR_DEPAN' => set_value('GELAR_DEPAN'),
	    'GELAR_BELAKANG' => set_value('GELAR_BELAKANG'),
	    'TEMPAT_LAHIR' => set_value('TEMPAT_LAHIR'),
	    'TANGGAL_LAHIR' => set_value('TANGGAL_LAHIR'),
	    'JENIS_KELAMIN' => set_value('JENIS_KELAMIN'),
	    'ALAMAT' => set_value('ALAMAT'),
	    'RT' => set_value('RT'),
	    'RW' => set_value('RW'),
	    'KODEPOS' => set_value('KODEPOS'),
	    'WILAYAH' => set_value('WILAYAH'),
	    'AGAMA' => set_value('AGAMA'),
	    'PENDIDIKAN' => set_value('PENDIDIKAN'),
	    'PEKERJAAN' => set_value('PEKERJAAN'),
	    'STATUS_PERKAWINAN' => set_value('STATUS_PERKAWINAN'),
	    'GOLONGAN_DARAH' => set_value('GOLONGAN_DARAH'),
	    'KEWARGANEGARAAN' => set_value('KEWARGANEGARAAN'),
	    'SUKUBANGSA' => set_value('SUKUBANGSA'),
	    'BAHASA' => set_value('BAHASA'),
	    'LINGKUNGANKERJA' => set_value('LINGKUNGANKERJA'),
	    'TUJUANPERIKSA' => set_value('TUJUANPERIKSA'),
	    'JENIS_PASIEN' => set_value('JENIS_PASIEN'),
	    'CEKNIK' => set_value('CEKNIK'),
	    'TANGGAL' => set_value('TANGGAL'),
        'STATUS' => set_value('STATUS'),
        'JENIS' => set_value('JENIS'),
        'NOMOR' => set_value('NOMOR'),
        'SHDK' => set_value('SHDK'),
        'JENIS_KELAMIN' => set_value('JENIS_KELAMIN'),
	    'ID' => set_value('ID'),
	    'NAMA' => set_value('NAMA'),
	    'ALAMAT' => set_value('ALAMAT'),
	    'PENDIDIKAN' => set_value('PENDIDIKAN'),
	    'PEKERJAAN' => set_value('PEKERJAAN'),
	);
        $this->load->view('pendaftaran/pendaftaran_form', $data);
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
		'JENIS_KELAMIN' => $this->input->post('JENIS_KELAMIN',TRUE),
		'ALAMAT' => $this->input->post('ALAMAT',TRUE),
		'RT' => $this->input->post('RT',TRUE),
		'RW' => $this->input->post('RW',TRUE),
		'KODEPOS' => $this->input->post('KODEPOS',TRUE),
		'WILAYAH' => $this->input->post('WILAYAH',TRUE),
		'AGAMA' => $this->input->post('AGAMA',TRUE),
		'PENDIDIKAN' => $this->input->post('PENDIDIKAN',TRUE),
		'PEKERJAAN' => $this->input->post('PEKERJAAN',TRUE),
		'STATUS_PERKAWINAN' => $this->input->post('STATUS_PERKAWINAN',TRUE),
		'GOLONGAN_DARAH' => $this->input->post('GOLONGAN_DARAH',TRUE),
		'KEWARGANEGARAAN' => $this->input->post('KEWARGANEGARAAN',TRUE),
		'SUKUBANGSA' => $this->input->post('SUKUBANGSA',TRUE),
		'BAHASA' => $this->input->post('BAHASA',TRUE),
		'LINGKUNGANKERJA' => $this->input->post('LINGKUNGANKERJA',TRUE),
		'TUJUANPERIKSA' => $this->input->post('TUJUANPERIKSA',TRUE),
		'JENIS_PASIEN' => $this->input->post('JENIS_PASIEN',TRUE),
		'CEKNIK' => $this->input->post('CEKNIK',TRUE),
		'TANGGAL' => $this->input->post('TANGGAL',TRUE),
		'STATUS' => $this->input->post('STATUS',TRUE),
		'JENIS' => $this->input->post('JENIS', TRUE),
        'NOMOR' => $this->input->post('NOMOR', TRUE),
        'SHDK' => $this->input->post('SHDK',TRUE),
        'JENIS_KELAMIN' => $this->input->post('JENIS_KELAMIN', TRUE),
	    'ID' => $this->input->post('ID', TRUE),
	    'NAMA' => $this->input->post('NAMA', TRUE),
	    'ALAMAT' => $this->input->post('ALAMAT', TRUE),
	    'PENDIDIKAN' => $this->input->post('PENDIDIKAN', TRUE),
	    'PEKERJAAN' => $this->input->post('PEKERJAAN', TRUE),
	    );

            $this->Pasien_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pendaftaran'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pendaftaran_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pendaftaran/update_action'),
		'NORM' => set_value('NORM', $row->NORM),
		'NAMA' => set_value('NAMA', $row->NAMA),
		'PANGGILAN' => set_value('PANGGILAN', $row->PANGGILAN),
		'GELAR_DEPAN' => set_value('GELAR_DEPAN', $row->GELAR_DEPAN),
		'GELAR_BELAKANG' => set_value('GELAR_BELAKANG', $row->GELAR_BELAKANG),
		'TEMPAT_LAHIR' => set_value('TEMPAT_LAHIR', $row->TEMPAT_LAHIR),
		'TANGGAL_LAHIR' => set_value('TANGGAL_LAHIR', $row->TANGGAL_LAHIR),
		'JENIS_KELAMIN' => set_value('JENIS_KELAMIN', $row->JENIS_KELAMIN),
		'ALAMAT' => set_value('ALAMAT', $row->ALAMAT),
		'RT' => set_value('RT', $row->RT),
		'RW' => set_value('RW', $row->RW),
		'KODEPOS' => set_value('KODEPOS', $row->KODEPOS),
		'WILAYAH' => set_value('WILAYAH', $row->WILAYAH),
		'AGAMA' => set_value('AGAMA', $row->AGAMA),
		'PENDIDIKAN' => set_value('PENDIDIKAN', $row->PENDIDIKAN),
		'PEKERJAAN' => set_value('PEKERJAAN', $row->PEKERJAAN),
		'STATUS_PERKAWINAN' => set_value('STATUS_PERKAWINAN', $row->STATUS_PERKAWINAN),
		'GOLONGAN_DARAH' => set_value('GOLONGAN_DARAH', $row->GOLONGAN_DARAH),
		'KEWARGANEGARAAN' => set_value('KEWARGANEGARAAN', $row->KEWARGANEGARAAN),
		'SUKUBANGSA' => set_value('SUKUBANGSA', $row->SUKUBANGSA),
		'BAHASA' => set_value('BAHASA', $row->BAHASA),
		'LINGKUNGANKERJA' => set_value('LINGKUNGANKERJA', $row->LINGKUNGANKERJA),
		'TUJUANPERIKSA' => set_value('TUJUANPERIKSA', $row->TUJUANPERIKSA),
		'JENIS_PASIEN' => set_value('JENIS_PASIEN', $row->JENIS_PASIEN),
		'CEKNIK' => set_value('CEKNIK', $row->CEKNIK),
		'TANGGAL' => set_value('TANGGAL', $row->TANGGAL),
		'STATUS' => set_value('STATUS', $row->STATUS),
		'JENIS' => set_value('JENIS', $row->JENIS),
        'NOMOR' => set_value('NOMOR', $row->NOMOR),
        'SHDK' => set_value('SHDK',$row->SHDK),
        'JENIS_KELAMIN' => set_value('JENIS_KELAMIN', $row->JENIS_KELAMIN),
	    'ID' => set_value('ID', $row->ID),
	    'NAMA' => set_value('NAMA', $row->NAMA),
	    'ALAMAT' => set_value('ALAMAT', $row->ALAMAT),
	    'PENDIDIKAN' => set_value('PENDIDIKAN', $row->PENDIDIKAN),
	    'PEKERJAAN' => set_value('PEKERJAAN', $row->PEKERJAAN),
	    );
            $this->load->view('pendaftaran/pendaftaran_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pendaftaran'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('NORM', TRUE));
        } else {
            $data = array(
		'NAMA' => $this->input->post('NAMA',TRUE),
		'PANGGILAN' => $this->input->post('PANGGILAN',TRUE),
		'GELAR_DEPAN' => $this->input->post('GELAR_DEPAN',TRUE),
		'GELAR_BELAKANG' => $this->input->post('GELAR_BELAKANG',TRUE),
		'TEMPAT_LAHIR' => $this->input->post('TEMPAT_LAHIR',TRUE),
		'TANGGAL_LAHIR' => $this->input->post('TANGGAL_LAHIR',TRUE),
		'JENIS_KELAMIN' => $this->input->post('JENIS_KELAMIN',TRUE),
		'ALAMAT' => $this->input->post('ALAMAT',TRUE),
		'RT' => $this->input->post('RT',TRUE),
		'RW' => $this->input->post('RW',TRUE),
		'KODEPOS' => $this->input->post('KODEPOS',TRUE),
		'WILAYAH' => $this->input->post('WILAYAH',TRUE),
		'AGAMA' => $this->input->post('AGAMA',TRUE),
		'PENDIDIKAN' => $this->input->post('PENDIDIKAN',TRUE),
		'PEKERJAAN' => $this->input->post('PEKERJAAN',TRUE),
		'STATUS_PERKAWINAN' => $this->input->post('STATUS_PERKAWINAN',TRUE),
		'GOLONGAN_DARAH' => $this->input->post('GOLONGAN_DARAH',TRUE),
		'KEWARGANEGARAAN' => $this->input->post('KEWARGANEGARAAN',TRUE),
		'SUKUBANGSA' => $this->input->post('SUKUBANGSA',TRUE),
		'BAHASA' => $this->input->post('BAHASA',TRUE),
		'LINGKUNGANKERJA' => $this->input->post('LINGKUNGANKERJA',TRUE),
		'TUJUANPERIKSA' => $this->input->post('TUJUANPERIKSA',TRUE),
		'JENIS_PASIEN' => $this->input->post('JENIS_PASIEN',TRUE),
		'CEKNIK' => $this->input->post('CEKNIK',TRUE),
		'TANGGAL' => $this->input->post('TANGGAL',TRUE),
		'STATUS' => $this->input->post('STATUS',TRUE),
		'JENIS' => $this->input->post('JENIS', TRUE),
        'NOMOR' => $this->input->post('NOMOR', TRUE),
        'SHDK' => $this->input->post('SHDK',TRUE),
        'JENIS_KELAMIN' => $this->input->post('JENIS_KELAMIN', TRUE),
	    'ID' => $this->input->post('ID', TRUE),
	    'NAMA' => $this->input->post('NAMA', TRUE),
	    'ALAMAT' => $this->input->post('ALAMAT', TRUE),
	    'PENDIDIKAN' => $this->input->post('PENDIDIKAN', TRUE),
	    'PEKERJAAN' => $this->input->post('PEKERJAAN', TRUE),
	    );

            $this->Pasien_model->update($this->input->post('NORM', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pendaftaran'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pendaftaran_model->get_by_id($id);

        if ($row) {
            $this->Pendaftaran_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pendaftaran'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pendaftaran'));
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
	$this->form_validation->set_rules('JENIS_KELAMIN', 'jenis kelamin', 'trim|required');
	$this->form_validation->set_rules('ALAMAT', 'alamat', 'trim|required');
	$this->form_validation->set_rules('RT', 'rt', 'trim|required');
	$this->form_validation->set_rules('RW', 'rw', 'trim|required');
	$this->form_validation->set_rules('KODEPOS', 'kodepos', 'trim|required');
	$this->form_validation->set_rules('WILAYAH', 'wilayah', 'trim|required');
	$this->form_validation->set_rules('AGAMA', 'agama', 'trim|required');
	$this->form_validation->set_rules('PENDIDIKAN', 'pendidikan', 'trim|required');
	$this->form_validation->set_rules('PEKERJAAN', 'pekerjaan', 'trim|required');
	$this->form_validation->set_rules('STATUS_PERKAWINAN', 'status perkawinan', 'trim|required');
	$this->form_validation->set_rules('GOLONGAN_DARAH', 'golongan darah', 'trim|required');
	$this->form_validation->set_rules('KEWARGANEGARAAN', 'kewarganegaraan', 'trim|required');
	$this->form_validation->set_rules('SUKUBANGSA', 'sukubangsa', 'trim|required');
	$this->form_validation->set_rules('BAHASA', 'bahasa', 'trim|required');
	$this->form_validation->set_rules('LINGKUNGANKERJA', 'lingkungankerja', 'trim|required');
	$this->form_validation->set_rules('TUJUANPERIKSA', 'tujuanperiksa', 'trim|required');
	$this->form_validation->set_rules('JENIS_PASIEN', 'jenis pasien', 'trim|required');
	$this->form_validation->set_rules('CEKNIK', 'ceknik', 'trim|required');
	$this->form_validation->set_rules('TANGGAL', 'tanggal', 'trim|required');
	$this->form_validation->set_rules('STATUS', 'status', 'trim|required');
	$this->form_validation->set_rules('JENIS', 'jenis', 'trim|required');
    $this->form_validation->set_rules('NOMOR', 'nomor', 'trim|required');
	$this->form_validation->set_rules('SHDK', 'shdk', 'trim|required');
	$this->form_validation->set_rules('JENIS_KELAMIN', 'jenis kelamin', 'trim|required');
	$this->form_validation->set_rules('ID', 'id', 'trim|required');
	$this->form_validation->set_rules('NAMA', 'nama', 'trim|required');
	$this->form_validation->set_rules('ALAMAT', 'alamat', 'trim|required');
	$this->form_validation->set_rules('PENDIDIKAN', 'pendidikan', 'trim|required');
	$this->form_validation->set_rules('PEKERJAAN', 'pekerjaan', 'trim|required');

	$this->form_validation->set_rules('NORM', 'NORM', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pasien.php */
/* Location: ./application/controllers/Pasien.php */

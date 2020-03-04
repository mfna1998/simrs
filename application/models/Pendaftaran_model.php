<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pendaftaran_model extends CI_Model {

    public $order = 'ASC';
  // Fungsi untuk menampilkan semua data siswa
  public function get_all(){
    $this->db->select('pasien.*, kontak_pasien.*, keluarga_pasien.*');
    $this->db->from('pasien');
    $this->db->join('kontak_pasien', 'kontak_pasien.NORM = pasien.NORM');
    $this->db->join('keluarga_pasien', 'keluarga_pasien.NORM = pasien.NORM');
    $this->db->where('pasien.NORM');
    return $this->db->get();
    // return $this->db->get('pasien')->result();
  }
  
  // Fungsi untuk menampilkan data siswa berdasarkan NIS nya
  public function get_by_id($NORM){
    // $this->db->where('NORM', $NORM);
    $this->db->select('pasien.*, kontak_pasien.*, keluarga_pasien.*, referensi.*');
    $this->db->from('pasien');
    $this->db->join('kontak_pasien', 'kontak_pasien.NORM = pasien.NORM');
    $this->db->join('keluarga_pasien', 'keluarga_pasien.NORM = pasien.NORM');
    $this->db->join('referensi', 'referensi.ID = pasien.JENIS_KELAMIN AND referensi.JENIS=2');
    // $this->db->join('', 'referensi.ID = keluarga_pasien.PEKERJAAN AND referensi.JENIS=4');
    $this->db->where('pasien.NORM');
    return $this->db->get('pasien')->row();
    // return $this->db->get('siswa')->row();
  }

  function total_rows($q = NULL) {
    $this->db->like('pasien.NORM', $q);
    $this->db->from('pasien');
    $this->db->join('kontak_pasien', 'kontak_pasien.NORM = pasien.NORM');
    $this->db->join('keluarga_pasien', 'keluarga_pasien.NORM = pasien.NORM');
    $this->db->join('referensi', 'referensi.ID = pasien.JENIS_KELAMIN AND referensi.JENIS=2', 'referensi.ID = keluarga_pasien.PEKERJAAN AND referensi.JENIS=4');
    // $this->db->join('referensi', 'referensi.ID = keluarga_pasien.PEKERJAAN AND referensi.JENIS=4');
    return $this->db->count_all_results();
  }

  function get_limit_data($limit, $start = 0, $q = NULL) {
    $this->db->order_by('pasien.NORM', $this->order);
    $this->db->like('pasien.NORM', $q);
    $this->db->join('kontak_pasien', 'kontak_pasien.NORM = pasien.NORM');
    $this->db->join('keluarga_pasien', 'keluarga_pasien.NORM = pasien.NORM');
    $this->db->join('referensi', 'referensi.ID = pasien.JENIS_KELAMIN AND referensi.JENIS=2');
    // $this->db->join('referensi', 'referensi.ID = keluarga_pasien.PEKERJAAN AND referensi.JENIS=4');
$this->db->limit($limit, $start);
    return $this->db->get('pasien')->result();
}
  
  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, NIS tidak harus divalidasi
    // Jadi NIS di validasi hanya ketika menambah data siswa saja
    if($mode == "save")
      $this->form_validation->set_rules('input_nis', 'NIS', 'required|numeric|max_length[11]');
    
    $this->form_validation->set_rules('input_nama', 'Nama', 'required|max_length[50]');
    $this->form_validation->set_rules('input_jeniskelamin', 'Jenis Kelamin', 'required');
    $this->form_validation->set_rules('input_telp', 'telp', 'required|numeric|max_length[15]');
    $this->form_validation->set_rules('input_alamat', 'Alamat', 'required');
      
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel siswa
  public function save(){
    $data = array(
      "nis" => $this->input->post('input_nis'),
      "nama" => $this->input->post('input_nama'),
      "jenis_kelamin" => $this->input->post('input_jeniskelamin'),
      "telp" => $this->input->post('input_telp'),
      "alamat" => $this->input->post('input_alamat')
    );
    
    $this->db->insert('siswa', $data); // Untuk mengeksekusi perintah insert data
  }
  
  // Fungsi untuk melakukan ubah data siswa berdasarkan NIS siswa
  public function edit($nis){
    $data = array(
      "nama" => $this->input->post('input_nama'),
      "jenis_kelamin" => $this->input->post('input_jeniskelamin'),
      "telp" => $this->input->post('input_telp'),
      "alamat" => $this->input->post('input_alamat')
    );
    
    $this->db->where('nis', $nis);
    $this->db->update('siswa', $data); // Untuk mengeksekusi perintah update data
  }
  
  // Fungsi untuk melakukan menghapus data siswa berdasarkan NIS siswa
  public function delete($nis){
    $this->db->where('nis', $nis);
    $this->db->delete('siswa'); // Untuk mengeksekusi perintah delete data
  }
}
?>




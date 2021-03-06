<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ruangan_model extends CI_Model
{

    public $table = 'ruangan';
    public $id = 'ID';
    public $order = 'ASC';

    function __construct()
    {
        parent::__construct();
        $db2 = $this->load->database('db2', TRUE);
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('ID', $q);
	$this->db->or_like('JENIS', $q);
	$this->db->or_like('JENIS_KUNJUNGAN', $q);
	$this->db->or_like('DESKRIPSI', $q);
	$this->db->or_like('STATUS', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('ID', $q);
	$this->db->or_like('JENIS', $q);
	$this->db->or_like('JENIS_KUNJUNGAN', $q);
	$this->db->or_like('DESKRIPSI', $q);
	$this->db->or_like('STATUS', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Ruangan_model.php */
/* Location: ./application/models/Ruangan_model.php */


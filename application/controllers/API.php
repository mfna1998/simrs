<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

    require APPPATH . 'src\RESTController.php';
    use Restserver\Libraries\REST_Controller;

    class API extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    function index_get() {
        $ID = $this->get('ID');
        if ($ID == '') {
            $wilayah = $this->db->get('wilayah')->result();
        } else {
            $this->db->where('ID', $id);
            $wilayah = $this->db->get('wilayah')->result();
        }
        $this->response($wilayah, 200);
    }











}
?>
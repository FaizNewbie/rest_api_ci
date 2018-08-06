<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Gambar extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kontak
     function index_get(){
        $this->load->helper('directory');
        $files = directory_map('./gambar/');
        $this->response($files, 200);
        //json_encode($files);
   }
   
}

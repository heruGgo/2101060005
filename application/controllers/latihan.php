<?php
    class latihan extends CI_Controller{
        public function __construct(){
            parent:: __construct();
            $this->load->model('contohModel');
        }
        
        public function index(){
            $data['contoh'] = $this->contohModel->getAll();
            $this->load->view('contohTampil', $data);
        }
    }
?>
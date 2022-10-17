<?php
    class Home extends CI_Controller{
        function index(){
            echo "Belajar Framework";
        }

        public function tampil(){
            return $this->load->view('v_tampil');
        }
    }
?>
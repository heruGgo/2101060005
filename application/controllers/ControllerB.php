<?php
    class controllerb extends CI_Controller{
            public function __construct(){
                parent:: __construct();
                $this->load->model('BModel');
            }
            
            public function index(){
                $data['data'] = $this->BModel->getAll();
                $this->load->view('uts/BTampil', $data);
            }
    
            public function tambah(){
                $this->load->view('uts/BTambah');
            }
    
            public function simpanTambah(){
                $kolom_jurusan = $this->input->post('kolom_jurusan');
                $kolom_kelas = $this->input->post('kolom_kelas');
                $kolom_isi = $this->input->post('kolom_isi');
    
                $data_input = [
                    'kolom_jurusan' => $kolom_jurusan,
                    'kolom_kelas' => $kolom_kelas,
                    'kolom_isi' => $kolom_isi
                ];
    
                $simpan = $this->BModel->add($data_input);
                redirect('controllerb/index');
            }
        }
?>
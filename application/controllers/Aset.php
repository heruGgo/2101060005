<?php 
    class aset extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model("AsetModel");
            if($this->session->userdata('login') != true){
                redirect('login/index');
            }
        }
        
        public function tampilkan(){
            $data['aset'] = $this->AsetModel->getAll();
            $this->load->view("aset/v_aset", $data);
        }

        public function tambah(){
            $this->load->view('aset/v_tambah');
        }

        public function simpanTambah(){
            $nama_aset = $this->input->post('nama_aset');
            $jenis_aset = $this->input->post('jenis_aset');
            $lokasi_aset = $this->input->post('lokasi_aset');
            $jumlah_aset = $this->input->post('jumlah_aset');

            $data_input = [
                'nama_aset' => $nama_aset,
                'jenis' => $jenis_aset,
                'lokasi' => $lokasi_aset,
                'jumlah' => $jumlah_aset,
            ];

            $simpan = $this->AsetModel->add($data_input);
            redirect('aset/tampilkan');
        }

        public function delete($id){
            $this->AsetModel->hapus_data($id);
            return redirect("aset/tampilkan");
        }
    
        public function edit($id){
            $data['isi'] =  $this->AsetModel->getOne($id);
            return $this->load->view('aset/v_edit', $data);
        }

        public function proses_edit()
        {
            $id = $this->input->post('txtid');
            $nama_aset = $this->input->post('nama_aset');
            $jenis_aset = $this->input->post('jenis_aset');
            $lokasi_aset = $this->input->post('lokasi_aset');
            $jumlah_aset = $this->input->post('jumlah_aset');

            $data_edit = [
                'nama_aset' => $nama_aset,
                'jenis' => $jenis_aset,
                'lokasi' => $lokasi_aset,
                'jumlah' => $jumlah_aset,
            ];

            $this->AsetModel->editData($id, $data_edit);
            redirect('aset/tampilkan');
        }
    }
?>
<?php 
    class komponen005 extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model("MKomponen");
        }
        
        public function tampilkan(){
            $data['komponen'] = $this->MKomponen->getAll();
            $this->load->view("crud/crud_table", $data);
        }

        public function tambah(){
            $this->load->view('crud/crud_tambah');
        }

        public function simpanTambah(){
            $merek = $this->input->post('merek');
            $kapasitas = $this->input->post('kapasitas');
            $harga = $this->input->post('harga');
            $jenis = $this->input->post('jenis');

            $data_input = [
                'merek_005' => $merek,
                'kapasitas_005' => $kapasitas,
                'harga_005' => $harga,
                'jenis_005' => $jenis,
            ];

            $simpan = $this->MKomponen->add($data_input);
            redirect('komponen005/tampilkan');
        }

        public function delete($id){
            $this->MKomponen->hapus_data($id);
            return redirect("komponen005/tampilkan");
        }
    
        public function edit($id){
            $data['isi'] = $this->MKomponen->getOne($id);
            return $this->load->view('crud/crud_edit', $data);
        }

        public function proses_edit(){
            $id = $this->input->post('txtid');
            $merek = $this->input->post('merek');
            $kapasitas = $this->input->post('kapasitas');
            $harga = $this->input->post('harga');
            $jenis = $this->input->post('jenis');

            $data_edit = [
                'merek_005' => $merek,
                'kapasitas_005' => $kapasitas,
                'harga_005' => $harga,
                'jenis_005' => $jenis,
            ];

            $simpan = $this->MKomponen->editData($id, $data_edit);
            redirect('komponen005/tampilkan');
        }
    }
?>
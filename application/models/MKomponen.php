<?php 
    class mkomponen extends CI_Model{
            private $table = 'komponen_005';

            public function getAll(){
                return $this->db->get($this->table)->result();
            }

            public function add($data_input){
                $this->db->insert($this->table, $data_input);
            }

            public function simpan_data($data){
                $this->db->insert('komponen_005', $data);
            }

            public function hapus_data($id){
                $this->db->delete('komponen_005', ['id_komponen' => $id]);
            }

            public function getOne($id){
                return $this->db->where(['id_komponen' => $id])->get($this->table)->row_object();
            }

            public function editData($id, $data_edit){
                $this->db->where(['id_komponen' => $id])->update($this->table, $data_edit);
            }
    }
?>
<?php 
    class asetmodel extends CI_Model{
            private $table = 'tabel_aset';

            public function getAll(){
                return $this->db->get($this->table)->result();
            }

            public function add($data_input){
                $this->db->insert($this->table, $data_input);
            }

            public function simpan_data($data){
                $this->db->insert('tabel_aset', $data);
            }

            public function hapus_data($id){
                $this->db->delete('tabel_aset', ['id' => $id]);
            }

            public function getOne($id)
            {
                return $this->db->where(['id' => $id])->get($this->table)->row_object();
            }

           public function editData($id, $data_edit)
           {
                $this->db->where(['id' => $id])->update($this->table, $data_edit);
           }
    }
?>
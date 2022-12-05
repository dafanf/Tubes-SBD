<?php
    class User_model{

        public function __contruct(){
            $this->db= new Database;
        }

        public function tambahUser($data){
            $query = "BEGIN 
                        entry_pengguna (:id,:name,:email,:tgl_new,:tgl_updt,:idOut,:idAkun); 
                      END;";
            $this->db->query($query);
            $this->db->bind('id', $data['inputUserId']);
            $this->db->bind('name', $data['inputName']);
            $this->db->bind('email', $data['inputEmail']);
            $this->db->bind('tgl_new', $data['inputTgl_new']);
            $this->db->bind('tgl_updt', $data['inputTgl_update']);
            $this->db->bind('idOut', $data['inputOutletId']);
            $this->db->bind('idAkun', $data['inputAkunId']);
            $this->db->execute();
            
            return $this->db->rowCount();
        }
    }
?>
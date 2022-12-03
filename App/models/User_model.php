<?php
    class User_model{
        private $db;

        public function __contruct(){
            $this->db = new Database;
        }

        public function tambahUser($data){
            $query = "BEGIN
                        entry_pengguna(:username, :position, :email, :foto, :idOut, :tgl_new, :tgl_updt);
                    END;";

            $this->db->query($query);
            $this->db->bind('username', $data['inputName']);
            $this->db->bind('position', $data['inputPosition']);
            $this->db->bind('email', $data['inputEmail']);
            $this->db->bind('foto', $data['inputFoto']);
            $this->db->bind('idOut', $data['inputNumber']);
            $this->db->bind('tgl_new', $data['inputTgl_new']);
            $this->db->bind('tgl_updt', $data['inputTgl_update']);

            $this->db->execute();
            
            return $this->db->rowCount();
        }
    }
?>
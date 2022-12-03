<?php
    class User_model{
        private $db;

        public function __contruct(){
            $this->db = new Database;
        }

        public function tambahUser($data){
            $query = "BEGIN
                        entry_pengguna(:username, :position, :email, :foto, :idout);
                    END;";

            $this->db->query($query);
            $this->db->bind('username', $data['inputName']);
            $this->db->bind('position', $data['inputPosition']);
            $this->db->bind('email', $data['inputEmail']);
            $this->db->bind('foto', $data['inputFoto']);
            $this->db->bind('idout', $data['inputNumber']);

            $this->db->execute();
            
            return $this->db->rowCount();
        }
    }

?>
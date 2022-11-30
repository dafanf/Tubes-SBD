<?php
    class Akun_model{
        private $table = 'AKUN';
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function getStatus($data){
            $query = "SELECT STATUS FROM AKUN WHERE USERNAME =:username AND PASSWORD =:password";
            $this->db->query($query);
            $this->db->bind('username', $data['username']);
            $this->db->bind('password', $data['password']);
            $this->db->execute();
            return $this->db->single();
        }
    }
?>
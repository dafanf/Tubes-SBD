<?php
    class Customer_model{
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function insertCustomer($data){
            $query = "BEGIN 
                        entry_customers (:id,:name,:email,:no_hp,:tgl_new,:tgl_updt); 
                      END;";
            $this->db->query($query);
            $this->db->bind('id', $data['inputCustomerId']);
            $this->db->bind('name', $data['inputName']);
            $this->db->bind('email', $data['inputAddress']);
            $this->db->bind('no_hp', $data['inputNoTelepon']);
            $this->db->bind('tgl_new', $data['inputTgl_new']);
            $this->db->bind('tgl_updt', $data['inputTgl_update']);
            $this->db->execute();
            return $this->db->rowCount();
        }
    }
?>
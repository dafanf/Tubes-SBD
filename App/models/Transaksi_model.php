<?php
    class Transaksi_model{
        public function __construct(){
            $this->db = new Database;
        }

        public function getAllTransaksi(){
            $query = "SELECT * FROM TRANSACTION_VIEW";
            $this->db->query($query);
            $this->db->execute();
            return $this->db->resultSet();
        }

        public function getAllHargaJenisLaundry(){
            $query = "SELECT * FROM HARGA_JENIS_VIEW";
            $this->db->query($query);
            $this->db->execute();
            return $this->db->resultSet();
        }
    }
?>
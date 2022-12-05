<?php
    class Transaksi_model{
        private $db;

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

        public function insertTransaksi($data){
            $query =    "BEGIN 
                            entry_transaksi(:idTrans,:jml_laundry,:tgl_mulai,:tgl_selesai,:status,:tgl_dibuat,:tgl_diupdate,:out_id,:cust_id); 
                        END;";
            $this->db->query($query);
            $this->db->bind('idTrans', $data['inputTransaksiId']);
            $this->db->bind('jml_laundry', $data['inputJumlah']);
            $this->db->bind('tgl_mulai', $data['inputTgl_dimulai']);
            $this->db->bind('tgl_selesai', $data['inputTgl_berakhir']);
            $this->db->bind('status', $data['inputStatus']);
            $this->db->bind('tgl_dibuat', $data['inputTgl_new']);
            $this->db->bind('tgl_diupdate', $data['inputTgl_update']);
            $this->db->bind('out_id', $data['inputOutletId']);
            $this->db->bind('cust_id', $data['inputCustomerId']);
            $this->db->execute();

            return $this->db->rowCount();
        }
    }
?>
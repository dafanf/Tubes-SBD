<?php
        class Harga_Laundry_model{
            private $db;

            public function __contruct(){
                $this->db = new Database;
            }

            public function tambahHargaLaundry($data){
                $query = 'BEGIN 
                            entry_harga_laundry(:idHargaLaundry,:hargaLaundry, :insert_date, :update_date); 
                          END;';
                $this->db->query($query);
                $this->db->bind('idHargaLaundry', $data['inputHargaId']);
                $this->db->bind('hargaLaundry', $data['inputHarga']);
                $this->db->bind('insert_date', $data['inputTgl_new_harga']);
                $this->db->bind('update_date', $data['inputTgl_update_harga']);
                $this->db->execute();

                return $this->db->rowCount();
            }
        }
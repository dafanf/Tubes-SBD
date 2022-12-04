<?php
        class Outlets_model{
            private $db;

            public function __contruct(){
                $this->db = new Database;
            }

            public function tambahOutlets($data){
                $query = 'BEGIN 
                            entry_outlets(:idOut,:outname,:stat,:alamat,:no_tlp, :tgl_new,:tgl_updt); 
                          END;';
                $this->db->query($query);
                $this->db->bind('id', $data['inputOutletId']);
                $this->db->bind('outname', $data['inputNamaOut']);
                $this->db->bind('stat', $data['inputStatusOut']);
                $this->db->bind('alamat', $data['inputAlamatOut']);
                $this->db->bind('no_tlp', $data['inputNoTelp']);
                $this->db->bind('tgl_new', $data['inputTgl_new_out']);
                $this->db->bind('tgl_updt', $data['inputTgl_update_outd']);
                $this->db->execute();

                return $this->db->rowCount();
            }
        }
?>
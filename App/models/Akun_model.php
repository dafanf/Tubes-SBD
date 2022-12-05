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

        public function gettestData($data){
            $query = "INSERT INTO TESTTABLE VALUES (:testdata)";
            $this->db->query($query);
            $this->db->bind('testdata', $data['test']);
            $this->db->execute();
            return $this->db->rowCount();
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

        public function tambahOutlets($data){
            $query = 'BEGIN 
                        entry_outlets(:id,:outname,:stat,:alamat,:no_tlp, :tgl_new,:tgl_updt); 
                      END;';
            $this->db->query($query);
            $this->db->bind('id', $data['inputOutletId']);
            $this->db->bind('outname', $data['inputNamaOut']);
            $this->db->bind('stat', $data['inputStatusOut']);
            $this->db->bind('alamat', $data['inputAlamatOut']);
            $this->db->bind('no_tlp', $data['inputNoTelp']);
            $this->db->bind('tgl_new', $data['inputTgl_new_out']);
            $this->db->bind('tgl_updt', $data['inputTgl_update_out']);
            $this->db->execute();

            return $this->db->rowCount();
        }
    }
?>
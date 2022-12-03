<?php
class DashboardPemilik extends Controller{
    public function index(){
        $data['judul'] = 'Dashboard Pemilik';
        $data['transaksi'] = $this->model('Transaksi_model')->getAllTransaksi();
        $this->view('templates/header', $data);
        $this->view('dashboard-pemilik/index');
        $this->view('templates/footer');
    }

    public function tambah_pegawai(){

        if( $this->model('User_Model')->tambahUser($_POST) > 0){
            header('Location'. BASEURL .'/dashboard-pemilik/tambah_pegawai');
            exit;
        }
        $data['judul'] = 'Tambah Pegawai';
        $this->view('templates/header', $data);
        $this->view('dashboard-pemilik/tambah_pegawai');
        $this->view('templates/footer');
    }

    public function transaksi(){
        
    }
}
?>
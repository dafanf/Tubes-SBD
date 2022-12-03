<?php
class DashboardPemilik extends Controller{
    public function index(){
        $header['judul'] = 'Dashboard Pemilik';
        $data = $this->model('Transaksi_model')->getAllTransaksi();
        $this->view('templates/header', $header);
        $this->view('dashboard-pemilik/index', $data);
        $this->view('templates/footer');
    }

    public function tambah_pegawai_page(){
        $header['judul'] = 'Tambah Pegawai';
        $this->view('templates/header', $header);
        $this->view('dashboard-pemilik/tambah_pegawai');
        $this->view('templates/footer');
    }

    public function tambah_outlet(){
        $header['judul'] = 'Tambah Outlet';
        $this->view('templates/header', $header);
        $this->view('dashboard-pemilik/tambah_outlet');
        $this->view('templates/footer');
    }

    public function tambah_harga_laundry(){
        $header['judul'] = 'Tambah Harga Laundry';
        $this->view('templates/header', $header);
        $this->view('dashboard-pemilik/tambah_harga_laundry');
        $this->view('templates/footer');
    }

    public function tambah_pegawai(){
        $testInput = $this->model('User_model')->tambahUser($_POST);
        var_dump($_POST);

        // if( $this->model('User_Model')->tambahUser($_POST) > 0){
        //     header('Location'. BASEURL .'/dashboard-pemilik/tambah_pegawai_page');
        //     exit;
        // }
    }
    public function transaksi(){
        
    }
}
?>
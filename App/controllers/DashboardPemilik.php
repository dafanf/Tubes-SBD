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
        $testInput = $this->model('Akun_model')->tambahUser($_POST);
        if( $testInput > 0){
            header('Location: '. BASEURL .'/dashboardpemilik/tambah_pegawai_page');
            exit;
        }
    }
    public function transaksi(){
        
    }
}
?>
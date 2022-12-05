<?php
class DashboardPemilik extends Controller{
    public function index(){
        $header['judul'] = 'Dashboard Pemilik';
        $data_transaksi = $this->model('Transaksi_model')->getAllTransaksi();
        $data_harga_laundry = $this->model('Transaksi_model')->getAllHargaJenisLaundry();
        $data = array_merge($data_transaksi, $data_harga_laundry);
        $this->view('templates/header', $header);
        $this->view('dashboard-pemilik/index', $data_transaksi, $data_harga_laundry);
        $this->view('templates/footer');
    }

    public function tambah_pegawai_page(){
        $header['judul'] = 'Tambah Pegawai';
        $this->view('templates/header', $header);
        $this->view('dashboard-pemilik/tambah_pegawai');
        $this->view('templates/footer');
    }

    public function tambah_outlet_page(){
        $header['judul'] = 'Tambah Outlet';
        $this->view('templates/header', $header);
        $this->view('dashboard-pemilik/tambah_outlet');
        $this->view('templates/footer');
    }

    public function tambah_harga_laundry_page(){
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

    public function tambah_outlets(){
        $query = $this->model('Outlets_model')->tambahOutlets($_POST);

        if($this->model('Outlets_model')->tambahModel($_POST) > 0){
            header('Location'. BASEURL.'/dashboar-pemilik/tambah_outlet_page');
            exit;
        }
    }

    public function transaksi(){
        
    }
}
?>
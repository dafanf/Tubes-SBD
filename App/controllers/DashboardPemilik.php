<?php
class DashboardPemilik extends Controller{
    public function index(){
        $header['judul'] = 'Dashboard Pemilik';
        $data_transaksi = $this->model('Transaksi_model')->getAllTransaksi();
        $data_harga_laundry = $this->model('Transaksi_model')->getAllHargaJenisLaundry();
        $data['akun'] = $this->model('Akun_model')->getAllAkun();
        $data['outlet'] = $this->model('Akun_model')->getAllOutlets();
        $data = array_merge($data_transaksi, $data_harga_laundry);
        $this->view('templates/header', $header);
        $this->view('dashboard-pemilik/index', $data_transaksi, $data_harga_laundry,);
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

    public function tambah_akun_page(){
        $header['judul'] = 'Tambah Akun';
        $this->view('templates/header', $header);
        $this->view('dashboard-pemilik/tambah_akun');
        $this->view('templates/footer');
    }

    public function tambah_pegawai(){
        $testInput = $this->model('Akun_model')->tambahUser($_POST);
        if( $testInput > 0){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: '. BASEURL .'/dashboardpemilik/tambah_pegawai_page');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: '. BASEURL .'/dashboardpemilik/tambah_pegawai_page');
            exit;
        }
    }

    public function tambah_akun(){
        $testAkun = $this->model('Akun_model')->tambahAkun($_POST);
        if( $testAkun > 0){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: '. BASEURL .'/dashboardpemilik/tambah_akun_page');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: '. BASEURL .'/dashboardpemilik/tambah_akun_page');
            exit;
        }
    }

    public function tambah_outlets(){
        $testOutlets = $this->model('Outlets_model')->tambahOutlets($_POST);

        if( $testOutlets > 0){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: '. BASEURL .'/dashboardpemilik/tambah_outlet_page');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: '. BASEURL .'/dashboardpemilik/tambah_outlet_page');
            exit;
        }
    }

    public function tambah_harga(){
        $testHarga = $this->model('Harga_model')->tambahHargaLaundry($_POST);

        if( $testharga > 0){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: '. BASEURL .'/dashboardpemilik/tambah_harga_laundry_page');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: '. BASEURL .'/dashboardpemilik/tambah_harga_laundry_page');
            exit;
        }
    }


    public function transaksi(){
        
    }
}
?>
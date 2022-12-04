<?php
class DashboardPegawai extends Controller{
    public function index(){
        $header['judul'] = 'Dashboard Pegawai';
        $data_transaksi = $this->model('Transaksi_model')->getAllTransaksi();
        $data_harga_laundry = $this->model('Transaksi_model')->getAllHargaJenisLaundry();
        $data = array_merge($data_transaksi, $data_harga_laundry);
        // var_dump($data);
        $this->view('templates/header', $header);
        $this->view('dashboard-pegawai/index', $data_transaksi, $data_harga_laundry);
        $this->view('templates/footer');
    }

    public function transaction_page(){
        $data['judul'] = 'Halaman Transaksi';
        $this->view('templates/header', $data);
        $this->view('dashboard-pegawai/transaction_page');
        $this->view('templates/footer');
    }

    public function input_transaction(){
        $header['judul'] = 'Input Transaksi';
        $this->view('templates/header', $header);
        $this->view('dashboard-pegawai/input_transaction');
        $this->view('templates/footer');
    }
    
    public function customer_transaction(){
        $header['judul'] = 'Input Customer';
        $this->view('templates/header', $header);
        $this->view('dashboard-pegawai/customer_transaction');
        $this->view('templates/footer');
    }
}
?>
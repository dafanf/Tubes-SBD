<?php
class DashboardPegawai extends Controller{
    public function index(){
        $header['judul'] = 'Dashboard Pegawai';
        $data = $this->model('Transaksi_model')->getAllTransaksi();
        $this->view('templates/header', $header);
        $this->view('dashboard-pegawai/index', $data);
        $this->view('templates/footer');
    }

    public function transaction_page(){
        $data['judul'] = 'Halaman Transaksi';
        $this->view('templates/header', $data);
        $this->view('dashboard-pegawai/transaction_page');
        $this->view('templates/footer');
    }

    public function input_transaction(){
        $this->view('dashboard-pegawai/input_transaction');
    }
}
?>
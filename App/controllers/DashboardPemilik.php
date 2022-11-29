<?php
class DashboardPemilik extends Controller{
    public function index(){
        $data['judul'] = 'Dashboard Pemilik';
        $this->view('templates/header', $data);
        $this->view('dashboard-pemilik/index');
        $this->view('templates/footer');
    }

    public function tambah_pegawai(){
        $data['judul'] = 'Tambah Pegawai';
        $this->view('templates/header', $data);
        $this->view('dashboard-pemilik/tambah_pegawai');
        $this->view('templates/footer');
    }
}
?>
<?php
class DashboardPemilik extends Controller{
    public function index(){
        $data['judul'] = 'Dashboard Pemilik';
        $this->view('templates/header', $data);
        $this->view('dashboard-pemilik/index');
        $this->view('templates/footer');
    }
}
?>
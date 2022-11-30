<?php

class Login extends Controller{
    public function index(){
        $this->view('login/index');
    }
    
    public function loginUser(){
        $status = $this->model('Akun_model')->getStatus($_POST);
        if($status['STATUS'] == 'Pegawai'){
            header('Location: ' . BASEURL . '/dashboardpegawai');
            exit;
        }else if($status['STATUS']  == 'Pemilik'){
            header('Location: ' . BASEURL . '/dashboardpemilik');
            exit;
        }else{
            header('Location: ' . BASEURL . '/login');
            exit;
        }
        // var_dump($status['STATUS']);
    }
}
?>
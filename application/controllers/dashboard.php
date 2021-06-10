<?php

class Dashboard extends CI_Controller{
    
    public function index(){
        $this->m_squrity->getsqurity();
        $isi['content'] = 'home_view';
        $isi['judul'] = 'Dashboard';
        $this->load->view('dashboard_view',$isi);
    }
}
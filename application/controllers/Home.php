<?php

class Home extends CI_Controller{
  public function index(){
    $data['judul']='Halaman Home';
    $this->load->view('templates/home_header', $data);
    $this->load->view('templates/navbar');
    $this->load->view('home/index');
    $this->load->view('templates/home_footer');
  }
}

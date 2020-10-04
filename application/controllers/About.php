<?php

class About extends CI_Controller{
  public function index(){
    $data['judul']='Halaman About';
    $this->load->view('templates/about_header', $data);
    $this->load->view('templates/navbar');
    $this->load->view('about/page1');
    $this->load->view('templates/about_footer');
  }
}

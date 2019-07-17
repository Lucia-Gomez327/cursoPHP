<?php
class AgendaContacto extends CI_Controller {
  public function index()
  {
    redirect('practico01/login');
  }

  public function login(){
    $this->load->view('/header/header');    
    $this->load->view('/content/'); 
    $this->load->view('/footer/footer');
  }
}
?>
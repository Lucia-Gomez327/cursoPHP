<?php
class User extends CI_Controller {
    public function index()
    {
     redirect('User/login');
 }

 public function login(){
   $this->load->view('/Header/header');    
   $this->load->model('Usuario_model');
   $this->load->view('/Content/user_login'); 
   $this->load->view('/Script/script_login');
   $this->load->view('/Footer/footer');
}

public function register(){
    $this->load->view('/Header/header'); 
    $this->load->view('/Content/register');
    $this->load->view('/Script/script_register');
    $this->load->view('/Footer/footer');
}

public function logged(){
    $data = array (
        'usuario' => $this->input->post('user'),
        'password' => md5($this->input->post('passw'))
    );

    $this->load->model('Usuario_model');
    $this->Usuario_model->alta($data);
    $this->session->set_userdata($data);

    $this->load->view('/Header/header',$data);
    $this->load->view('/Content/content');
    $this->load->view('/Script/script_content');
    $this->load->view('/Footer/footer');
}



}
?>
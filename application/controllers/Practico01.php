<?php
class Practico01 extends CI_Controller {
  public function index()
  {
    redirect('practico01/login');
  }

  public function login(){
    $this->load->view('/header/header');    
    $this->load->view('/content/practico01_login'); 
    $this->load->view('/script/script_login');
    $this->load->view('/footer/footer');
  }

  public function signup(){
    $this->load->view('/header/header'); 
    $this->load->view('/content/practico01_signup');
    $this->load->view('/script/script_signup');
    $this->load->view('/footer/footer');

  }
//Envia el link al Correo
  public function validate(){
    $this->load->model('practico01_model');
    $f_name     = $this->input->post('name');
    $f_lastname = $this->input->post('lastname');
    $f_email    = $this->input->post('email');
    $f_password = md5($this->input->post('password'));

    $data = array (
      'name'     => $f_name,
      'lastname' => $f_lastname,
      'email'    => $f_email,
      'password' => md5($f_password),
      // ↓ Validación desde email 
      'validate' => 0,
      // ↓ Código único de Usuario 
      'code'     => md5(rand().$f_email.$f_password)
    );

    if ( $this->practico01_model->vUser($f_email)) {
      $this->practico01_model->alta($data); 
      $link = $this->generar_link($data['code']);
      $this->enviar_correo($f_email,$link);//ENVIO
      $this->load->view('/header/header'); 
      $this->load->view('/content/practico01_vemail');
      $this->load->view('/footer/footer');
    }else{
      redirect('Practico01/signup');
    }

  }
// ↓ Generador del link
  private function generar_link($code){
    $link = base_url().'login/confirm_email/'.$code;
    return $link;
  }

// ↓ Confirmacion desde el email
  private function confirm_email(){
    $code    = $this->uri->segment(3);
    $usuario = $this->Usuario_model->obtener_x_codigo($code);
    $data    = array(
      'validate' => 1
    );
    $this->Usuario_model->modifica($data,$usuario->id);
  }

  private function enviar_correo($email, $link){
    $this->load->library('email');
    $this->email->from('maux90@gmail.com', 'Mauricio');
    $this->email->to($email);
    $this->email->subject('Validacion de Email');
    $this->email->message('Click Here for Validate:'.$link);
    $this->email->send();
  }


  public function logged(){
    $data = array (
      'usuario' => $this->input->post('user'),
      'password' => md5($this->input->post('passw'))
    );

    $this->load->model('Usuario_model');
    $this->Usuario_model->alta($data);
    $this->session->set_userdata($data);

    $this->load->view('/header/header',$data);
    $this->load->view('/content/content');
    $this->load->view('/script/script_content');
    $this->load->view('/footer/footer');
  }



}
?>
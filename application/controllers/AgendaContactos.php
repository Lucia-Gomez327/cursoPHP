<?php
class AgendaContactos extends CI_Controller {
  public function index()
  {
    redirect('AgendaContactos/inicio');
  }

  public function inicio(){
    $this->load->model('AgendaContactos_model');    

    $this->load->view('/header/header');
    $this->load->view('/content/inicio'); 

    $data = array(
      'id' => 9,
      'email'=> 'joseguzman@hotmail.com',
      'telefono' =>12312,
      'nombre' => 'jose',
      'apellido' => 'Guzman',
      'edad' => '19',
      'DNI' => '12345673'
    );


    $this->load->view('card/contacto_card', $data);
    $this->load->view('/footer/footer');
  }
}
?>
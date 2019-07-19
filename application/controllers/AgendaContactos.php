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
      'telefono' =>"2664-8654567",
      'nombre' => 'jose',
      'apellido' => 'Guzman',
      'edad' => '19',
      'DNI' => '12345673',
      'foto' => 'http://lorempixel.com/400/400/people'
    );
    $data2 = array(
      'id' => 10,
      'email'=> 'albertogato@hotmail.com',
      'telefono' =>"3834-157854",
      'nombre' => 'alberto',
      'apellido' => 'Elgato',
      'edad' => '7',
      'DNI' => '123345567',
      'foto' => 'http://lorempixel.com/400/400/cats'
    );


    $this->load->view('card/contacto_card', $data);
    $this->load->view('card/contacto_card', $data2);
    $this->load->view('/footer/footer');
  }
}
?>
<?php
class AgendaContactos extends CI_Controller {
  public function index()
  {
    redirect('AgendaContactos/inicio');
  }

  public function inicio(){
    $this->load->model('AgendaContactos_model');    
    $this->load->view('/header/header');
    $this->load->view('/content/inicio', $this->arrContactos()); 
    $this->load->view('/content/fin');
    $this->load->view('/footer/footer');
  }

//agregar contactos
  public function agregar()
  {
    $nombre   = $this->input->post('nombre');
    $apellido = $this->input->post('apellido');
    $edad     = $this->input->post('edad');
    $email   = $this->input->post('emali');
    $telefono = $this->input->post('telefono');
    $foto =  $this->input->post('foto');

    $data = array(
      'nombre'   => $nombre,
      'apellido' => $apellido,
      'edad' => $edad,
      'email' => $email,
      'telefono' => $telefono,
      'foto' => $foto  
    );

    $consulta = $this->AgendaContactos_model->buscar_x_email($data->email);
    if(!$consulta){
     //alta
      $this->agenda_model->agregar($data);
      return true;
    }
    else
    {
      return true;
    }
  }

  //baja
  public function baja($email)
  {
      $nombre = $this->AgendaContactos_model->baja_x_mail($email);
      redirect('inicio');

  } 

//editar o modificar un contacto
public function modificar ()
{
    $nombre   = $this->input->post('nombre');
    $apellido = $this->input->post('apellido');
    $edad     = $this->input->post('edad');
    $email   = $this->input->post('emali');
    $telefono = $this->input->post('telefono');
    $foto =  $this->input->post('foto');

    $data = array(
      'nombre'   => $nombre,
      'apellido' => $apellido,
      'edad' => $edad,
      'email' => $email,
      'telefono' => $telefono,
      'foto' => $foto  
    );

$consulta = $this->AgendaContactos_model->buscar_x_email($data->email);
    if(!$consulta){
     //alta
      $this->AgendaContactos_model->modifica($data);
      return true;
    }
    else
    {
      return true;
    }
}

//buscar contactos
  public function otenerContacto(){

$nombre = $this->input->post('buscar');
// ↓ Arreglo de contactos
    $contactos = $this->AgendaContactos_model->obtener_x_nombre($nombre);
    $lista ='';
    foreach($contactos as $contacto)
    {
     $lista.= $this->load->view('card/contacto_card',$contacto,true);
   }
   $data = array(
    'contactos'=> $lista
  );
   return $data;
 }



//listar todos los contactos
  public function arrContactos(){

// ↓ Arreglo de contactos
    $contactos = $this->AgendaContactos_model->listaContactos();
    $lista ='';
    foreach($contactos as $contacto)
    {
     $lista.= $this->load->view('card/contacto_card',$contacto,true);
   }
   $data = array(
    'contactos'=> $lista
  );
   return $data;
 }
}
?>
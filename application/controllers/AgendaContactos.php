<?php
class AgendaContactos extends CI_Controller {
  public function index()
  {

     redirect('AgendaContactos/inicio');
 }

 public function inicio(){
    $this->load->model('AgendaContactos_model');    
    $this->load->view('/header/header');
    $this->load->view('/content/inicio', $this->listarContactos()); 
    $this->load->view('/content/fin');
    $this->load->view('/footer/footer');
}

//agregar contactos
public function agregar()
{
    $this->load->model('AgendaContactos_model'); 

    $nombre   = $this->input->post('nombre');
    $apellido = $this->input->post('apellido');
    $fechaN    = $this->input->post('fechaN');
    $DNI = $this->input->post('DNI');
    $email   = $this->input->post('email');
    $telefono = $this->input->post('telefono');

    $R = rand(1,20);
    $foto = " http://lorempixel.com/".$R."00/".$R."00/";
    //$this->upload($this->db->insert_id());

    $data = array(
      'nombre'   => $nombre,
      'apellido' => $apellido,
      'DNI' => $DNI,
      'fechaN' => $fechaN,
      'email' => $email,
      'telefono' => $telefono,
      'foto' => $foto  
  );
    //Validacion de Email Unico
    if(!$this->AgendaContactos_model->obtener_x_email($email)){
     //alta
      $this->AgendaContactos_model->agregar($data);
      redirect('AgendaContactos/inicio');
  }
  else
  {
      return false;
  }
}

  //baja
public function baja($email)
{
    $nombre = $this->AgendaContactos_model->baja_x_mail($email);
    redirect('AgendaContactos/inicio');


} 

//editar o modificar un contacto
public function modificar ()
{
    $nombre   = $this->input->post('nombre');
    $apellido = $this->input->post('apellido');
    $DNI = $this->input->post('DNI');
    $fechaN    = $this->input->post('fechaN');
    $email   = $this->input->post('email');
    $telefono = $this->input->post('telefono');
    $foto =  $this->input->post('foto');

    $data = array(
      'nombre'   => $nombre,
      'apellido' => $apellido,
      'DNI' => $DNI,
      'fechaN' => $fechaN,
      'email' => $email,
      'telefono' => $telefono,
      'foto' => $foto  
  );


    $consulta = $this->AgendaContactos_model->buscar_x_email($data->email);

    $consulta = $this->AgendaContactos_model->buscar_x_email($email);

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
    $contactos = $this->AgendaContactos_model->obtener_x_nombre($nombre);
    $lista ='';
    foreach($contactos as $contacto)
    {
      $lista.= $this->load->view('inicio',$contacto,true);
  }
  $data = array(
      'contactos'=> $lista
  );
  return $data;
}




//listar todos los contactos
public function listarContactos(){

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

public function upload($id){//si existe el erchivo
  //  print_r($_FILES);
    $confing = array();
    if($_FILES['foto']['name']) {
        $config['file_name'] = 'nombre';
        $config['upload_path'] = './db/img/';
 //   $config['quality'] = '80';
  //  $config['allowed_type'] = 'gif|jpg|png|jpeg';
   // $config['max_size'] = '9000'; 

  //  $config['overwrite'] = true;

        $this->load->library('upload', $config);
        $result = $this->upload->do_upload('foto');
    //print_r($result);
        print_r( $this->upload->data());
        exit;
    }
}
}   
?>
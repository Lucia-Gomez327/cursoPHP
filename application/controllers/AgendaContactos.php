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
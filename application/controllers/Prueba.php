<?php
class Prueba extends CI_Controller {
  public function index() {

   $this->load->view('prueba');
 }
 
 public function Inicio(){
  $data = array(
    'nombre' => 'ZZZZZ',
    'telefono' => '12345678'
  );

  $this->db->insert('contacto', $data);
  $index = $this->db->insert_id();
  echo $index;
  $foto = $this->upload($index);

  print_r($foto);
}



public function upload($id)
{
  if ($_FILES['imagen']['name'])
  {
    $config['file_name']    = 'imagen_'.$id;
    $config['upload_path']    = './upload/';
    $config['quality']      = '70%';
    $config['allowed_types']  = 'gif|jpg|png';
    //  $config['max_size']     = '9000';
    $config['overwrite']    = TRUE;

    $this->load->library('upload', $config);
    $this->upload->do_upload('imagen');
    return $this->upload->data();
  }
}

} 
?>
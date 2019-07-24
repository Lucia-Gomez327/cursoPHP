<?php
class AgendaContactos extends CI_Controller {
  public function index() {

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
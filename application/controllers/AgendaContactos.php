<?php
class AgendaContactos extends CI_Controller {
    public function index(){
        redirect('AgendaContactos/inicio');
    }

    public function inicio(){
        $this->load->model('AgendaContactos_model');    
        $this->load->view('/header/header');
        $this->load->view('/content/inicio', $this->listarContactos()); 
        $this->load->view('/content/fin');
        $this->load->view('/footer/footer');
    }


    public function agregar(){
        $this->load->model('AgendaContactos_model'); 
        $nombre   = $this->input->post('nombre');
        $apellido = $this->input->post('apellido');
        $fechaN   = $this->input->post('fechaN');
        $DNI      = $this->input->post('DNI');
        $email    = $this->input->post('email');
        $telefono = $this->input->post('telefono');

        $data = array(
            'nombre'   => $nombre,
            'apellido' => $apellido,
            'DNI'      => $DNI,
            'fechaN'   => $fechaN,
            'email'    => $email,
            'telefono' => $telefono
        );

        //Validacion de Email Unico
        if(!$this->AgendaContactos_model->obtener_x_email($email)){
            $this->AgendaContactos_model->agregar($data);

            //Upload de Imagen
            $img = array(
                'id'=> $this->db->insert_id(),
                'foto' => $this->upload_img($this->db->insert_id())
            );
            $this->AgendaContactos_model->modificar($img);

            redirect('AgendaContactos/inicio');
        } else {
            return false;
        }
    }

    public function baja($email){
        $nombre = $this->AgendaContactos_model->baja_x_mail($email);
        redirect('AgendaContactos/inicio');
    } 
    public function modificar (){
        $nombre   = $this->input->post('nombre');
        $apellido = $this->input->post('apellido');
        $DNI      = $this->input->post('DNI');
        $fechaN   = $this->input->post('fechaN');
        $email    = $this->input->post('email');
        $telefono = $this->input->post('telefono');
        $foto     = $this->input->post('foto');

        $data = array(
            'nombre'   => $nombre,
            'apellido' => $apellido,
            'DNI'      => $DNI,
            'fechaN'   => $fechaN,
            'email'    => $email,
            'telefono' => $telefono,
            'foto'     => $foto  
        );

        $consulta = $this->AgendaContactos_model->buscar_x_email($data->email);
        $consulta = $this->AgendaContactos_model->buscar_x_email($email);

        if(!$consulta){
            $this->AgendaContactos_model->modifica($data);
            return true;
        } else{
            return false;
        }
    }


    public function otenerContacto(){
        $nombre    = $this->input->post('buscar');
        $contactos = $this->AgendaContactos_model->obtener_x_nombre($nombre);
        $lista     ='';
        foreach($contactos as $contacto){
            $lista.= $this->load->view('inicio',$contacto,true);
        }
        $data = array(
            'contactos'=> $lista
        );
        return $data;
    }





    public function listarContactos(){
        $contactos = $this->AgendaContactos_model->listaContactos();
        $lista     ='';
        foreach($contactos as $contacto){
            $lista.= $this->load->view('card/contacto_card',$contacto,true);
        }
        $data = array(
            'contactos'=> $lista
        );
        return $data;
    }

    public function upload_img($id){
        if($_FILES['foto']['name']) {
          $config['file_name']    = $id;
          $config['upload_path']    = './db/img/';
          $config['quality']      = '70%';
          $config['allowed_types']  = 'gif|jpg|png';
          //  $config['max_size']     = '9000';
          $config['overwrite']    = TRUE;

            $this->load->library('upload', $config);
             $this->upload->do_upload('foto');
            return  $this->upload->data('full_path');
        }
    }

}   
?>
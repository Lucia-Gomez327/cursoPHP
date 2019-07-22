<?php
class AgendaContactos_model extends CI_Model
{
    public function _contruct()
    {
        parent::_coontruct();
    }
//agregar un contacto
    public function agregar($data){
        return $this->db->insert('contacto',$data);      
    }
 //editar un contacto   
    public function modifica($data){
        $this->db->select('contacto.*');
        $this->db->where('contacto.email',$data->email);
        return $this->db->update('contacto',$data);     
    }
//eliminacion
    public function baja_x_email($email){
        $this->db->select('contacto.*');
        $this->db->from('contacto');    
        $this->db->where('contacto.email',$email);
        $this->db->update('contacto.estado',2);     
    }

    
//lista de todos los contactos
    public function listaContactos(){

        $this->db->select('contacto.*');
        $this->db->from('contacto');
        $this->db->where('contacto.estado',1)
        $query = $this->db->get();
        return $query->result();
    }

    public function Busqueda($busqueda){

        $RE=
        $this->db->select('contacto.*');
        $this->db->from('contacto');
        $this->db->where('contacto.nombre REGEXP')

    }





//listar o buscar por nombre
    public function obtener_x_nombre($nombre)
    {
        $this->db->select('contacto.*');
        $this->db->from('contacto');
        $this->db->where('contaco.nombre', $nombre);
<<<<<<< HEAD
        $this->db->and_where('contaco.estado', 1);

        $consulta = $this->db->get();           
=======
>>>>>>> 6c6fd3c3ff0a47f4af3c4db02e30e367eb181b2d
        return $consulta->result();
    }



    public function obtener_x_email($email)
    {
        $this->db->select('contacto.*');
        $this->db->from('contacto');
        $this->db->where('contacto.email', $email);
        $this->db->and_where('contaco.estado', 1);
        $consulta = $this->db->get();           
        return $consulta->result();
    }
}

?>
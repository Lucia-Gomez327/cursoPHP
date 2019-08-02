<?php
class Agendacontactos_model extends CI_Model
{
    public function _contruct()
    {
        parent::_coontruct();
    }

    public function agregar($data){
        return $this->db->insert('contacto',$data);      
    }
 
    public function modificar($data){
        $this->db->select('contacto.*');
        $this->db->where('contacto.id',$data['id']);
        return $this->db->update('contacto',$data);     
    }

    public function baja($data){
        $this->db->select('contacto.*');
        $this->db->from('contacto');    
        $this->db->where('contacto.id',$data['id']);
       return $this->db->update('contacto.estado',2);     
    }

    public function listaContactos(){
        $this->db->select('contacto.*');
        $this->db->from('contacto');
        $this->db->where('contacto.estado',1);
        $this->db->order_by("contacto.nombre asc , contacto.apellido asc");

        $query = $this->db->get();
        return $query->result();
    }

    public function Busqueda($busqueda){

        $this->db->select('contacto.*');
        $this->db->from('contacto');
        $this->db->where('');

        $RE= '.*'.$busqueda.'.*';
        $this->db->select('contacto.*');
        $this->db->from('contacto');
        $this->db->where("contacto.nombre REGEXP $RE");
        $this->db->or_where("contacto.apellido REGEXP $RE");
        $this->db->or_where("contacto.telefono REGEXP $RE");
        $this->db->order_by("contacto.nombre asc , contacto.apellido asc");

        $consulta = $this->db->get();     
        return $consulta->result();
    }

    public function buscar_x_nombre($nombre){
        $this->db->select('contacto.*');
        $this->db->from('contacto');
        $this->db->where('contaco.nombre', $nombre);
        $this->db->where('contaco.estado', 1);

        $consulta = $this->db->get();           
        return $consulta->result();
    }


    public function buscar_x_email($email){
        $this->db->select('contacto.*');
        $this->db->from('contacto');
        $this->db->where('contacto.email', $email);
        $this->db->where('contacto.estado', 1);
        
        $consulta = $this->db->get();           
        return $consulta->result();
    }
}

?>
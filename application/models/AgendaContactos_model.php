<?php
class AgendaContactos_model extends CI_Model
{
    public function _contruct()
    {
        parent::_coontruct();
    }

    public function alta($data){
        return $this->db->insert('contacto',$data);      
    }
    
    public function modifica($data,$id){
        $this->db->select('contacto.*');
        $this->db->where('contacto.id',$id);
        return $this->db->update('contacto',$data);     
    }

    public function baja_x_id($id){
        $this->db->select('contacto.*');
        $this->db->from('contacto');    
        $this->db->where('contacto.id',$id);
        $this->db->update('contacto.estado',2);     
    }

    public function listaContactos(){

        $this->db->select('contacto.*');
        $this->db->from('contacto');
        $query = $this->db->get();
        return $query->result();
    }

    public function obtener_x_nombre($nombre)
    {
        $this->db->select('contacto.*');
        $this->db->from('contacto');
        $this->where('contaco.nombre', $nombre);
        $consulta = $this->db->get();           
        return $consulta->result();
    }
}

?>
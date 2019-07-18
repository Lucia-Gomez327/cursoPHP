<?php
class AgendaContacto_model extends CI_Model
{
    public function _contruct()
    {
        parent::_coontruct();
    }
    
    public function alta($data){
        return $this->db->insert('usuario',$data);      
    }
    
    public function modifica($data,$id){
        $this->db->where('usuario.id',$id);
        return $this->db->update('usuario',$data);     
    }

//Get Usuario
     public function buscar($data){    
        $this->db->select('contacto.id, contacto.nombre');
        $this->db->from('contacto');    
        $this->db->where('contacto.id',$data or 'contacto.nombre',$data);
        $consulta = $this->db->get();           
        return $consulta->row();
    }

}

?>
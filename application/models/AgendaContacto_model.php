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
    public function obtener($id){    
        $this->db->select('usuario.*');
        $this->db->from('usuario');    
        $this->db->where('usuario.id',$id);
        $consulta = $this->db->get();           
        return $consulta->row();
    }

}

?>
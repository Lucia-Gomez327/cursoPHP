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
 /*   

//Get Usuario
    public function obtener($id){    
        $this->db->select('usuario.*');
        $this->db->from('usuario');    
        $this->db->where('usuario.id',$id);
        $consulta = $this->db->get();           
        return $consulta->row();
    }
*/

    public function baja_x_id($id){
        $this->db->select('contacto.*');
        $this->db->from('contacto');    
        $this->db->where('contacto.id',$id);
        $consulta = $this->db->get();           
        return $consulta->row();
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

    }   

}

?>
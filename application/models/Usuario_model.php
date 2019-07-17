<?php
class Usuario_model extends CI_Model
{
    public function _contruct()
    {parent::_coontruct();

    }
    //usuarios es la tabla, segundo parametro dato a ingresar
    public function alta($data){
        return $this->db->insert('usuarios',$data);      
    }
    
    public function modifica($data,$id){
       $this->db->where('usuarios.id',$id);
       return $this->db->update('usuarios',$data);     
   }

   public function logear($data){
    $this->db->select('usuarios.*');
    $this->db->from('usuarios');    
    $this->db->where('usuarios.usuario',$data['usuario']);
    $query = $this->db->get();           
    return $query->row();
    if($query->num_rows()> 0) {
        return true;
    }else{
        return false;
    }
}

public function obtener($id){    
    $this->db->select('usuarios.*');
    $this->db->from('usuarios');    
    $this->db->where('usuarios.id',$id);
    $consulta = $this->db->get();           
    return $consulta->row();
}
}

?>
<?php
class Practico01_model extends CI_Model
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

// ↓ Control de cuentas duplicadas
    public function vUser($email){
        $this->db->select('usuario.email');
        $this->db->from('usuario');
        $this->db->where('usuario.email', $email);
        $query =   $this->db->get();
        if($query->num_rows() > 0) {
            return false;
        }else{
            return true;
        }
    }

    public function logear($data){
        $this->db->select('usuario.*');
        $this->db->from('usuario');    
        $this->db->where('usuario.usuario',$data['usuario']);
        $query = $this->db->get();           
        return $query->row();
        if($query->num_rows()> 0) {
            return true;
        }else{
            return false;
        }
    }
//Get Usuario
    public function obtener($id){    
        $this->db->select('usuario.*');
        $this->db->from('usuario');    
        $this->db->where('usuario.id',$id);
        $consulta = $this->db->get();           
        return $consulta->row();
    }
    
    public function obtener_x_codigo($code){
        $this->db->select('usuario.*');
        $this->db->from('usuario');    
        $this->db->where('usuario.code',$code);
        $consulta = $this->db->get();           
        return $consulta->row();
    }

}

?>
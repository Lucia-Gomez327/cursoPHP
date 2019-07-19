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
       $result =mysqli_query("SELECT * FROM contacto");
      //  $data   =array();
       if(mysql_num_rows($result) > 0){
        while($row = mysql_fetch_assoc($result)){
            echo $row['id'];
          //$data[] = $row;
        }
    }
}
}

?>
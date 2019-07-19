<?php
class AgendaContactos_model extends CI_Model
{
    public function _contruct()
    {
        parent::_coontruct();
    }
 /*   
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
*/
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

public function obtener_x_nombre($nombre)
{
$this->db->select('contacto.*');
$this->db->from('contacto');
$this->where('contaco.nombre', $nombre);

$consulta = $this->db->get();

}
}

?>
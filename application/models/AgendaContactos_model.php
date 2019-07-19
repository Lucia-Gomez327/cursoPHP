<?php
class AgendaContactos_model extends CI_Model
{
    public function _contruct()
    {
        parent::_coontruct();
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

public function obtener_x_nombre($nombre)
{
$this->db->select('contacto.*');
$this->db->from('contacto');
$this->where('contaco.nombre', $nombre);
}
}

?>
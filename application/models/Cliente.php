<?php 
class Cliente extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function InsertarCli($datos){
        return $this->db->insert("clientes",$datos);

    }
    function verCli(){
        $listaCli = $this->db->get("clientes");
        if ($listaCli->num_rows()>0) {
            return $listaCli->result();
        } else {
            return false;
        }
        
    }
    function borrar($id_cli){
        $this->db->where("id_cli",$id_cli);
        if ($this->db->delete("clientes")) {
            return true;
        } else {
            return false;
        }
        
    }


}



?>
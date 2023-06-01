<?php 
class Empleado extends CI_Model{

    function __construct(){

        parent::__construct();
    }
    public function IngresarEmpleado($datos){
        return $this->db->insert("empleados",$datos);
    }
    public function ObtenerEmp(){
        $listaEmp = $this->db->get("empleados");
        if ($listaEmp->num_rows()>0) {
            return $listaEmp->result();
        } else {
            return false;
        }

        
    }
    function borrar($id_emp){
        $this->db->where("id_emp",$id_emp);
        if ($this->db->delete("empleados")) {
            return true;
        } else {
            return false;
        }
        
    }
}





?>
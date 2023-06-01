<?php 
class Empleados extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Empleado');
    }
    public function index(){
        $data['empleado']=$this->Empleado->ObtenerEmp();
        $this->load->view('header');
        $this->load->view('empleados/index',$data);
        $this->load->view('footer');
    }
    public function nuevo(){
        $this->load->view('header');
        $this->load->view('empleados/nuevo');
        $this->load->view('footer');
    }
    public function guardarEmpleados(){
        $listadoEnpleados = array(
            "cedula_emp"=>$this->input->post('cedula_emp'),
            "primer_apellido_emp"=>$this->input->post('primer_apellido_emp'),
            "segundo_apellido_emp"=>$this->input->post('segundo_apellido_emp'),
            "cargo_emp"=>$this->input->post('cargo_emp'),
            "fecha_nacimiento_emp"=>$this->input->post('fecha_nacimiento_emp'),
            "correo_emp"=>$this->input->post('correo_emp'),
        ); 
        if ($this->Empleado->IngresarEmpleado($listadoEnpleados)) {
            redirect("Empleados/index");
        } else {
            echo "no se pudo";
        }
        

    }
    public function Eliminar($id_emp){
        if ($this->Empleado->borrar($id_emp)) {
            redirect("Empleados/index");
        } else {
            echo "no se pudo eliminar";
        }
        
    }

}



?>
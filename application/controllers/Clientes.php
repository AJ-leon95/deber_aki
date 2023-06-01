<?php 
class Clientes extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Cliente');
    }
    public function index(){
        $data['cliente']= $this->Cliente->verCli();
        $this->load->view('header');
        $this->load->view('/clientes/index',$data);
        $this->load->view('footer');
    }
    public function nuevo(){

        $this->load->view('header');
        $this->load->view('/clientes/nuevo');
        $this->load->view('footer');
    }
    public function guardarCli(){
        $listadoCli = array(
            "primer_apellido_cli"=>$this->input->post('primer_apellido_cli'),
            "segundo_apellido_cli"=>$this->input->post('segundo_apellido_cli'),
            "nombres_cli"=>$this->input->post('nombres_cli'),
            "fecha_nacimiento_cli"=>$this->input->post('fecha_nacimiento_cli'),
            "cedula"=>$this->input->post('cedula'),
            "saldo_cli"=>$this->input->post('saldo_cli'),
            "cuidad_cli"=>$this->input->post('cuidad_cli'),
        );
        if ($this->Cliente->InsertarCli($listadoCli)) {
            redirect("Clientes/index");
        } else {
            echo "no se pudo";
        }
        
    }
    public function Eiminar($id_cli){
        if ($this->Cliente->borrar($id_cli)) {
            redirect("Clientes/index");
        } else {
            echo "no se pudo eliminar";
        }
        
    }
}



?>
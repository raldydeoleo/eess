<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
 */
class Proveedor extends BS_Controller {


    public function __construct() {
        parent::__construct();
        //$this->cargarLibrerias();
        $this->load->model('proveedor_model');
    }

    //funcion para procesar el formulario
    function insertar_proveedor()
    {

        if($this->input->post('submit'))
        {   $cnombre_proveedor = $this->input->post('cnombre_proveedor');
            $capellido_proveedor = $this->input->post('capellido_proveedor');
            $cdireccion_proveedor = $this->input->post('cdireccion_proveedor');
            $cciudad_proveedor = $this->input->post('cciudad_proveedor');
            $ctelefono_proveedor = $this->input->post('ctelefono_proveedor');
            $cemail_proveedor = $this->input->post('cemail_proveedor');
            $cedula_proveedor = $this->input->post('cedula_proveedor');
            $empresa_proveedor = $this->input->post('empresa_proveedor');
            $rnc_proveedor = $this->input->post('rnc_proveedor');
            $edireccion_proveedor = $this->input->post('edireccion_proveedor');
            $eciudad_proveedor = $this->input->post('eciudad_proveedor');
            $etelefono1_proveedor = $this->input->post('etelefono1_proveedor');
            $etelefono2_proveedor = $this->input->post('etelefono2_proveedor');
            $eemail1_proveedor = $this->input->post('eemail1_proveedor');
            $eemail2_proveedor = $this->input->post('eemail2_proveedor');
            $banco1_proveedor = $this->input->post('banco1_proveedor');
            $banco2_proveedor = $this->input->post('banco2_proveedor');
            $banco3_proveedor= $this->input->post('banco3_proveedor');
            $cuenta1_proveedor= $this->input->post('cuenta1_proveedor');
            $cuenta2_proveedor= $this->input->post('cuenta2_proveedor');
            $cuenta3_proveedor= $this->input->post('cuenta3_proveedor');
            $tipocuenta1_proveedor= $this->input->post('tipocuenta1_proveedor');
            $tipocuenta2_proveedor= $this->input->post('tipocuenta2_proveedor');
            $tipocuenta3_proveedor= $this->input->post('tipocuenta3_proveedor');

            //ahora procesamos los datos hacía el modelo que debemos crear

            $nueva_insercion = $this->proveedores_model->nuevo_proveedor(
            $cnombre_proveedor,
            $capellido_proveedor,
            $cdireccion_proveedor,
            $cciudad_proveedor,
            $ctelefono_proveedor,
            $cemail_proveedor,
            $cedula_proveedor,
            $empresa_proveedor,
            $rnc_proveedor,
            $edireccion_proveedor,
            $eciudad_proveedor,
            $etelefono1_proveedor,
            $etelefono2_proveedor,
            $eemail1_proveedor,
            $eemail2_proveedor,
            $banco1_proveedor,
            $banco2_proveedor,
            $banco3_proveedor,
            $cuenta1_proveedor,
            $cuenta2_proveedor,
            $cuenta3_proveedor,
            $tipocuenta1_proveedor,
            $tipocuenta2_proveedor,
            $tipocuenta3_proveedor

            );
            redirect(base_url("proveedores"), "refresh");
        }

        else
        {

        }
    }

    public function guardar($id_proveedor=null){
        $data = array();
        $this->load->model('proveedores_model');
        if($id_proveedor){
            $proveedor = $this->proveedores_model->obtener_por_id($id_proveedor);
            $data['$id_proveedor'] = $proveedor->id_proveedor;
            $data['cnombre_proveedor'] = $proveedor->cnombre_proveedor;
            $data['capellido_proveedor'] = $proveedor->capellido_proveedor;
            $data['empresa_proveedor'] = $proveedor->empresa_proveedor;
            $data['rnc_proveedor'] = $proveedor->rnc_proveedor;
            $data['cdireccion_proveedor'] = $proveedor->cdireccion_proveedor;
            $data['cciudad_proveedor'] = $proveedor->cciudad_proveedor;
            $data['ctelefono_proveedor'] = $proveedor->ctelefono_proveedor;
            $data['cemail_proveedor'] = $proveedor->cemail_proveedor;

        }else{
            $data['id_proveedor']=null;
            $data['cnombre_proveedor']=null;
            $data['capellido_proveedor']=null;
            $data['empresa_proveedor']=null;
            $data['rnc_proveedor']=null;
            $data['cdireccion_proveedor']=null;
            $data['cciudad_proveedor']=null;
            $data['ctelefono_proveedor']=null;
            $data['cemail_proveedor']=null;

        }
        //$this->asignarDatosVista('data', $data);
        $this->load->view('panel/secretaria/editarProveedor', $data );

    }

    public function editar(){

            $cnombre_proveedor = $this->input->post('cnombre_proveedor');
            $capellido_proveedor = $this->input->post('capellido_proveedor');
            $empresa_proveedor = $this->input->post('empresa_proveedor');
            $rnc_proveedor = $this->input->post('rnc_proveedor');
            $cdireccion_proveedor = $this->input->post('cdireccion_proveedor');
            $cciudad_proveedor = $this->input->post('cciudad_proveedor');
            $ctelefono_proveedor = $this->input->post('ctelefono_proveedor');
            $cemail_proveedor = $this->input->post('cemail_proveedor');

            $editar = $this->proveedor_model->guardar($cnombre_proveedor,
                                                    $capellido_proveedor,
                                                    $empresa_proveedor,
                                                    $rnc_proveedor,
                                                    $cdireccion_proveedor,
                                                    $cciudad_proveedor,
                                                    $ctelefono_proveedor,
                                                    $cemail_proveedor);

        redirect(base_url("proveedores"), "refresh");
    }


    public function nuevo_proveedor()
    {
        $this->mostrarVista('panel/secretaria/proveedorform');
    }


    public function index() {
        $this->load->model('proveedor_model');
        $proveedores = $this->proveedor_model->obtener_todos();
        $this->asignarDatosVista('proveedores', $proveedores);
        $this->mostrarVista('panel/secretaria/listadoProveedores');
    }


    public function ver($id_proveedor){
        $data = array();
        $this->load->model('proveedor_model');
        $proveedor = $this->proveedor_model->obtener_por_id($id_proveedor);
        $data['proveedor'] = $proveedor;
        $this->asignarDatosVista('proveedor', $proveedor);
        $this->mostrarVista('panel/secretaria/verProveedor');

    }

    public function eliminar($id_proveedor){
        $this->load->model('proveedor_model');
        $this->proveedor_model->eliminar($id_proveedor);
        redirect(base_url("proveedores"), "refresh");
    }

} /* application/controllers/Proveedor.php  */
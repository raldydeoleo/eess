<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Estudiantes extends BS_Controller {
    public function __construct() {
        parent::__construct();
       // $this->load->library('form_validation');
    }

    public function index() {
        $this->load->model('proveedores_model');
        $proveedores = $this->proveedores_model->obtener_todos();
        $this->asignarDatosVista('proveedores', $proveedores);
        $this->mostrarVista('panel/secretaria/seguimientoProveedores');
            }

    public function ver($id_estudiante){
        $data = array();
        $this->load->model('estudiantes_model');
        $estudiante = $this->estudiantes_model->obtener_por_id($id_estudiante);
        $data['estudiante'] = $estudiante;
        $this->load->view('estudiantes/header');
        $this->load->view('estudiantes/ver', $data);
       // $this->load->view('templates/footer');
    }
    public function guardar($id_proveedor){
        $data = array();
        $this->load->model('proveedores_model');
        if($id_proveedor){
            $proveedor = $this->proveedores_model->obtener_por_id($id_proveedor);
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
       // $this->asignarDatosVista('proveedores', $data);
       // $this->mostrarVista('panel/secretaria/editarProveedor');
        $this->load->view('panel/secretaria/editarProveedor', $data);
        //$this->load->view('templates/footer');
    }
    public function guardar_post($id_proveedor){
        if($this->input->post()){
            $cnombre_proveedor = $this->input->post('cnombre_proveedor');
            $capellido_proveedor = $this->input->post('capellido_proveedor');
            $empresa_proveedor = $this->input->post('empresa_proveedor');
            $rnc_proveedor = $this->input->post('rnc_proveedor');
            $cdireccion_proveedor = $this->input->post('cdireccion_proveedor');
            $cciudad_proveedor = $this->input->post('cciudad_proveedor');
            $ctelefono_proveedor = $this->input->post('ctelefono_proveedor');
            $cemail_proveedor = $this->input->post('cemail_proveedor');

            $this->load->model('proveedores_model');
            $this->proveedores_model->actualizar($cnombre_proveedor,
                                                $capellido_proveedor,
                                                $cdireccion_proveedor,
                                                $cciudad_proveedor,
                                                $ctelefono_proveedor,
                                                $ctelefono_proveedor,
                                                $cemail_proveedor);
                                                //$cedula_proveedor,
                                                //$empresa_proveedor,
                                                //$rnc_proveedor,
                                                //$edireccion_proveedor,
                                                //$eciudad_proveedor,
                                                // $etelefono1_proveedor,
                //                              $etelefono2_proveedor,
                //                              $eemail1_proveedor,
                //                              $eemail2_proveedor,
                //                              $banco1_proveedor,
                //                              $banco2_proveedor,
                //                              $banco3_proveedor,
                //                              $cuenta1_proveedor,
                //                              $cuenta2_proveedor,
                //                              $cuenta3_proveedor,
                //                              $tipocuenta1_proveedor,
                //                              $tipocuenta2_proveedor,
                  //                              $tipocuenta3_proveedor);

        }else{
            $this->guardar();

            }
    }
    public function eliminar($id_estudiante){
        $this->load->model('estudiantes_model');
        $this->estudiantes_model->eliminar($id_estudiante);
        redirect('estudiantes');
    }




}
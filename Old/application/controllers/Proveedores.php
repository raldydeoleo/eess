<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
 */
class Proveedores extends BS_Controller {


    public function __construct() {
        parent::__construct();
        $this->cargarLibrerias();
        $this->load->model('proveedores_model');
    }

    protected function cargarLibrerias(){
        $this->load->model(CLIENTE_MODELO);
        $this->load->model(VEHICULO_MODELO);

    }


    //funcion para procesar el formulario
    function insertar_proveedor()
    {

        if($this->input->post('submit'))
        {   $nombre_proveedor = $this->input->post('nombre_proveedor');
            $apellido_proveedor = $this->input->post('apellido_proveedor');
            $empresa_proveedor = $this->input->post('empresa_proveedor');
            $rnc_proveedor = $this->input->post('rnc_proveedor');
            $direccion_proveedor = $this->input->post('direccion_proveedor');
            $ciudad_proveedor = $this->input->post('ciudad_proveedor');
            $telefono_proveedor = $this->input->post('telefono_proveedor');
            $email_proveedor = $this->input->post('email_proveedor');


            //ahora procesamos los datos hacía el modelo que debemos crear

            $nueva_insercion = $this->proveedores_model->nuevo_proveedor(
            $nombre_proveedor,
            $apellido_proveedor,
            $empresa_proveedor,
            $rnc_proveedor,
            $direccion_proveedor,
            $ciudad_proveedor,
            $telefono_proveedor,
            $email_proveedor
            );
            redirect(base_url("proveedores"), "refresh");
        }

        else
        {

        }
    }



    public function nuevo_proveedor()
    {
        $this->mostrarVista('panel/secretaria/proveedorform');
    }


    public function index() {
        $this->load->model('proveedores_model');
        $proveedores = $this->proveedores_model->obtener_todos();
        $this->asignarDatosVista('proveedores', $proveedores);
        $this->mostrarVista('panel/secretaria/seguimientoProveedores');
    }


    public function ver($id_proveedor){
        $data = array();
        $this->load->model('proveedores_model');
        $proveedor = $this->proveedores_model->obtener_por_id($id_proveedor);
        $data['proveedor'] = $proveedor;
        $this->asignarDatosVista('proveedor', $proveedor);
        $this->mostrarVista('panel/secretaria/verProveedor');

    }

    public function eliminar($id_proveedor){
        $this->load->model('proveedores_model');
        $this->proveedores_model->eliminar($id_proveedor);
        redirect(base_url("proveedores"), "refresh");
    }


     /**
     * @author: Raldy De Oleo
     * Lista de todos los proveedores
     * Vista grupal
     * Muestra un listado de proveedores
     */
    public function seguimientoProveedores(){
        $this->load->model('proveedores_model');
        $proveedores = $this->proveedores_model->obtener_todos();
        $this->asignarDatosVista('proveedores', $proveedores);
        $this->mostrarVista('panel/secretaria/seguimientoProveedores');
    }

}
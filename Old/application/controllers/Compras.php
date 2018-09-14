<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 *
 */

class Compras extends BS_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('compras_model');
        // $this->load->library('form_validation');
    }

    //funcion para procesar el formulario
    function insertar_compra()
    {

        if($this->input->post('submit'))
        {   $fecha_compra = $this->input->post('fecha_compra');
            $vencimiento_compra = $this->input->post('vencimiento_compra');
            $hora_compra = $this->input->post('hora_compra');
            $cantidad_compra = $this->input->post('cantidad_compra');
            $desc_compra = $this->input->post('desc_compra');
            $unidad_compra = $this->input->post('unidad_compra');
            $precio_compra = $this->input->post('precio_compra');

            //conseguimos la hora de nuestro país, en mi caso españa
            date_default_timezone_set("Europe/Madrid");
            $fecha = date('d-m-Y');
            $hora= date("H:i:s");
            //ahora procesamos los datos hacía el modelo que debemos crear
            $nueva_insercion = $this->compras_model->nueva_compra(
                $fecha_compra,
                $vencimiento_compra,
                $hora_compra,
                $cantidad_compra,
                $desc_compra,
                $unidad_compra,
                $precio_compra
            );
            redirect(base_url("compras"), "refresh");
        }

        else
        {

        }
    }

    function insertar_ordencompra()
    {

        if($this->input->post('submit'))
        {   $fecha_ordencompra = $this->input->post('fecha_ordencompra');
            $desc_ordencompra = $this->input->post('desc_ordencompra');
            $monto_ordencompra = $this->input->post('monto_ordencompra');


            //conseguimos la hora de nuestro país, en mi caso españa
            date_default_timezone_set("Europe/Madrid");
            $fecha = date('d-m-Y');
            $hora= date("H:i:s");
            //ahora procesamos los datos hacía el modelo que debemos crear
            $nueva_insercion = $this->compras_model->nueva_ordencompra(
                $fecha_ordencompra,
                $desc_ordencompra,
                $monto_ordencompra
            );
            redirect(base_url("compras"), "refresh");
        }

        else
        {

        }
    }
    public function nueva_ordencompra()
    {   //$this->load->model('proveedores_model');
        //$proveedores = $this->proveedores_model->obtener_todos();
        $this->mostrarVista('panel/asesor/ordencompraform');
    }



    public function nueva_compra()
    {   $this->load->model('proveedores_model');
        $proveedores = $this->proveedores_model->obtener_todos();
        $this->mostrarVista('panel/asesor/compraform', $proveedores);
    }




    public function index() {
        $this->load->model('compras_model');
        //$this->inicializarGestorBasico(VEHICULO_MODELO);
        //$vehiculos = $this->vehiculoGestor->vehiculos(100, 0);
        $compras = $this->compras_model->obtener_todos();
        $this->asignarDatosVista('compras', $compras);
        $this->mostrarVista('panel/asesor/listaCompras');
    }

    public function listaordenescompra() {
        $this->load->model('compras_model');
        //$this->inicializarGestorBasico(VEHICULO_MODELO);
        //$vehiculos = $this->vehiculoGestor->vehiculos(100, 0);
        $ordenescompras = $this->compras_model->obtener_ordenes();
        //$this->asignarDatosVista('ordenescompras', $ordenescompras);
        //$this->mostrarVista('panel/secretaria/listaOrdenescompra');
        
         $this->load->view('panel/secretaria/listaOrdenescompra', $ordenescompras);
    }

    public function ver($id_compra){
        $data = array();
        $this->load->model('compras_model');
        $compra = $this->compras_model->obtener_por_id($id_compra);
        $data['compra'] = $compra;
        $this->asignarDatosVista('compra', $compra);
        $this->mostrarVista('panel/asesor/verCompra');

    }
    public function guardar($id_compra=null){
        $data = array();
        $this->load->model('compras_model');
        if($id_compra){
            $compra = $this->compras_model->obtener_por_id($id_compra);
            $data['id_compra'] = $compra->id_compra;
            $data['desc_compra'] = $compra->desc_compra;
            $data['cantidad_compra'] = $compra->cantidad_compra;
            $data['precio_compra'] = $compra->precio_compra;
            $data['fecha_compra'] = $compra->fecha_compra;
            //$data['estudiante_telefono'] = $estudiante->estudiante_telefono;
            //$data['estudiante_email'] = $estudiante->estudiante_email;

        }else{
            $data['id_compra']=null;
            $data['desc_compra']=null;
            $data['cantidad_compra']=null;
            $data['precio_compra']=null;
            $data['fecha_compra']=null;
            //$data['estudiante_telefono']=null;
            //$data['estudiante_email']=null;

        }
        //$this->load->view('estudiantes/header');
        $this->asignarDatosVista('id_compra', $data);
        //$this->mostrarVista('panel/asesor/listaCompras');
        $this->mostrarVista('citas/compraMateriales');
        //$this->load->view('templates/footer');
    }
    public function guardar_post($id_compra=null){
        if($this->input->post()){
            $desc_compra = $this->input->post('desc_compra');
            $cantidad_compra = $this->input->post('cantidad_compra');
            $precio_compra = $this->input->post('precio_compra');
            $fecha_compra = $this->input->post('fecha_compra');


            //$estudiante_telefono = $this->input->post('estudiante_telefono');
            //$estudiante_email = $this->input->post('estudiante_email');

            $this->load->model('compras_model');
            $this->compras_model->guardar($desc_compra,
                $cantidad_compra,
                $precio_compra,
                $fecha_compra);
                //$estudiante_telefono,
                //$estudiante_email

            //$data['compras'] = $this->compras_model->obtener_todos();

            //$this->asignarDatosVista('compras', $data);
            //$this->mostrarVista('panel/asesor/listaCompras');

            //$this->load->view('estudiantes/header');
            //$this->load->view('estudiantes/index', $data);
            //$this->load->view('templates/footer');

        }else{
            $this->guardar();

        }
    }
    public function eliminar($id_compra){
        $this->load->model('compras_model');
        $this->compras_model->eliminar($id_compra);
        redirect(base_url("compras"), "refresh");
    }


    /**
     * @author: Raldy De Oleo
     * @version: ALPHA
     * Vista grupal
     * Muestra listado de todas las compras registradas.
     */
    public function listaCompras() {

        $this->load->model('compras_model');
        $compras = $this->compras_model->obtener_todos();
        $this->asignarDatosVista('compras', $compras);
        $this->mostrarVista('panel/asesor/listaCompras');
    }

    /**
     * @author: Raldy De Oleo
     * Muestra la vista para crear ordenes de compra
     * Vista Individual
     * Formulario de creacion de Orden de Compra
     */
    public function crearOrdencompra() {
        $this->mostrarVista('panel/asesor/crearOrdencompra');
    }


    public function test(){

        $this->load->view('citas/form2');

    }


}
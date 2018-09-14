<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
 */
class Proyectos extends BS_Controller {


    public function __construct() {
        parent::__construct();
        //$this->cargarLibrerias();
        $this->load->model('proyectos_model');
    }

    //funcion para procesar el formulario
    function insertar_proyecto()
    {

        if($this->input->post('submit'))
        {   $nombre_proyecto = $this->input->post('nombre_proyecto');
           $monto_proyecto = $this->input->post('monto_proyecto');

            //ahora procesamos los datos hacía el modelo que debemos crear

            $nueva_insercion = $this->proyectos_model->nuevo_proyecto($nombre_proyecto,
                                                                        $monto_proyecto
            );
            redirect(base_url("proyectos"), "refresh");
        }

        else
        {

        }
    }

    function insertar_asociado()
    {

        if($this->input->post('submit'))
        {   $nombre_asociado = $this->input->post('nombre_asociado');
            $rnc_asociado = $this->input->post('rnc_asociado');
            $porciento_asociado = $this->input->post('porciento_asociado');
            $servicio_asociado = $this->input->post('servicio_asociado');

            //ahora procesamos los datos hacía el modelo

            $nueva_insercion = $this->proyectos_model->nuevo_asociado($nombre_asociado,
                $rnc_asociado, $porciento_asociado, $servicio_asociado
            );
            redirect(base_url("proyectos/nuevo_asociado"), "refresh");
        }

        else
        {

        }
    }


    public function nuevo_proyecto()
    {
        $this->mostrarVista('panel/secretaria/proyectoform');
    }


    public function nuevo_asociado()
    {
        $this->mostrarVista('citas/crearAsociado');
    }


    public function index() {
        $this->load->model('proyectos_model');
        $proyectos = $this->proyectos_model->obtener_todos();
        $this->asignarDatosVista('proyectos', $proyectos);
        $this->mostrarVista('panel/secretaria/seguimientoProyectos');
    }


    public function ver($id_proyecto){
        $data = array();
        $this->load->model('proyectos_model');
        $proyecto = $this->proyectos_model->obtener_por_id($id_proyecto);
        $data['proyecto'] = $proyecto;
        $this->asignarDatosVista('proyecto', $proyecto);
        $this->mostrarVista('panel/secretaria/verProyecto');

    }

    public function eliminar($id_proyecto){
        $this->load->model('proyectos_model');
        $this->proyectos_model->eliminar($id_proyecto);
        redirect(base_url("proyectos"), "refresh");
    }

    public function editar($id_compra=null){
        $data = array();
        $this->load->model('compras_model');
        if($id_compra){
            $compra = $this->compras_model->obtener_por_id($id_compra);
            $data['id_compra'] = $compra->id_compra;
            $data['desc_compra'] =  $compra->desc_compra;
            $data['fecha_compra'] =  $compra->fecha_compra;
            $data['precio_compra'] =  $compra->precio_compra;


        }else{
            $data['id_compra']=null;
            $data['desc_compra']=null;
            $data['fecha_compra']=null;
            $data['precio_compra']=null;


        }

        //$proveedores = $this->proveedores_model->obtener_todos();
        $this->mostrarVista('panel/asesor/compraform', $compra);
       //$this->load->view('panel/asesor/compraform', $compra);

    }

    public function nueva_compra()
    {   $this->load->model('proveedores_model');
        $proveedores = $this->proveedores_model->obtener_todos();
        $this->mostrarVista('panel/asesor/compraform', $proveedores);
    }

     /**
     * @author: Raldy De Oleo
     * Lista de todos los proveedores
     * Vista grupal
     * Muestra un listado de proveedores
     */
    public function seguimientoProyectos(){
        $this->load->model('proyectos_model');
        $proyectos = $this->proyectos_model->obtener_todos();
        $this->asignarDatosVista('proyectos', $proyectos);
        $this->mostrarVista('panel/secretaria/seguimientoProyectos');
    }


}
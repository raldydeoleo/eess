<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**

 */
class Facturas extends BS_Controller {


    public function __construct() {
        parent::__construct();
        $this->cargarLibrerias();
//        $this->load->library('ConsultaArgumentos');
    }

    //INICIO VISTAS FACTURACION
    /**
     *
     * @author: Raldy De Oleo
     */
    public function listadoFacturas() {
        $this->mostrarVista('panel/tecnico/listadoFacturas');
    }

    /**
     * Vista Grupal
     * Muestra una lista de los articulos itemes o materiales disponibles para proyectos
     * @author: Raldy De Oleo
     */
    public function listadoArticulos() {
        $this->mostrarVista('panel/tecnico/listadoArticulos');
    }

    public function listadoEstudiantes() {
        $this->load->view('panel/tecnico/listadoEstudiantes');
    }


    /**
     * @author: Bruno Urena
     * Agregado de recordaorio para proxima cita
     * Vista individual
     * Formulario de recordatorio del asesor que asigna la proxima fecha de mantenimiento
     */
    public function facturar(){
        $this->mostrarVista('panel/asesor/crearFactura');
    }


    /**
     * Vista No.
     * Vista grupal que seria el dashboard del tecnico. Vista movil
     */
    public function recepcionVehiculo() {

        $this->mostrarVista('panel/tecnico/recepcionVehiculo');

    }



    /**
     * Vista No.
     * Detalle de la unidad. Vista individual
     */
    public function detalleVehiculo() {
        $this->mostrarVista('panel/tecnico/detallevehiculo');
    }

    /**
     * @author:
     */
    public function diagnosticoVehiculo() {
        $this->mostrarVista('panel/tecnico/diagVehiculo');
    }

    /**
     * @author: Raldy De Oleo
     */
    public function cotizar() {
        $this->mostrarVista('panel/tecnico/cotizaciones');
    }


    /**
     * @author: Raldy De Oleo
     */
    public function ordenCompra() {
        $this->mostrarVista('panel/tecnico/ordendeCompra');
    }


    public function checkListInspeccion(){
        $this->mostrarVista('panel/tecnico/checklist');
    }

    protected function cargarLibrerias() {
        $this->load->model(CLIENTE_MODELO);
        $this->load->model(VEHICULO_MODELO);
        $this->load->model(ORDEN_TRABAJO_MODELO);

    }



}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**

 */
class Vehiculos extends BS_Controller {


    public function __construct() {
        parent::__construct();
        $this->cargarLibrerias();
//        $this->load->library('ConsultaArgumentos');
    }

    //INICIO VISTAS TECNICO
    /**
     * @todo:
     * @author:
     */
    public function listadosVehiculos() {
        $this->mostrarVista('panel/tecnico/listadosVehiculos');
    }

    public function listadoEstudiantes() {
        $this->load->view('panel/tecnico/listadoEstudiantes');
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

    public function checkListInspeccion(){
        $this->mostrarVista('panel/tecnico/checklist');
    }

    protected function cargarLibrerias() {
        $this->load->model(CLIENTE_MODELO);
        $this->load->model(VEHICULO_MODELO);
        $this->load->model(ORDEN_TRABAJO_MODELO);

    }



}
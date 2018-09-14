<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Citas
 * @property Cliente $cliente
 *
 */

class Citas extends BS_Controller {

    public function __construct() {
        parent::__construct();
        //$this->cargarLibrerias();
        $this->load->model('clientes_model');
    }

    protected function cargarLibrerias() {
       // $this->load->model(CLIENTE_MODELO);
      //  $this->load->model(VEHICULO_MODELO);
      //  $this->load->model(ORDEN_TRABAJO_MODELO);
    }

    /**
     * Agendado de clientes y resultado de las llamadas efectuadas
     * Vista individual
     * Formulario para agendar o determinar el alcance de la llamada al cliente
     */
   public function crearCheque(){
        $this->mostrarVista('citas/crearCheque');
    }

    public function crearDeposito(){
        $this->mostrarVista('citas/crearDeposito');
    }

    public function balanceBancos(){
        $this->mostrarVista('citas/balanceBancos');
    }
    /**
     * @author: Raldy De Oleo
     * Crear Proyecto para empezar el ciclo de vida.
     * Vista individual
     * Muestra un listado de los proyectos en ejecucion o sin finalizar.
     */
    public function crearProyecto(){
        $this->mostrarVista('citas/crearProyecto');
    }


    public function crearAsociado(){
        $this->mostrarVista('citas/crearAsociado');
    }

    public function crearMaterial(){
        $this->mostrarVista('citas/crearMaterial');
    }

    public function entradaMaterial(){
        $this->mostrarVista('citas/entradaMaterial');
    }

    public function listaAsociados(){
        $this->load->model('asociados_model');
        $asociados = $this->asociados_model->obtener_todos();
        $this->asignarDatosVista('asociados', $asociados);
        $this->mostrarVista('citas/listaAsociados');
    }

    public function constanciaCobroAsociado(){
        $this->mostrarVista('citas/constanciaCobroAsociado');
    }
    /**
     * @author: Raldy De Oleo
     * Proyectos en ejecucion
     * Vista grupal
     * Muestra un listado de los proyectos en ejecucion o sin finalizar.
     */
    public function listaProyectos(){
        $this->load->model('proyectos_model');
        $proyectos = $this->proyectos_model->obtener_todos();
        $this->asignarDatosVista('proyectos', $proyectos);
        $this->mostrarVista('citas/proyectos');
    }


    /**
     * @author: Raldy De Oleo
     * Cuentas por pagar.
     * Vista grupal
     * Muestra un listado de las cuentas por pagar a proveedores.
     */
   public function cuentasPorpagar(){
        $this->load->model('compras_model');
        $compras = $this->compras_model->obtener_compras_proveedor();
        $this->asignarDatosVista('compras', $compras);
        $this->mostrarVista('citas/cuentasPorpagar');
    }


    public function compraMateriales(){
        $this->mostrarVista('citas/compraMateriales');
    }

    public function compraCombustibles(){
        $this->mostrarVista('citas/compraCombustibles');
    }

    public function compraAlimentos(){
        $this->mostrarVista('citas/compraAlimentos');
    }

    public function compraOficina(){
        $this->mostrarVista('citas/compraOficina');
    }

    /**
     * @author: Raldy De Oleo
     * Formulario de crear clientes
     * Vista individual
     */
    public function crearCliente(){
        $this->load->model('clientes_model');
        $clientes = $this->clientes_model->obtener_todos();
        $this->asignarDatosVista('clientes', $clientes);
        $this->mostrarVista('citas/crearCliente');
    }

    public function crearEmpleado(){
        $this->mostrarVista('citas/crearEmpleado');
    }

    /**
     * @todo:
     * @author: Raldy De Oleo
     */
    public function crearProveedor(){
        $this->mostrarVista('citas/crearProveedor');
    }

}


<?php
/**
 * Created by PhpStorm.
 * User: Raldy De Oleo
 * Date: 13/09/16
 * Time: 10:27 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Citas
 * @property Cliente $cliente
 * @property Vehiculo $vehiculo
 * @property Orden_trabajo $Orden_trabajo
 */

class Citas extends CI_Controller {


    public function __construct() {
        parent::__construct();
        //$this->cargarLibrerias();
        $this->load->model('clientes_model');
    }


   


    /**
     * @todo: convertir formulario en un wizard
     * @author: Bruno Urena
     * Agendado de clientes y resultado de las llamadas efectuadas
     * Vista individual
     * Formulario para agendar o determinar el alcance de la llamada al cliente
     */
    public function agendaProactiva(){
        $this->mostrarVista('panel/secretaria/formAgenda');
    }

    public function crearCheque(){
        $this->mostrarVista('citas/crearCheque');
    }

    public function crearDeposito(){
        $this->mostrarVista('citas/crearDeposito');
    }


    public function balanceBancos(){
        $this->load->view('citas/balanceBancos');
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

    /**
     * @author: Bruno Urena
     * Formulario de agendar citas
     * Vista individual
     * Asigna estado de llamada para nueva fecha pospuesta o cita agendada a un dia especifico
     */
    public function agendarCita(){
        $this->mostrarVista('citas/agendarCitaSecretaria');
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

    public function crearProveedor(){
        $this->mostrarVista('citas/crearProveedor');
    }



    public function Test(){
        $this->mostrarVista('citas/listaCitasAgendadasSecretaria');
    }
    /**
     * @todo: colocar los botones correspondientes a las acciones que deprenden de aqui
     * @author: Raldy De Oleo
     * Estado de citas agendadas. Vista grupal
     * Muestra el estado al momento de cada cita agendada.
     */
    public function citasAgendadasPantalla() {
        $this->mostrarVista('citas/citasAgendadasPantalla'); //Contenido
    }


}


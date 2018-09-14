<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//No hay includes en las vistas
//Para poder editar las funciones desde aqui
// y mantener las vistas limpias

/**
 * Class Clientes
 * @property CI_Session $session
 * @property Cliente $cliente
 * @property Vehiculo $vehiculo
 * @property Orden_trabajo $Orden_trabajo
 */
class Empleados extends BS_Controller {


    public function __construct() {
        parent::__construct();
        $this->cargarLibrerias();
    }

    protected function cargarLibrerias(){
        $this->load->model(CLIENTE_MODELO);
        $this->load->model(VEHICULO_MODELO);

    }

    public function mostrar($idCliente=0){
        if ($idCliente==0)
            $this->mostrarVarios();
    }

    public function mostrarVarios(){
        $clientes = $this->cliente->leerTodos();
        echo json_encode($clientes);
    }

    /**
     * @todo: organizar encabezado de tabla
     * @author: Bruno Urena
     * Seguimiento de clientes para proximas llamadas y mantenimiento
     * Vista individual
     * Muestra un listado de clientes con fecha proxima a efectuar mantenimiento de vehiculos
     */
    public function seguimientoEmpleados(){
        $vehiculos = $this->vehiculo->leerTodos();

        $this->asignarDatosVista('vehiculos', $vehiculos);
        $this->mostrarVista('panel/secretaria/seguimientoEmpleados');
    }

}
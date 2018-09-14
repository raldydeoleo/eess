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
        
    }

   
    
      public function  mostrarVista($vista) {
        //$this->vistaData[TEMPLATE_BREADCUMBS] = $this->breadcumbs;
        $this->vistaData[TEMPLATE_VALORES_DEFECTO] = $this->valoresDefecto;
        //$this->vistaData[TEMPLATE_NOTIFICACION] = $this->notificacion;
        //$this->vistaData[TEMPLATE_MEMBRESIA] = $this->obtenerMembresiaSesion();

        // Transformacion de la vista al contenido del template
       $templateData[TEMPLATE_CONTENIDO] = $this->load->view($vista, $this->vistaData, true);

        $this->load->view('templates/backend', $templateData);
        return true;
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
        //$vehiculos = $this->vehiculo->leerTodos();

        //$this->asignarDatosVista('vehiculos', $vehiculos);
        $this->load->view('panel/header');
        $this->load->view('panel/secretaria/seguimientoEmpleados');
        $this->load->view('panel/footer');
    } 
    
     public function insertar_empleado(){
      //$this->load->view('panel/header');
        $this->load->view('welcome_message');
      //  $this->load->view('panel/footer');
    } 

}
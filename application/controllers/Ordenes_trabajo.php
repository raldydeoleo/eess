<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * Class Ordenes_trabajo
 * @property Vehiculo $vehiculo
 * @property Orden_trabajo $Orden_trabajo
 */
class Ordenes_trabajo extends BS_Controller {


    public function __construct() {
        parent::__construct();
        
    }
  
       
		    /**
		     * @author: Raldy De Oleo
		     * Para registrar cada gasto en que se incurre en el ciclo de vida de cada proyecto.
		     * Vista Individual.
		     */
		    public function gastos() {
		
		        $this->mostrarVista('ordenes_trabajo/registroGastos');
		
		    }
		

		    /**
		     * @author: Raldy De Oleo
		     * Muestra detalles especificos del Proyecto seleccionado en un momento dado.
		     * Vista Individual.
		     */
		    public function gastosDelproyecto(){
		        $this->mostrarVista('panel/controlista/gastosDelproyecto');
		    }
		
		    /**
		     * @author: Raldy De Oleo
		     * Para registrar los ingresos de partidas de dinero de cada proyecto
		     * Vista Individual.
		     */
		    public function ingresos() {
		
		        $this->mostrarVista('ordenes_trabajo/registroIngresos');
		
		    }





    }




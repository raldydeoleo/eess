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
        $this->cargarLibrerias();
    }


    protected function cargarLibrerias() {
        $this->load->model(CLIENTE_MODELO);
        $this->load->model(VEHICULO_MODELO);
        $this->load->model(ORDEN_TRABAJO_MODELO);
    }


    /**
     * Muestra la lista de ordenes de trabajo para seguimiento del controlista (Vista No. 15)
     *
     * @author Wolfan Fabian
     * @version 0.0.3-ALPHA
     */
    private function seguimientoGrupalControlista() {
        $temporales = $this->Orden_trabajo->leerTodos(); // Lectua en base de dato propia

        $ots = array();
        foreach ($temporales as $otTemporal) {

            $vehiculo = invocarNewsoftServicio("vehiculo/{$otTemporal[ID_VEHICULO]}"); // Lectura en el servicio, recomendable sea en la propia
            $modelo = invocarNewsoftServicio("modelo/{$vehiculo[ID_MODELO]}");
            $marca = invocarNewsoftServicio("marca/{$modelo[ID_MARCA]}");
            $cliente = invocarNewsoftServicio("cliente/{$vehiculo[ID_CLIENTE]}"); // Lectura en el servicio, recomendable sea en la propia

            $ot = $otTemporal;
            $ot['vehiculo'] = $vehiculo;
            $ot['modelo'] = $modelo;
            $ot['marca'] = $marca;
            $ot['cliente'] = $cliente;

            $ots[] = $ot;

        }

        $this->asignarDatosVista('ots', $ots);

        $this->mostrarVista('ordenes_trabajo/seguimientoGrupalControlista');
    }


    /**
     * Muestra una orden de trabajo para seguimiento del controlista
     *
     * @author Wolfan Fabian
     * @version 0.0.3-ALPHA
     * @param $idOrdenTrabajo - Numero de la orden de trabajo
     */
    private function seguimientoIndividualControlista($idOrdenTrabajo) {
        $ot = $this->Orden_trabajo->leerPrimeroSegunClavePrincipal($idOrdenTrabajo);
        $this->asignarDatosVista('ot', $ot);
        $this->mostrarVista('ordenes_trabajo/seguimientoIndividualControlista');
    }


    /**
     * Muestra una o todas las ordenes de trabajo para seguimiento del controlista
     *
     * @author Wolfan Fabian
     * @version 0.0.3-ALPHA
     * @param int $idOrdenTrabajo - Numero de la orden de trabajo, en caso de ser una
     *
     */
    public function seguimientoControlista($idOrdenTrabajo = 0) {
        if ($idOrdenTrabajo == 0)
            $this->seguimientoGrupalControlista();
        else
            $this->seguimientoIndividualControlista($idOrdenTrabajo);
    }


    /**
     * Muestra las ordenes de trabajo segun estado en que se encuentren  (Vista No. 29)
     *
     * @author Raldy De Oleo
     * @version 0.0.3-ALPHA
     * @param
     */
    public function seguimientoordenTrabajo() {

        $this->mostrarVista('panel/pantalla/seguimientoordenTrabajo');

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


    /**
     * @author: Bruno Urena
     * Asignar cuerpo tecnico a la orden de trabajo
     * Vista Individual
     * Muestra un formulario para asignar supervisor y equipo tecnico requereido por la orden, asi como el nivel de certificacion adecuado
     */
    public function asignarOrdentrabajo(){
        $this->mostrarVista('panel/controlista/asignarOT');
    }


    /**
     * @author: Raldy De Oleo
     * Muestra listado de tecnicos con trabajos asignados.
     * Vista Grupal.
     * Muestra una Lista de los trabajos asignados a cada tecnico.
     */
    public function seguimientoEquipo(){
        $this->mostrarVista('panel/controlista/seguimentoequipo');
    }


    /**
     * @author: Raldy De Oleo
     * Muestra detalles especificos del tecnico con su trabajo asignado en un momento dado.
     * Vista Individual.
     * Muestra el vehiculo en el que esta trabajando el tecnico seleccionado.
     */
    public function detalleTecnico(){
        $this->mostrarVista('panel/controlista/detalletecnico');
    }




    }




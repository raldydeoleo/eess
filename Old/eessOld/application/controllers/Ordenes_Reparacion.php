<?php

/**
 *
 */

class Ordenes_Reparacion extends BS_Controller {

    /**
     * Muestra la vista de las ordenes de reparacion para el asesor
     * @author
     * @version
     */
    public function asesorOrdenesReparacion(){
        $this->mostrarVista('panel/asesor/ordenesreparacion');
    }

    /**
     * Crea la orden de reparacion para un vehiculo determinado
     * Notas: La orden de reparacion se genera seguido de la inspeccion del vehiculo y conociendo cuales son los fallos
     * presentado en el mismo y los notados por el cliente, para generar esta es necesario el concentimiento del cliente
     *
     * Se modifico el metodo para simular el servicio de Newsoft; wolfan fabian
     * VISTA NO. 10
     */
    public function crearOrdenesReparacion() {
        //$this->asignarDatosVista('servicios', invocarNewsoftServicio('servicios'));
        //$this->asignarDatosVista('piezas', invocarNewsoftServicio('piezas'));
        $this->mostrarVista('panel/asesor/ordenreparacion');
    }
}
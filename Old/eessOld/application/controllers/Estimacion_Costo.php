<?php
/**
 *
 */

class Estimacion_Costo extends BS_Controller {


    /**
     * Muestra la vista de estimaciones de costo para el asesor
     * @author: Anonimo
     * @author 2: Bruno Urena
     * Listado de precios de mantenimientos, piezas y servicios
     * Vista grupal
     * @version
     */
    public function asesorEstimacionCostos() {
        $this->mostrarVista('panel/asesor/estimacioncostos');
    }


}
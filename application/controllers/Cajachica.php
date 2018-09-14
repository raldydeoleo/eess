<?php
/**
 *
 */

class Cajachica extends BS_Controller {
    

    /**
     * @author: Raldy De Oleo
     * Para registrar desembolsos de caja chica
     * Vista individual
     */
    public function desembolsoCajachica(){
        $this->mostrarVista('panel/asesor/cajaChica');
    }
    /**
     * @author: Raldy De Oleo
     * Historial de los desembolsos de caja chica.
     * Vista grupal
     * Muestra un listado de los desembolsos de caja chica.
     */
    public function historialCajachica(){
        $this->mostrarVista('citas/historialcajachica');
    }

    public function historialCheques(){
        $this->mostrarVista('citas/historialCheques');
    }

    public function historialDepositos(){
        $this->mostrarVista('citas/historialDepositos');
    }

    public function historialEgresos(){
        $this->mostrarVista('citas/historialEgresos');
    }
}
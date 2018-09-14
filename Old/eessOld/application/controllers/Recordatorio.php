<?php
/**
 *
 */

class Recordatorio extends BS_Controller {
    

    /**
     * @author: Bruno Urena
     * Agregado de recordaorio para proxima cita
     * Vista individual
     * Formulario de recordatorio del asesor que asigna la proxima fecha de mantenimiento
     */
    public function asignarRecordatorio(){
        $this->mostrarVista('panel/asesor/recordatorioForm');
    }


}
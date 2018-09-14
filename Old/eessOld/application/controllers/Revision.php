<?php
/**
 *
 */

class Revision extends BS_Controller {


    /**
     * Muestra la vista de revision en la pre-entrega para el asesor
     * @author: Diego Sanchez
     * Muestra
     * @version
     */
    public function asesorRevisionPreEntrega() {
        $this->mostrarVista('panel/asesor/revisionpreentrega');
    }


}
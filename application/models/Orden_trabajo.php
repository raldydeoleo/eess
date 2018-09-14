<?php

/**
 * Define el modelo para mapear la transaciones de la entidad cliente a la bd
 *
 * @author Wolfan Fabian
 * @version 0.0.3-ALPHA
 */
class Orden_trabajo extends BS_Model {


    /**
     * Construye el modelo para mapear los clientes
     *
     * @author Wolfan Fabian2
     * @version 0.0.3-ALPHA
     */
    public function __construct() {
        parent::__construct();
        $this->tablaNombre = EYM_MODULO . "_" . ORDEN_TRABAJO_MODELO;
        $this->clavePrincipalNombre = ID_ORDEN_TRABAJO;
    }


}
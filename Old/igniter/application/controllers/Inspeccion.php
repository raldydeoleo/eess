<?php
/**
 *
 */

class Inspeccion extends BS_Controller {


    /**
     * @todo: agregar informacion de ejemplo con encabezado de tabla y paginacion
     * @todo: proporcion a movil mas correcta
     * @todo: incluir estilo de tabla con accion
     * @author: Bruno Urena
     * @version
     * Vista grupal
     * Muestra listado de inspecciones para el asesor
     */
    public function inspecciones() {
        $this->mostrarVista('panel/asesor/inspecciones');
    }

    /**
     * @todo: finalizar con fase 4 (fotos vehiculo) y fase 5 (clausula firmable)
     * @todo: crear metodo para guardar firma digital
     * @author: Bruno Urena
     * Muestra la vista para crear la inspeccion INICIAL del asesor
     * Vista Individual
     * Formulario de creacion de inspeccion inicial
     */
    public function crearInspeccion() {
        $this->mostrarVista('panel/asesor/inspeccionesForm');
    }


}
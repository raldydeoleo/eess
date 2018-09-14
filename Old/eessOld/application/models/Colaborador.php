<?php
/**
 * @author Jordani Rozon
 * @version 0.0.3-ALPHA
 * @date 30/7/2016
 */
class Colaborador extends BS_Model {

    public function __construct() {
        parent::__construct();
        $this->tablaNombre = COLABORADORES_MODULO . "_" . COLABORADOR_MODELO;
        $this->clavePrincipalNombre = ID_COLABORADOR;
    }

    /**
     * Crea cualquier configuracion para consultar en la bd
     *
     * @abstract
     * @author Jordani rozon
     * @version 0.0.3-ALPHA
     * @date 30/7/2016
     * @param ConsultaArgumentos $argumentos - Objeto que contiene las condiciones de lectura
     * @return CI_DB_result - Retorna un objeto
     */
    public function crearConsulta(ConsultaArgumentos $argumentos) {
        $this->db->from($this->tablaNombre);
        $this->db->select($this->tablaNombre . ".*");


        $tablaPersona = FUNDAMENTOS_MODULO . '_' . PERSONA_MODELO;
        $this->db->join($tablaPersona, $tablaPersona . "." . ID_PERSONA . "=" . $this->tablaNombre . "." . ID_PERSONA);
        $this->db->select($tablaPersona . ".*");


        if ($argumentos->existeEnValores(ID_COLABORADOR))
            $this->db->where($this->tablaNombre . "." . ID_COLABORADOR, $argumentos->obtenerValor(ID_COLABORADOR));


        if ($argumentos->existeEnValores(HABILITADO_CN))
            $this->db->where($this->tablaNombre . "." . HABILITADO_CN, $argumentos->obtenerValor(HABILITADO_CN));

        return $this->db->get();
    }
}
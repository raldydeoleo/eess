<?php

/**
 * Define el modelo para mapear la transaciones de la entidad usuario a la bd
 *
 * @author Diego Sanchez
 * @version 0.0.3-ALPHA
 */
class Usuario extends BS_Model {


    /**
     * Construye el modelo para mapear usuarios
     *
     * @author Diego Sanchez
     * @version 0.0.3-ALPHA
     */
    public function __construct() {
        parent::__construct();
        $this->tablaNombre = SEGURIDAD_MODULO . "_" . USUARIO_MODELO;
        $this->clavePrincipalNombre = ID_USUARIO;
    }


    /**
     * Lee el primer usuario que cumple con los parametros pasados
     *
     * @author Wolfan Fabian
     * @version 0.0.3-ALPHA
     * @param ConsultaArgumentos|null $argumentos - Parametros de busquedas del usuario
     * @return array|mixed - Retorna el primer usuario encontrado o null si no lo hay
     * @todo (17/7/2016) Wolfan Fabian - Consensuar si se hara unset a la clave
     */
    function leerPrimero(ConsultaArgumentos $argumentos = null) {
        $usuario = parent::leerPrimero($argumentos);
        if ($usuario)
            unset($usuario[CLAVE_CN]);
        return $usuario;
    }


    /**
     * Inhabilita un usuario
     *
     * @author Diego Sanchez
     * @version 0.0.3-ALPHA
     * @param array $usuario - Usuario a ser inhabilitado
     * @return array - Retorna el cliente actualizado
     */
    public function inhabilitar(array $usuario) {
        return $this->actualizar($usuario, array(HABILITADO_CN => false));
    }


    /**
     * Crea cualquier configuracion para consultar en la bd
     *
     * @abstract
     * @author Wolfan Fabian
     * @version 0.0.3-ALPHA
     * @param ConsultaArgumentos $argumentos - Objeto que contiene las condiciones de lectura
     * @return CI_DB_result - Retorna un objeto
     */
    public function crearConsulta(ConsultaArgumentos $argumentos) {
        $this->db->from($this->tablaNombre);
        $this->db->select($this->tablaNombre . ".*");

        $tablaPersona = FUNDAMENTOS_MODULO . '_' . PERSONA_MODELO;
        $this->db->join($tablaPersona, $tablaPersona . "." . ID_PERSONA . "=" . $this->tablaNombre . "." . ID_PERSONA);
        $this->db->select($tablaPersona . ".*");

        if ($argumentos->existeEnValores(USERNAME_CN))
            $this->db->where($this->tablaNombre . "." . USERNAME_CN, $argumentos->obtenerValor(USERNAME_CN));

        if ($argumentos->existeEnValores(CLAVE_CN))
            $this->db->where($this->tablaNombre . "." . CLAVE_CN, $argumentos->obtenerValor(CLAVE_CN));

        if ($argumentos->existeEnValores(HABILITADO_CN))
            $this->db->where($this->tablaNombre . "." . HABILITADO_CN, $argumentos->obtenerValor(HABILITADO_CN));

        if ($argumentos->existeEnValores(ID_USUARIO))
            $this->db->where(ID_USUARIO, $argumentos->obtenerValor(ID_USUARIO));

        return $this->db->get();
    }


}
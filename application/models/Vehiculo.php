<?php

/**
 * Clase simulada para trabajar con los vehiculos
 * @todo: (26/08/2016) Wolfan Fabian - Debe trabajarse como en los otros proyectos
 *
 */
class Vehiculo extends BS_Model {


    public function __construct() {
        parent::__construct();

    }

//    public function  leerPrimero() {
//        return $this->leerTodos()[0];
//    }

//    public function leerTodosCliente($idCliente) {

//        $todos = $this->leerTodos();
//        $parciales = array();
//        foreach ($todos as $vehiculo) {
//            if ($vehiculo[ID_CLIENTE] == $idCliente) {
//                $parciales[] = $vehiculo;
//            }
//        }
//        return $parciales;
//    }

    public function leerTodos(ConsultaArgumentos $argumentos = null, $index = null) {


        return array(
            array(ID_VEHICULO => 1, ID_MARCA => 1, MARCA_PSEUDO => 'NISSAN', ID_MODELO => 1,
                MODELO_PSEUDO => 'FRONTIER', PLACA_CN => 'L107022', ID_CLIENTE => 1, CLIENTE_PSEUDO => 'Bruno Urena'),
            array(ID_VEHICULO => 2, ID_MARCA => 1, MARCA_PSEUDO => 'NISSAN', ID_MODELO => 1,
                MODELO_PSEUDO => 'FRONTIER', PLACA_CN => 'L102288', ID_CLIENTE => 2, CLIENTE_PSEUDO => 'Diego Sanchez'),
            array(ID_VEHICULO => 3, ID_MARCA => 1, MARCA_PSEUDO => 'NISSAN', ID_MODELO => 2,
                MODELO_PSEUDO => 'SENTRA', PLACA_CN => 'A112233', ID_CLIENTE => 1, CLIENTE_PSEUDO => 'Bruno Urena'),
            array(ID_VEHICULO => 4, ID_MARCA => 2, MARCA_PSEUDO => 'HUYNDAI', ID_MODELO => 3,
                MODELO_PSEUDO => 'SONATA', PLACA_CN => 'A445566', ID_CLIENTE => 3, CLIENTE_PSEUDO => 'Jordani Rozon'),
            array(ID_VEHICULO => 5, ID_MARCA => 2, MARCA_PSEUDO => 'HUYNDAI', ID_MODELO => 4,
                MODELO_PSEUDO => 'ACCENT', PLACA_CN => 'A778899', ID_CLIENTE => 3, CLIENTE_PSEUDO => 'Jordani Rozon'),
        );

    }


}
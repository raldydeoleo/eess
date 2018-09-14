<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Proveedores_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    function nuevo_proveedor( $cnombre_proveedor,
                              $capellido_proveedor,
                              $cdireccion_proveedor,
                              $cciudad_proveedor,
                              $ctelefono_proveedor,
                              $cemail_proveedor,
                              $cedula_proveedor,
                              $empresa_proveedor,
                              $rnc_proveedor,
                              $edireccion_proveedor,
                              $eciudad_proveedor,
                              $etelefono1_proveedor,
                              $etelefono2_proveedor,
                              $eemail1_proveedor,
                              $eemail2_proveedor,
                              $banco1_proveedor,
                              $banco2_proveedor,
                              $banco3_proveedor,
                              $cuenta1_proveedor,
                              $cuenta2_proveedor,
                              $cuenta3_proveedor,
                              $tipocuenta1_proveedor,
                              $tipocuenta2_proveedor,
                              $tipocuenta3_proveedor)
    {
        $data = array(

            'cnombre_proveedor' =>  $cnombre_proveedor,
            'capellido_proveedor' => $capellido_proveedor,
            'cdireccion_proveedor' => $cdireccion_proveedor,
            'cciudad_proveedor' => $cciudad_proveedor,
            'ctelefono_proveedor' => $ctelefono_proveedor,
            'cemail_proveedor' => $cemail_proveedor,
            'cedula_proveedor' => $cedula_proveedor,
            'empresa_proveedor' =>  $empresa_proveedor,
            'rnc_proveedor' =>  $rnc_proveedor,
            'edireccion_proveedor' => $edireccion_proveedor,
            'eciudad_proveedor' => $eciudad_proveedor,
            'etelefono1_proveedor' => $etelefono1_proveedor,
            'etelefono2_proveedor' => $etelefono2_proveedor,
            'eemail1_proveedor' => $eemail1_proveedor,
            'eemail2_proveedor' => $eemail2_proveedor,
            'banco1_proveedor' => $banco1_proveedor,
            'banco2_proveedor' => $banco2_proveedor,
            'banco3_proveedor' => $banco3_proveedor,
            'cuenta1_proveedor' => $cuenta1_proveedor,
            'cuenta2_proveedor' =>  $cuenta2_proveedor,
            'cuenta3_proveedor' => $cuenta3_proveedor,
            'tipocuenta1_proveedor' => $tipocuenta1_proveedor,
            'tipocuenta2_proveedor' => $tipocuenta2_proveedor,
            'tipocuenta3_proveedor' => $tipocuenta3_proveedor

        );

        $this->db->insert('proveedores',$data);
    }


    public function guardar($cnombre_proveedor,
                            $capellido_proveedor,
                            $ctelefono_proveedor,
                            $cemail_proveedor,
                            $cdireccion_proveedor,
                            $cciudad_proveedor,
                            $empresa_proveedor,
                            $rnc_proveedor,
        //                  $edireccion_proveedor,
        //                  $eciudad_proveedor,
        //                  $etelefono1_proveedor,
        //                  $etelefono2_proveedor,
        //                  $eemail1_proveedor,
        //                  $eemail2_proveedor,
        //                  $banco1_proveedor,
        //                  $banco2_proveedor,
        //                  $banco3_proveedor,
        //                  $cuenta1_proveedor,
        //                  $cuenta2_proveedor,
        //                  $cuenta3_proveedor,
        //                  $tipocuenta1_proveedor,
        //                  $tipocuenta2_proveedor,
        //                  $tipocuenta3_proveedor,
         $id_proveedor=null ){

            $data = array(

                'cnombre_proveedor' =>  $cnombre_proveedor,
                'capellido_proveedor' => $capellido_proveedor,
                'ctelefono_proveedor' => $ctelefono_proveedor,
                'cemail_proveedor' => $cemail_proveedor,
                'cdireccion_proveedor' => $cdireccion_proveedor,
                'cciudad_proveedor' => $cciudad_proveedor,
                'cedula_proveedor' => $cedula_proveedor,
                'empresa_proveedor' =>  $empresa_proveedor,
                'rnc_proveedor' =>  $rnc_proveedor,
                //'edireccion_proveedor' => $edireccion_proveedor,
                // 'eciudad_proveedor' => $eciudad_proveedor,
                // 'etelefono1_proveedor' => $etelefono1_proveedor,
                // 'etelefono2_proveedor' => $etelefono2_proveedor,
                // 'eemail1_proveedor' => $eemail1_proveedor,
                // 'eemail2_proveedor' => $eemail2_proveedor,
               // 'banco1_proveedor' => $banco1_proveedor,
              //  'banco2_proveedor' => $banco2_proveedor,
              //  'banco3_proveedor' => $banco3_proveedor,
              //  'cuenta1_proveedor' => $cuenta1_proveedor,
              //  'cuenta2_proveedor' =>  $cuenta2_proveedor,
              //  'cuenta3_proveedor' => $cuenta3_proveedor,
              //  'tipocuenta1_proveedor' => $tipocuenta1_proveedor,
              //  'tipocuenta2_proveedor' => $tipocuenta2_proveedor,
              //  'tipocuenta3_proveedor' => $tipocuenta3_proveedor
        );

        if($id_proveedor){
            $this->db->where('id_proveedor', $id_proveedor);
            $this->db->update('proveedorees', $data);
        }else{
            $this->db->insert('proveedores', $data);
        }
    }

    public function eliminar($id_proveedor){
        $this->db->where('id_proveedor', $id_proveedor);
        $this->db->delete('proveedores');
    }

    public function obtener_todos(){
        $this->db->select('id_proveedor, 
                            cnombre_proveedor, 
                            capellido_proveedor, 
                            empresa_proveedor, 
                            rnc_proveedor, 
                            cdireccion_proveedor,
                            cciudad_proveedor,
                            ctelefono_proveedor,
                            cemail_proveedor');
        $this->db->from('proveedores');
        $consulta = $this->db->get();
        $resultado = $consulta->result();
        return $resultado;
    }

    public function obtener_por_id($id_proveedor){
        $this->db->select('id_proveedor, 
                            cnombre_proveedor, 
                            capellido_proveedor,
                            ctelefono_proveedor,
                            cemail_proveedor,
                            empresa_proveedor, 
                            rnc_proveedor, 
                            cdireccion_proveedor,
                            cciudad_proveedor,
                            cedula_proveedor,
                              eempresa_proveedor,
                              rnc_proveedor,
                              edireccion_proveedor,
                              eciudad_proveedor,
                              etelefono1_proveedor,
                              etelefono2_proveedor,
                              eemail1_proveedor,
                              eemail2_proveedor,
                              banco1_proveedor,
                              banco2_proveedor,
                              banco3_proveedor,
                              cuenta1_proveedor,
                              cuenta2_proveedor,
                              cuenta3_proveedor,
                              tipocuenta1_proveedor,
                              tipocuenta2_proveedor,
                              tipocuenta3_proveedor'
                            );
        $this->db->from('proveedores');
        $this->db->where('id_proveedor', $id_proveedor);
        $consulta = $this->db->get();
        $resultado = $consulta->row();
        return $resultado;
    }
}
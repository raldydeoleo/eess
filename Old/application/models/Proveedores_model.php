<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Proveedores_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    function nuevo_proveedor($nombre_proveedor,$apellido_proveedor,$empresa_proveedor,$rnc_proveedor,$direccion_proveedor,$ciudad_proveedor,$telefono_proveedor,$email_proveedor)
    {
        $data = array(
            'nombre_proveedor' => $nombre_proveedor,
            'apellido_proveedor' => $apellido_proveedor,
            'empresa_proveedor' => $empresa_proveedor,
            'rnc_proveedor' => $rnc_proveedor,
            'direccion_proveedor' => $direccion_proveedor,
            'ciudad_proveedor' => $ciudad_proveedor,
            'telefono_proveedor' => $telefono_proveedor,
            'email_proveedor' => $email_proveedor,

        );

        $this->db->insert('proveedores',$data);
    }


    public function guardar($desc_compra,
                            $cantidad_compra,
                            $precio_compra,
                            $fecha_compra,
                            $id_compra=null){
        $data = array(

            'desc_compra'=> $desc_compra,
            'cantidad_compra'=> $cantidad_compra,
            'precio_compra' => $precio_compra,
            'fecha_compra' =>  $fecha_compra,



        );
        if($id_compra){
            $this->db->where('id_compra', $id_compra);
            $this->db->update('compras', $data);
        }else{
            $this->db->insert('compras', $data);
        }
    }

    public function eliminar($id_proveedor){
        $this->db->where('id_proveedor', $id_proveedor);
        $this->db->delete('proveedores');
    }

    public function obtener_todos(){
        $this->db->select('id_proveedor, 
                            nombre_proveedor, 
                            apellido_proveedor, 
                            empresa_proveedor, 
                            rnc_proveedor, 
                            direccion_proveedor,
                            ciudad_proveedor,
                            telefono_proveedor,
                            email_proveedor');
        $this->db->from('proveedores');
        $consulta = $this->db->get();
        $resultado = $consulta->result();
        return $resultado;
    }

    public function obtener_por_id($id_proveedor){
        $this->db->select('id_proveedor, 
                            nombre_proveedor, 
                            apellido_proveedor, 
                            empresa_proveedor, 
                            rnc_proveedor, 
                            direccion_proveedor,
                            ciudad_proveedor,
                            telefono_proveedor,
                            email_proveedor');
        $this->db->from('proveedores');
        $this->db->where('id_proveedor', $id_proveedor);
        $consulta = $this->db->get();
        $resultado = $consulta->row();
        return $resultado;
    }
}
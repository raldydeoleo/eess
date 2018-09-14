<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Compras_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    function nueva_compra($fecha_compra, $vencimiento_compra, $hora_compra,$cantidad_compra,$desc_compra,$unidad_compra, $precio_compra)
    {
        $data = array(
            'fecha_compra' => $fecha_compra,
            'vencimiento_compra' => $vencimiento_compra,
            'hora_compra' => $hora_compra,
            'cantidad_compra' => $cantidad_compra,
            'desc_compra' => $desc_compra,
            'unidad_compra' => $unidad_compra,
            'precio_compra' => $precio_compra,
        );

        $this->db->insert('compras',$data);
    }

    function nueva_ordencompra($fecha_ordencompra,$desc_ordencompra, $monto_ordencompra)
    {
        $data = array(
            'fecha_ordencompra' => $fecha_ordencompra,
            'desc_ordencompra' => $desc_ordencompra,
            'monto_ordencompra' => $monto_ordencompra,
        );

        $this->db->insert('ordenescompra',$data);
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

    public function eliminar($id_compra){
        $this->db->where('id_compra', $id_compra);
        $this->db->delete('compras');
    }

    public function obtener_todos(){
        $this->db->select('id_compra, desc_compra, cantidad_compra, precio_compra, fecha_compra,vencimiento_compra');
        $this->db->from('compras');
        $consulta = $this->db->get();
        $resultado = $consulta->result();
        return $resultado;
    }

    public function obtener_compras_proveedor(){
        $this->db->select('*');
        $this->db->from('compras');
        //$this->db->join('proveedores', 'proveedores.id_proveedor = compras.id_proveedor');
        $consulta = $this->db->get();
        $resultado = $consulta->result();
        return $resultado;
    }

    public function obtener_por_id($id_compra){
        $this->db->select('id_compra, desc_compra, cantidad_compra, precio_compra, fecha_compra');
        $this->db->from('compras');
        $this->db->where('id_compra', $id_compra);
        $consulta = $this->db->get();
        $resultado = $consulta->row();
        return $resultado;
    }


    public function obtener_ordenes(){
        $this->db->select('id_ordencompra, desc_ordencompra, monto_ordencompra, fecha_ordencompra, id_proveedor, id_proyecto');
        $this->db->from('ordenescompra');
        $consulta = $this->db->get();
        $resultado = $consulta->result();
        return $resultado;
    }
}
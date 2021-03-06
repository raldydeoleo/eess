<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Proyectos_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    function nuevo_proyecto($nombre_proyecto,$monto_proyeto)
    {
        $data = array(
            'nombre_proyecto' => $nombre_proyecto,
            'monto_proyecto' => $monto_proyeto,

        );

        $this->db->insert('proyectos',$data);
    }

    function nuevo_asociado($nombre_asociado,$rnc_asociado, $porciento_asociado,$servicio_asociado)
    {
        $data = array(

            'nombre_asociado' => $nombre_asociado,
            'rnc_asociado' => $rnc_asociado,
            'porciento_asociado' => $porciento_asociado,
            'servicio_asociado' => $servicio_asociado,


        );

        $this->db->insert('asociado',$data);
    }



    public function obtener_todos(){
        $this->db->select('id_proyecto, 
                            nombre_proyecto, 
                            monto_proyecto');

        $this->db->from('proyectos');
        $consulta = $this->db->get();
        $resultado = $consulta->result();
        return $resultado;
    }

    public function obtener_por_id($id_proyecto){
        $this->db->select('id_proyecto, 
                            nombre_proyecto, 
                            monto_proyecto');
        $this->db->from('proyectos');
        $this->db->where('id_proyecto', $id_proyecto);
        $consulta = $this->db->get();
        $resultado = $consulta->row();
        return $resultado;
    }


    public function eliminar($id_proyecto){
        $this->db->where('id_proyecto', $id_proyecto);
        $this->db->delete('proyectos');
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


    public function obtener_detalles_proyecto($id_proyecto){
        $this->db->select('*');
        $this->db->from('percepciones');
        $this->db->where('id_proyecto', $id_proyecto);
        //$this->db->join('percepciones','proyectos.id_proyecto = percepciones.id_proyecto');
        $consulta = $this->db->get();
        $resultado = $consulta->row();
        return $resultado;
    }

    public function obtener_detalles_asociado($id_asociado){
        $this->db->select('*');
        $this->db->from('percepciones');
        $this->db->where('id_asociado', $id_asociado);
        //$this->db->join('percepciones','proyectos.id_proyecto = percepciones.id_proyecto');
        $consulta = $this->db->get();
        $resultado = $consulta->row();
        return $resultado;
    }

}
<?php

class Datos_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }


    function proveedores()
    {
        $query = $this->db->get('proveedores');
        foreach ($query->result() as $fila)
        {
            $data[] = $fila;
        }
        return $data;
    }

    public function guardar($cnombre_proveedor,
                            $capellido_proveedor,
                            $cdireccion_proveedor,
                            $cciudad_proveedor,
                            $ctelefono_proveedor,
                            $cemail_proveedor,
                            $cedula_proveedor,
                            $empresa_proveedor,
                            $rnc_proveedor){
        $data = array(

            'cnombre_proveedor' => $cnombre_proveedor,
            'capellido_proveedor' => $capellido_proveedor,
            'cdireccion_proveedor'=> $cdireccion_proveedor,
            'cciudad_proveedor' => $cciudad_proveedor,
            'ctelefono_proveedor' => $ctelefono_proveedor,
            'cemail_proveedor' => $cemail_proveedor,
            'cedula_proveedor' => $cedula_proveedor,
            'empresa_proveedor' =>  $empresa_proveedor,
            'rnc_proveedor' => $rnc_proveedor
        );
        if($id){
            $this->db->where('id', $id);
            $this->db->update('informes', $data);
        }else{
            $this->db->insert('informes', $data);
        }
    }

    public function eliminar($id){
        $this->db->where('id', $id);
        $this->db->delete('informes');
    }

    public function obtener_todos(){
        $this->db->select('*');
        $this->db->from('proveedores');
        $consulta = $this->db->get();
        $resultado = $consulta->result();
        return $resultado;
    }

    public function obtener_por_id($id_proveedor){
        $this->db->select('*');
        $this->db->from('proveedores');
        $this->db->where('id_proveedor', $id_proveedor);
        $consulta = $this->db->get();
        $resultado = $consulta->row();
        return $resultado;
    }
}
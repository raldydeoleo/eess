<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class tutorial_model extends CI_Model {
    public function __construct() {
        parent::__construct();

    }

    public function insertar_persona($id_compra){



        $data = array(

            'fecha_compra' =>$this->input->post('fecha_compra'),
            'desc_compra' =>$this->input->post('desc_compra'),
            'cantidad_compra' =>$this->input->post('cantidad_compra'),
            'precio_compra' =>$this->input->post('precio_compra'),
            );
        if($id_compra){
            $this->db->where('id_compra', $id_compra);
            $this->db->update('compras', $data);
        }else{
            $this->db->insert('compras', $data);
        }

      return $this->db->insert('compras', $data);

    }



    public function obtener_por_id($id_compra){
        $this->db->select('id_compra, desc_compra, cantidad_compra, precio_compra, fecha_compra');
        $this->db->from('compras');
        $this->db->where('id_compra', $id_compra);
        $consulta = $this->db->get();
        $resultado = $consulta->row();
        return $resultado;
    }


    }


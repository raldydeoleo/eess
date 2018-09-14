<?php

class estudiantes_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function guardar($estudiante_matricula,
                            $estudiante_nombre,
                            $estudiante_apellido,
                            //$estudiante_direccion,
                            $estudiante_telefono,
                            $estudiante_email,
                            $id_estudiante=null){
        $data = array(

            'estudiante_matricula'=> $estudiante_matricula,
            'estudiante_nombre'=> $estudiante_nombre,
            'estudiante_apellido' => $estudiante_apellido,
            //'estudiante_direccion' => $estudiante_direccion,
            'estudiante_telefono' => $estudiante_telefono,
            'estudiante_email' => $estudiante_email


        );
        if($id_estudiante){
            $this->db->where('id_estudiate', $id_estudiante);
            $this->db->update('estudiantes', $data);
        }else{
            $this->db->insert('estudiantes', $data);
        }
    }

    public function actualizar(
                            $estudiante_matricula,
                            $estudiante_nombre,
                            $estudiante_apellido,
                            //$estudiante_direccion,
                            $estudiante_telefono,
                            $estudiante_email,
                            $id_estudiante=null
                            ){
        $data = array(

            'estudiante_matricula'=> $estudiante_matricula,
            'estudiante_nombre'=> $estudiante_nombre,
            'estudiante_apellido' => $estudiante_apellido,
            //'estudiante_direccion' => $estudiante_direccion,
            'estudiante_telefono' => $estudiante_telefono,
            'estudiante_email' => $estudiante_email


        );
        if($id_estudiante){
            $this->db->where('id_estudiate', $id_estudiante);
            $this->db->update('estudiantes', $data);
        }else{

            $this->db->insert('estudiantes', $data);
        }
    }

    public function eliminar($id_estudiante){
        $this->db->where('id_estudiante', $id_estudiante);
        $this->db->delete('estudiantes');
    }

    public function obtener_todos(){
        $this->db->select('id_estudiante, estudiante_matricula, estudiante_nombre, estudiante_apellido, estudiante_telefono, estudiante_email');
        $this->db->from('estudiantes');
        //$this->db->order_by('prioridad, titulo', 'asc');
        $consulta = $this->db->get();
        $resultado = $consulta->result();
        return $resultado;
    }

    public function obtener_por_id($id_estudiante){
        $this->db->select('id_estudiante, estudiante_matricula, estudiante_nombre, estudiante_apellido, estudiante_telefono, estudiante_email');
        $this->db->from('estudiantes');
        $this->db->where('id_estudiante', $id_estudiante);
        $consulta = $this->db->get();
        $resultado = $consulta->row();
        return $resultado;
    }
}
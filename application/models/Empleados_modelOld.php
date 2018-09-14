<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Empleados_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    function nuevo_empleado($nombre_empleado,
                            $apellido_empleado,
                            $cargo_empleado,
                            $direccion_empleado,
                            $ciudad_empleado,
                            $telefono_empleado,
                            $celular_empleado,
                            $email_empleado,
                            $cedula_empleado,
                            $sueldo_empleado,
                            $nss_empleado,
                            $fechaingreso_empleado,
                            $id_tipoempleado,
                            $id_departamento,
                            $id_arsempleado,
                            //$id_horasextras,
                            $edad_empleado,
                            $estado_empleado)
    {
        $data = array(
            'nombre_empleado' => $nombre_empleado,
            'apellido_empleado' => $apellido_empleado,
            'cargo_empleado' => $cargo_empleado,
            'direccion_empleado' => $direccion_empleado,
            'ciudad_empleado' => $ciudad_empleado,
            'telefono_empleado' => $telefono_empleado,
            'celular_empleado' => $celular_empleado,
            'email_empleado'=>$email_empleado,
            'cedula_empleado'=>$cedula_empleado,
            'sueldo_empleado'=>$sueldo_empleado,
            'nss_empleado' => $nss_empleado,
            'fechaingreso_empleado'=>$fechaingreso_empleado,
            'id_tipoempleado'=>$id_tipoempleado,
            'id_departamento'=>$id_departamento,
            'id_arsempleado'=>$id_arsempleado,
            //'id_horasextras'=>$id_horasextras,
            'edad_empleado'=>$edad_empleado,
            'estado_empleado'=>$estado_empleado);

        $this->db->insert('empleados',$data);
    }


    function actualizar($id_empleado,
                        $nombre_empleado,
                        $apellido_empleado,
                        $cargo_empleado,
                        $direccion_empleado,
                        $ciudad_empleado,
                        $telefono_empleado,
                        $celular_empleado,
                        $email_empleado,
                        $cedula_empleado,
                        $sueldo_empleado,
                        $nss_empleado,
                        $fechaingreso_empleado,
                        $edad_empleado,
                        $estado_empleado)
    {
        $data = array(
            'nombre_empleado' => $nombre_empleado,
            'apellido_empleado' => $apellido_empleado,
            'cargo_empleado' => $cargo_empleado,
            'direccion_empleado' => $direccion_empleado,
            'ciudad_empleado' => $ciudad_empleado,
            'telefono_empleado' => $telefono_empleado,
            'celular_empleado' => $celular_empleado,
            'email_empleado'=>$email_empleado,
            'cedula_empleado'=>$cedula_empleado,
            'sueldo_empleado'=>$sueldo_empleado,
            'nss_empleado'=>$nss_empleado,
            'fechaingreso_empleado'=>$fechaingreso_empleado,
            'edad_empleado'=>$edad_empleado,
            'estado_empleado'=>$estado_empleado

        );
        if($id_empleado){
            $this->db->where('id_empleado', $id_empleado);
            $this->db->update('empleados', $data);
        }else{
            $this->db->insert('empleados', $data);
        }

    }

   public function obtener_por_id($id_empleado){
       $this->db->select('*');
       $this->db->from('percepciones');
       $this->db->join('empleados','empleados.id_empleado = percepciones.id_empleado');
       $query = $this->db->get();
       $consulta = $query->row();
       return $consulta;


        //$this->db->where('id_empleado', $id_empleado);
        //$consulta = $this->db->get();
        //$resultado = $consulta->row();
        //return $resultado;
    }

    public function obtener_recibo_por_id($id_empleado){
        $this->db->select('*');
        $this->db->from('empleados');
        $this->db->join('percepciones','empleados.id_empleado = percepciones.id_empleado');
        $query = $this->db->get();
        $consulta = $query->row();
        return $consulta;


    }


    public function obtener_empleado_por_id($id_empleado){
        $this->db->select('id_empleado, 
                            nombre_empleado,
                            apellido_empleado,
                            cargo_empleado,
                            direccion_empleado,
                            ciudad_empleado,
                            telefono_empleado,
                            celular_empleado,
                            email_empleado,
                            cedula_empleado,
                            sueldo_empleado,
                            nss_empleado,
                            fechaingreso_empleado,
                            id_tipoempleado,
                            id_departamento,
                            id_arsempleado,
                            edad_empleado,
                            estado_empleado
                            
                            ');
        $this->db->from('empleados');
        $this->db->where('id_empleado', $id_empleado);
        $consulta = $this->db->get();
        $resultado = $consulta->row();
        return $resultado;
    }

    public function obtener_emp_por_id($id_empleado){
        $this->db->select('id_empleado, 
                            nombre_empleado,
                            apellido_empleado,
                            cargo_empleado,
                            direccion_empleado,
                            ciudad_empleado,
                            telefono_empleado,
                            celular_empleado,
                            email_empleado,
                            cedula_empleado,
                            sueldo_empleado,
                            nss_empleado,
                            fechaingreso_empleado,
                            id_tipoempleado,
                            id_departamento,
                            id_arsempleado,
                            edad_empleado,
                            estado_empleado
                            
                            ');
        $this->db->from('empleados');
        $this->db->where('id_empleado', $id_empleado);
        $consulta = $this->db->get();
        $resultado = $consulta->row();
        return $resultado;
    }


    public function obtener_todos(){
        $this->db->select();
        $this->db->from('empleados');
        $query = $this->db->get();
        return $query->result();
    }

    function insertar_percepydeduc($id_empleado,
                                     $sueldo_bruto ,
                                     $he_empleado,
                                     $comision_empleado,
                                     $ars_empleado,
                                     $afp_empleado,
                                     $prestamo_empleado,
                                     $sueldo_neto,
                                     $fecha_percepcion)
    {
        $data = array('id_empleado' => $id_empleado,
                    'sueldo_bruto' => $sueldo_bruto,
                    'he_empleado' => $he_empleado,
                    'comision_empleado' => $comision_empleado,
                    'ars_empleado' => $ars_empleado,
                    'afp_empleado' => $afp_empleado,
                    'prestamo_empleado' => $prestamo_empleado,
                    'sueldo_neto' => $sueldo_neto,
                    'fecha_percepcion' => $fecha_percepcion);
        //if($id_empleado){
       //     $this->db->where('id_empleado', $id_empleado);
        //    $this->db->update('percepciones', $data);
        //}else{
            $this->db->insert('percepciones', $data);
    }



    public function obtener_nomina(){
        $this->db->select('*');
        $this->db->from('percepciones');
        $this->db->join('empleados','empleados.id_empleado = percepciones.id_empleado');
        $query = $this->db->get();
        return $query->result();
    }

}

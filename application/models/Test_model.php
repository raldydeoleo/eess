<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: omsa
 * Date: 07/10/2016
 * Time: 10:55 AM
 */
class Estudiantes_model extends CI_Model
{


    public function get_estudiantes()
    {


            parent::__construct();


            // armamos la consulta
            $query = $this->db->query('SELECT id_estudiante, estudiante_nombre FROM estudiantes');

            // si hay resultados
            if ($query->num_rows() > 0) {
                // almacenamos en una matriz bidimensional
                foreach ($query->result() as $row)
                    $arrDatos[htmlspecialchars($row->id_estudiante, ENT_QUOTES)] =
                        htmlspecialchars($row->estudiantes, ENT_QUOTES);

                $query->free_result();
                return $arrDatos;
            }



    }
}
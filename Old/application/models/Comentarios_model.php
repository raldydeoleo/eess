<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Comentarios_model extends BS_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function nuevo_comentario($nombre,$email,$asunto,$mensaje,$fecha,$hora)
    {
        $data = array(
            'nombre' => $nombre,
            'email' => $email,
            'asunto' => $asunto,
            'mensajes' => $mensaje,
            'fecha' => $fecha,
            'hora' => $hora,
        );

        $this->db->insert('mensajes',$data);
    }
}

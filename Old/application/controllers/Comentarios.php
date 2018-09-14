<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Comentarios extends BS_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('comentarios_model');
    }

    function index()
    {
        $this->mostrarVista('panel/asesor/inicioform');
    }

    //funcion para procesar el formulario
    function insertar_comentarios()
    {

        if($this->input->post('submit'))
            {$nombre = $this->input->post('nombre');
            $email = $this->input->post('email');
            $asunto = $this->input->post('asunto');
            $mensaje = $this->input->post('mensaje');
            //conseguimos la hora de nuestro país, en mi caso españa
            date_default_timezone_set("Europe/Madrid");
            $fecha = date('Y-m-d');
            $hora= date("H:i:s");
            //ahora procesamos los datos hacía el modelo que debemos crear
            $nueva_insercion = $this->comentarios_model->nuevo_comentario(
                $nombre,
                $email,
                $asunto,
                $mensaje,
                $fecha,$hora
            );
            redirect(base_url("comentarios"), "refresh");
            }

            else
            {

            }
        }
    }



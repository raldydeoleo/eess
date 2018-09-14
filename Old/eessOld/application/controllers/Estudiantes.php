<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiantes extends BS_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('estudiantes_model');
        $this->load->helper('url');
        $this->load->database('default');

    }

    public function index()
    {
        $data['arrDatos'] = $this->estudiantes_model->get_estudiantes();
        $this->mostrarVista('panel/asesor/listaCompras', $data);
    }

}
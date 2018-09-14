<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Estudiantes extends CI_Controller {
    public function __construct() {
        parent::__construct();
       // $this->load->library('form_validation');
    }

    public function index() {
        $data = array();
        $this->load->model('estudiantes_model');
        $data['estudiantes'] = $this->estudiantes_model->obtener_todos();

        $this->load->view('estudiantes/header');
        $this->load->view('estudiantes/index', $data);
        $this->load->view('templates/footer');
    }

    public function ver($id_estudiante){
        $data = array();
        $this->load->model('estudiantes_model');
        $estudiante = $this->estudiantes_model->obtener_por_id($id_estudiante);
        $data['estudiante'] = $estudiante;
        $this->load->view('estudiantes/header');
        $this->load->view('estudiantes/ver', $data);
        $this->load->view('templates/footer');
    }
    public function guardar($id_estudiante=null){
        $data = array();
        $this->load->model('estudiantes_model');
        if($id_estudiante){
            $estudiante = $this->estudiantes_model->obtener_por_id($id_estudiante);
            $data['id_estudiante'] = $estudiante->id_estudiante;
            $data['estudiante_matricula'] = $estudiante->estudiante_matricula;
            $data['estudiante_nombre'] = $estudiante->estudiante_nombre;
            $data['estudiante_apellido'] = $estudiante->estudiante_apellido;
            //$data['estudiante_direccion'] = $estudiante->estudiante_direccion;
            $data['estudiante_telefono'] = $estudiante->estudiante_telefono;
            $data['estudiante_email'] = $estudiante->estudiante_email;

        }else{
            $data['id_estudiante']=null;
            $data['estudiante_matricula']=null;
            $data['estudiante_nombre']=null;
            $data['estudiante_apellido']=null;
            $data['estudiante_direccion']=null;
            $data['estudiante_telefono']=null;
            $data['estudiante_email']=null;

        }
        $this->load->view('estudiantes/header');
        $this->load->view('estudiantes/guardar', $data);
        $this->load->view('templates/footer');
    }
    public function guardar_post($id_estudiante=null){
        if($this->input->post()){
            $estudiante_matricula = $this->input->post('estudiante_matricula');
            $estudiante_nombre = $this->input->post('estudiante_nombre');
            $estudiante_apellido = $this->input->post('estudiante_apellido');
            $estudiante_direccion = $this->input->post('estudiante_direccion');
            $estudiante_telefono = $this->input->post('estudiante_telefono');
            $estudiante_email = $this->input->post('estudiante_email');

            $this->load->model('estudiantes_model');
            $this->estudiantes_model->guardar($estudiante_matricula,
                                              $estudiante_nombre,
                                              $estudiante_apellido,
                                              $estudiante_direccion,
                                              $estudiante_telefono,
                                              $estudiante_email);

            $data['estudiantes'] = $this->estudiantes_model->obtener_todos();
            $this->load->view('estudiantes/header');
            $this->load->view('estudiantes/index', $data);
            $this->load->view('templates/footer');

        }else{
            $this->guardar();

        }
    }
    public function eliminar($id_estudiante){
        $this->load->model('estudiantes_model');
        $this->estudiantes_model->eliminar($id_estudiante);
        redirect('estudiantes');
    }


    public function test()
    {

        $data = array();
        $this->load->model('estudiantes_model');
        $estudiante = $this->estudiantes_model->obtener_todos();
        $data['estudiante'] = $estudiante;
        $this->load->view('estudiantes/header');
        $this->load->view('estudiantes/test', $data);
        $this->load->view('templates/footer');

    }

}
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Tutorial extends BS_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('tutorial_model');
    }

    public function insertar(){

        $this->load->helper('url');

      if(  $this->tutorial_model->insertar_persona());
        echo 'Insertado correctamente';
        redirect('Tutorial');
    }



    public function guardar($id_compra=null){
        $data = array();
        $this->load->model('tutorial_model');
        if($id_compra){
            $compra = $this->tutorial_model->obtener_por_id($id_compra);
            $data['id_compra'] = $compra->id_compra;
            $data['fecha_compra'] = $compra->fecha_compra;
            $data['desc_compra'] = $compra->desc_compra;
            $data['cantidad_compra'] = $compra->cantidad_compra;
            $data['precio_compra'] = $compra->precio_compra;


        }else{

            $data['id_compra']=null;
            $data['fecha_compra']=null;
            $data['desc_compra']=null;
            $data['cantidad_compra']=null;
            $data['precio_compra']=null;
            //$data['id_estudiante']=null;
            //$data['estudiante_matricula']=null;
            //$data['estudiante_nombre']=null;
            //$data['estudiante_apellido']=null;


        }
        $this->mostrarVista('panel/asesor/inicio', $data);
        //$this->load->view('estudiantes/guardar', $data);

    }
    public function guardar_post($id_compra=null){
        if($this->input->post()){
            $fecha_compra = $this->input->post('fecha_compra');
            $desc_compra = $this->input->post('desc_compra');
            $cantidad_compra = $this->input->post('cantidad_compra');
            $precio_compra = $this->input->post('precio_compra');


            $this->load->model('tutorial_model');
            $this->tutorial_model->guardar($fecha_compra,
                                            $desc_compra,
                                            $cantidad_compra,
                                            $precio_compra);
            //$data['estudiantes'] = $this->estudiantes_model->obtener_todos();
            //$this->load->view('estudiantes/header');
                $this->mostrarVista('panel/asesor/inicio', $data);
            //$this->load->view('templates/footer');

        }else{
            $this->guardar();

        }
    }





    public function index() {
        //$data['title'] = 'Inicio';
        //$data['main_content'] = 'Inicio';
        //$this->load->model('compras_model');
        //$compras = $this->compras_model->obtener_todos();
        //$this->asignarDatosVista('compras', $compras);
        $this->mostrarVista('panel/asesor/inicio');
    }


    public function listaCompras() {

        $this->load->model('compras_model');
        $compras = $this->compras_model->obtener_todos();
        $this->asignarDatosVista('compras', $compras);
        $this->mostrarVista('panel/asesor/listaCompras');
    }


}
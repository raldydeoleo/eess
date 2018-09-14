<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
       // $this->load->model('compras_model');
        $this->load->helper('url');
        //$this->load->database('default');
    }

    function insertar_ordencompra()
    {

        if($this->input->post('submit'))
        {   $fecha_ordencompra = $this->input->post('fecha_ordencompra');
            $desc_ordencompra = $this->input->post('desc_ordencompra');
            $monto_ordencompra = $this->input->post('monto_ordencompra');


            //conseguimos la hora de nuestro país, en mi caso españa
            date_default_timezone_set("Europe/Madrid");
            $fecha = date('d-m-Y');
            $hora= date("H:i:s");
            //ahora procesamos los datos hacía el modelo que debemos crear
            $nueva_insercion = $this->compras_model->nueva_ordencompra(
                $fecha_ordencompra,
                $desc_ordencompra,
                $monto_ordencompra
            );
            redirect(base_url("compras"), "refresh");
        }

        else
        {

        }
    }

    public function nueva_compra()
    {   $this->load->model('proveedores_model');
        $proveedores = $this->proveedores_model->obtener_todos();
        $this->mostrarVista('panel/asesor/compraform', $proveedores);
    }




    public function Oldindex() {
        $this->load->model('compras_model');

       $compras = $this->compras_model->obtener_todos();
       //$this->asignarDatosVista('compras', $compras);
        $this->load->view('panel/asesor/listaCompras', $compras);
    }


    public function ver($id_compra){
        $data = array();
        $this->load->model('compras_model');
        $compra = $this->compras_model->obtener_por_id($id_compra);
        $data['compra'] = $compra;
        $this->asignarDatosVista('compra', $compra);
        $this->mostrarVista('panel/asesor/verCompra');

    }

    public function eliminar($id_compra){
        $this->load->model('compras_model');
        $this->compras_model->eliminar($id_compra);
        redirect(base_url("compras"), "refresh");
    }


    /**
     * @author: Raldy De Oleo
     * @version: ALPHA
     * Vista grupal
     * Muestra listado de todas las compras registradas.
     */
    public function listaCompras() {

        $this->load->model('compras_model');
        $compras = $this->compras_model->obtener_todos();
        $this->asignarDatosVista('compras', $compras);
        $this->mostrarVista('panel/asesor/listaCompras');
    }


    public function index()
    {

	    $this->load->view('welcome_message');
	}
}

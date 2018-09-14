<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Clientes
 * @property CI_Session $session
 * @property Cliente $cliente
 */
class Clientes extends CI_Controller {


    public function __construct() {
        parent::__construct();
        $this->cargarLibrerias();
        $this->load->model('clientes_model');
        $this->valoresDefecto = array();
        $this->notificacion = '';
    }

public function asignarValorDefecto($index, $valor) {
        $this->valoresDefecto[$index] = $valor;
    }


 public function asignarDatosVista($index, $valor) {
        $this->vistaData[$index] = $valor;
    }

 /**
     * Carga y muestra una vista especificada.
     * @author Wolfan Fabian
     * @version 0.0.3-ALPHA
     * @param $vista - Ruta relativa de la vista a mostrar
     * @return bool - Retorna true.
     */
    public function  mostrarVista($vista) {
        //$this->vistaData[TEMPLATE_BREADCUMBS] = $this->breadcumbs;
        //$this->vistaData[TEMPLATE_VALORES_DEFECTO] = $this->valoresDefecto;
        //$this->vistaData[TEMPLATE_NOTIFICACION] = $this->notificacion;
        //$this->vistaData[TEMPLATE_MEMBRESIA] = $this->obtenerMembresiaSesion();

        // Transformacion de la vista al contenido del template
       //$templateData[TEMPLATE_CONTENIDO] = $this->load->view($vista, $this->vistaData, true);

        $this->load->view('templates/backend');
        return true;
    }


    /**
     * @author: Raldy De Oleo
     * Seguimiento de clientes
     * Vista grupal
     * Muestra un listado de clientes
     */
    public function seguimientoClientes(){
        $clientes = $this->clientes_model->obtener_todos();
        $this->asignarDatosVista('clientes', $clientes);
        $this->mostrarVista('panel/secretaria/seguimientoClientes');
        
    }


    //funcion para procesar el formulario
    function insertar_cliente()
    {

        if($this->input->post('submit'))
        {   $nombre_cliente = $this->input->post('nombre_cliente');
            $apellido_cliente = $this->input->post('apellido_cliente');
            $empresa_cliente = $this->input->post('empresa_cliente');
            $rnc_cliente = $this->input->post('rnc_cliente');
            $direccion_cliente = $this->input->post('direccion_cliente');
            $ciudad_cliente = $this->input->post('ciudad_cliente');
            $telefono_cliente = $this->input->post('telefono_cliente');
            $email_cliente = $this->input->post('email_cliente');

            //ahora procesamos los datos hacía el modelo que debemos crear

            $nueva_insercion = $this->clientes_model->nuevo_cliente(
                $nombre_cliente,
                $apellido_cliente,
                $empresa_cliente,
                $rnc_cliente,
                $direccion_cliente,
                $ciudad_cliente,
                $telefono_cliente,
                $email_cliente
            );
            redirect(base_url("clientes"), "refresh");
        }

        else
        {

        }
    }

    public function guardar($id_cliente=null){
        $data = array();
        $this->load->model('clientes_model');
        if($id_cliente){
            $cliente = $this->clientes_model->obtener_por_id($id_cliente);
            $data['id_cliente'] = $cliente->id_cliente;
            $data['nombre_cliente'] = $cliente->nombre_cliente;
            $data['apellido_cliente'] = $cliente->apellido_cliente;
            $data['empresa_cliente'] = $cliente->empresa_cliente;
            $data['rnc_cliente'] = $cliente->rnc_cliente;
            $data['rnc_cliente'] = $cliente->direccion_cliente;
            $data['ciudad_cliente'] = $cliente->ciudad_cliente;
            $data['telefono_cliente'] = $cliente->telefono_cliente;
            $data['email_cliente'] = $cliente->email_cliente;

        }else{
            $data['id_cliente']=null;
            $data['nombre_cliente']=null;
            $data['apellido_cliente']=null;
            $data['empresa_cliente']=null;
            $data['rnc_cliente']=null;
            $data['direccion_cliente']=null;
            $data['ciudad_cliente']=null;
            $data['telefono_cliente']=null;
            $data['email_cliente']=null;

        }

        $this->mostrarVista('panel/secretaria/clienteform', $data);

    }
    public function guardar_post($id_cliente=null){
        if($this->input->post()){
            $nombre_cliente = $this->input->post('nombre_cliente');
            $apellido_cliente = $this->input->post('apellido_cliente');
            $empresa_cliente = $this->input->post('empresa_cliente');
            $rnc_cliente = $this->input->post('rnc_cliente');
            $direccion_cliente = $this->input->post('direccion_cliente');
            $ciudad_cliente = $this->input->post('ciudad_cliente');
            $telefono_cliente = $this->input->post('telefono_cliente');
            $email_cliente = $this->input->post('email_cliente');

            $this->load->model('clientes_model');
            $this->clientes_model->guardar($nombre_cliente,
                $apellido_cliente,
                $empresa_cliente,
                $rnc_cliente,
                $direccion_cliente,
                $ciudad_cliente,
                $telefono_cliente,
                $email_cliente);


                redirect('clientes');
        }else{
            $this->guardar();
        }
    }




    public function nuevo_cliente()
    {   $this->load->model('clientes_model');
       $clientes = $this->clientes_model->obtener_todos();
        $this->asignarDatosVista('clientes', $clientes);
        $this->mostrarVista('panel/secretaria/clienteform');

    }


    public function index() {
        //$this->load->model('clientes_model');
        //$clientes = $this->clientes_model->obtener_todos();
        //$this->asignarDatosVista('clientes', $clientes);
        $this->load->view('welcome_message');
    }


    public function ver($id_cliente){
        $data = array();
        $this->load->model('clientes_model');
        $clientes = $this->clientes_model->obtener_por_id($id_cliente);
        $data['clientes'] = $clientes;
        $this->asignarDatosVista('clientes', $clientes);
        $this->mostrarVista('panel/asesor/verCliente');

    }

    public function eliminar($id_cliente){
        $this->load->model('clientes_model');
        $this->clientes_model->eliminar($id_cliente);
        redirect(base_url("clientes"), "refresh");
    }

    public function editar($id_cliente=null){
        $data = array();
        $this->load->model('clientes_model');
        if($id_cliente){
            $cliente = $this->clientes_model->obtener_por_id($id_cliente);
            $data['id_cliente'] = $cliente->id_cliente;
            $data['nombre_cliente'] = $cliente->nombre_cliente;
            $data['apellido_cliente'] = $cliente->apellido_cliente;
            $data['empresa_cliente'] = $cliente->empresa_cliente;
            $data['rnc_cliente'] = $cliente->rnc_cliente;
            $data['rnc_cliente'] = $cliente->direccion_cliente;
            $data['ciudad_cliente'] = $cliente->ciudad_cliente;
            $data['telefono_cliente'] = $cliente->telefono_cliente;
            $data['email_cliente'] = $cliente->email_cliente;

        }else{
            $data['id_cliente']=null;
            $data['nombre_cliente']=null;
            $data['apellido_cliente']=null;
            $data['empresa_cliente']=null;
            $data['rnc_cliente']=null;
            $data['direccion_cliente']=null;
            $data['ciudad_cliente']=null;
            $data['telefono_cliente']=null;
            $data['email_cliente']=null;

        }

        $this->asignarDatosVista('clientes', $data);
        $this->mostrarVista('panel/secretaria/clienteform', $data);


    }

    protected function cargarLibrerias(){
       // $this->load->model(CLIENTE_MODELO);
        //$this->load->model(VEHICULO_MODELO);

    }

    public function mostrar($idCliente=0){
        if ($idCliente==0)
            $this->mostrarVarios();
    }

    public function mostrarVarios(){
        $clientes = $this->cliente->leerTodos();
        echo json_encode($clientes);
    }



}
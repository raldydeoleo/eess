<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Clientes
 * @property CI_Session $session
 * @property Cliente $cliente
 */
class Clientes extends BS_Controller {


    public function __construct() {
        parent::__construct();
        $this->cargarLibrerias();
        $this->load->model('clientes_model');
        $this->valoresDefecto = array();
        $this->notificacion = '';
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
    
    

    public function nuevo_cliente()
    {   $this->load->model('clientes_model');
        $clientes = $this->clientes_model->obtener_todos();
        $this->asignarDatosVista('clientes', $clientes);
        $this->mostrarVista('panel/secretaria/clienteform');

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
            return $this->index();
            //redirect(base_url("clientes"), "refresh");
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
            $data['direccion_cliente'] = $cliente->direccion_cliente;
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
        //$this->asignarDatosVista('clientes', $data);
       // $this->mostrarVista('panel/secretaria/editarCliente');
        $this->load->view('panel/secretaria/editarCliente', $data);

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
        return $this->index();
        //redirect(base_url("clientes"), "refresh");
    }


    public function actualizar($id_cliente){
        if($this->input->post($id_cliente)){
            $nombre_cliente = $this->input->post('nombre_cliente');
            $apellido_cliente = $this->input->post('apellido_cliente');
            $empresa_cliente = $this->input->post('empresa_cliente');
            $rnc_cliente = $this->input->post('rnc_cliente');
            $direccion_cliente = $this->input->post('direccion_cliente');
            $ciudad_cliente = $this->input->post('ciudad_cliente');
            $telefono_cliente = $this->input->post('telefono_cliente');
            $email_cliente = $this->input->post('email_cliente');

            $this->load->model('clientes_model');
            $this->clientes_model->actualizar($nombre_cliente,
                $apellido_cliente,
                $empresa_cliente,
                $rnc_cliente,
                $direccion_cliente,
                $ciudad_cliente,
                $telefono_cliente,
                $email_cliente);
        }else{
            $this->guardar();
        }
    }

    public function index() {
        $this->load->model('clientes_model');
        $clientes = $this->clientes_model->obtener_todos();
        $this->asignarDatosVista('clientes', $clientes);
        $this->mostrarVista('panel/secretaria/seguimientoClientes');

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
        //$this->load->model(CLIENTE_MODELO);
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
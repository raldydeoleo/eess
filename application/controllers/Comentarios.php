<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Comentarios extends BS_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url','html' ));
        $this->load->library('table');
        $this->load->model('comentarios_model');


    }

    public function index()
        {
            $this->load->model('comentarios_model');
            $comentarios = $this->comentarios_model->obtener_todos();
            $this->asignarDatosVista('comentarios', $comentarios);
            $this->mostrarVista('panel/secretaria/seguimientoComentarios');
        }


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
            return $this->index();
            //redirect(base_url("comentarios"), "refresh");
            }

            else
            {

            }
        }

    public function editarOld($id){
        $data = array();
        $this->load->model('comentarios_model');
        if($id){
            $comentario = $this->comentarios_model->obtener_por_id($id);
            $data['$nombre'] = $comentario->nombre;
            $data['email'] = $comentario->email;
            $data['fecha'] = $comentario->fecha;

        }else{
            $data['nombre']=null;
            $data['email']=null;
            $data['fecha']=null;


        }

        $this->mostrarVista('panel/asesor/inicioform', $data );

    }

    public function ver($id_proveedor){
        $data = array();
        $this->load->model('comentarios_model');
        $proveedor = $this->comentarios_model->obtener_por_id($id_proveedor);
        $data['proveedor'] = $proveedor;
        $this->asignarDatosVista('proveedor', $proveedor);
        $this->mostrarVista('panel/secretaria/verProveedor');

    }
    /**
    function ver($id){
        $data = array();
        $this->load->model('comentarios_model');
        $mensaje = $this->comentarios_model->obtener_por_id($id);
        //$data['mensaje'] = $mensaje;
        $this->asignarDatosVista('mensaje', $mensaje);
        $this->mostrarVista('panel/asesor/inicioform');

    }
        */

    public function asignarImangen($id){
        $data = array();
        $this->load->model('compras_model');
                if ($id){
                $ordencompra = $this->compras_model->obtener_orden_por_id();
                $data['id_ordencompra']= $ordencompra->id_ordencompra;
                $data['id'] = $ordencompra->id;
            }

    }


    public function editar($id){
        $data = array();
        $this->load->model('comentarios_model');
        if($id){
            $proveedor = $this->comentarios_model->obtener_por_id($id);
            $data['id_proveedor'] = $proveedor->id_proveedor;
            $data['cnombre_proveedor'] = $proveedor->cnombre_proveedor;
            $data['capellido_proveedor'] = $proveedor->capellido_proveedor;
            $data['ctelefono_proveedor'] = $proveedor->ctelefono_proveedor;
            $data['cemail_proveedor'] = $proveedor->cemail_proveedor;
            $data['cdireccion_proveedor'] = $proveedor->cdireccion_proveedor;
            $data['cciudad_proveedor'] = $proveedor->cciudad_proveedor;
            $data['empresa_proveedor'] = $proveedor->empresa_proveedor;
            $data['rnc_proveedor'] = $proveedor->rnc_proveedor;
            $data['edireccion_proveedor'] = $proveedor->edireccion_proveedor;
            $data['etelefono1_proveedor'] = $proveedor->etelefono1_proveedor;
            $data['etelefono2_proveedor'] = $proveedor->etelefono2_proveedor;
            $data['eemail1_proveedor'] = $proveedor->eemail1_proveedor;
            $data['eemail2_proveedor'] = $proveedor->eemail2_proveedor;
            $data['banco1_proveedor']  =  $proveedor->banco1_proveedor;
            $data['banco2_proveedor']  = $proveedor->banco2_proveedor;
            $data['banco3_proveedor']  = $proveedor->banco3_proveedor;
             $data['cuenta1_proveedor'] = $proveedor->cuenta1_proveedor;
            $data['cuenta2_proveedor'] = $proveedor->cuenta2_proveedor;
             $data['cuenta3_proveedor'] = $proveedor->cuenta3_proveedor;
             $data['tipocuenta1_proveedor'] = $proveedor->tipocuenta1_proveedor;
             $data['tipocuenta2_proveedor'] = $proveedor->tipocuenta2_proveedor;
             $data['tipocuenta3_proveedor'] = $proveedor->tipocuenta3_proveedor;


        }else{
            $data['cnombre_proveedor']=null;
            $data['capellido_proveedor']=null;
            $data['ctelefono_proveedor']=null;
            $data['cemail_proveedor']=null;
            $data['cdireccion_proveedor']=null;
            $data['cciudad_proveedor']=null;
            $data['empresa_proveedor'] = null;
            $data['rnc_proveedor'] = null;
            $data['edireccion_proveedor'] = null;
            $data['etelefono1_proveedor'] = null;
            $data['etelefono2_proveedor'] = null;
            $data['eemail1_proveedor'] = null;
            $data['eemail2_proveedor'] = null;
            $data['banco1_proveedor']  = null;
            $data['banco2_proveedor']  = null;
            $data['banco3_proveedor']  = null;
             $data['cuenta1_proveedor'] = null;
            $data['cuenta2_proveedor'] = null;
             $data['cuenta3_proveedor'] = null;
             $data['tipocuenta1_proveedor'] = null;
             $data['tipocuenta2_proveedor'] = null;
             $data['tipocuenta3_proveedor'] = null;
        }
        $this->load->view('panel/asesor/inicioform', $data);
    }

    public function guardar_post($id_proveedor){

        if($this->input->post()){

            $id_proveedor = $this->input->post('id_proveedor');
            $cnombre_proveedor = $this->input->post('cnombre_proveedor');
            $capellido_proveedor = $this->input->post('capellido_proveedor');
            $ctelefono_proveedor = $this->input->post('ctelefono_proveedor');
            $cemail_proveedor = $this->input->post('cemail_proveedor');
            $cdireccion_proveedor = $this->input->post('cdireccion_proveedor');
            $cciudad_proveedor = $this->input->post('cciudad_proveedor');
            $empresa_proveedor = $this->input->post('empresa_proveedor');
            $rnc_proveedor = $this->input->post('rnc_proveedor');
            $edireccion_proveedor = $this->input->post('edireccion_proveedor');
            $etelefono1_proveedor = $this->input->post('etelefono1_proveedor');
            $etelefono2_proveedor = $this->input->post('etelefono2_proveedor');
            $eemail1_proveedor = $this->input->post('eemail1_proveedor');
            $eemail2_proveedor = $this->input->post('eemail2_proveedor');
            $banco1_proveedor = $this->input->post('banco1_proveedor');
            $banco2_proveedor = $this->input->post('banco2_proveedor');
            $banco3_proveedor = $this->input->post('banco3_proveedor');
            $cuenta1_proveedor = $this->input->post('cuenta1_proveedor');
            $cuenta2_proveedor = $this->input->post('cuenta2_proveedor');
            $cuenta3_proveedor = $this->input->post('cuenta3_proveedor');
            $tipocuenta1_proveedor = $this->input->post('tipocuenta1_proveedor');
            $tipocuenta2_proveedor = $this->input->post('tipocuenta2_proveedor');
            $tipocuenta3_proveedor = $this->input->post('tipocuenta3_proveedor');



            $this->load->model('comentarios_model');
            $this->comentarios_model->actualizar($id_proveedor,
                                                $cnombre_proveedor,
                                                $capellido_proveedor,
                                                $ctelefono_proveedor,
                                                $cemail_proveedor,
                                                $cdireccion_proveedor,
                                                $cciudad_proveedor,
                                                $empresa_proveedor,
                                                $rnc_proveedor,
                                                $edireccion_proveedor,
                                                $etelefono1_proveedor,
                                                $etelefono2_proveedor,
                                                $eemail1_proveedor,
                                                $eemail2_proveedor,
                                                $banco1_proveedor,
                                                $banco2_proveedor,
                                                $banco3_proveedor,
                                                $cuenta1_proveedor,
                                                $cuenta2_proveedor,
                                                $cuenta3_proveedor,
                                                $tipocuenta1_proveedor,
                                                $tipocuenta2_proveedor,
                                                $tipocuenta3_proveedor);
          }else{

          $this->insertar_comentarios();
        }
        
        return $this->index();
        //redirect(base_url("comentarios/index"), "refresh");
    }



}




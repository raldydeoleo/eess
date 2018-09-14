<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * Class Empleados
 * @property CI_Session $session
 * @property Empleados $empleados
 */
class Empleados extends BS_Controller {


    public function __construct() {
        parent::__construct();
        $this->load->helper(array('url','html' ));
        $this->cargarLibrerias();
        $this->load->model('empleados_model');
        
    }


    public function nuevo_empleado(){
        $this->mostrarVista('citas/crearEmpleado');
    }

    //funcion para procesar el formulario
    function insertar_empleado()
    {

        if($this->input->post('submit'))
        {   $nombre_empleado = $this->input->post('nombre_empleado');
            $apellido_empleado = $this->input->post('apellido_empleado');
            $cargo_empleado = $this->input->post('cargo_empleado');
            $id_departamento = $this->input->post('id_departamento');
            $direccion_empleado = $this->input->post('direccion_empleado');
            $ciudad_empleado = $this->input->post('ciudad_empleado');
            $telefono_empleado = $this->input->post('telefono_empleado');
            $celular_empleado = $this->input->post('celular_empleado');
            $email_empleado = $this->input->post('email_empleado');
            $cedula_empleado = $this->input->post('cedula_empleado');
            $sueldo_empleado = $this->input->post('sueldo_empleado');
            $nss_empleado = $this->input->post('nss_empleado');
            $id_arsempleado = $this->input->post('id_arsempleado');
            $comentario_empleado = $this->input->post('comentario_empleado');
            $fechaingreso_empleado = $this->input->post('fechaingreso_empleado');
            $id_tipoempleado = $this->input->post('id_tipoempleado');
            $edad_empleado = $this->input->post('edad_empleado');
            $estado_empleado = $this->input->post('estado_empleado');


            $nueva_insercion = $this->empleados_model->nuevo_empleado(

            $nombre_empleado,
            $apellido_empleado,
            $cargo_empleado,
            $id_departamento,
            $direccion_empleado,
            $ciudad_empleado,
            $telefono_empleado,
            $celular_empleado,
            $email_empleado,
            $cedula_empleado,
            $sueldo_empleado,
            $nss_empleado,
            $id_arsempleado,
            $comentario_empleado,
            $fechaingreso_empleado,
            $id_tipoempleado,
            $edad_empleado,
            $estado_empleado

            );
            return $this->listaEmpleados();
            //redirect(base_url("empleados/listaEmpleados"), "refresh");
        }

        else
        {

        }
    }

    public function editar($id){
        $data = array();
        $this->load->model('empleados_model');
        if($id){
            $empleado = $this->empleados_model->obtener_empleado_por_id($id);
            $data['id_empleado'] = $empleado->id_empleado;
            $data['nombre_empleado'] = $empleado->nombre_empleado;
            $data['apellido_empleado'] = $empleado->apellido_empleado;
            $data['cargo_empleado'] = $empleado->cargo_empleado;
            $data['direccion_empleado'] = $empleado->direccion_empleado;
            $data['ciudad_empleado'] = $empleado->ciudad_empleado;
            $data['telefono_empleado'] = $empleado->telefono_empleado;
            $data['celular_empleado'] = $empleado->celular_empleado;
            $data['email_empleado'] = $empleado->email_empleado;
            $data['cedula_empleado'] = $empleado->cedula_empleado;
            $data['sueldo_empleado'] = $empleado->sueldo_empleado;
            $data['nss_empleado'] = $empleado->nss_empleado;
            $data['comentario_empleado'] = $empleado->comentario_empleado;
            $data['fechaingreso_empleado']  = $empleado->fechaingreso_empleado;
            $data['edad_empleado'] = $empleado->edad_empleado;
            $data['estado_empleado'] = $empleado->estado_empleado;


        }else{

            $data['nombre_empleado']=null;
            $data['apellido_empleado']=null;
            $data['cargo_empleado']=null;
            $data['direccion_empleado']=null;
            $data['ciudad_empleado']=null;
            $data['telefono_empleado']=null;
            $data['celular_empleado']=null;
            $data['email_empleado']=null;
            $data['cedula_empleado']=null;
            $data['sueldo_empleado']=null;
            $data['nss_empleado']=null;
            $data['comentario_empleado']=null;
            $data['fechaingreso_empleado']=null;
            $data['edad_empleado'] =null;
            $data['estado_empleado']=null;



        }
        $this->load->view('panel/asesor/editaEmpleado', $data);
        // $this->asignarDatosVista('empleado', $empleado);
        //$this->mostrarVista('citas/crearEmpleado');
    }


    public function guardar_post($id_empleado){

        if($this->input->post()){

            $id_empleado = $this->input->post('id_empleado');
            $nombre_empleado = $this->input->post('nombre_empleado');
            $apellido_empleado = $this->input->post('apellido_empleado');
            $cargo_empleado = $this->input->post('cargo_empleado');
            $direccion_empleado = $this->input->post('direccion_empleado');
            $ciudad_empleado = $this->input->post('ciudad_empleado');
            $telefono_empleado = $this->input->post('telefono_empleado');
            $celular_empleado = $this->input->post('celular_empleado');
            $email_empleado = $this->input->post('email_empleado');
            $cedula_empleado = $this->input->post('cedula_empleado');
            $sueldo_empleado = $this->input->post('sueldo_empleado');
            $nss_empleado = $this->input->post('nss_empleado');
            $comentario_empleado = $this->input->post('comentario_empleado');
            $fechaingreso_empleado = $this->input->post('fechaingreso_empleado');
            $edad_empleado = $this->input->post('edad_empleado');
            $estado_empleado = $this->input->post('estado_empleado');





            $this->load->model('empleados_model');
            $this->empleados_model->actualizar($id_empleado,
                                                $nombre_empleado,
                                                $apellido_empleado,
                                                $cargo_empleado,
                                                $direccion_empleado,
                                                $ciudad_empleado,
                                                $telefono_empleado,
                                                $celular_empleado,
                                                $email_empleado,
                                                $cedula_empleado,
                                                $sueldo_empleado,
                                                $nss_empleado,
                                                $comentario_empleado,
                                                $fechaingreso_empleado,
                                                $edad_empleado,
                                                $estado_empleado


            );
        }else{

            $this->insertar_empleado();
        }
        return $this->listaEmpleados();
        //redirect(base_url("empleados/listaEmpleados"), "refresh");
    }



    public function eliminar($id_empleado){
        $this->load->model('empleados_model');
        $this->empleados_model->eliminar($id_empleado);
        return $this->listaEmpleados();
        //redirect(base_url("empleados/listaEmpledos"), "refresh");
    }


    /**
     * @author: Raldy De Oleo
     * Muestra un Empleado especifico.
     * Vista Individual.
     * Muestra informacion sobre un empleado con todos los datos importantes de este.
     */
    public function ver($id_empleado){
        $data = array();
        $this->load->model('empleados_model');
        $empleado = $this->empleados_model->obtener_empleado_por_id($id_empleado);
        $data['empleado'] = $empleado;
        $this->asignarDatosVista('empleado', $empleado);
        $this->mostrarVista('panel/asesor/verEmpleado');

    }


    /**
     * @author: Raldy De Oleo
     * Lista de empleados.
     * Vista Grupal
     * Muestra un listado de empleados con todos los datos importantes de estos.
     */
    public function listaEmpleados(){
        $data = array();
        $this->load->model('empleados_model');
        $empleados = $this->empleados_model->obtener_todos();
        $this->asignarDatosVista('empleados', $empleados);
        //$this->mostrarVista('panel/secretaria/seguimientoEmpleados');
        $this->mostrarVista('panel/secretaria/listaEmpleados');
    }


    /**
     * @author: Raldy De Oleo
     * Vista de un Empleado.
     * Vista Individual Empleados
     * Permite ver un  empleado y modficar algunos datos.
     */
    public function verEmpleado($id){
        $data = array();
        $this->load->model('empleados_model');
        if($id){
            $empleado = $this->empleados_model->obtener_empleado_por_id($id);
            $data['id_empleado'] = $empleado->id_empleado;
            $data['nombre_empleado'] = $empleado->nombre_empleado;
            $data['apellido_empleado'] = $empleado->apellido_empleado;
            $data['cargo_empleado'] = $empleado->cargo_empleado;
            $data['direccion_empleado'] = $empleado->direccion_empleado;
            $data['ciudad_empleado'] = $empleado->ciudad_empleado;
            $data['telefono_empleado'] = $empleado->telefono_empleado;
            $data['celular_empleado'] = $empleado->celular_empleado;
            $data['email_empleado'] = $empleado->email_empleado;
            $data['cedula_empleado'] = $empleado->cedula_empleado;
            $data['sueldo_empleado'] = $empleado->sueldo_empleado;
            $data['nss_empleado'] = $empleado->nss_empleado;
            $data['fechaingreso_empleado']  = $empleado->fechaingreso_empleado;
            $data['edad_empleado'] = $empleado->edad_empleado;
            $data['estado_empleado'] = $empleado->estado_empleado;

        }else{

            $data['nombre_empleado']=null;
            $data['apellido_empleado']=null;
            $data['cargo_empleado']=null;
            $data['direccion_empleado']=null;
            $data['ciudad_empleado']=null;
            $data['telefono_empleado']=null;
            $data['celular_empleado']=null;
            $data['email_empleado']=null;
            $data['cedula_empleado']=null;
            $data['sueldo_empleado']=null;
            $data['nss_empleado']=null;
            $data['fechaingreso_empleado']=null;
            $data['edad_empleado'] =null;
            $data['estado_empleado']=null;


        }
        $this->load->view('citas/verEmpleado', $data);
        //$data = array();
       // $this->load->model('empleados_model');
       // $empleados = $this->empleados_model->editar();
        //$this->asignarDatosVista('empleados', $empleados);
        //$this->mostrarVista('citas/verEmpleado', $data);
    }


  

    
    public function generar_recibo($id){
        $data = array();
        $this->load->model('empleados_model');
        if($id){
            $empleado = $this->empleados_model->obtener_emp_por_id($id);
            $data['id_empleado'] = $empleado->id_empleado;
            $data['nombre_empleado'] = $empleado->nombre_empleado;
            $data['apellido_empleado'] = $empleado->apellido_empleado;
            $data['cargo_empleado'] = $empleado->cargo_empleado;
            $data['direccion_empleado'] = $empleado->direccion_empleado;
            $data['ciudad_empleado'] = $empleado->ciudad_empleado;
            $data['telefono_empleado'] = $empleado->telefono_empleado;
            $data['celular_empleado'] = $empleado->celular_empleado;
            $data['email_empleado'] = $empleado->email_empleado;
            $data['cedula_empleado'] = $empleado->cedula_empleado;
            $data['sueldo_empleado'] = $empleado->sueldo_empleado;
            $data['nss_empleado'] = $empleado->nss_empleado;
            $data['fechaingreso_empleado']  = $empleado->fechaingreso_empleado;
            $data['edad_empleado'] = $empleado->edad_empleado;
            $data['estado_empleado'] = $empleado->estado_empleado;
            //$data['sueldo_neto'] =$empleado->sueldo_neto;
            //$data['id_percepcion'] =$empleado->id_percepcion;
            //$data['fecha_percepcion'] =$empleado->fecha_percepcion;
            //$data['comision_empleado'] =$empleado->comision_empleado;
            //$data['he_empleado'] =$empleado->he_empleado;


        }else{

            $data['nombre_empleado']=null;
            $data['apellido_empleado']=null;
            $data['cargo_empleado']=null;
            $data['direccion_empleado']=null;
            $data['ciudad_empleado']=null;
            $data['telefono_empleado']=null;
            $data['celular_empleado']=null;
            $data['email_empleado']=null;
            $data['cedula_empleado']=null;
            $data['sueldo_empleado']=null;
            $data['nss_empleado']=null;
            $data['fechaingreso_empleado']=null;
            $data['edad_empleado'] =null;
            $data['estado_empleado']=null;
            //$data['sueldo_neto']=null;
            //$data['id_percepcion']=null;
            //$data['fecha_percepcion']=null;
            //$data['comision_empleado']=null;
            //$data['he_empleado']=null;
        }

        //$this->asignarDatosVista('data', $data);
        $this->load->view('citas/reciboNomina', $data);
    }

    protected function cargarLibrerias(){
        // $this->load->model(CLIENTE_MODELO);
        // $this->load->model(VEHICULO_MODELO);
    }

    public function percepydeduc($id_empleado){

        if($this->input->post()){

            $id_empleado = $this->input->post('id_empleado');
            $id_proyecto = $this->input->post('id_proyecto');
            $id_asociado= $this->input->post('id_asociado');
            $sueldo_bruto = $this->input->post('sueldo_bruto');
            $he_empleado = $this->input->post('he_empleado');
            $comision_empleado = $this->input->post('comision_empleado');
            $total_percepcion = $this->input->post('total_percepcion');
            $ars_empleado = $this->input->post('ars_empleado');
            $afp_empleado = $this->input->post('afp_empleado');
            $prestamo_empleado = $this->input->post('prestamo_empleado');
            $isr_empleado = $this->input->post('isr_empleado');
            $total_deduccion = $this->input->post('total_deduccion');
            $bono = $this->input->post('bono');
            $sueldo_vacaciones = $this->input->post('sueldo_vacaciones');
            $sueldo_navidad = $this->input->post('sueldo_navidad');
            $total_otras_perc = $this->input->post('total_otras_perc');
            $porciento_asociado = $this->input->post('porciento_asociado');
            $sueldo_neto = $this->input->post('sueldo_neto');
            $fecha_percepcion = $this->input->post('fecha_percepcion');

            $this->load->model('empleados_model');
            $this->empleados_model->insertar_percepydeduc($id_empleado,
                                                            $id_proyecto,
                                                            $id_asociado,
                                                          $sueldo_bruto,
                                                           $he_empleado,
                                                     $comision_empleado,
                                                      $total_percepcion,
                                                          $ars_empleado,
                                                          $afp_empleado,
                                                     $prestamo_empleado,
                                                          $isr_empleado,
                                                       $total_deduccion,
                                                                  $bono,
                                                     $sueldo_vacaciones,
                                                        $sueldo_navidad,
                                                      $total_otras_perc,
                                                    $porciento_asociado,
                                                           $sueldo_neto,
                                                      $fecha_percepcion);
        }else{

            $this->insertar_percepydeduc();
        }
       return $this->listaEmpleados();
        //redirect(base_url("empleados/listaEmpleados"), "refresh");
    }


  public function generar_nomina(){
        $data = array();
        $this->load->model('empleados_model');
        $nomina = $this->empleados_model->obtener_nomina();
        $this->asignarDatosVista('nomina', $nomina);
        $this->mostrarVista('citas/listaNomina');

    }


 public function genera_nomina(){
        // $this->mostrarVista('citas/generaNomina');
        $this->load->view('panel/asesor/generaNomina');
    }


public function gen_nomina(){

        $this->mostrarVista('panel/asesor/genNomina');

    }
    
    public function prn_nomina(){

        $this->mostrarVista('panel/asesor/prnNomina');

    }

public function nomina_por_fecha(){


    if($this->input->post('submit')) {
        $fecha_nomina = $this->input->post('fecha_nomina');
        $this->load->model('empleados_model');
        $nomina = $this->empleados_model->obtener_nomina_por_fecha($fecha_nomina);
        $this->asignarDatosVista('nomina', $nomina);
        $this->mostrarVista('citas/nominaGenerada');
    }
 }


public function genera_nomina_por_fecha($fecha_nomina){
        $data = array();
        $this->load->model('empleados_model');
        $nomina = $this->empleados_model->obtener_nomina_por_fecha($fecha_nomina);
        $this->asignarDatosVista('nomina', $nomina);
        $this->mostrarVista('citas/nominaGenerada');
    }

public function obtener_fecha(){
        $data = array();
        $this->load->model('empleados_model');
        $nomina = $this->empleados_model->get_dates($fecha_desde, $fecha_hasta);
        $this->asignarDatosVista('nomina', $nomina);
        $this->mostrarVista('citas/nominaGenerada');
    }

    function mostrar_datos($id){
        $data = array();
        $this->load->model('empleados_model');
        if($id) {
            $empleado = $this->empleados_model->obtener_por_id($id);
            $data['nombre_empleado'] = $empleado->nombre_empleado;
            $data['cedula_empleado'] = $empleado->cedula_empleado;
            $data['sueldo_empleado'] = $empleado->sueldo_empleado;

        }else{
            $data['nombre_empleado']=null;
            $data['cedula_empleado']=null;
            $data['sueldo_empleado']=null;

        }

        $this->mostrarVista('citas/mostrarEmpleado', $data);
    }

}
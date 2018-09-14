<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//No hay includes en las vistas
//Para poder editar las funciones desde aqui
// y mantener las vistas limpias.

/**
 * Class Inicio
 * @property Cliente $cliente
 * @property Vehiculo $vehiculo
 * @property Orden_trabajo $Orden_trabajo
 */
class Inicio extends BS_Controller {


    public function __construct() {
        parent::__construct();
        $this->cargarLibrerias();
//        $this->load->library('ConsultaArgumentos');
    }

    protected function cargarLibrerias() {
        $this->load->model(CLIENTE_MODELO);
        $this->load->model(VEHICULO_MODELO);
        $this->load->model(ORDEN_TRABAJO_MODELO);
    }

    /**
     * Carga y muestra una vista especificada.
     *
     * @param $vista . Ruta relativa de la vista a mostrar
     *
     * @return bool. Retorna true.
     */
    private function show($vista) {
        //TRANSFORMACION DE LAS VARIABLES A LA VARIABLE A PASAR AL TEMPLATE
        $this->load->view($vista, []);

        return TRUE;
    }


    public function index() {
        redirect('inicio/ejemplo');
    }

    public function portada() {
        $this->load->view('inicio/portada');
    }


    /**
     * Identifica un usuario segun sus credenciales para dar paso a las funcionalidades del sistema
     *
     * @author           Diego Sanchez
     * @version          0.0.3-ALPHA
     */
    public function login() {

        $this->load->model('dbm/gestores/Usuario_gestor', 'usuarioGestor');
        $this->load->model('dbm/gestores/Membresia_gestor', 'membresiaGestor');

        if (!$_POST) {
            return !$this->show('inicio/login');
        }


        $usuario = $this->usuarioGestor->setWhereSelf(USERNAME_CN, $this->input->post(USERNAME_CN))
            ->setWhereSelf(CLAVE_CN, hash('sha512', $this->input->post(CLAVE_CN)))
            ->usuario();


        if (!$usuario) {
            return !$this->show('inicio/login');
        }
        $membresia = $this->membresiaGestor->membresiaSegunUsuario($usuario);
        $this->session->set_userdata(ROL_PQ, $membresia->getRolNombre());
        $this->session->set_userdata(ID_ROL, $membresia->getRolID());
        $this->session->set_userdata(USERNAME_CN, $usuario->obtenerUsername());
        $this->session->set_userdata(ID_USUARIO, $usuario->id());


        redirect("panel/{$this->session->userdata(ROL_PQ)}");

        return TRUE;

    }


    /**
     * Cierra la session
     */
    function logout() {
        $this->session->sess_destroy();
        redirect(base_url('inicio/login'));
    }







    function test() {
        echo json_encode($this->session);
        $this->session->set_userdata('nickname', 'wfabian');
        echo json_encode($this->session);
    }


    public function panel() {
        $this->load->view('panel/header');
        $this->load->view('panel/dashboard'); //Contenido
        $this->load->view('panel/footer');
    }

    public function sign() {
        $this->load->view('panel/header');
        $this->load->view('panel/lock');
        $this->load->view('panel/footer');
    }

    public function notfound() {
        $this->load->view('panel/header');
        $this->load->view('panel/404');
        //$this->load->view('panel/footer');
    }


    //SECRETARIA
    //Vista No. 1
    // Vista agregada a CTRL citas
    // todo: borrar
    public function secretariaPanel() {
        $this->load->view('panel/header');
        $this->load->view('panel/secretaria/panel');

        $vehiculos = $this->vehiculo->leerTodos(); //todo: EJEMPLO
        //echo json_encode($vehiculos);

        $this->load->view('panel/secretaria/seguimiento', array('vehiculos' => $vehiculos)); //Contenido
        $this->load->view('panel/consultbar');
        $this->load->view('panel/footer');
    }

    // Vista agregada a CTRL citas
    public function secretariaAgenda() {
        $this->load->view('panel/header');
        $this->load->view('panel/secretaria/panel');
        $this->load->view('panel/secretaria/formAgenda'); //Contenido
        $this->load->view('panel/consultbar');
        $this->load->view('panel/footer');
    }


    /**
     * Vista No. 3
     */
    // Vista agregada a CTRL citas
    public function secretariaCitas() {
        $this->load->view('panel/header');
        $this->load->view('panel/secretaria/panel');
        $this->load->view('panel/secretaria/citasagendadas'); //Contenido
        $this->load->view('panel/consultbar');
        $this->load->view('panel/footer');
    }


    //ASESOR
    /**
     * Muestra la vista con un estimado del precio de piezas y/o servicios
     * @author Raldy De Oleo
     * @version
     *
     */
    public function secretariaEstimaciones() {

        $this->mostrarVista('panel/secretaria/estimaciones'); //Contenido

    }


    //ASESOR
    /**
     * Muestra la vista del panel para el asesor
     * @author
     * @version
     */
    public function asesorPanel() {
        $this->load->view('panel/header');
        $this->load->view('panel/asesor/panel');
        $this->load->view('panel/footer');
    }

    //CONTROLISTA
    //Sin uso
    public function controlistaPanel() {
        $this->load->view('panel/header');
        $this->load->view('panel/controlista/panel');
        //$this->load->view(''); //Contenido
        $this->load->view('panel/consultbar');
        $this->load->view('panel/footer');

    }

    //Vista agregada a CTRL Ordenes_trabajo
    public function asignarOrdendetrabajo(){
        $this->mostrarVista('panel/controlista/asignarOT');
    }





    //SUPERVISOR
    //Vista agregada a CTRL Ordenes_trabajo
    public function seguimientoEquipo(){
        $this->mostrarVista('panel/controlista/seguimentoequipo');
    }

    //Vista agregada a CTRL Ordenes_trabajo
    public function detalleTecnico(){
        $this->mostrarVista('panel/controlista/detalletecnico');
    }


    function ejemplo() {
        $this->load->view('template');
    }

}
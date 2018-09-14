<?php

/**
 * Define la clase para trabajar con el CRUD de la entidad Usuario
 * @author Diego Sanchez
 * @version 0.0.3-ALPHA
 * @property CI_Input $input - Singleton para manejar las entradas de formularios html
 * @property CI_Session session - Singleton para manejar las sesiones
 * @property array $vistaData - Array para contener la data a pasar a la vista a mostrar

 */
class Usuarios extends CI_Controller {


    /**
     * Construye el controlador para trabajar con el CRUD de los usuarios
     * @author Diego Sanchez
     * @version 0.0.3-ALPHA
     * @todo (18/7/2016) Wolfan Fabian - Verificar si la carga de los modelos y las librerias se hara en metodos extras
     */
    public function __construct() {
        parent::__construct(false);
         $this->cargarLibrerias();
    }


    /**
     * Carga todos los modelos necesarios
     *
     * @author Wolfan Fabian
     * @version 0.0.3-ALPHA
     * @todo (17/7/2016) Wolfan Fabian - Verificar si se utilizara la membresia
     */
    protected function cargarModelos(){
        // Modulo Seguridad
        $this->load->model(USUARIO_MODELO);
        $this->load->model(PERMISO_USUARIO_MODELO);


        // Modulo Fundamentos
        //$this->load->model(EMPRESA_MODELO);
        $this->load->model(PERSONA_MODELO);

    }

 public function asignarValorDefecto($index, $valor) {
        $this->valoresDefecto[$index] = $valor;
    }


 public function asignarDatosVista($index, $valor) {
        $this->vistaData[$index] = $valor;
    }

 /**
     * Carga y muestra una vista especificada.
     *
     * @author Wolfan Fabian
     * @version 0.0.3-ALPHA
     * @param $vista - Ruta relativa de la vista a mostrar
     * @return bool - Retorna true.
     * @todo (17/7/2016) Wolfan Fabian - Verificar si se utilizar� BREADCUMBS y con que nombre se trabajar�a en caso de
     * @todo (17/7/2016) Wolfan Fabian - Verificar si se utilizar� NOTIFICACIOES
     */
    public function  mostrarVista($vista) {
        //$this->vistaData[TEMPLATE_BREADCUMBS] = $this->breadcumbs;
        //$this->vistaData[TEMPLATE_VALORES_DEFECTO] = $this->valoresDefecto;
        //$this->vistaData[TEMPLATE_NOTIFICACION] = $this->notificacion;
        //$this->vistaData[TEMPLATE_MEMBRESIA] = $this->obtenerMembresiaSesion();

        // Transformacioni de la vista al contenido del template
        //$templateData[TEMPLATE_CONTENIDO] = $this->load->view($vista, $this->vistaData, true);
      //$this->load->view('templates/backend', $templateData);
        $this->load->view('templates/backend');
        return true;
    }




    /**
     * Carga todas las librerias necesarias
     *
     * @author Wolfan Fabian
     * @version 0.0.3-ALPHA
     */
    private function cargarLibrerias() {

    }


    /**
     * Metodo base para mostrar el login como vista inicial
     *
     * @author Diego Sanchez
     * @version 0.0.3-ALPHA
     * @todo: (18/7/2016) Wolfan Fabian - Trabajar la definicion de este metodo
     */
    public function index() {
        $this->showLogin();
    }


    /**
     * Identifica un usuario segun sus credenciales para dar paso a las funcionalidades del sistema
     *
     * @author Diego Sanchez
     * @version 0.0.3-ALPHA
     * @todo (18/7/2016) Wolfan Fabian - Verificar si este metodo permanecera en el controlador usuario y ira a controlador Acceso
     */
    public function login() {
        if (!$_POST) return !$this->showLogin();

        /**
        $argumentos = new ConsultaArgumentos();
        $argumentos->asignarValor(USERNAME_CN, $this->input->post(USERNAME_CN));
        $argumentos->asignarValor(CLAVE_CN, hash('sha512', $this->input->post(CLAVE_CN)));
        $usuario = $this->Usuario->leerPrimero($argumentos);
        if (!$usuario) return !$this->showLogin();

        $this->session->set_userdata(USERNAME_CN, $usuario[USERNAME_CN]);
        $this->session->set_userdata(TEMPLATE_MEMBRESIA, 'VALOR DE PRUEBA');
            */
        //redirect(base_url('dashboards/mostrar'));
        $this->mostrarVista('dashboards/mostrar');
        return true;

    }


    /**
     * Auxiliar para mostrar el login
     *
     * @author Wolfan Fabian
     * @version 0.0.3-ALPHA
     * @return bool - Retorna true siempre
     * @todo (18/7/2016) Wolfan Fabian - Verificar si permanecera como metodo, o si se puede transformar en un metodo anidado del login
     */
    private function showLogin(){
        $this->load->view('usuarios/login');
        return true;
    }


    /**
     * Metodo para destruir la data en session y salir del sistema
     *
     * @author Diego Sanchez
     * @version 0.0.3-ALPHA
     * @return bool - Retorna true
     * @todo (18/7/2016) Wolfan Fabian - Verificar si este metodo permanecera en el controlador usuario y ira a controlador Acceso
     * @todo: (18/7/2016) Wolfan Fabian - Trabajar la definicion de este metodo
     */
    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url('usuarios/login'));
        return true;
    }


    /**
     * Muestra los datos del usuario o de los usuarios
     *
     * @author Diego Sanchez
     * @version 0.0.3-ALPHA
     * @param int $idUsuario - Id del usuario que se desea mostrar, cero para mostrarlo todos
     * @todo (26/7/2016) Diego Sanchez - Debe prepararse el metodo para paginacion
     */
    public function mostrar($idUsuario =0){
        if ($idUsuario!=0) {
            $this->mostrarUno($idUsuario);
        }else{
            $this->mostrarVarios();
        }
    }


    /**
     * Muestra los datos de un usuario en especifico
     *
     * @author Diego Sanchez
     * @version 0.0.3-ALPHA
     * @param $idUsuario - Id del usuario que se desea mostrar
     */
    private function mostrarUno($idUsuario){
        $usuario = $this->Usuario->leerPrimeroSegunCampo(ID_USUARIO, $idUsuario);
        $this->asignarDatosVista('usuario', $usuario);
        $this->mostrarVista('usuarios/mostrarUno');
    }


    /**
     * Muestra los datos de todos los usuarios
     *
     * @author Diego Sanchez
     * @version 0.0.3-ALPHA
     */
    private function mostrarVarios() {
        $usuarios = $this->Usuario->leerTodos();
        $this->asignarDatosVista('usuarios', $usuarios);
        $this->mostrarVista('usuarios/mostrarVarios');
    }


    /**
     * Carga la vista necesaria para crear o editar un usuario
     *
     * @author Diego Sanchez
     * @version 0.0.3-ALPHA
     * @param int $idUsuario - Id del usuario que se desea trabajar, cero en caso para crear
     * @return bool - Retorna true cuando ha llegado al final del método, false en caso contrario
     */
    public function editar($idUsuario = 0) {

        $usuario = $this->Usuario->leerPrimeroSegunCampo(ID_USUARIO, $idUsuario);
        if ($this->determinarMostrarFormulario($usuario)) return false;


        $formularioData = $this->obtenerDatosFormulario(array(
            NOMBRES_CN, APELLIDOS_CN, SEXO_CN, FECHA_NACIMIENTO_CN, TELEFONO_CONTACTO_CN, TELEFONO_SECUNDARIO_CN,
            EMAIL_CN, USERNAME_CN, CLAVE_CN, ESTADO_CN

        ));
        $usuario = $this->escribirCambiosPrincipales($usuario, $formularioData);

        redirect("usuarios/mostrar/{$usuario[ID_USUARIO]}");
        return true;

    }


    /**
     * Determina si se mostrara el formulario html para el pedido de los datos
     *
     * @author Diego Sanchez
     * @version 0.0.3-ALPHA
     * @param $usuario - Objeto principal que se está intentando editar
     * @return bool - Retorna true si se va a mostrar el formulario, false en caso contrario
     */
    private function determinarMostrarFormulario($usuario) {
        if (!$_POST) {
            $mostrarFormulario = true;
        } else {
            if (!$this->validarFormulario()) $mostrarFormulario = true;
            else $mostrarFormulario = false;
        }


        if ($mostrarFormulario) {
            $this->asignarDatosVista('usuario', $usuario);
            return $this->mostrarVista('usuarios/editar');
        }

        return false;
    }


    /**
     * Escribe los datos correspondiente al objeto principal determinando si se trata de crear o de actualizar
     *
     * @author Diego Sanchez
     * @version 0.0.3-ALPHA
     * @param array $usuario - Objeto principal sobre el cual se desean escribir los cambios
     * @param array $formularioData - Datos principales provenientes del formulario html
     * @return array|null - Retorna el objeto principal actualizado
     */
    private function escribirCambiosPrincipales($usuario, $formularioData) {
        $personaData = extrarSubArreglo($formularioData, array(
            NOMBRES_CN, APELLIDOS_CN, SEXO_CN, FECHA_NACIMIENTO_CN, TELEFONO_CONTACTO_CN, TELEFONO_SECUNDARIO_CN,
            EMAIL_CN
        ));

        $usuarioData = extrarSubArreglo($formularioData, array(
            USERNAME_CN, CLAVE_CN, ESTADO_CN
        ));

        $clave = $usuarioData[CLAVE_CN];
        $usuarioData[CLAVE_CN] = hash('sha512', $clave);

        if (isset($usuario)) {
            if (!verificarIgualdad($usuario, $personaData)) {
                $this->Persona->actualizar($usuario, $personaData);

                if (!verificarIgualdad($usuario, $usuarioData)) {
                    $usuario = $this->Usuario->actualizar($usuario, $usuarioData);
                }else{
                    $usuario = $this->Usuario->leerPrimeroSegunClavePrincipal($usuario[ID_USUARIO]);
                }

            } else {
                $usuario = $this->Usuario->actualizar($usuario, $usuarioData);
            }

        } else {

            // completar el registro de la persona
            $personaData[FECHA_NACIMIENTO_CN] = date(FECHA_FORMATO, mktime(0, 0, 0, 8, 18, 1984));
            $personaData[HABILITADO_CN] = true;
            $persona = $this->Persona->crear($personaData);


            // completar el registro del usuario
            $usuarioData[ID_PERSONA] = $persona[ID_PERSONA];
            $usuarioData[HABILITADO_CN] = true;
            $usuario = $this->Usuario->crear($usuarioData);
        }

        return $usuario;
    }


    /**
     * Crear y correo el conjunto de validaciones a realizar al formulario
     *
     * @author Diego Sanchez
     * @version 0.0.3-ALPHA
     * @return bool - Retorna true si el formulario pasa la validacion, false si no
     */
    private function validarFormulario() {
        $rules=array();


        $rule['field'] = NOMBRES_CN;
        $rule['label'] = NOMBRES_CN;
        $rule['rules'] = 'required';
        $rules[] = $rule;


        $rule['field'] = APELLIDOS_CN;
        $rule['label'] = APELLIDOS_CN;
        $rule['rules'] = 'required';
        $rules[] = $rule;


        //$rule['field'] = FECHA_NACIMIENTO_CN;
        //$rule['label'] = FECHA_NACIMIENTO_CN;
        //$rule['rules'] = 'required';
        //$rules[] = $rule;


        $rule['field'] = TELEFONO_CONTACTO_CN;
        $rule['label'] = TELEFONO_CONTACTO_CN;
        $rule['rules'] = 'required';
        $rules[] = $rule;


        //$rule['field'] = TELEFONO_SECUNDARIO_CN;
        //$rule['label'] = TELEFONO_SECUNDARIO_CN;
        //$rule['rules'] = 'required';
        //$rules[] = $rule;


        $rule['field'] = EMAIL_CN;
        $rule['label'] = EMAIL_CN;
        $rule['rules'] = 'required';
        $rules[] = $rule;


        $rule['field'] = SEXO_CN;
        $rule['label'] = SEXO_CN;
        $rule['rules'] = 'required';
        $rules[] = $rule;

        $rule['field'] = USERNAME_CN;
        $rule['label'] = USERNAME_CN;
        $rule['rules'] = 'required';
        $rules[] = $rule;


        $rule['field'] = CLAVE_CN;
        $rule['label'] = CLAVE_CN;
        $rule['rules'] = 'required';
        $rules[] = $rule;

        $rule['field'] = ESTADO_CN;
        $rule['label'] = ESTADO_CN;
        $rule['rules'] = 'required';
        $rules[] = $rule;

        $this->form_validation->set_rules($rules);
        return $this->form_validation->run();
    }
}
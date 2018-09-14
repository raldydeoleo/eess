<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Datos extends BS_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('datos_model');
    }
    function index()
    {
        $data['titulo'] = 'Update con codeIgniter';
        $data['proveedores'] = $this->datos_model->proveedores();
        $this->load->view('panel/secretaria/datos_vista', $data);
    }

    //función encargada de mostrar los formularios por ajax
    //dependiendo el botón que hayamos pulsado
    function mostrar_datos()
    {
        //recuperamos la id que hemos envíado por ajax
        $id_proveedor = $this->input->post('id_proveedor');
        //solicitamos al modelo los datos de esa id
        $edicion = $this->datos_model->obtener_por_id($id_proveedor);
        //recorremos el array con los datos de ese id
        //y creamos el formulario con el helper form

        $cnombre_proveedor = array(
            'name' => 'cnombre_proveedor',
            'id' => 'cnombre_proveedor',
           // 'value' => $edicion->cnombre_proveedor
        );
        $capellido_proveedor = array(
            'name' => 'capellido_proveedor',
            'id' => 'capellido_proveedor',
            //'value' => $edicion->capellido_proveedor
        );
        $cdireccion_proveedor = array(
            'name' => 'cdireccion_proveedor',
            'id' => 'cdireccion_proveedor',
           // 'value' => $edicion->cdireccion_proveedor
        );
        $cciudad_proveedor = array(
            'name' => 'cciudad_proveedor',
            'id' => 'cciudad_proveedor',
            'cols' => '50',
            'rows' => '6',
          //  'value' => $edicion->cciudad_proveedor
        );

        $ctelefono_proveedor = array(
            'name' => 'ctelefono_proveedor',
            'id' => 'ctelefono_proveedor',
            'cols' => '50',
            'rows' => '6',
           // 'value' => $edicion->ctelefono_proveedor
        );

        $cemail_proveedor = array(
            'name' => 'cemail_proveedor',
            'id' => 'cemail_proveedor',
            'cols' => '50',
            'rows' => '6',
           // 'value' => $edicion->cemail_proveedor
        );

        $cedula_proveedor = array(
            'name' => 'cedula_proveedor',
            'id' => 'cedula_proveedor',
            'cols' => '50',
            'rows' => '6',
          //  'value' => $edicion->cedula_proveedor
        );

        $empresa_proveedor = array(
            'name' => 'empresa_proveedor',
            'id' => 'empresa_proveedor',
            'cols' => '50',
            'rows' => '6',
          //  'value' => $edicion->empresa_proveedor
        );

        $rnc_proveedor = array(
            'name' => 'rnc_proveedor',
            'id' => 'rnc_proveedor',
            'cols' => '50',
            'rows' => '6',
          //  'value' => $edicion->rnc_proveedor
        );

        $submit = array(
            'name' => 'editando',
            'id' => 'editando',
            'value' => 'Editar mensaje'
        );
        $oculto = array(
            'id_mensaje' => $id_proveedor
        );

        //mostramos el formulario con los datos cargados
        ?>
        <?= form_open(base_url() . 'datos/actualizar_datos','', $oculto) ?>
        <?= form_label('Nombre') ?>
        <?= form_input($cnombre_proveedor) ?>

        <?= form_label('Apellido') ?>
        <?= form_input($capellido_proveedor) ?>

        <?= form_label('Direccion') ?>
        <?= form_input($cdireccion_proveedor) ?>

        <?= form_label('Ciudad') ?>
        <?= form_input($cciudad_proveedor) ?>

        <?= form_label('Telefono') ?>
        <?= form_input($ctelefono_proveedor) ?>

        <?= form_label('Email') ?>
        <?= form_input($cemail_proveedor) ?>


        <?= form_label('Cedula') ?>
        <?= form_input($cedula_proveedor) ?>


        <?= form_label('Empresa') ?>
        <?= form_textarea($empresa_proveedor) ?>

        <?= form_label('RNC') ?>
        <?= form_input($rnc_proveedor) ?>

        <?= form_submit($submit) ?>
        <?php echo form_close() ?>
        <?php
    }

    //función encargada de actualizar los datos
    function actualizar_proveedor()
    {        $cnombre_proveedor = $this->input->post('cnombre_proveedor');
             $capellido_proveedor = $this->input->post('capellido_proveedor');
             $cdireccion_proveedor = $this->input->post('cdireccion_proveedor');
             $cciudad_proveedor = $this->input->post('cciudad_proveedor');
             $ctelefono_proveedor = $this->input->post('ctelefono_proveedor');
             $cemail_proveedor = $this->input->post('cemail_proveedor');
             $cedula_proveedor = $this->input->post('cedula_proveedor');
             $empresa_proveedor = $this->input->post('empresa_proveedor');
             $rnc_proveedor = $this->input->post('rnc_proveedor');


        $actualizar = $this->datos_model->actualizar_proveedor($cnombre_proveedor,
            $capellido_proveedor,
            $cdireccion_proveedor,
            $cciudad_proveedor,
            $ctelefono_proveedor,
            $cemail_proveedor,
            $cedula_proveedor,
            $empresa_proveedor,
            $rnc_proveedor);
        //si la actualización ha sido correcta creamos una sesión flashdata para decirlo
        if($actualizar)
        {
            $this->session->set_flashdata('actualizado', 'El mensaje se actualizó correctamente');
            redirect('../datos', 'refresh');
        }
    }
}
/*application/controllers/datos.php
 * el controlador datos.php
 */



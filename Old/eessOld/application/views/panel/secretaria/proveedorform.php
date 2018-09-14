
 <div class="panel panel-default">

    <div class="panel-body">

        <div class="col-md-12">
            <div class="panel-primary">
                <div class="panel-heading">

                    <h4 class="panel-title">Registro de Proveedor</h4>
                </div>
            </div>


            <?=form_open(base_url().'proveedores/insertar_proveedor');

//creamos los arrays que compondran nuestro formulario

$nombre_proveedor = array(
    'name' => 'nombre_proveedor',
    'id' => 'nombre_proveedor',
    'class' => 'form-control',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('nombre_proveedor') // con esto al procesar el formulario de forma incorrecta quedará guardado el dato que le habíamos puesto
);

//el segundo array(campo email)

$apellido_proveedor = array(
    'name' => 'apellido_proveedor',
    'id' => 'apellido_proveedor',
    'class' => 'form-control',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('apellido_proveedor')
);

//el tercero...(campo asunto)
$empresa_proveedor = array(
    'name' => 'empresa_proveedor',
    'id' => 'empresa_proveedor',
    'class' => 'form-control',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('empresa_proveedor')
);

//el cuarto...(campo mensaje)
$rnc_proveedor = array(
    'name' => 'rnc_proveedor',
    'id' => 'rnc_proveedor',
    'class' => 'form-control',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('rnc_proveedor')
);

//el cuarto...(campo mensaje)
$telefono_proveedor = array(
    'name' => 'telefono_proveedor',
    'id' => 'telefono_proveedor',
    'class' => 'form-control',
    'rows' => 10,
    'cols' => 40,
    'value' => set_value('telefono_proveedor')
);

//el cuarto...(campo mensaje)
$direccion_proveedor = array(
    'name' => 'direccion_proveedor',
    'id' => 'direccion_proveedor',
    'class' => 'form-control',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('direccion_proveedor')
);

//el cuarto...(campo mensaje)
$ciudad_proveedor = array(
    'name' => 'ciudad_proveedor',
    'id' => 'ciudad_proveedor',
    'class' => 'form-control',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('ciudad_proveedor')
);

            //el cuarto...(campo mensaje)
            $email_proveedor = array(
                'name' => 'email_proveedor',
                'id' => 'email_proveedor',
                'class' => 'form-control',
                'size' => '50',
                'style' => 'width:100%',
                'value' => set_value('email_proveedor')
            );


//el botón submit de nuestro formulario
$submit = array(
    'name' => 'submit',
    'id' => 'submit',
    'class' => 'form-control',
    'class' => 'btn btn-primary',
    'value' => 'Registrar',
    'title' => 'Registrar'
);
            //el botón submit de nuestro formulario
            $cancel = array(
                'name' => 'cancel',
                'id' => 'cancel',
                'class' => 'form-control',
                'class' => 'btn btn-danger',
                'value' => 'Cancelar',
                'title' => 'Cancelar'
            );
?>
<?php
echo form_fieldset('Nuevo Proveedor');
?>

            <form class="form-horizontal form-bordered">

                <div class="form-group">

                    <div class="col-md-4">
                        <?php echo form_label('Nombre: '); ?>
                        <div class="input-group col-sm-12">
                            <?php echo form_input($nombre_proveedor); ?>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <?php echo form_label('Apellido: '); ?>
                        <div class="input-group mb15 col-sm-12">
                            <?php echo form_input($apellido_proveedor); ?>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <?php echo form_label('Empresa: '); ?>
                        <div class="input-group mb15 col-sm-12">
                            <?php echo form_input($empresa_proveedor); ?>

                        </div>

                    </div>
                </div>


                    <div class="form-group">





                            <div class="col-md-4">

                                <?php echo form_label('RNC: '); ?>
                                <div class="input-group mb15 col-sm-12">
                                    <?php echo form_input($rnc_proveedor); ?>

                                </div>
                            </div>

                            <div class="col-md-3">

                                <?php echo form_label('Telefono: '); ?>
                                <div class="input-group mb15 col-sm-12">
                                    <?php echo form_input($telefono_proveedor); ?>

                                </div>
                            </div>


                            <div class="col-md-6">

                                <?php echo form_label('Direccion: '); ?>
                                <div class="input-group mb15 col-sm-12">
                                    <?php echo form_input($direccion_proveedor); ?>

                                </div>
                            </div>

                        <div class="col-md-6">

                            <?php echo form_label('Ciudad: '); ?>
                            <div class="input-group mb15 col-sm-12">
                                <?php echo form_input($ciudad_proveedor); ?>

                            </div>
                        </div>

                        <div class="col-md-6">

                            <?php echo form_label('email: '); ?>
                            <div class="input-group mb15 col-sm-12">
                                <?php echo form_input($email_proveedor); ?>

                            </div>
                        </div>

                     </div>
                    <div class="form-group">
                    <div class="col-md-8">
                            </div>
                                <div class="col-md-2">
                                    <?php echo form_reset($cancel);
                                    //nuestro boton submit
                                    ?>
                                </div>

                            <div class="col-md-2">
                                <div class="input-group mb15 col-sm-12">
                                    <?php echo form_submit($submit);
                                    //nuestro boton submit
                                    ?>
                                </div>
                            </div>
                   </div>
</form>
<table>


       <tr>
        <td>

        </td>
        <td>
            <!--con la funcion validation_errors ci nos muestra los errores al pulsar el botón submit, la podemos colocar donde queramos-->
            <font color="red" style="font-weight: bold; font-size: 14px; text-decoration: underline"><?php echo validation_errors(); ?></font>
        </td>
    </tr>

    <?php
    echo form_close();
    ?>
</table>
<?php
echo form_fieldset_close();
?>


       </div>
    </div>
</div>


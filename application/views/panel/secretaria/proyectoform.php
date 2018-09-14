<div class="col-md-8">
 <div class="panel panel-default">

    <div class="panel-body">
     <div class="col-md-12">
        <div class="col-md-12">
            <div class="panel-primary">
                <div class="panel-heading">

                    <h4 class="panel-title">Registro de Proyecto</h4>
                </div>
            </div>


            <?=form_open(base_url().'index.php/proyectos/insertar_proyecto');

//creamos los arrays que compondran nuestro formulario

$nombre_proyecto = array(
    'name' => 'nombre_proyecto',
    'id' => 'nombre_proyecto',
    'class' => 'form-control',
    'required'=> 'required',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('nombre_proyecto') // con esto al procesar el formulario de forma incorrecta quedará guardado el dato que le habíamos puesto
);

//el segundo array(campo email)

$monto_proyecto = array(
    'name' => 'monto_proyecto',
    'id' => 'apellido_proveedor',
    'class' => 'form-control',
    'required'=> 'required',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('monto_proyecto')
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

            //el botón cancelar de nuestro formulario
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
echo form_fieldset('Nuevo Proyecto');
?>

            <form class="form-horizontal form-bordered">

                <div class="form-group">

                    <div class="col-md-9">
                        <?php echo form_label('Nombre: '); ?>
                        <div class="input-group col-sm-12">
                            <?php echo form_input($nombre_proyecto); ?>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <?php echo form_label('Monto: '); ?>
                        <div class="input-group mb15 col-sm-12">
                            <?php echo form_input($monto_proyecto); ?>
                        </div>
                    </div>
                    <div class="col-md-8">
                    </div>

                    <div class="col-md-2">
                     <div class="input-group mb15 col-sm-12">
                            <?php echo form_reset($cancel);
                            //nuestro boton submit
                            ?>

                        </div>
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
       <tr><td></td>
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
</div>



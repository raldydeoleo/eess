<?php /** @var array $proveedores */?>

 <div class="panel panel-default">

    <div class="panel-body">

        <div class="col-md-12">
            <div class="panel-primary">
                <div class="panel-heading">

                    <h4 class="panel-title">Registro de Compras</h4>
                </div>
            </div>


            <?=form_open(base_url().'compras/insertar_compra');

//creamos los arrays que compondran nuestro formulario

$fecha_compra = array(
    'name' => 'fecha_compra',
    'id' => 'fecha_compra',
    'size' => '50',
    'style' => 'width:50%',
    'value' => set_value('fecha_compra') // con esto al procesar el formulario de forma incorrecta quedará guardado el dato que le habíamos puesto
);

//el segundo array(campo email)

$hora_compra = array(
    'name' => 'hora_compra',
    'id' => 'hora_compra',
    'size' => '50',
    'style' => 'width:50%',
    'id' => 'hora_compra',
    'value' => set_value('hora_compra')
);

//el tercero...(campo asunto)
$cantidad_compra = array(
    'name' => 'cantidad_compra',
    'id' => 'cantidad_compra',
    'size' => '50',
    'style' => 'width:50%',
    'value' => set_value('cantidad_compra')
);

//el cuarto...(campo mensaje)
$desc_compra = array(
    'name' => 'desc_compra',
    'id' => 'desc_compra',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('desc_compra')
);

//el cuarto...(campo mensaje)
$cantidad_compra = array(
    'name' => 'cantidad_compra',
    'id' => 'cantidad_compra',
    'rows' => 10,
    'cols' => 40,
    'value' => set_value('cantidad_compra')
);

//el cuarto...(campo mensaje)
$unidad_compra = array(
    'name' => 'unidad_compra',
    'id' => 'unidad_compra',
    'rows' => 10,
    'cols' => 40,
    'value' => set_value('unidad_compra')
);

//el cuarto...(campo mensaje)
$precio_compra = array(
    'name' => 'precio_compra',
    'id' => 'precio_compra',
    'rows' => 10,
    'cols' => 40,
    'value' => set_value('precio_compra')
);

//el botón submit de nuestro formulario
$submit = array(
    'name' => 'submit',
    'id' => 'submit',
    'value' => 'Registrar Compra',
    'title' => 'Registrar Compra'
);
?>
<?php
echo form_fieldset('Nueva Compra');
?>


            <form class="form-horizontal form-bordered">

                <div class="form-group">

                    <div class="col-md-6">
                        <?php echo form_label('Fecha: '); ?>
                        <div class="input-group col-sm-12">
                            <?php echo form_input($fecha_compra); ?>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <?php echo form_label('Hora: '); ?>
                        <div class="input-group mb15 col-sm-12">
                            <?php echo form_input($hora_compra); ?>
                        </div>
                    </div>

                    <div class="col-md-12">


                    </div>
                </div>

                <div class="form-group">
                <div class="col-md-4">

                    <label class="col-sm-12">Orden de Compra:</label>
                    <select class="form-control">
                        <option>Seleccione</option>
                        <option>ODC-10001</option>
                        <option>ODC-10002</option>
                        <option>ODC-10003</option>
                        <option>ODC-10004</option>
                    </select>


                </div>
                </div>


                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="col-sm-12">Proveedor</label>

                            <select class="form-control">
                                <option>Seleccione</option>
                                <option value=""></option>
                                <option>Proveedor 2</option>
                                <option>Proveedor 3</option>
                                <option>Proveedor 4</option>

                                <option></option>
                            </select>

                        </div>
                        <div class="col-md-6">
                            <label class="col-sm-12">Proyecto</label>
                            <select class="form-control">
                                <option>Seleccione</option>
                                <option>Proyecto 1</option>
                                <option>Proyecto 2</option>
                                <option>Proyecto 3</option>
                                <option></option>
                            </select>

                        </div>
                    </div>
                    <div class="form-group">


                            <div class="col-md-2">

                                    <?php echo form_label('Cantidad: '); ?>
                                    <div class="input-group mb15 col-sm-12">
                                        <?php echo form_input($cantidad_compra); ?>

                                    </div>
                            </div>


                            <div class="col-md-4">

                                <?php echo form_label('Descripcion: '); ?>
                                <div class="input-group mb15 col-sm-12">
                                    <?php echo form_input($desc_compra); ?>

                                </div>
                            </div>

                            <div class="col-md-3">

                                <?php echo form_label('Unidad: '); ?>
                                <div class="input-group mb15 col-sm-12">
                                    <?php echo form_input($unidad_compra); ?>

                                </div>
                            </div>


                            <div class="col-md-2">

                                <?php echo form_label('Monto: '); ?>
                                <div class="input-group mb15 col-sm-12">
                                    <?php echo form_input($precio_compra); ?>

                                </div>
                            </div>
                     </div>

                    <div class="col-md-10">
                    </div>
                        <div class="col-md-2">


                        <div class="input-group mb15 col-sm-12">
                            <?php echo form_submit($submit);
                            //nuestro boton submit
                            ?>

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


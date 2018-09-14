<?php /** @var array $proveedores */?>

 <div class="panel panel-default">

    <div class="panel-body">

        <div class="col-md-12">
            <div class="panel-primary">
                <div class="panel-heading">

                    <h4 class="panel-title">Crear Orden de Compra</h4>
                </div>
            </div>


            <?=form_open(base_url().'compras/insertar_ordencompra');

//creamos los arrays que compondran nuestro formulario

$fecha_ordencompra = array(
    'name' => 'fecha_ordencompra',
    'id' => 'datepicker',
    'class' => 'form-control',
    'size' => '50',
    'style' => 'width:25%',
    'value' => set_value('fecha_ordencompra') // con esto al procesar el formulario de forma incorrecta quedará guardado el dato que le habíamos puesto
);
            $item_ordencompra = array(
                'name' => 'item_ordencompra',
                'id' => 'item_ordencompra',
                'class' => 'form-control',
                'size' => '50',
                'style' => 'width:100%',
                'value' => set_value('item_ordencompra')
            );

$desc_ordencompra = array(
    'name' => 'desc_ordencompra',
    'id' => 'desc_ordencompra',
    'class' => 'form-control',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('desc_ordencompra')
);


$cantidad_ordencompra = array(
    'name' => 'cantidad_ordencompra',
    'id' => 'cantidad_ordencompra',
    'class' => 'form-control',
    'rows' => 10,
    'cols' => 40,
    'value' => set_value('cantidad_compra')
);

//el cuarto...(campo mensaje)
    $unidad_ordencompra = array(
    'name' => 'unidad_ordencompra',
    'id' => 'unidad_ordencompra',
    'class' => 'form-control',
    'rows' => 10,
    'cols' => 40,
    'value' => set_value('unidad_ordencompra')
);
            $precio_ordencompra = array(
                'name' => 'precio_ordencompra',
                'id' => 'precio_ordencompra',
                'class' => 'form-control',
                'rows' => 10,
                'cols' => 40,
                'value' => set_value('precio_ordencompra')
            );

            $subtotal_ordencompra = array(
                'name' => 'subtotal_ordencompra',
                'id' => 'subtotal_ordencompra',
                'class' => 'form-control',
                'rows' => 10,
                'cols' => 40,
                'value' => set_value('subtotal_ordencompra')
            );

            $itebis_ordencompra = array(
                'name' => 'itebis_ordencompra',
                'id' => 'itebis_ordencompra',
                'class' => 'form-control',
                'rows' => 10,
                'cols' => 40,
                'value' => set_value('itebis_ordencompra')
            );


//el cuarto...(campo mensaje)
    $monto_ordencompra = array(
    'name' => 'monto_ordencompra',
    'id' => 'monto_ordencompra',
    'class' => 'form-control',
    'rows' => 10,
    'cols' => 40,
    'value' => set_value('monto_ordencompra')
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
//el botón submit de nuestro formulario
$submit = array(
    'name' => 'submit',
    'id' => 'submit',
    'class' => 'form-control',
    'class' => 'btn btn-primary',
    'value' => 'Crear Orden',
    'title' => 'Crear Orden'
);
?>
<?php
echo form_fieldset('Nueva Orden de Compra');
?>


            <form class="form-horizontal form-bordered">

                <div class="form-group">

                    <div class="col-md-4">
                        <?php echo form_label('Fecha: '); ?>

                            <?php echo form_input($fecha_ordencompra); ?>


                    </div>

                    <div class="col-md-4">
                        <label class="col-sm-12">Proveedor</label>

                        <select class="form-control">
                            <option>Seleccione</option>
                            <option>Proveedor 1</option>
                            <option>Proveedor 2</option>
                            <option>Proveedor 3</option>

                            <option></option>
                        </select>

                    </div>

                    <div class="col-md-4">
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


                    </div>
                    <div class="form-group">

                        <div class="col-md-1">

                            <?php echo form_label('Item: '); ?>
                            <div class="input-group mb15 col-sm-12">
                                <?php echo form_input($item_ordencompra); ?>

                            </div>
                        </div>
                            <div class="col-md-4">

                                <?php echo form_label('Descripcion: '); ?>
                                <div class="input-group mb15 col-sm-12">
                                    <?php echo form_input($desc_ordencompra); ?>

                                </div>
                            </div>

                        <div class="col-md-1">

                            <?php echo form_label('Unidad: '); ?>
                            <div class="input-group mb15 col-sm-12">
                                <?php echo form_input($unidad_ordencompra); ?>

                            </div>
                        </div>

                        <div class="col-md-2">

                            <?php echo form_label('Cantidad: '); ?>
                            <div class="input-group mb15 col-sm-12">
                                <?php echo form_input($cantidad_ordencompra); ?>

                            </div>
                        </div>
                        <div class="col-md-2">

                            <?php echo form_label('Precio: '); ?>
                            <div class="input-group mb15 col-sm-12">
                                <?php echo form_input($precio_ordencompra); ?>

                            </div>
                        </div>

                            <div class="col-md-2">

                                <?php echo form_label('Total: '); ?>
                                <div class="input-group mb15 col-sm-12">
                                    <?php echo form_input($monto_ordencompra); ?>

                                </div>
                            </div>





                     </div>

                <div class="form-group">

                    <!--INICIO TABLA DETALLE FACTURA -->

                    <div class="table-responsive">
                        <table class="table table-info table-hover" id="table1">

                            <thead>
                            <tr role="row">
                                <th>Item</th>
                                <th>Descripcion</th>
                                <th>Cantidad</th>
                                <th>Unidad</th>
                                <th>Precio</th>
                                <th>Total</th>
                            </tr>
                            </thead>


                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Articulos segun factura #6546546</td>
                                <td>1</td>
                                <td>unidad</td>
                                <td>2,500.00</td>
                                <td>2,500.00</td>


                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Articulos segun factura #6546546</td>
                                <td>1</td>
                                <td>unidad</td>
                                <td>2,500.00</td>
                                <td>2,500.00</td>


                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Articulos segun factura #6546546</td>
                                <td>1</td>
                                <td>unidad</td>
                                <td>2,500.00</td>
                                <td>2,500.00</td>


                            </tr>
                            </tbody>

                        </table>


                        <!-- FIN TABLA DETALLE FACTURA -->


                        <div class="col-md-8">

                            <label class="col-sm-4 control-label">Notas</label>
                            <div class="col-sm-5">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <label class="col-sm-4 control-label"></label>
                            <div class="col-sm-6">
                                <?php echo form_label('Subtotal: '); ?>
                                <div class="input-group mb15 col-sm-12">
                                    <?php echo form_input($subtotal_ordencompra); ?>

                                </div>
                            </div>

                            <label class="col-sm-4 control-label"></label>
                            <div class="col-sm-6">
                                <?php echo form_label('Itebis(18%): '); ?>
                                <div class="input-group mb15 col-sm-12">
                                    <?php echo form_input($itebis_ordencompra); ?>

                                </div>
                            </div>


                            <label class="col-sm-4 control-label"> </label>
                            <div class="col-sm-6">

                                <?php echo form_label('Total General: '); ?>
                                <div class="input-group mb15 col-sm-12">
                                    <?php echo form_input($monto_ordencompra); ?>

                                </div>

                            </div>


                        </div>
                    </div>

                    <div class="form-group">
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


<?php /** @var array $ordenes  */?>

 <div class="panel panel-default">

    <div class="panel-body">

        <div class="col-md-12">
            <div class="panel-primary">
                <div class="panel-heading">
                    <div class="panel-btns">
                        <a href="" class="panel-close">×</a>
                        <a href="" class="minimize">−</a>
                    </div>
                    <h4 class="panel-title">Registro de Compras</h4>
                </div>
            </div>


            <?=form_open(base_url().'compras/insertar_compra');

            //creamos los arrays que compondran nuestro formulario

            $fecha_compra = array(
                'name' => 'fecha_compra',
                'id' => 'datepicker',
                'class' => 'form-control',
                'size' => '50',
                'style' => 'width:100%',
                'value' => set_value('fecha_compra') // con esto al procesar el formulario de forma incorrecta quedará guardado el dato que le habíamos puesto
            );

            //el segundo array

            $hora_compra = array(
                'name' => 'hora_compra',
                'id' => 'timepicker',
                'class' => 'form-control',
                'size' => '50',
                'style' => 'width:100%',
                'value' => set_value('hora_compra')
            );


            //el tercero...(campo asunto)
            $orden_decompra = array(
                'name' => 'orden_decompra',
                'id' => 'orden_decompra',
                'class' => 'form-control',
                'size' => '50',
                'style' => 'width:50%',
                'value' => set_value('orden_decompra') // con esto al procesar el formulario de forma incorrecta quedará guardado el dato que le habíamos puesto
            );


            //el tercero...(campo asunto)
            $vencimiento_compra = array(
                'name' => 'vencimiento_compra',
                'id' => 'vencimiento_compra',
                'class' => 'form-control',
                'size' => '50',
                'style' => 'width:50%',
                'value' => set_value('vencimiento_compra') // con esto al procesar el formulario de forma incorrecta quedará guardado el dato que le habíamos puesto
            );


            //el cuarto...()

            $cantidad_compra = array(
                'name' => 'cantidad_compra',
                'id' => 'cantidad_compra',
                'class' => 'form-control',
                'size' => '50',
                'style' => 'width:50%',
                'value' => set_value('cantidad_compra')
            );

            //el quinto..(descripcion)
            $desc_compra = array(
                'name' => 'desc_compra',
                'id' => 'desc_compra',
                'class' => 'form-control',
                'size' => '50',
                'style' => 'width:100%',
                'value' => set_value('desc_compra')
            );

            //el sexto
            $unidad_compra = array(
                'name' => 'unidad_compra',
                'id' => 'unidad_compra',
                'class' => 'form-control',
                'rows' => 10,
                'cols' => 40,
                'value' => set_value('unidad_compra')
            );

            //el septimo
            $precio_compra = array(
                'name' => 'precio_compra',
                'id' => 'precio_compra',
                'class' => 'form-control',
                'rows' => 10,
                'cols' => 40,
                'value' => set_value('precio_compra')
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
echo form_fieldset('Nueva Compra');
?>

            <div class="panel-body" >
            <form class="form-horizontal form-bordered">

                <div class="form-group">
                    <div class="col-md-8">
                    </div>

                    <div class="col-md-2">
                        <div class="col-sm-12">
                        <?php echo form_label('Fecha de Compra: '); ?>

                        <?php echo form_input($fecha_compra); ?>

                        </div>
                    </div>
                    <div class="col-md-2"><div class="bootstrap-timepicker">
                        <?php echo form_label('Hora de Compra: '); ?>
                        <div class="input-group mb15 col-sm-12">
                            <?php echo form_input($hora_compra); ?>

                        </div>
                        </div>
                    </div>




              </div>

                <div class="form-group">
                    <div class="col-md-4">
                        <label class="col-sm-12">Orden de Compra:</label>
                        <?php if (count($ordenes)): ?>

                        <select class="form-control"  name="ordenescompra">
                            <?php foreach($ordenes as $orden): ?>
                                <option value="<? echo $orden->id_ordencompra?>" > <?php echo $orden->numero_ordencompra ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>


                    <div class="col-md-2">
                        <label class="col-sm-12">Condicion:</label>
                        <select class="form-control" name="condicion_compra">
                            <option value="1">Credito</option>
                            <option value="2">Contado</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <?php echo form_label('Fecha Vencimiento: '); ?>
                        <div class="input-group mb15 col-sm-12" >
                            <?php echo form_input($vencimiento_compra); ?>
                        </div>
                    </div>

                </div>



                <?php else: ?>

                <?php endif; ?>

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


                            <div class="col-md-6">

                                <?php echo form_label('Descripcion: '); ?>
                                <div class="input-group mb15 col-sm-12">
                                    <?php echo form_input($desc_compra) ;  ?>
                               </div>

                            </div>

                            <div class="col-md-2">

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

                        <div class="form-group">
                            <div class="col-md-8">
                            </div>
                                <div class="col-md-2">
                                    <?php echo form_reset($cancel);
                                    //nuestro boton submit
                                    ?>
                                </div>


                                    <div class="col-md-2">

                                    <?php echo form_submit($submit);
                                    //nuestro boton submit
                                    ?>

                                   </div>

                            </div>
                 </div>
</form>
            <table>
                   <tr><td></td>
                    <td><!--con la funcion validation_errors ci nos muestra los errores al pulsar el botón submit, la podemos colocar donde queramos-->
                       <?php echo validation_errors(); ?>
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




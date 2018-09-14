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
    'id' => 'datepicker',
    'class' => 'form-control',
    'size' => '50',
    'style' => 'width:50%',
    'value' => set_value('fecha_compra') // con esto al procesar el formulario de forma incorrecta quedará guardado el dato que le habíamos puesto
);

            $vencimiento_compra = array(
                'name' => 'vencimiento_compra',
                'id' => 'vencimiento_compra',
                'class' => 'form-control',
                'size' => '50',
                'style' => 'width:50%',
                'value' => set_value('vencimiento_compra') // con esto al procesar el formulario de forma incorrecta quedará guardado el dato que le habíamos puesto
            );


            //el segundo array(campo email)

$hora_compra = array(
    'name' => 'hora_compra',
    'id' => 'timepicker',
    'class' => 'form-control',
    'size' => '50',
    'style' => 'width:50%',
    'value' => set_value('hora_compra')
);

//el tercero...(campo asunto)
$cantidad_compra = array(
    'name' => 'cantidad_compra',
    'id' => 'cantidad_compra',
    'class' => 'form-control',
    'size' => '50',
    'style' => 'width:50%',
    'value' => set_value('cantidad_compra')
);

//el cuarto...(campo mensaje)
$desc_compra = array(
    'name' => 'desc_compra',
    'id' => 'desc_compra',
    'class' => 'form-control',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('desc_compra')
);

//el cuarto...(campo mensaje)
$cantidad_compra = array(
    'name' => 'cantidad_compra',
    'id' => 'cantidad_compra',
    'class' => 'form-control',
    'rows' => 10,
    'cols' => 40,
    'value' => set_value('cantidad_compra')
);

//el cuarto...(campo mensaje)
$unidad_compra = array(
    'name' => 'unidad_compra',
    'id' => 'unidad_compra',
    'class' => 'form-control',
    'rows' => 10,
    'cols' => 40,
    'value' => set_value('unidad_compra')
);

//el cuarto...(campo mensaje)
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


            <form class="form-horizontal form-bordered">

                <div class="form-group">
                    <div class="col-md-5">
                    </div>
                    <div class="col-md-4">
                        <div class="col-sm-12">
                        <?php echo form_label('Fecha de Compra: '); ?>

                        <?php echo form_input($fecha_compra); ?>

                        </div>
                    </div>
                    <div class="col-md-3"><div class="bootstrap-timepicker">
                        <?php echo form_label('Hora de Compra: '); ?>
                        <div class="input-group mb15 col-sm-12">
                            <?php echo form_input($hora_compra); ?>

                        </div>
                        </div>
                    </div>




              </div>


                <div class="form-group">

                    <div class="col-md-4">
                        <label class="col-sm-12">Orden de compra</label>
                        <select class="form-control" name='orden_compra' >
                            <?php

                            $link = mysqli_connect("127.0.0.1", "root", "netpro2016", "db_eess");

                            /* check connection */
                            if (mysqli_connect_errno()) {
                                printf("Connect failed: %s\n", mysqli_connect_error());
                                exit();
                            }

                            /* Create table doesn't return a resultset */
                            if (mysqli_query($link, "CREATE TEMPORARY TABLE myCity LIKE City") === TRUE) {
                                printf("Table myCity successfully created.\n");
                            }

                            /* Select queries return a resultset */
                            if ($result = mysqli_query($link, "SELECT * FROM ordenescompra LIMIT 10")) {
                            printf("Select returned %d rows.\n", mysqli_num_rows($result));


                            while($lista=mysqli_fetch_array($result)){
                                ?>
                                <option value='".$lista["id_ordencompra"]."'>  <? echo $lista['desc_ordencompra']?></option>

                            <? } ?>
                        </select>

                        <?                                /* free result set */
                        mysqli_free_result($result);
                        }
                        mysqli_close($link);
                        ?>

                    </div>



                    <div class="col-md-2">
                        <label class="col-sm-12">Condicion:</label>
                        <select class="form-control">
                            <option>Credito</option>
                            <option>Contado</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                            <?php echo form_label('Fecha Vencimiento: '); ?>
                            <div class="input-group mb15 col-sm-12">
                                <?php echo form_input($vencimiento_compra); ?>
                            </div>
                    </div>
                    <div class="col-md-6">
                    </div>

                </div>


                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-sm-12">Proveedor</label>

                        <select class="form-control" name='proveedores' >
                            <?php

                            $link = mysqli_connect("127.0.0.1", "root", "netpro2016", "db_eess");

                            /* check connection */
                            if (mysqli_connect_errno()) {
                                printf("Connect failed: %s\n", mysqli_connect_error());
                                exit();
                            }

                            /* Create table doesn't return a resultset */
                            if (mysqli_query($link, "CREATE TEMPORARY TABLE myCity LIKE City") === TRUE) {
                                printf("Table myCity successfully created.\n");
                            }

                            /* Select queries return a resultset */
                            if ($result = mysqli_query($link, "SELECT * FROM proveedores LIMIT 10")) {
                            printf("Select returned %d rows.\n", mysqli_num_rows($result));


                            while($lista=mysqli_fetch_array($result)){
                                ?>
                                <option value='".$lista["id_proveedor"]."'>  <? echo $lista['empresa_proveedor']?></option>

                            <? } ?>
                        </select>

                        <?                                /* free result set */
                        mysqli_free_result($result);
                        }
                        mysqli_close($link);
                        ?>

                    </div>
                    <div class="col-md-6">
                        <label class="col-sm-12">Proyecto</label>
                        <select class="form-control" name='proyectos' >
                            <?php

                            $link = mysqli_connect("127.0.0.1", "root", "netpro2016", "db_eess");

                            /* check connection */
                            if (mysqli_connect_errno()) {
                                printf("Connect failed: %s\n", mysqli_connect_error());
                                exit();
                            }

                            /* Create table doesn't return a resultset */
                            if (mysqli_query($link, "CREATE TEMPORARY TABLE myCity LIKE City") === TRUE) {
                                printf("Table myCity successfully created.\n");
                            }

                            /* Select queries return a resultset */
                            if ($result = mysqli_query($link, "SELECT * FROM proyectos LIMIT 10")) {
                            printf("Select returned %d rows.\n", mysqli_num_rows($result));


                            while($lista=mysqli_fetch_array($result)){
                                ?>
                                <option value='".$lista["id_proyecto"]."'>  <? echo $lista['nombre_proyecto']?></option>

                            <? } ?>
                        </select>

                        <?                                /* free result set */
                        mysqli_free_result($result);
                        }
                        mysqli_close($link);
                        ?>


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
                    <div class="col-md-6">
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

<!-- Contenido llamada al Cliente -->
<div class="modal fade" id="llamadaCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Llamada al cliente para cita</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">

                    <div class="col-md-12">
                        <label class="col-sm-4 control-label">Exito del recordatorio</label>
                        <div class="col-sm-8">
                            <select class="form-control input-sm mb15">
                                <option>Llamada contestada</option>
                                <option>No contestaron</option>
                                <option>Llamar otro dia</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label class="col-sm-4 control-label">Observaciones de la llamada</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="4"></textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label class="col-sm-4 control-label">Cliente</label>
                        <div class="col-sm-8">
                            <input type="text" name="nombre_cliente" class="form-control" ></input>
                        </div>
                    </div>

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Guardar para llamar luego</button>
                <button type="button" class="btn btn-primary">Guardar para agendar cita</button>
            </div>
        </div>
    </div>
</div>
<!-- Fin Contenido llamada al Cliente -->
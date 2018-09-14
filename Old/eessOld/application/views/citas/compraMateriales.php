<?php /** @var compras[] $id_compra */?>



        <?=form_open(base_url().'compras/insertar_compra/');



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
            'rows' => 10,
            'cols' => 40,
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
<div class="col-lg-12">


</div>

<div class="panel panel-default">

                        <div class="panel-body">

                            <div class="col-md-9">
                                <div class="panel-primary">
                                    <div class="panel-heading">
                                        <!-- Seguimiento -->
                                        <h4 class="panel-title">Compra de Materiales</h4>
                                    </div>
                                </div>

                                <form class="form-horizontal form-bordered">
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
                                        <div class="col-md-4">
                                            <label>Fecha</label>
                                            <div class="input-group col-sm-12">
                                                <input type="text" name="fecha_compra" class="form-control" placeholder="mm/dd/yyyy"
                                                       id="datepicker" value="">
                                                <span class="input-group-addon"><i
                                                        class="glyphicon glyphicon-calendar"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Hora</label>
                                            <div class="input-group mb15 col-sm-12">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                                <div class="bootstrap-timepicker"><input  name="hora_compra" id="timepicker" type="text"
                                                                                         class="form-control"/></div>
                                            </div>
                                        </div>

                                    </div>
                                </form>

                                <form class="form-horizontal form-bordered">
                                    <div class="form-group">
                                        <div class="col-md-2">
                                            <label>Cantidad</label>
                                            <div class="input-group ">
                                                <input type="text"  name="cantidad_compra" class="form-control" placeholder="" id="cantidad_compra"
                                                       value="">
                                                <span class="input-group-addon"><i class=""></i></span>
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <label>Descripcion</label>
                                            <div class="input-group">
                                                <input type="text"  name="desc_compra" class="form-control" placeholder="" id="desc_compra"
                                                       value="">
                                                <span class="input-group-addon"><i class=""></i></span>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <label>Unidad</label>
                                            <div class="input-group">
                                                <input type="text"  name="unidad_compra" class="form-control" placeholder="" id="unidad_compra">
                                                <span class="input-group-addon"><i class=""></i></span>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <label>Precio</label>
                                            <div class="input-group">
                                                <input type="text"  name="precio_compra" class="form-control" placeholder="" id="precio_precio"
                                                       value="">
                                                <span class="input-group-addon"><i class=""></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="col-md-6">
                                    <label class="col-sm-12">Proveedor</label>
                                    <select class="form-control">
                                        <option>Seleccione</option>
                                        <option>Proveedor 1</option>
                                        <option>Proveedor 2</option>
                                        <option>Proveedor 3</option>
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


                            <div class="col-md-3 right">
                                <div class="panel panel-default">
                                    <div class="panel-danger">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">Detalles de la compra</h4>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <div class="ckbox ckbox-default">
                                            <input type="checkbox" value="1" id="checkboxDefault" />
                                            <label for="checkboxDefault">Proyecto</label>
                                        </div>

                                        <div class="ckbox ckbox-default">
                                            <input type="checkbox" value="2" id="checkboxDefault" />
                                            <label for="checkboxDefault">Oficina</label>
                                        </div>

                                        <div class="ckbox ckbox-default">
                                            <input type="checkbox" value="3" id="checkboxDefault" />
                                            <label for="checkboxDefault">Administrativa</label>
                                        </div>
                                    </div>

                                </div><!-- panel -->

                                <form class="form-horizontal form-bordered">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label class="col-sm-9 control-label">Observaciones</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                </form>

                                <!--boton-->
                                <div class="row">
                                    <div class="col-sm-12">


                                        <div class="input-group mb15 col-sm-12">
                                            <?php echo form_submit($submit);//nuestro boton submit?>

                                        </div>
                                        <button type="submit" class="btn btn-primary">Registrar </button>
                                        <button class="btn btn-danger">Cancelar</button>
                                    </div>
                                </div>


                                        <!--con la funcion validation_errors ci nos muestra los errores al pulsar el botón submit, la podemos colocar donde queramos-->
                                        <font color="red" style="font-weight: bold; font-size: 14px; text-decoration: underline"><?php echo validation_errors(); ?></font>

                                <?php
                                echo form_close();
                                ?>

                                <?php
                                echo form_fieldset_close();
                                ?>


                            </div>


                        </div>
                    </form>

        </div>
</div>







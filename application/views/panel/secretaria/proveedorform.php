<?php
ob_start();
?>

 <div class="panel panel-default">

    <div class="panel-body">

        <div class="col-md-12">
            <div class="panel-primary">
                <div class="panel-heading">

                    <h4 class="panel-title">Registro de Proveedor</h4>
                </div>
            </div>


            <?=form_open(base_url().'index.php/proveedores/insertar_proveedor');

//creamos los arrays que compondran nuestro formulario

            $cnombre_proveedor = array(
                'name' => 'cnombre_proveedor',
                'id' => 'cnombre_proveedor',
                 'required' => 'required',
                //'class' => 'form-control',
                'size' => '50',
                'style' => 'width:100%',
                'value' => set_value('cnombre_proveedor') // con esto al procesar el formulario de forma incorrecta quedará guardado el dato que le habíamos puesto
            );

            //el segundo array(campo email)

            $capellido_proveedor = array(
                'name' => 'capellido_proveedor',
                'id' => 'capellido_proveedor',
                'required'=> 'required',
                //'class' => 'form-control',
                'size' => '50',
                'style' => 'width:100%',
                'value' => set_value('capellido_proveedor')
            );


            //el cuarto...(campo mensaje)
            $ctelefono_proveedor = array(
                'name' => 'ctelefono_proveedor',
                'id' => 'ctelefono_proveedor',
                'required'=> 'required',
                //'class' => 'form-control', 
                'rows' => 10,
                'cols' => 40,
                'value' => set_value('ctelefono_proveedor')
            );

            //el cuarto...(campo mensaje)
            $cdireccion_proveedor = array(
                'name' => 'cdireccion_proveedor',
                'id' => 'cdireccion_proveedor',
                //'class' => 'form-control',
                'size' => '50',
                'style' => 'width:100%',
                'value' => set_value('cdireccion_proveedor')
            );

            //el cuarto...(campo mensaje)
            $cciudad_proveedor = array(
                'name' => 'cciudad_proveedor',
                'id' => 'cciudad_proveedor',
                //'class' => 'form-control',
                'size' => '50',
                'style' => 'width:100%',
                'value' => set_value('cciudad_proveedor')
            );

            //el cuarto...(campo mensaje)
            $cedula_proveedor = array(
                'name' => 'cedula_proveedor',
                'id' => 'cedula_proveedor',
                //'class' => 'form-control',
                'size' => '50',
                'style' => 'width:100%',
                'value' => set_value('cedula_proveedor')
            );

            //el cuarto...(campo mensaje)
            $cemail_proveedor = array(
                'name' => 'cemail_proveedor',
                'id' => 'cemail_proveedor',
                //'class' => 'form-control',
                'size' => '50',
                'style' => 'width:100%',
                'value' => set_value('cemail_proveedor')
            );

            //el tercero...(campo asunto)
            $empresa_proveedor = array(
                'name' => 'empresa_proveedor',
                'id' => 'empresa_proveedor',
                'required'=> 'required',
                //'class' => 'form-control',
                'size' => '50',
                'style' => 'width:100%',
                'value' => set_value('empresa_proveedor')
            );

            //el cuarto...(campo mensaje)
            $rnc_proveedor = array(
                'name' => 'rnc_proveedor',
                'id' => 'rnc_proveedor',
                //'class' => 'form-control',
                'size' => '50',
                'style' => 'width:100%',
                'value' => set_value('rnc_proveedor')
            );

            //el cuarto...(campo mensaje)
            $etelefono1_proveedor = array(
                'name' => 'etelefono1_proveedor',
                'id' => 'etelefono1_proveedor',
                'required'=> 'required',
                //'class' => 'form-control',
                'rows' => 10,
                'cols' => 40,
                'value' => set_value('etelefono1_proveedor')
            );

            //el cuarto...(campo mensaje)
            $etelefono2_proveedor = array(
                'name' => 'etelefono2_proveedor',
                'id' => 'etelefono2_proveedor',
                //'class' => 'form-control',
                'rows' => 10,
                'cols' => 40,
                'value' => set_value('etelefono2_proveedor')
            );

            //el cuarto...(campo mensaje)
            $edireccion_proveedor = array(
                'name' => 'edireccion_proveedor',
                'id' => 'edireccion_proveedor',
                'required'=> 'required',
                //'class' => 'form-control',
                'size' => '50',
                'style' => 'width:100%',
                'value' => set_value('edireccion_proveedor')
            );

            //el cuarto...(campo mensaje)
            $eciudad_proveedor = array(
                'name' => 'eciudad_proveedor',
                'id' => 'eciudad_proveedor',
                'required'=> 'required',
                //'class' => 'form-control',
                'size' => '50',
                'style' => 'width:100%',
                'value' => set_value('eciudad_proveedor')
            );

            //el cuarto...(campo mensaje)
            $eemail1_proveedor = array(
                'name' => 'eemail1_proveedor',
                'id' => 'eemail1_proveedor',
                'required'=> 'required',
                //'class' => 'form-control',
                'size' => '50',
                'style' => 'width:100%',
                'value' => set_value('eemail1_proveedor')
            );

            //el cuarto...(campo mensaje)
            $eemail2_proveedor = array(
                'name' => 'eemail2_proveedor',
                'id' => 'eemail2_proveedor',
                //'class' => 'form-control',
                'size' => '50',
                'style' => 'width:100%',
                'value' => set_value('eemail2_proveedor')
            );


            //el cuarto...(campo mensaje)
            $cuenta1_proveedor = array(
                'name' => 'cuenta1_proveedor',
                'id' => 'cuenta1_proveedor',
                'required'=> 'required',
                //'class' => 'form-control',
                'size' => '50',
                'style' => 'width:100%',
                'value' => set_value('cuenta1_proveedor')
            );

            //el cuarto...(campo mensaje)
            $cuenta2_proveedor = array(
                'name' => 'cuenta2_proveedor',
                'id' => 'cuenta2_proveedor',
                //'class' => 'form-control',
                'size' => '50',
                'style' => 'width:100%',
                'value' => set_value('cuenta2_proveedor')
            );

            //el cuarto...(campo mensaje)
            $cuenta3_proveedor = array(
                'name' => 'cuenta3_proveedor',
                'id' => 'cuenta3_proveedor',
                //'class' => 'form-control',
                'size' => '50',
                'style' => 'width:100%',
                'value' => set_value('cuenta3_proveedor')
            );


            //el cuarto...(campo mensaje)
            $banco1_proveedor = array(
                 'name' => 'banco1_proveedor',
                'id' => 'banco1_proveedor',
               // 'class' => 'form-control',
               // 'size' => '50',
               // 'style' => 'width:100%',
                'value' => set_value('banco1_proveedor')
            );

            //el cuarto...(campo mensaje)
            $banco2_proveedor = array(
                 'name' => 'banco2_proveedor',
                'id' => 'banco2_proveedor',
                //'class' => 'form-control',
                //'size' => '50',
                //'style' => 'width:100%',
                'value' => set_value('banco2_proveedor')
            );
            //el cuarto...(campo mensaje)
            $banco3_proveedor = array(
                  'name' => 'banco3_proveedor',
                'id' => 'banco3_proveedor',
               // 'class' => 'form-control',
               // 'size' => '50',
               /// 'style' => 'width:100%',
                'value' => set_value('banco3_proveedor')
            );

            $tipocuenta1_proveedor = array(
                  'name' => 'tipocuenta1_proveedor',
                  'id' => 'tipocuenta1_proveedor',
                  'value' => set_value('tipocuenta1_proveedor')
            ); 
            
             $tipocuenta2_proveedor = array(
                'name' => 'tipocuenta2_proveedor',
                'id' => 'tipocuenta2_proveedor',
                'value' => set_value('tipocuenta2_proveedor')
            );
            
            $tipocuenta3_proveedor = array(
                'name' => 'tipocuenta3_proveedor',
                'id' => 'tipocuenta3_proveedor',
                'value' => set_value('tipocuenta3_proveedor')
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

                    <div class="col-md-12 right">
                        <div class="panel panel-danger">

                            <div class="panel-heading">
                                <h4 class="panel-title">Datos del contacto</h4>
                            </div>
                            <div class="panel-body">

                                <div class="col-md-4">
                                    <?php echo form_label('Nombre: '); ?>
                                    <div class="input-group col-sm-12">
                                        <?php echo form_input($cnombre_proveedor); ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <?php echo form_label('Apellido: '); ?>
                                    <div class="input-group mb15 col-sm-12">
                                        <?php echo form_input($capellido_proveedor); ?>
                                    </div>
                                </div>
                                <div class="col-md-3">

                                    <?php echo form_label('Telefono: '); ?>
                                    <div class="input-group mb15 col-sm-12">
                                        <?php echo form_input($ctelefono_proveedor); ?>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <?php echo form_label('Direccion: '); ?>
                                    <div class="input-group mb15 col-sm-12">
                                        <?php echo form_input($cdireccion_proveedor); ?>
                                    </div>
                                </div>

                                <div class="col-md-6">

                                    <?php echo form_label('Ciudad: '); ?>
                                    <div class="input-group mb15 col-sm-12">
                                        <?php echo form_input($cciudad_proveedor); ?>

                                    </div>
                                </div>

                                <div class="col-md-6">

                                    <?php echo form_label('email: '); ?>
                                    <div class="input-group mb15 col-sm-12">
                                        <?php echo form_input($cemail_proveedor); ?>

                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <?php echo form_label('cedula: '); ?>
                                    <div class="input-group mb15 col-sm-12">
                                        <?php echo form_input($cedula_proveedor); ?>

                                    </div>
                                </div>

                </div>
                </div>
                </div>


                    <div class="form-group">
                        <div class="col-md-12 right">
                            <div class="panel panel-danger">

                                <div class="panel-heading">
                                    <h4 class="panel-title">Datos corporativos</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="col-md-4">
                                        <?php echo form_label('Empresa: '); ?>
                                        <div class="input-group mb15 col-sm-12">
                                            <?php echo form_input($empresa_proveedor); ?>

                                        </div>

                                    </div>
                            <div class="col-md-4">

                                <?php echo form_label('RNC: '); ?>
                                <div class="input-group mb15 col-sm-12">
                                    <?php echo form_input($rnc_proveedor); ?>

                                </div>
                            </div>

                            <div class="col-md-3">

                                <?php echo form_label('Telefonos: '); ?>
                                <div class="input-group mb15 col-sm-12">
                                    <?php echo form_input($etelefono1_proveedor); ?> </br>
                                    <?php echo form_input($etelefono2_proveedor); ?>
                                </div>
                            </div>


                            <div class="col-md-6">

                                <?php echo form_label('Direcciones: '); ?>
                                <div class="input-group mb15 col-sm-12">
                                    <?php echo form_input($edireccion_proveedor); ?>


                                </div>
                            </div>

                        <div class="col-md-6">

                            <?php echo form_label('Ciudad: '); ?>
                            <div class="input-group mb15 col-sm-12">
                                <?php echo form_input($eciudad_proveedor); ?>


                            </div>
                        </div>

                        <div class="col-md-6">

                            <?php echo form_label('direcciones de email: '); ?>
                            <div class="input-group mb15 col-sm-12">
                                <?php echo form_input($eemail1_proveedor); ?>  </br>
                                <?php echo form_input($eemail2_proveedor); ?>

                            </div>
                        </div>

                     </div>
                     </div>
                     </div>
                     </div>


                    <div class="form-group">
                        <div class="col-md-12 right">
                            <div class="panel panel-danger">

                                <div class="panel-heading">
                                    <h4 class="panel-title">Informacion Bancaria</h4>
                                </div>
                                <div class="panel-body">

                                    <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-info table-hover" id="cuentas_bancarias">
                                                    <thead>
                                                    <tr>
                                                        <th>Banco</th>
                                                        <th>Numero de cuenta</th>
                                                        <th>Tipo</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr class="odd gradeX">
                                                        <td style="">
                                                        
					                            <select  class="form-control" name="banco1_proveedor" <?php echo form_input($banco1_proveedor); ?>>
					                                <option value=""></option>
					                                <option value="Banreservas">Banreservas</option>
					                                <option value="Banco Caribe">Banco Caribe</option>
					                                <option value="Banco Popular">Banco Popular</option>
					                                <option value="Banco Santa Cruz">Banco Santa Cruz</option>
					                                <option value="Banco BHD Leon">Banco BHD Leon</option>
					                                <option value="Banco del Progreso">Banco del Progreso</option>
					                                <option value="Asociacion Cibao">Asociacion Cibao</option>
					                                <option value="Scotiabank">Scotiabank</option>
					                            </select>
					                 
                                                          </td>
                                                        <td style=""> <?php echo form_input($cuenta1_proveedor); ?> </td>
                                                        <td style=""> <select  class="form-control" name="tipocuenta1_proveedor" <?php echo form_input($tipocuenta1_proveedor); ?>>
					                                <option value=""></option>
					                                <option value="Ahorros">Ahorros</option>
					                                <option value="Corriente">Corriente</option>
					                               
					                            </select> </td>
                                                    </tr>
                                                    <tr class="odd gradeX">
                                                        <td style="">  <select  class="form-control" name="banco2_proveedor" <?php echo form_input($banco2_proveedor); ?>>
					                                <option value=""></option>
					                                <option value="Banreservas">Banreservas</option>
					                                <option value="Banco Caribe">Banco Caribe</option>
					                                <option value="Banco Popular">Banco Popular</option>
					                                <option value="Banco Santa Cruz">Banco Santa Cruz</option>
					                                <option value="Banco BHD Leon">Banco BHD Leon</option>
					                                <option value="Banco del Progreso">Banco del Progreso</option>
					                                <option value="Asociacion Cibao">Asociacion Cibao</option>
					                                <option value="Scotiabank">Scotiabank</option>
					                            </select> </td>
					                            
                                                        <td style=""> <?php echo form_input($cuenta2_proveedor); ?> </td>
                                                        <td style=""><select  class="form-control" name="tipocuenta2_proveedor" <?php echo form_input($tipocuenta2_proveedor); ?>>
					                                 <option value=""></option>
					                                <option value="Ahorros">Ahorros</option>
					                                <option value="Corriente">Corriente</option>
					                               
					                            </select> </td>
                                                    </tr>
                                                    <tr class="odd gradeX">
                                                        <td style=""> <select  class="form-control" name="banco3_proveedor" <?php echo form_input($banco3_proveedor); ?>>
					                                <option value=""></option>
					                                <option value="Banreservas">Banreservas</option>
					                                <option value="Banco Caribe">Banco Caribe</option>
					                                <option value="Banco Popular">Banco Popular</option>
					                                <option value="Banco Santa Cruz">Banco Santa Cruz</option>
					                                <option value="Banco BHD Leon">Banco BHD Leon</option>
					                                <option value="Banco del Progreso">Banco del Progreso</option>
					                                <option value="Asociacion Cibao">Asociacion Cibao</option>
					                                <option value="Scotiabank">Scotiabank</option>
					                            </select> </td>
                                                        <td style=""> <?php echo form_input($cuenta3_proveedor); ?> </td>
                                                 <td style="">  <select  class="form-control" name="tipocuenta3_proveedor" <?php echo form_input($tipocuenta3_proveedor); ?>>
					                                 <option value=""></option>
					                                <option value="Ahorros">Ahorros</option>
					                                <option value="Corriente">Corriente</option>
					                               
					                            </select> </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                    </div>

                                </div>
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

<?php
ob_end_flush();
?>
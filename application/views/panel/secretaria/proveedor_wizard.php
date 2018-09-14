<?php
/**
 * Created by PhpStorm.
 * User: GAMERX64
 * Date: 06/09/2016
 * Time: 08:31 PM
 */
?>
<?=form_open(base_url().'proveedores/insertar_proveedor');

//creamos los arrays que compondran nuestro formulario

$cnombre_proveedor = array(
    'name' => 'cnombre_proveedor',
    'id' => 'cnombre_proveedor',
    'class' => 'form-control',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('cnombre_proveedor') // con esto al procesar el formulario de forma incorrecta quedará guardado el dato que le habíamos puesto
);

//el segundo array(campo email)

$capellido_proveedor = array(
    'name' => 'capellido_proveedor',
    'id' => 'capellido_proveedor',
    'class' => 'form-control',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('capellido_proveedor')
);


//el cuarto...(campo mensaje)
$ctelefono_proveedor = array(
    'name' => 'ctelefono_proveedor',
    'id' => 'ctelefono_proveedor',
    'class' => 'form-control',
    'rows' => 10,
    'cols' => 40,
    'value' => set_value('ctelefono_proveedor')
);

//el cuarto...(campo mensaje)
$cdireccion_proveedor = array(
    'name' => 'cdireccion_proveedor',
    'id' => 'cdireccion_proveedor',
    'class' => 'form-control',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('cdireccion_proveedor')
);

//el cuarto...(campo mensaje)
$cciudad_proveedor = array(
    'name' => 'cciudad_proveedor',
    'id' => 'cciudad_proveedor',
    'class' => 'form-control',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('cciudad_proveedor')
);

//el cuarto...(campo mensaje)
$cedula_proveedor = array(
    'name' => 'cedula_proveedor',
    'id' => 'cedula_proveedor',
    'class' => 'form-control',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('cedula_proveedor')
);

//el cuarto...(campo mensaje)
$cemail_proveedor = array(
    'name' => 'cemail_proveedor',
    'id' => 'cemail_proveedor',
    'class' => 'form-control',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('cemail_proveedor')
);

//el tercero...(campo asunto)
$empresa_proveedor = array(
    'name' => 'empresa_proveedor',
    'id' => 'empresa_proveedor',
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
    //'class' => 'form-control',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('edireccion_proveedor')
);

//el cuarto...(campo mensaje)
$eciudad_proveedor = array(
    'name' => 'eciudad_proveedor',
    'id' => 'eciudad_proveedor',
    'class' => 'form-control',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('eciudad_proveedor')
);

//el cuarto...(campo mensaje)
$eemail1_proveedor = array(
    'name' => 'eemail1_proveedor',
    'id' => 'eemail1_proveedor',
    'class' => 'form-control',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('eemail1_proveedor')
);

//el cuarto...(campo mensaje)
$eemail2_proveedor = array(
    'name' => 'eemail2_proveedor',
    'id' => 'eemail2_proveedor',
    'class' => 'form-control',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('eemail2_proveedor')
);


//el cuarto...(campo mensaje)
$cuenta1_proveedor = array(
    'name' => 'cuenta1_proveedor',
    'id' => 'cuenta1_proveedor',
    'class' => 'form-control',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('cuenta1_proveedor')
);

//el cuarto...(campo mensaje)
$cuenta2_proveedor = array(
    'name' => 'cuenta2_proveedor',
    'id' => 'cuenta2_proveedor',
    'class' => 'form-control',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('cuenta2_proveedor')
);

//el cuarto...(campo mensaje)
$cuenta3_proveedor = array(
    'name' => 'cuenta3_proveedor',
    'id' => 'cuenta3_proveedor',
    'class' => 'form-control',
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

//el boton submit de nuestro formulario
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

<div class="">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">Registro de Proveedores</h4>
            <p>Llene los datos requeridos y haga click en siguiente</p>
        </div>

        <div class="panel-body">

            <!-- Formulario -->
            <div id="progressWizard" class="basic-wizard form-bordered form-horizontal">

                <ul class="nav nav-pills nav-justified collapse"><!-- tabs ocultas por espacio en movil-->
                    <li><a href="#ptab1" data-toggle="tab"><span>Step 1:</span> Datos del proveedor</a></li>
                    <li><a href="#ptab2-1" data-toggle="tab"><span>Step 2.1:</span> Info del contacto</a></li>
                    <li><a href="#ptab2-2" data-toggle="tab"><span>Step 2.2:</span> Datos corporativos</a></li>
                    <!-- <li><a href="#ptab3-1" data-toggle="tab"><span>Step 3.1:</span> Datos financieros</a></li>
                     <li><a href="#ptab3-2" data-toggle="tab"><span>Step 3.2:</span> Equipos o componentes en el vehiculo</a></li>
                     <li><a href="#ptab3-3" data-toggle="tab"><span>Step 3.3:</span> Equipos o componentes en el vehiculo</a></li>
                     <li><a href="#ptab3-4" data-toggle="tab"><span>Step 3.4:</span> Equipos o componentes en el vehiculo</a></li>
                     <li><a href="#ptab3-5" data-toggle="tab"><span>Step 3.5:</span> Equipos o componentes en el vehiculo</a></li>
                     <li><a href="#ptab3-6" data-toggle="tab"><span>Step 3.6:</span> Equipos o componentes en el vehiculo</a></li>
                     <li><a href="#ptab4-1" data-toggle="tab"><span>Step 4.1:</span> Desperfectos del vehiculo</a></li>
                     <li><a href="#ptab5" data-toggle="tab"><span>Step 5:</span> Clausulas</a></li>-->
                </ul>

                <div class="tab-content">
                    <div class="progress progress-striped active">
                        <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>

                    </div>
                    <!-- Fase 1 -->
                    <div class="tab-pane" id="ptab1">

                        <div class="form-group">


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

                            <!--
                              <div class="col-md-3">
                                  <h4 class="person-name"> Codigo: 10391</h4>
                                  <h4 class="person-name"> Francisco J. Fernandez</h4>
                                  </div>
                              <div class="col-md-3">
                                  <h4 class="person-name"> Vehiculo</h4>
                                  <p class="person-name"> Nissan Patrol 2016</p>
                                  <p class="person-name"> Color: blanca</p>
                                  <p class="person-name"> Placa: </p>
                              </div>  -->
                        </div>
                    </div>
                <!-- Fase 2.1 -->
                    <!--  @todo: proporcion correcta en movil. Repara desordenada en PC o pantalla grande -->
                    <div class="tab-pane" id="ptab2-1">
                        <form class="form-horizontal">

                            <div class="form-group">
                                <div class="panel panel-danger">

                                    <div class="panel-heading">
                                        <h4 class="panel-title">Datos corporativos</h4>
                                    </div>
                                    <div class="form-group">

                                        <div class="col-md-4">
                                            <?php echo form_label('Empresa: '); ?>
                                            <div class="input-group mb15 col-sm-12">
                                                <?php echo form_input($empresa_proveedor); ?>

                                            </div>

                                        </div>
                                    <div class="col-md-2">

                                        <?php echo form_label('RNC: '); ?>
                                        <div class="input-group mb15 col-sm-12">
                                            <?php echo form_input($rnc_proveedor); ?>

                                        </div>
                                    </div>

                                    <div class="col-md-6">


                                        <div class=" col-sm-6">
                                            <?php echo form_label('Telefonos 1: '); ?>
                                            <?php echo form_input($etelefono1_proveedor); ?></div>
                                        <div class="col-sm-6">
                                            <?php echo form_label('Telefonos 2: '); ?>
                                            <?php echo form_input($etelefono2_proveedor); ?>
                                        </div>
                                    </div>




                                <!--
                                <label class="col-md-3 control-label">Ind. Bateria</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div>

                                <label class="col-md-3 control-label">neumaticos</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div> -->
                            </div>
                            </div>
                            </div>

                            <div class="form-group">

                                <div class="col-md-4">

                                    <?php echo form_label('Direcciones: '); ?>
                                    <div class="input-group mb15 col-sm-12">
                                        <?php echo form_input($edireccion_proveedor); ?>


                                    </div>
                                </div>

                                <div class="col-md-3">

                                    <?php echo form_label('Ciudad: '); ?>
                                    <div class="input-group mb15 col-sm-12">
                                        <?php echo form_input($eciudad_proveedor); ?>


                                    </div>
                                </div>

                                <div class="col-md-5">

                                <div class="col-sm-6">
                                        <?php echo form_label('email 1: '); ?>
                                        <?php echo form_input($eemail1_proveedor); ?>
                                    </div>
                                  <div class="col-sm-6">
                                            <?php echo form_label('email 2: '); ?>
                                        <?php echo form_input($eemail2_proveedor); ?>

                                    </div>
                                </div>

                                <!--
                                <label class="col-sm-3 control-label">Presion aceite</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div>

                                <label class="col-sm-3 control-label">Cinturon</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div>
                           --> </div>

                        </form>
                    </div>

                    <!-- Fase 2.2 -->
                    <div class="tab-pane" id="ptab2-2">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <!--
                                                                <label class="col-sm-3 control-label">Falla bolsa de aire</label>
                                                                    <div class="col-sm-3 control-label">
                                                                        <div class="toggle toggle-primary"></div>
                                                                    </div>

                                                                <label class="col-sm-3 control-label">Indicador ABS</label>
                                                                <div class="col-sm-3 control-label">
                                                                    <div class="toggle toggle-primary"></div>
                                                                </div> -->
                            </div>

                            <div class="form-group">
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
                                                    <tr class="odd gradeX"><td></td>
                                                        <td></td>
                                                        <td><?php echo form_reset($cancel);                                                        //nuestro boton submit
                                                            ?> <?php echo form_submit($submit);
                                                            //nuestro boton submit
                                                            ?></td></tr>
                                                    </tbody>
                                                </table>
                                            </div>



                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Fase 3.1
                    <div class="tab-pane" id="ptab3-1">
                        <form class="form-horizontal">

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Mal funcion Motor</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div>

                                <label class="col-sm-3 control-label">Direccional</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Indicador de puertas</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div>

                                <label class="col-sm-3 control-label">Indicador CRUISE</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Fase 3.2
                    <div class="tab-pane" id="ptab3-2">
                        <form class="form-horizontal">

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Bocina</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div>

                                <label class="col-sm-3 control-label">Switch cristales</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Funcionamiento cristales</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div>

                                <label class="col-sm-3 control-label">Funcionamiento Seguros</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div>
                            </div>

                        </form>
                    </div>

                    <!-- Fase 3.3
                    <div class="tab-pane" id="ptab3-3">
                        <form class="form-horizontal">
                            <div class="form-group">
                            <label class="col-sm-3 control-label">Luces interiores</label>
                            <div class="col-sm-3 control-label">
                                <div class="toggle toggle-primary"></div>
                            </div>

                            <label class="col-sm-3 control-label">Tapasol</label>
                            <div class="col-sm-3 control-label">
                                <div class="toggle toggle-primary"></div>
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">A/C</label>
                        <div class="col-sm-3 control-label">
                            <div class="toggle toggle-primary"></div>
                        </div>

                        <label class="col-sm-3 control-label">Alfombras</label>
                        <div class="col-sm-3 control-label">
                            <div class="toggle toggle-primary"></div>
                        </div>
                    </div>

                        </form>
                    </div>

                    <!-- Fase 3.4
                    <div class="tab-pane" id="ptab3-4">
                        <form class="form-horizontal">


                            <div class="form-group">
                                <label class="col-sm-3 control-label">Gaveta cenicero</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div>

                                <label class="col-sm-3 control-label">Tapa Consola Central</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Beeper</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div>

                                <label class="col-sm-3 control-label">Rejillas A/C</label>
                                <div class="col-sm-3 control-label">
                                    <div class="toggle toggle-primary"></div>
                                </div>
                            </div>

                        </form>
                    </div>

                <!-- Fase 3.5
                <div class="tab-pane" id="ptab3-5">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Sunroof</label>
                            <div class="col-sm-3 control-label">
                                <div class="toggle toggle-primary"></div>
                            </div>

                            <label class="col-sm-3 control-label">Tapizados asiento</label>
                            <div class="col-sm-3 control-label">
                                <div class="toggle toggle-primary"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Encendedor</label>
                            <div class="col-sm-3 control-label">
                                <div class="toggle toggle-primary"></div>
                            </div>

                            <label class="col-sm-3 control-label">Radio / Bocinas</label>
                            <div class="col-sm-3 control-label">
                                <div class="toggle toggle-primary"></div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Fase 3-6
                <div class="tab-pane" id="ptab3-6">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Beeper</label>
                            <div class="col-sm-3 control-label">
                                <div class="toggle toggle-primary"></div>
                            </div>

                            <!-- label class="col-sm-2 control-label">Unidad</label
                            <div class="col-sm-2">
                                <select class="form-control input-sm">
                                    <option>Km</option>
                                    <option>Mi</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control input-sm" placeholder="distancia"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Emisora</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" placeholder="Emisora o CD-Player">
                            </div>

                            <label class="col-sm-3 control-label">Combustible</label>
                            <div class="col-sm-3">
                                <input  type="number" class="form-control" placeholder="Kg">
                            </div>
                        </div>
                    </form>
                </div>
                    
                    <!-- Fase 4-1
                    <div class="tab-pane" id="ptab4-1">

                        <form class="form-horizontal">

                            <div class="form-group">
                                <p class="col-sm-3">Foto Frontal</p>
                                <div class="col-sm-3">
                                    <!--
                                     // input para captura de imagen usando camara disponible

                                    <input type="file" accept="image/jpg,png;capture=camera" class="form-control" contextmenu="Foto Frontal">
                                </div>

                                <p class="col-sm-3">Foto Lateral Derecho</p>
                                <div class="col-sm-3">
                                    <!--
                                     // input para captura de imagen usando camara disponible

                                    <input type="file" accept="image/jpg,png;capture=camera" class="form-control" contextmenu="Foto Frontal">
                                </div>


                                <p class="col-sm-3">Foto Lateral Izquierdo</p>
                                <div class="col-sm-3">
                                    <!--
                                     // input para captura de imagen usando camara disponible

                                    <input type="file" accept="image/jpg,png;capture=camera" class="form-control" contextmenu="Foto Frontal">
                                </div>

                                <p class="col-sm-3">Foto trasera</p>
                                <div class="col-sm-3">
                                    <!--
                                     // input para captura de imagen usando camara disponible

                                    <input type="file" accept="image/jpg,png;capture=camera" class="form-control" contextmenu="Foto Frontal">
                                </div>

                           </div>

                        </form>

                    </div>
-->
                    <!-- Fase 5 -->
                    <div class="tab-pane" id="ptab3-1">
                        <form class="form-vertical">



                        </form>
                    </div>
                    
                    


                    <!-- Botones justo cerrando  tab-content -->
                        <ul class="pager wizard">
                            <li class="previous"><a href="javascript:void(0)">Volver</a></li>
                            <li class="next"><a href="javascript:void(0)">Siguiente</a></li>
                        </ul>
                
                    </div>

                </div>



            </div>

    </div>
    <!-- Fin formulario -->

</div>




<?/**
 * @var array $nombre_asociado
 * @var array $rnc_asociado
 * @var array $porciento_asociado
 * @var array $servicio_asociado
 */?>

<div class="col-md-11">

    <div class="panel panel-primary">
        <div class="panel-body panel-body-nopadding">
            <div class="panel-primary">
            <div class="panel-heading ">
                <div class="panel-btns">
                    <a href="" class="panel-close">×</a>
                    <a href="" class="minimize">−</a>
                </div>
                <h4 class="panel-title">Crear Asociado</h4>
            </div>
            </div>

<?=form_open(base_url().'proyectos/insertar_asociado/');


$nombre_asociado = array(
    'name' => 'nombre_asociado',
    'id' => 'nombre_asociado',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('nombre_asociado')
);


$rnc_asociado = array(
    'name' => 'rnc_asociado',
    'id' => 'rnc_asociado',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('rnc_asociado')
);


$servicio_asociado = array(
    'name' => 'servicio_asociado',
    'id' => 'servicio_asociado',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('servicio_asociado')
);


$porciento_asociado = array(
    'name' => 'porciento_asociado',
    'id' => 'porciento_asociado',
    'size' => '50',
    'style' => 'width:50%',
    'value' => set_value('porciento_asociado')
);

//el botón submit de nuestro formulario
$submit = array(
    'name' => 'submit',
    'id' => 'submit',
    'value' => 'Registrar Asociado',
    'title' => 'Registrar Asociado'
);

?>

<?php
echo form_fieldset('Nuevo Asociado');
?>


            <form class="form-horizontal form-bordered">
                <div class="form-group">



                        <div class="col-md-4">
                            <?php echo form_label('Nombre : '); ?>
                            <div class="input-group mb15 col-sm-12">
                                <?php echo form_input($nombre_asociado); ?>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <?php echo form_label('RNC : '); ?>
                            <div class="input-group mb15 col-sm-12">
                                <?php echo form_input($rnc_asociado); ?>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <?php echo form_label('Servicio : '); ?>
                            <div class="input-group mb15 col-sm-12">
                                <?php echo form_input($servicio_asociado); ?>
                            </div>

                        </div>
                    <div class="col-md-4">
                        <?php echo form_label('Porciento : '); ?>
                        <div class="input-group mb15 col-sm-12">
                            <?php echo form_input($porciento_asociado); ?>
                        </div>

                    </div>

                </div>
                <div class="col-md-2">


                    <div class="input-group mb15 col-sm-12">
                        <?php echo form_submit($submit);
                        //nuestro boton submit
                        ?>

                    </div>

                    </div>
                <?php
                echo form_close();
                ?>
                <?php
                echo form_fieldset_close();
                ?>

                </div>
                <div class="form-group">
                    <div class="col-md-8">
                        <label class="col-sm-2 control-label" for="readonlyinput">Codigo</label>
                        <div class="col-sm-3">
                            <input type="text" placeholder="00001" id="readonlyinput" class="form-control" readonly="readonly" />
                        </div>
                    </div>
                    <div class="col-md-4">

                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8">
                        <label class="col-sm-2 control-label">Nombre:</label>
                        <div class="col-sm-8">
                            <input type="text" name="nombre_asociado" placeholder="" id="nombre_asociado" class="form-control"  />
                            <label class="error" for="flowers"></label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="col-sm-4 control-label">RNC:</label>
                        <div class="col-sm-8">
                            <input type="text" name="rnc_asociado" placeholder="" id="rnc_asociado" class="form-control"  />
                        </div>
                    </div>
                </div>



                <div class="form-group">

                    <div class="col-md-8">
                        <label class="col-sm-2 control-label">Servicio</label>
                        <div class="col-sm-8">
                            <input type="text" name="servicio_asociado" placeholder="" id="servicio_asociado" class="form-control"  />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label class="col-sm-4 control-label">Porciento (%):</label>
                        <div class="col-sm-8">
                            <input type="text" name="porciento_asociado" placeholder="25" id="porciento_asociado" class="form-control"  />
                            <label class="error" for="flowers"></label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-9">

                    </div>
                    <div class="col-md-3">
                        <!--boton-->

                            <div class="col-sm-12">
                                <button class="btn btn-primary ">Crear</button>&nbsp;
                                <button class="btn btn-danger">Cancelar</button>
                            </div>

                    </div>
                </div>

            </form>




        </div><!-- panel-body -->
    </div>
</div>
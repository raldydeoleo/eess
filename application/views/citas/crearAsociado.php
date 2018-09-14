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

<?=form_open(base_url().'index.php/proyectos/insertar_asociado/');


$nombre_asociado = array(
    'name' => 'nombre_asociado',
    'id' => 'nombre_asociado',
    'size' => '50',
    'class'=> 'form-control',
    'style' => 'width:100%',
    'value' => set_value('nombre_asociado')
);


$rnc_asociado = array(
    'name' => 'rnc_asociado',
    'id' => 'rnc_asociado',
    'class'=> 'form-control',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('rnc_asociado')
);


$servicio_asociado = array(
    'name' => 'servicio_asociado',
    'id' => 'servicio_asociado',
    'class'=> 'form-control',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('servicio_asociado')
);


$porciento_asociado = array(
    'name' => 'porciento_asociado',
    'id' => 'porciento_asociado',
    'class'=> 'form-control',
    'size' => '50',
    'style' => 'width:50%',
    'value' => set_value('porciento_asociado')
);

//el botón submit de nuestro formulario
$submit = array(
    'name' => 'submit',
    'id' => 'submit',
    'class'=> ' btn btn-primary',
    'value' => 'Registrar',
    'title' => 'Registrar'
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






                    <div class="form-group">
                        <div class="col-md-4">
                            <?php echo form_label('Porciento : '); ?>
                            <div class="input-group mb15 col-sm-12">
                                <?php echo form_input($porciento_asociado); ?>
                            </div>

                        </div>
                        <div class="col-md-4">

                        </div>

                        <div class="col-md-4">

                            <div class="col-sm-6">
                                <button class="btn btn-danger">Cancelar</button>
                            </div>
                            <div class="col-sm-6">
                                <?php echo form_submit($submit); ?>

                            </div>

                        </div>
                    </div>
                </div>


                <?php
                echo form_close();
                ?>
                <?php
                echo form_fieldset_close();
                ?>

                </div>



            </form>

        </div><!-- panel-body -->
    </div>
</div>
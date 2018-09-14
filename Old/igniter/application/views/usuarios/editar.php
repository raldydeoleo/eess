<?php /** @var array $usuario */?>
<?php /** @todo (26/07/2016) Wolfan Fabian - Cambiar los nombres de variables $fieldname y $fieldvalue */ ?>

<?php $idUsuario = $usuario[ID_USUARIO]; ?>

<form action="<?= base_url("usuarios/editar/$idUsuario");  ?>" enctype="multipart/form-data" method="post"
      accept-charset="utf-8">


    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-btns">
                <a href="" class="panel-close">X</a>
                <a href="" class="minimize">?</a>
            </div>
            <h4 class="panel-title">Registrar usuario</h4>
            <p>Por favor, digíte la información para registrar el usuario</p>
        </div>

        <div class="panel-body">


            <!--BEGIN USERNAME-->
            <?php $nombreCampo = USERNAME_CN; ?>
            <?php $valorCampo = asignarTextBox($nombreCampo,$usuario); ?>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="<?= $nombreCampo; ?>">Username: <span class="asterisk">*</span></label>
                <br>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="<?=$nombreCampo; ?>" value="<?=$valorCampo; ?>" placeholder="Username" >
                    <?=form_error($nombreCampo); ?>
                </div>
            </div>
            <!--END USERNAME-->


            <!--BEGIN CLAVE-->
            <?php $nombreCampo = CLAVE_CN; ?>
            <?php $valorCampo = asignarTextBox($nombreCampo,$usuario); ?>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="<?= $nombreCampo; ?>">Clave: <span class="asterisk">*</span></label>
                <br>
                <div class="col-sm-9">
                    <input type="password" class="form-control" name="<?=$nombreCampo; ?>" value="<?=$valorCampo; ?>" placeholder="Clave" >
                    <?=form_error($nombreCampo); ?>
                </div>
            </div>
            <!--END CLAVE-->


            <!--BEGIN ESTADO-->
            <?php $nombreCampo = ESTADO_CN; ?>
            <?php $posiblesValores = ['Activo','Inactivo']; ?>
            <div class="form-group">
                <?=form_error($nombreCampo); ?>
                <label  class="col-sm-3 control-label" for="<?= $nombreCampo; ?>">Estado: </label>
                <br>
                <div class="col-sm-6">
                    <?php foreach($posiblesValores as $posibleValor): ?>
                        <?php $selected = asignarRadioButton($nombreCampo,$posibleValor,$usuario);?>
                        <div class="radio">
                            <input type="radio" class="<?=$nombreCampo; ?>" name="<?=$nombreCampo; ?>" value="<?=$posibleValor; ?>" <?= $selected?>> <?=$posibleValor?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!--END ESTADO-->

            <!--BEGIN NOMBRES-->
            <?php $nombreCampo = NOMBRES_CN; ?>
            <?php $valorCampo = asignarTextBox($nombreCampo,$usuario); ?>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="<?= $nombreCampo; ?>">Nombres: <span class="asterisk">*</span></label>
                <br>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="<?=$nombreCampo; ?>" value="<?=$valorCampo; ?>" placeholder="Nombres" >
                    <?=form_error($nombreCampo); ?>
                </div>
            </div>
            <!--END NOMBRES-->


            <!--BEGIN APELLIDOS-->
            <?php $nombreCampo = APELLIDOS_CN; ?>
            <?php $valorCampo = asignarTextBox($nombreCampo,$usuario); ?>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="<?= $nombreCampo; ?>">Apellidos: <span class="asterisk">*</span></label>
                <br>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="<?=$nombreCampo; ?>" value="<?=$valorCampo; ?>" placeholder="Apellidos" >
                    <?=form_error($nombreCampo); ?>
                </div>
            </div>
            <!--END APELLIDOS-->


            <!--BEGIN SEXO-->
            <?php $nombreCampo = SEXO_CN; ?>
            <?php $posiblesValores = ['M','F']; ?>
            <div class="form-group">
                <?=form_error($nombreCampo); ?>
                <label  class="col-sm-3 control-label" for="<?= $nombreCampo; ?>">Sexo: </label>
                <br>
                <div class="col-sm-6">
                    <?php foreach($posiblesValores as $posibleValor): ?>
                        <?php $selected = asignarRadioButton($nombreCampo,$posibleValor,$usuario);?>
                        <div class="radio">
                            <input type="radio" class="<?=$nombreCampo; ?>" name="<?=$nombreCampo; ?>" value="<?=$posibleValor; ?>" <?= $selected?>> <?=$posibleValor?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!--END SEXO-->

            <?php /** @todo: (26/07/2016) Diego Sanchez - Corregir formato de fecha. */ ?>

            <!--BEGIN FECHA NACIMIENTO -->
            <?php $nombreCampo = FECHA_NACIMIENTO_CN; ?>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="<?= $nombreCampo; ?>">Fecha de Nacimiento: <span class="asterisk">*</span></label>
                <br>
                <div class="col-sm-9">
<!--                    <input type="text" placeholder="Fecha de Nacimiento" name="--><?//=$fieldname; ?><!--" id="date" class="form-control" />-->
                    <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                </div>
            </div>
            <!--END FECHA NACIMIENTO -->

            <!--BEGIN TELEFONO CONTACTO-->
            <?php $nombreCampo = TELEFONO_CONTACTO_CN; ?>
            <?php $valorCampo = asignarTextBox($nombreCampo,$usuario); ?>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="<?= $nombreCampo; ?>">Teléfono de Contacto: <span class="asterisk">*</span></label>
                <br>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="phone" name="<?=$nombreCampo; ?>" value="<?=$valorCampo; ?>" placeholder="Teléfono de contacto" >
                    <?=form_error($nombreCampo); ?>
                </div>
            </div>
            <!--END TELEFONO CONTACTO-->


            <!--BEGIN TELEFONO SECUNDARIO-->
            <?php $nombreCampo = TELEFONO_SECUNDARIO_CN; ?>
            <?php $valorCampo = asignarTextBox($nombreCampo,$usuario); ?>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="<?= $nombreCampo; ?>">Teléfono Secundario: </label>
                <br>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="phone2" name="<?=$nombreCampo; ?>" value="<?=$valorCampo; ?>" placeholder="Teléfono secundario" >
                    <?=form_error($nombreCampo); ?>
                </div>
            </div>
            <!--END TELEFONO SECUNDARIO-->


            <!--BEGIN EMAIL-->
            <?php $nombreCampo = EMAIL_CN; ?>
            <?php $valorCampo = asignarTextBox($nombreCampo,$usuario); ?>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="<?= $nombreCampo; ?>">Email: <span class="asterisk">*</span></label>
                <br>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="<?=$nombreCampo; ?>" value="<?=$valorCampo; ?>" placeholder="Email" >
                    <?=form_error($nombreCampo); ?>
                </div>
            </div>
            <!--END EMAIL-->


        </div>
        <div class="panel-footer">
            <div class="row">
                <div class="col-sm-9 col-sm-offset-3">
                    <button class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </div>
            </div>
        </div>

    </div>


</form>
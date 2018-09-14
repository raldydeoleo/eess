<div class="col-lg-12">

    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-btns">
                <a href="" class="panel-close">×</a>
                <a href="" class="minimize">−</a>
            </div>
            <h4 class="panel-title">Diagnostivo de Vehiculo</h4>
            <p>No sabia que escribir aqui @Bruno</p>
        </div>
        <div class="panel-body panel-body-nopadding">

            <form class="form-horizontal form-bordered">
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="readonlyinput">Orden de Trabajo</label>
                    <div class="col-sm-6">
                        <input type="text" value="Orden de Trabajo" id="readonlyinput" class="form-control" readonly="readonly">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="readonlyinput">Unidad</label>
                    <div class="col-sm-6">
                        <input type="text" value="Unidadt" id="readonlyinput" class="form-control" readonly="readonly">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label" for="readonlyinput">Asesor</label>
                    <div class="col-sm-6">
                        <input type="text" value="Asesor" id="readonlyinput" class="form-control" readonly="readonly">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Aver&iacute;a / Falla</label>
                    <div class="col-sm-6">
                        <input type="text" placeholder="Aver&iacute;a / Falla" class="form-control">
                        <span class="help-block">Si est&aacute; vacio no hay aver&iacute;a desde el asesor.</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Fecha</label>
                    <div class="col-sm-6">
                        <input type="text" placeholder="Fecha" id="date" id="readonlyinput" class="form-control" readonly="readonly">
                    </div>
                </div>

            </form>

        </div><!-- panel-body -->

        <div class="panel-footer">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <a href="<?=base_url()?>Vehiculos/checkListInspeccion" class="btn btn-primary">Siguiente</a>&nbsp;
                    <button class="btn btn-default">Cancel</button>
                </div>
            </div>
        </div><!-- panel-footer -->

    </div><!-- panel -->
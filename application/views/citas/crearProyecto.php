<?/**
 * @var array $servicios
 * @var array $piezas
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
                <h4 class="panel-title">Crear Proyecto</h4>
            </div>
            </div>
            <form class="form-horizontal form-bordered">
                <div class="form-group">
                    <div class="col-md-4">
                        <label class="col-sm-12 " for="readonlyinput">Codigo</label>
                        <div class="col-sm-6">
                            <input type="text" placeholder="0001" id="readonlyinput" class="form-control" readonly="readonly" />
                        </div>
                    </div>
                    <div class="col-md-8">
                        <label class="col-sm-3" for="readonlyinput">Cliente:</label>
                        <div class="col-sm-12">
                            <select class="form-control">
                                <option>Seleccione una opción</option>
                                <option>ARCONIN CONSTRUCTORA</option>
                                <option>FACTORIA DE ARROZ GUZMAN</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8">
                        <label class="col-sm-2 control-label">Proyecto:</label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="" id="" class="form-control"  />
                            <label class="error" for="flowers"></label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="col-sm-4 control-label">Monto:</label>
                        <div class="col-sm-8">
                            <input type="text" placeholder="RD$0.00" id="" class="form-control"  />
                        </div>
                    </div>
                </div>



                <div class="form-group">

                    <div class="col-md-8">
                        <label class="col-sm-2 control-label">Asociado</label>
                        <div class="col-sm-10">
                            <select class="form-control ">
                                <option>Seleccione una opción</option>
                                <option>Asociado 1</option>
                                <option>Asociado 2</option>
                                <option>Asociado 3</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8">

                    </div>
                    <div class="col-md-4">
                        <!--boton-->
                        <div class="row">
                            <div class="col-sm-8">
                                <button class="btn btn-primary">Crear</button>&nbsp;
                                <button class="btn btn-danger">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

        </div><!-- panel-body -->
    </div>
</div>
<?/**
 * @var array $servicios
 * @var array $piezas
 */?>

<div class="col-md-11">

    <div class="panel panel-primary">

            <div class="panel-primary">
            <div class="panel-heading ">
                <div class="panel-btns">
                    <a href="" class="panel-close">×</a>
                    <a href="" class="minimize">−</a>
                </div>
                <h4 class="panel-title">Entrada de Material</h4>
            </div>
            </div>
        <div class="panel-body panel-body-nopadding">
            <form class="form-horizontal form-bordered">
                <div class="form-group">
                    <div class="col-md-8">
                        <label class="col-sm-2 control-label" for="">Codigo</label>
                        <div class="col-sm-3">
                            <input type="text" placeholder="" id="codigomaterial" class="form-control"  />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="col-sm-4 control-label" for="readonlyinput">Fecha:</label>
                        <div class="col-sm-6">

                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-sm-3 control-label">Descripcion:</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="" id="" class="form-control" readonly="readonly" />
                            <label class="error" for="flowers"></label>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label class="col-sm-6 control-label">Cantidad:</label>
                        <div class="col-sm-6">
                            <input type="text" placeholder="" id="" class="form-control"  />
                        </div>
                    </div>




                        <div class="col-md-3">
                            <label class="col-sm-3 control-label">Costo:</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="RD$0.00" id="" class="form-control"  />
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
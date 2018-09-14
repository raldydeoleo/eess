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
                <h4 class="panel-title">Constancia de Cobro al Asociado</h4>
            </div>
            </div>
            <form class="form-horizontal form-bordered">
                <div class="form-group">
                    <div class="col-md-8">
                        <label class="col-sm-2" control-label" for="readonlyinput">Codigo</label>
                        <div class="col-sm-3">
                            <input type="text" placeholder="00001" id="readonlyinput" class="form-control"  />
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label>Fecha</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <label>Hora:</label>
                        <div class="input-group mb15">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                            <div class="bootstrap-timepicker"><input id="timepicker" type="text" class="form-control"/></div>


                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8">
                        <label class="col-sm-2 control-label">Asociado:</label>
                        <div class="col-sm-8">
                            <input type="text" placeholder="Asociado Y" id="" class="form-control" readonly  />
                            <label class="error" for="flowers"></label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="col-sm-4 control-label">RNC:</label>
                        <div class="col-sm-8">
                            <input type="text" placeholder="102-100000001-1" id="" class="form-control" readonly />
                        </div>
                    </div>
                </div>



                <div class="form-group">

                    <div class="col-md-5">
                        <label class="col-sm-3 control-label">Servicio</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="Servicio X" id="" class="form-control" readonly />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label class="col-sm-9 control-label">Porciento (%):</label>
                        <div class="col-sm-3">
                            <input type="text" placeholder="25" id="" class="form-control"  />
                            <label class="error" for="flowers"></label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="col-sm-4 control-label">Monto:</label>
                        <div class="col-sm-8">
                            <input type="text" placeholder="RD$0.00" id="" class="form-control"  />
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
                                <button class="btn btn-primary">Imprimir</button>&nbsp;
                                <button class="btn btn-danger">Cancelar</button>
                            </div>

                    </div>
                </div>

            </form>

        </div><!-- panel-body -->
    </div>
</div>
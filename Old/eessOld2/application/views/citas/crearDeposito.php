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
                <h4 class="panel-title">Registrar Deposito</h4>
            </div>
            </div>
        <div class="panel-body panel-body-nopadding">
            <form class="form-horizontal form-bordered">
                <div class="form-group">
                    <div class="col-md-4">
                        <label class="col-sm-5 control-label" for="readonlyinput">Deposito No.:</label>
                        <div class="col-sm-6">
                            <input type="text" placeholder="10001" id="readonlyinput" class="form-control" readonly="readonly" />
                        </div>
                    </div>



                    <div class="col-md-4">
                    <label class="col-sm-4 ">Fecha:</label>
                        <div class="input-group col-sm-6">
                            <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        </div>
                    </div>

                        <div class="col-md-4">
                            <label class="col-sm-4">Hora:</label>
                            <div class="input-group mb15 col-sm-5">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                <div class="bootstrap-timepicker"><input id="timepicker" type="text" class="form-control"/></div>
                            </div>
                        </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-sm-3 control-label">Banco:</label>
                        <div class="col-sm-9">
                            <select class="form-control">
                                <option>Seleccione una opción</option>
                                <option>Banco Popular Dominicano</option>
                                <option>Banreservas</option>
                                <option>BHD Leon</option>
                                <option>Banco del Progreso</option>
                            </select>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <label class="col-sm-3 control-label" for="readonlyinput">Cuenta:</label>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <option>Seleccione una opción</option>
                                <option>101-54646456-10</option>
                                <option>102-79797933-2</option>
                            </select>
                        </div>
                    </div>

                </div>



                <div class="form-group">

                    <div class="col-md-8">
                        <label class="col-sm-3 control-label">Realizado por:</label>
                        <div class="col-sm-9">
                            <input type="text" placeholder="" id="" class="form-control"  />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label class="col-sm-4 control-label">Monto:</label>
                        <div class="col-sm-6">
                            <input type="text" placeholder="RD$0.00" id="" class="form-control"  />
                        </div>
                    </div>


                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Forma Deposito:</label>
                    <div class="col-md-6">

                        <div class="panel-body">
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" value="1" id="checkboxDefault" checked="checked" />
                                <label for="checkboxDefault">Efectivo</label>
                            </div>

                            <div class="ckbox ckbox-default">
                                <input type="checkbox" value="1" id="checkboxDefault" checked="checked" />
                                <label for="checkboxDefault">Cheque</label>
                            </div>

                            <div class="ckbox ckbox-default">
                                <input type="checkbox" value="1" id="checkboxDefault" checked="checked" />
                                <label for="checkboxDefault">Transferencia</label>
                            </div>
                            <div class="ckbox ckbox-default">
                                <input type="checkbox" value="1" id="checkboxDefault" checked="checked" />
                                <label for="checkboxDefault">Mixto</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!--boton-->
                        <div class="row">
                            <div class="col-sm-8">
                                <button class="btn btn-primary">Registrar</button>&nbsp;
                                <button class="btn btn-danger">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

        </div><!-- panel-body -->
    </div>
</div>
<?/**
 * @var array $servicios
 * @var array $piezas
 */?>

<div class="col-md-11">

    <div class="panel panel-default">
        <div class="panel-body panel-body-nopadding">
            <div class="panel-heading">
                <h4 class="panel-title">Orden de Reparación</h4>
            </div>
            <form class="form-horizontal form-bordered">
                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-sm-3 control-label" for="readonlyinput">Orden de Trabajo</label>
                        <div class="col-sm-6">
                            <input type="text" placeholder="24333" id="readonlyinput" class="form-control" readonly="readonly" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="col-sm-3 control-label" for="readonlyinput">Condicion de pago</label>
                        <div class="col-sm-6">
                            <select class="form-control input-sm">
                                <option>Seleccione una opción</option>
                                <option>Contado</option>
                                <option>Credito</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-sm-3 control-label">Tipo de Orden</label>
                        <div class="col-sm-6">
                            <select class="form-control input-sm">
                                <option>Seleccione una opción</option>
                                <option>Cita</option>
                                <option>Mantenimiento</option>
                                <option>Otra</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="col-sm-3 control-label">Prioridad</label>
                        <div class="col-sm-6">
                            <select class="form-control input-sm">
                                <option>Seleccione una opción</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-sm-3 control-label">Fecha de orden</label>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="col-sm-3 control-label">KM/Mi</label>
                        <div class="col-md-4">
                            <input type="number" placeholder="Km / Mi" class="form-control" />
                        </div>
                        <div class="col-sm-2">
                            <select class="form-control input-sm">
                                <option>Km</option>
                                <option>Mi</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-sm-3 control-label">Fecha promesa</label>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="col-sm-3 control-label">Supervisor</label>
                        <div class="col-sm-6">
                            <select class="form-control input-sm">
                                <option>Seleccione una opción</option>
                                <option>Supervisor 1</option>
                                <option>Supervisor 2</option>
                                <option>Supervisor 3</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-sm-3 control-label">Tarea</label>
                        <div class="col-sm-6">
                            <input type="text" placeholder="Tarea a realizar" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="col-sm-3 control-label">Usuario</label>
                        <div class="col-sm-6">
                            <select class="form-control input-sm">
                                <option>Seleccione una opción</option>
                                <option>Usuario 1</option>
                                <option>Usuario 2</option>
                                <option>Usuario 3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-sm-3 control-label">Servicios Requeridos</label>
                        <div class="col-sm-6">
                            <select id="serviciosRequeridos" name="serviciosRequeridos" data-placeholder="Choose One" title="Please select at least 2 flowers" class="select2" multiple required>
                                <option value=""></option>
                                <?php foreach($servicios as $servicio): ?>
                                    <option value="<?=$servicio[ID_SERVICIO]?>"><?=$servicio[NOMBRE_CN]?></option>
                                <?php endforeach; ?>
                            </select>
                            <label class="error" for="flowers"></label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="col-sm-3 control-label">Piezas Requeridas</label>
                        <div class="col-sm-6">
                            <select id="piezasRequeridas" name="piezasRequeridas" data-placeholder="Choose One" title="Please select at least 2 flowers" class="select2" multiple required>
                                <option value=""></option>
                                <?php foreach($piezas as $pieza): ?>
                                    <option value="<?=$pieza[ID_PIEZA]?>"><?=$pieza[NOMBRE_CN]?></option>
                                <?php endforeach; ?>
                            </select>
                            <label class="error" for="flowers"></label>
                        </div>
                    </div>
                </div>
            </form>

        </div><!-- panel-body -->
    </div>
</div>
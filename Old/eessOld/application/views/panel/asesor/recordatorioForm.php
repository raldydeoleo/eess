<?php
/**
 * Created by PhpStorm.
 * User: Burena
 * Date: 04/09/2016
 * Time: 09:00 PM
 **/
?>
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">Recordatorio Proximo Mantenimiento</h5>
        </div>

        <div class="panel-body panel-body-noadding">

            <form class="form-horizontal form-bordered">

                <div class="row">
                        <div class="form-group">
                            <div class="col-md-6">
                            <div class="form-horizontal">
                                <div class="media-body">
                                    <p class="control-label"> Codigo: 10391</p>
                                    <p class="control-label"> Nombre: Francisco J. Fernandez</p>
                                    <p class="control-label"> Vehiculo: Nissan Patrol 2016</p>
                                    <p class="person-name">Chasis: HF4592145665</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <form class="form-horizontal form-bordered">

                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="col-sm-4 control-label">Aplica a: </label>
                            <div class="col-sm-6">
                                <select class="form-control input-sm">
                                    <option>Recordatorio mantenimiento</option>
                                    <option>Recordatorio de garantia</option>
                                    <option>No aplica</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="col-sm-4 control-label">Recordatorio</label>
                            <div class="col-sm-6">
                                <select class="form-control input-sm">
                                    <option>Seguimiento</option>
                                    <option>Monitoreo</option>
                                    <option>Garantia</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="col-sm-4 control-label">Fecha proxima</label>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="col-sm-4 control-label">Hora proxima</label>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                    <div class="bootstrap-timepicker"><input id="timepicker" type="text" class="form-control"/></div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="form-group">

                        <div class="col-md-6">
                            <label class="col-sm-4 control-label">Observaciones</label>
                            <div class="col-sm-7">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
                <br>

                <form class="form-horizontal form-bordered">
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="co-sm-8 control-label" align="center">
                                <button class="btn btn-primary">Aplicar recordatorio</button>
                            </div>
                        </div>
                    </div>
                </form>


        </div>
    </div>
</div>



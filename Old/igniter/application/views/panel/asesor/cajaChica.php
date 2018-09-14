<?php
/**
 * Created by PhpStorm.
 * User: Burena
 * Date: 04/09/2016
 * Time: 09:00 PM
 **/
?>
<div class="col-md-12" xmlns="http://www.w3.org/1999/html">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-btns">
                <a href="" class="panel-close">×</a>
                <a href="" class="minimize">−</a>
            </div>
            <h5 class="panel-title">Registro desembolso caja chica</h5>
        </div>

        <div class="panel-body panel-body-noadding">

            <form class="form-horizontal form-bordered">

                <div class="row">
                        <div class="form-group">
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-3">
                                <label class="col-sm-4 control-label">Fecha</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label class="col-sm-3 control-label">Hora</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                        <div class="bootstrap-timepicker"><input id="timepicker" type="text" class="form-control"/></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>



                <form class="form-horizontal form-bordered">

                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="col-sm-5 control-label">Asignar Monto a Proyecto: </label>
                            <div class="col-sm-7">
                                <select class="form-control">
                                    <option>Seleccione</option>
                                    <option>Proyecto Urbanizacion Miraflores</option>
                                    <option>Hospital Metropolitano de Santiago</option>
                                    <option>Proyecto Generico</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="col-sm-4 control-label">Tipo de Desembolso</label>
                            <div class="col-sm-8">
                                <select class="form-control">
                                    <option>Seleccione</option>
                                    <option>Combustibles</option>
                                    <option>Impuestos</option>
                                    <option>Comida</option>
                                    <option>Pago al Asociado</option>
                                    <option>Otros</option>
                                </select>
                            </div>
                        </div>
                    </div>



                    <div class="form-group">
                        <div class="col-md-8">
                            <label class="col-sm-4 control-label">Descripcion</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" rows="3"></input>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label class="col-sm-4 control-label">Monto:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" rows="3"></input>

                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8">
                            <label class="col-sm-4 control-label">Documento soporte:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" rows="3"></input>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <label class="col-sm-6 control-label">Balance en Caja chica:</label>
                            <div class="col-sm-6">
                                <input type="text" value="RD$10,000.00"class="form-control" rows="3" readonly></input>
                            </div>
                        </div>
                    </div>
                        <div class="form-group">

                            <div class="col-md-8">
                                <label class="col-sm-4 control-label">Observaciones</label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                        <div class="col-md-4">
                            <div class="co-sm-4 control-label" align="center">
                                <button class="btn btn-primary">Registrar</button>
                                <button class="btn btn-danger">Cancelar</button>
                            </div>
                        </div>

                       </div>

                </form>

<!--
                <form class="form-horizontal form-bordered">
                    <div class="form-group">

                    </div>
                </form>  -->


        </div>
    </div>
</div>



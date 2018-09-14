<?php
/**
 * author: Raldy De Oleo
 * Date: 13/12/2016
 **/
?>
<div class="col-md-12" xmlns="http://www.w3.org/1999/html">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-btns">
                <a href="" class="panel-close">×</a>
                <a href="" class="minimize">−</a>
            </div>
            <h5 class="panel-title">Facturar</h5>
        </div>

        <div class="panel-body panel-body-noadding">

            <form class="form-horizontal form-bordered">

                <div class="form-group">
                    <div class="col-md-6">
                        <label class="col-sm-2">Numero:</label>

                            <div class="col-sm-4">

                                <input id="numero" type="text" placeholder="10001" class="form-control" readonly/>
                            </div>
                    </div>
                    <div class="col-md-3">
                        <label class="col-sm-3 control-label">Fecha</label>
                        <div class="col-sm-9">
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
                    <form class="form-group">
                    <div class="col-md-6">

                        <label class="col-sm-2 control-label">Cliente: </label>
                        <div class="col-sm-10">
                            <select class="form-control input-sm-3">
                                <option></option>
                                <option>Bella Terra Mall</option>
                                <option>Plaza Internacional</option>
                                <option>Colinas Mall</option>
                            </select>
                        </div>

                    </div>
                        <div class="col-md-3">
                            <label class="col-sm-4 control-label">Condicion</label>
                            <div class="col-sm-8">
                                <select class="form-control input-sm-3">
                                    <option>Contado</option>
                                    <option>Credito</option>
                                    <option>Mixta</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label class="col-sm-3">NCF:</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-addon"></span>
                                    <input id="" type="text" placeholder="A000010002003" class="form-control" readonly/>
                                </div>
                            </div>

                        </div>
                    </form>





                <form class="form-horizontal ">

                    <div class="form-group">

                        <div class="col-md-6">
                            <label class="col-sm-3 control-label">Proyecto: </label>
                            <div class="col-sm-9">
                                 <select class="form-control input-sm-6">
                                    <option></option>
                                    <option>Iluminacion area parqueo subterraneo</option>
                                    <option>Paneles solares zona sur</option>
                                    <option>Proyecto generico</option>
                                </select>
                            </div>
                        </div>


                    </div>




                    <div class="form-group">
                        <div class="col-md-12">

                        <!--INICIO TABLA DETALLE FACTURA -->

                        <div class="table-responsive">
                            <table class="table table-info table-hover" id="table1">

                                <thead>
                                <tr role="row">
                                    <th>Codigo</th>
                                    <th>Descripcion</th>
                                    <th>Cantidad</th>
                                    <th>Unidad</th>
                                    <th>Precio</th>
                                    <th>Monto</th>
                                </tr>
                                </thead>


                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Materiales Necesarios Proyecto</td>
                                    <td>1</td>
                                    <td>unidad</td>
                                    <td>2,500.00</td>
                                    <td>2,500.00</td>


                                </tr>

                                <tr>
                                    <td>1</td>
                                    <td>Mano de obra</td>
                                    <td>1</td>
                                    <td>unidad</td>
                                    <td>2,500.00</td>
                                    <td>2,500.00</td>


                                </tr>

                                <tr>
                                    <td>1</td>
                                    <td>Transporte</td>
                                    <td>1</td>
                                    <td>unidad</td>
                                    <td>2,500.00</td>
                                    <td>2,500.00</td>


                                </tr>
                                </tbody>

                            </table>

                        </div>
                        </div>
                    </div>

                        <!-- FIN TABLA DETALLE FACTURA -->

                    <div class="form-group">
                        <div class="col-md-8">

                            <label class="col-sm-4 control-label">Observaciones</label>
                            <div class="col-sm-5">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="col-md-4">

                            <label class="col-sm-4 control-label">Sub-Total</label>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon"></i></span>
                                    <div class=""><input id="" type="text" class="form-control"/></div>
                                </div>
                            </div>

                            <label class="col-sm-4 control-label">Itebis(18%)</label>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon"></i></span>
                                    <div class=""><input id="" type="text" class="form-control"/></div>
                                </div>
                            </div>

                            <label class="col-sm-4 control-label">Total General</label>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon"></i></span>
                                    <div class=""><input id="" type="text" class="form-control"/></div>
                                </div>
                            </div>


                        </div>
                    </div>
                </form>


                <form class="form-horizontal form-bordered">
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="co-sm-8 control-label" align="center">
                                <button class="btn btn-primary">Guardar</button>
                                <button class="btn btn-danger">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </form>


        </div>
    </div>
</div>





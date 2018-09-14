

<div class="col-lg-12">


</div>

    <div class="panel panel-default">

        <div class="panel-body">

            <div class="col-md-8">
                <div class="panel-heading">

                    <h4 class="panel-title">Registro de Ingresos</h4>
                </div>

                <form class="form-horizontal form-bordered">
                    <div class="form-group">
                        <div class="col-md-6">
                            <div class="col-sm-12"><label>Numero:</label></div>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="00001" id="desc">

                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Fecha</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label>Hora</label>
                            <div class="input-group mb15">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                <div class="bootstrap-timepicker"><input id="timepicker" type="text" class="form-control"/></div>


                            </div>
                        </div>


                    </div>



                </form>
                <div class="col-md-6">
                <label>Descripcion</label>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="" id="desc">
                    <span class="input-group-addon"><i class=""></i></span>
                </div>
                </div>


                <div class="col-md-6">
                <label>Proyecto</label>

                    <select class="form-control">
                        <option>Seleccione Proyecto</option>
                        <option>Proyecto 1</option>
                        <option>Proyecto 2</option>
                        <option>Proyecto 3</option>
                        <option>Proyecto 4</option>
                        <option>Proyecto 5</option>

                    </select>

                </div>

                <div class="col-md-8">
                    <label>Cliente</label>
                    <div class="input-group">
                        <input type="text" class="form-control" readonly placeholder="Cliente de este proyecto" id="proveedor">
                        <span class="input-group-addon"><i class=""></i></span>
                    </div>
                </div>


                <div class="col-md-4">
                <label>Monto</label>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="RD$0.00" id="monto">
                    <span class="input-group-addon"><i class=""></i></span>
                </div>
                </div>



                <form class="form-horizontal form-bordered">
                    <div class="form-group">

                        <div class="col-md-4">
                            <label>Deposito</label>

                            <select class="form-control">
                                <option>Seleccione Deposito</option>
                                <option>Deposito 1</option>
                                <option>Deposito 2</option>
                                <option>Deposito 3</option>

                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>Cuenta</label>
                            <input type="text" class="form-control" placeholder="" id="monto" readonly>
                        </div>

                        <div class="col-md-4">
                            <label>Banco</label>

                            <input type="text" class="form-control" placeholder="" id="monto" readonly>
                        </div>

                    </div>






                </form>



            </div>


            <div class="col-md-4 right">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h4 class="panel-title">Detalles del Ingreso</h4>
                    </div>
                    <div class="panel-body">
                        <div class="ckbox ckbox-default">
                            <input type="checkbox" value="1" id="checkboxDefault" checked="checked" />
                            <label for="checkboxDefault">Abono</label>
                        </div>

                        <div class="ckbox ckbox-default">
                            <input type="checkbox" value="1" id="checkboxDefault" checked="checked" />
                            <label for="checkboxDefault">Saldo</label>
                        </div>

                        <div class="ckbox ckbox-default">
                            <input type="checkbox" value="1" id="checkboxDefault" checked="checked" />
                            <label for="checkboxDefault">Otros</label>
                        </div>
                    </div>





                </div><!-- panel -->

                <form class="form-horizontal form-bordered">
                    <div class="form-group">
                        <div class="col-md-12">
                                <div class="col-sm-12">
                                    <label class="col-sm-9 control-label">Observaciones</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                            </div>


                  </div>

                    <div class="form-group">

                        <div class="col-md-12">

                            <div class="col-sm-4">
                            </div>
                            <div class="col-sm-8">
                                <button class="btn btn-primary">Registrar</button>&nbsp;
                                <button class="btn btn-danger">Cancelar</button>
                            </div>
                        </div>
                    </div>

                </form>

            </div>



    </div>
        </div>
</div>







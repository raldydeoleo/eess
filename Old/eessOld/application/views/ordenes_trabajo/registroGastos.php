

<div class="col-lg-12">


</div>

    <div class="panel panel-default">

        <div class="panel-body">

            <div class="col-md-8">
                <div class="panel-heading">

                    <h4 class="panel-title">Registro de Gastos</h4>
                </div>


                <div class="col-md-6">
                <label>Descripcion</label>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="" id="desc">
                    <span class="input-group-addon"><i class=""></i></span>
                </div>
                </div>


                <div class="col-md-6">
                <label>Referencia</label>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Factura o documento de soporte " id="referencia">
                    <span class="input-group-addon"><i class=""></i></span>
                </div>
                </div>

                <div class="col-md-8">
                    <label>Proveedor</label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="" id="proveedor">
                        <span class="input-group-addon"><i class=""></i></span>
                    </div>
                </div>


                <div class="col-md-4">
                <label>Monto</label>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="" id="monto">
                    <span class="input-group-addon"><i class=""></i></span>
                </div>
                </div>



                <form class="form-horizontal form-bordered">
                    <div class="form-group">

                        <div class="col-md-6">

                            <label class="col-sm-12">Tipo de Gasto</label>

                            <select class="form-control">
                                <option>Seleccione tipo</option>
                                <option>Sueldos</option>
                                <option>Teléfono</option>
                                <option>Internet</option>
                                <option>Energía Eléctrica</option>
                                <option>Agua</option>
                                <option>Mantenimiento Vehículos</option>
                                <option>TSS</option>
                                <option>Préstamos a empleados</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label>Fecha de gasto</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label>Hora del gasto</label>
                            <div class="input-group mb15">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                <div class="bootstrap-timepicker"><input id="timepicker" type="text" class="form-control"/></div>


                            </div>
                        </div>


                        <div class="col-md-6">

                            <label class="col-sm-12">Asignar a Proyecto:</label>

                            <select class="form-control">
                                <option>Proyecto A</option>
                                <option>Proyecto B</option>
                                <option>Proyecto C</option>

                            </select>
                        </div>

                        <div class="col-md-6">

                            <label class="col-sm-12">Asociado (%)</label>

                            <select class="form-control">
                                <option>Seleccione tipo</option>
                                <option>Asociado 1</option>
                                <option>Asociado 2</option>
                                <option>Asociado 3</option>

                            </select>
                        </div>

                    </div>


                    <div class="col-md-12">
                        <div class="col-sm-12">
                            <label class="col-sm-9 control-label">Observaciones</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>



                </form>



            </div>


            <div class="col-md-4 right">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h4 class="panel-title">Detalles del gasto</h4>
                    </div>
                    <div class="panel-body">
                        <div class="ckbox ckbox-default">
                            <input type="checkbox" value="1" id="checkboxDefault" checked="checked" />
                            <label for="checkboxDefault">Proyecto</label>
                        </div>

                        <div class="ckbox ckbox-default">
                            <input type="checkbox" value="1" id="checkboxDefault" checked="checked" />
                            <label for="checkboxDefault">Oficina</label>
                        </div>

                        <div class="ckbox ckbox-default">
                            <input type="checkbox" value="1" id="checkboxDefault" checked="checked" />
                            <label for="checkboxDefault">Administrativa</label>
                        </div>
                    </div>





                </div><!-- panel -->

                <form class="form-horizontal form-bordered">
                    <div class="form-group">
                        <div class="col-md-12">

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


                    </div>



                </form>

            </div>



    </div>
        </div>
</div>







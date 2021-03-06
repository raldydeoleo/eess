

<div class="col-lg-12">


</div>

    <div class="panel panel-default">

        <div class="panel-body">

            <div class="col-md-9">
                <div class="panel-primary">
                <div class="panel-heading">

                    <h4 class="panel-title">Compra de Materiales de Oficina</h4>
                </div>
                </div>

                <form class="form-horizontal form-bordered">
                    <div class="form-group">
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-3">
                            <label>Fecha de compra</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label>Hora</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                <div class="bootstrap-timepicker"><input id="timepicker" type="text" class="form-control"/></div>
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <div class="col-md-2">
                            <label>Cantidad</label>
                            <div class="input-group" >
                                <input type="text" class="form-control"  placeholder="" id="cantidad">
                                <span class="input-group-addon"><i class=""></i></span>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <label>Descripcion</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="" id="desc">
                                <span class="input-group-addon"><i class=""></i></span>
                            </div>

                        </div>

                        <div class="col-md-2">
                            <label>Unidad</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="" id="unidad">
                                <span class="input-group-addon"><i class=""></i></span>
                            </div>

                        </div>

                        <div class="col-md-2">
                            <label>Precio</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="" id="precio">
                                <span class="input-group-addon"><i class=""></i></span>
                            </div>

                        </div>
                    </div>
                </form>
                <form class="form-horizontal form-bordered">
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="col-sm-12">Proveedor</label>
                            <select class="form-control">
                                <option>Seleccione </option>
                                <option>Proveedor 1</option>
                                <option>Proveedor 2</option>
                                <option>Proveedor 3</option>
                                <option></option>
                            </select>

                        </div>
                        <div class="col-md-6">
                            <label class="col-sm-12">Proyecto</label>
                            <select class="form-control">
                                <option>Seleccione </option>
                                <option>Proyecto 1</option>
                                <option>Proyecto 2</option>
                                <option>Proyecto 3</option>
                                <option></option>
                            </select>

                        </div>

                    </div>
            </form>
            </div>


            <div class="col-md-3 right">
                <div class="panel panel-danger">

                    <div class="panel-heading">
                        <h4 class="panel-title">Detalles de la compra</h4>
                    </div>
                    <div class="panel-body">
                        <div class="ckbox ckbox-default">
                            <input type="checkbox" value="1" id="checkboxDefault" checked="checked" />
                            <label for="checkboxDefault">Proyecto</label>
                        </div>

                        <div class="ckbox ckbox-default">
                            <input type="checkbox" value="1" id="checkboxDefault" checked="checked" />
                            <label for="checkboxDefault">Administrativa</label>
                        </div>
                    </div>

                </div><!-- panel -->

                <form class="form-horizontal form-bordered">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label class="col-sm-9 control-label">Observaciones</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                </form>

                <!--botones-->
                <div class="row">
                    <div class="col-sm-12">
                        <button class="btn btn-primary">Crear</button>&nbsp;
                        <button class="btn btn-danger">Cancelar</button>
                    </div>
                </div>

            </div>



    </div>
        </div>
</div>







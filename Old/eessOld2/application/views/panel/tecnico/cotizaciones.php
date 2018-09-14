<div class="col-lg-12">

    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-btns">
                <a href="" class="panel-close">×</a>
                <a href="" class="minimize">−</a>
            </div>
            <h4 class="panel-title">Cotizacion</h4>
            <p>Crear cotizacion para cliente o proyecto</p>
        </div>
        <div class="panel-body panel-body-nopadding">

            <form class="form-bordered">
                <div class="form-group">
                    <div class="col-md-8">

                    </div>
                    <div class="col-md-2">
                        <label class="col-sm-2 control-label" for="readonlyinput">Numero</label>
                        <div class="col-sm-12">
                            <input type="text" value="100001" id="readonlyinput" class="form-control" readonly="readonly">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label>Fecha:</label>
                        <div class="input-group col-sm-11">
                            <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                <div class="col-md-6">
                    <label class="col-sm-2 control-label" for="readonlyinput">Cliente</label>
                    <div class="col-sm-12">
                        <select id="readonlyinput" class="form-control">
                            <option>Seleccione Cliente</option>
                            <option>Cliente 1</option>
                            <option>Cliente 2</option>
                            <option>Cliente 3</option>
                            <option>Cliente 4</option>
                            <option>Cliente 5</option>

                        </select>
                        <!-- <input type="text" value="" id="readonlyinput" class="form-control" > -->
                    </div>
                </div>
                <div class="col-md-6">
                    <label class="col-sm-2 control-label" for="readonlyinput">Proyecto</label>
                    <div class="col-sm-12">
                        <input type="text" value="" id="readonlyinput" class="form-control" readonly="readonly">
                    </div>
                </div>
                </div>
                </form>


            <form class="form-bordered">
                <!--INICIO DETALLE COTIZACION -->
                <div class="form-group">
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
                            <td>Articulos varios Fact. #69791</td>
                            <td>1</td>
                            <td>unidad</td>
                            <td>2,500.00</td>
                            <td>2,500.00</td>


                        </tr>

                        <tr>
                            <td>1</td>
                            <td>Articulos varios Fact. #69791</td>
                            <td>1</td>
                            <td>unidad</td>
                            <td>2,500.00</td>
                            <td>2,500.00</td>


                        </tr>

                        <tr>
                            <td>1</td>
                            <td>Articulos varios Fact. #69791</td>
                            <td>1</td>
                            <td>unidad</td>
                            <td>2,500.00</td>
                            <td>2,500.00</td>


                        </tr>
                        </tbody>

                    </table>
                </div>



                </div>
                <!--FIN DETALLE COTIZACION -->



                <div class="form-group">

                    <div class="col-md-9">

                    </div>
                 <div class="col-md-3">
                    <label class="col-sm-6 control-label" for="readonlyinput">Sub - Total</label>
                    <div class="col-sm-6">
                        <input type="text" value="" id="readonlyinput" class="form-control" readonly="readonly">
                    </div>
                 </div>


                    <div class="col-md-9">

                    </div>

                    <div class="col-md-3">
                    <label class="col-sm-6 control-label">Itebis (18%)</label>
                    <div class="col-sm-6">
                        <input type="text" placeholder="" class="form-control">
                        <span class="help-block"></span>
                    </div>
                    </div>

                    <div class="col-md-9">

                    </div>
                    <div class="col-md-3">
                    <label class="col-sm-6 control-label">Total General</label>
                    <div class="col-sm-6">
                        <input type="text" placeholder="" id="totalgral" id="readonlyinput" class="form-control" readonly="readonly">
                    </div>
                   </div>
                 </div>

                </div>



            </form>

        </div><!-- panel-body

        <div class="panel-body panel-body-nopadding">


        </div> -->

        </div>
        <div class="panel-footer">
            <div class="col-md-9">

            </div>

                <div class="col-md-3">


                <div class="col-sm-12 col-sm-offset-3">
                    <a href="<?=base_url()?>#" class="btn btn-primary">Guardar</a>&nbsp;
                    <button class="btn btn-danger">Cancelar</button>
                </div>
                </div>

        </div><!-- panel-footer -->

    </div><!-- panel -->
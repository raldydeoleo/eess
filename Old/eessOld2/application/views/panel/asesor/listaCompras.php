

    <div class="col-md-12">
    <div class="panel panel-default">

        <div class="panel-heading">

        <div class="clearfix mb30"></div>
        <h5 class="subtitle mb5">TODAS LAS COMPRAS </h5>
        <p>Listado de Compras Realizadas</p>
        <br />
        <div class="table-responsive">
            <?php if (count($compras)): ?>
            <table class="table table-warning table-hover mb30">
                <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Descripcion</th>
                    <th>Cantidad</th>
                    <th>Monto</th>
                    <th>Fecha Factura</th>
                    <th>Fecha Vencimiento</th>
                    <th>Accion</th>

                </tr>
                </thead>
                <tbody>

                <?php foreach($compras as $item): ?>
                    <tr>
                        <td style=""> <?php echo $item->id_compra ?> </td>
                        <td style="width: 35%"> <?php echo $item->desc_compra ?> </td>
                        <td style=""> <?php echo $item->cantidad_compra ?> </td>
                        <td style=""> <?php echo $item->precio_compra ?> </td>
                        <td style=""> <?php echo $item->fecha_compra ?> </td>
                        <td style=""> <?php echo $item->vencimiento_compra ?> </td>

                        <td>

                            <div class="btn-group">
                                <a data-toggle="dropdown" class="dropdown-toggle">
                                    <i class="fa fa-gear"></i>
                                </a>
                                <ul role="menu" class="dropdown-menu pull-right">
                                    <li><a href="<?php echo base_url() ?>index.php/compras/ver/<?php echo $item->id_compra ?>">Ver compra</a></li>
                                    <li><a data-toggle="modal" data-target="#llamadaCliente">Llamada al cliente</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo base_url() ?>index.php/compras/editar/<?php echo $item->id_compra ?>">Editar</a></li>
                                    <li><a href="<?php echo base_url() ?>index.php/compras/eliminar/<?php echo $item->id_compra ?>">Eliminar</a></li>
                                    <li><a href="#">Commentar</a></li>
                                </ul>
                            </div>
                       </td>

                    </tr>
                <?php endforeach; ?>

                </tbody>
            </table>
            <?php else: ?>
                <p> No hay compras para mostrar </p>
            <?php endif; ?>
        </div>
            <div class="panel-default">
                <ul class="pagination pagination-split">
                    <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

    <!-- Contenido llamada al Cliente -->
    <div class="modal fade" id="llamadaCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Llamada al cliente para cita</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">

                        <div class="col-md-12">
                            <label class="col-sm-4 control-label">Exito del recordatorio</label>
                            <div class="col-sm-8">
                                <select class="form-control input-sm mb15">
                                    <option>Llamada contestada</option>
                                    <option>No contestaron</option>
                                    <option>Llamar otro dia</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label class="col-sm-4 control-label">Observaciones de la llamada</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" rows="4"></textarea>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Guardar para llamar luego</button>
                    <button type="button" class="btn btn-primary">Guardar para agendar cita</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Contenido llamada al Cliente -->


<?php /** @var array $proveedores */?>



    <div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">Seguimiento de Proveedores</h4>
            <div class="table-responsive">
                <?php if (count($proveedores)): ?>
        <table class="table table-warning table-hover mb30" id="table1">
                <thead>
                    <tr>
                        <!-- Proveedores -->
                        <th>Codigo</th>
                        <th>Empresa</th>
                        <th>RNC</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Direccion</th>
                        <th>Accion</th>

                    </tr>
                </thead>
                <tbody>

                <?php foreach($proveedores as $proveedor): ?>
                <tr class="odd gradeX">
                    <td style=""> <?php echo $proveedor->id_proveedor ?> </td>
                    <td style=""> <?php echo $proveedor->empresa_proveedor ?> </td>
                    <td style=""> <?php echo $proveedor->rnc_proveedor ?> </td>
                    <td style=""> <?php echo $proveedor->nombre_proveedor ?> </td>
                    <td style=""> <?php echo $proveedor->apellido_proveedor ?> </td>
                    <td style=""> <?php echo $proveedor->telefono_proveedor ?> </td>
                    <td style=""> <?php echo $proveedor->email_proveedor ?> </td>
                    <td style=""> <?php echo $proveedor->direccion_proveedor ?> </td>
                    <td>
                        <div class="btn-group">
                            <a data-toggle="dropdown" class="dropdown-toggle">
                                <i class="fa fa-gear"></i>
                            </a>
                            <ul role="menu" class="dropdown-menu pull-right">
                                <li><a href="<?php echo base_url() ?>index.php/proveedores/ver/<?php echo $proveedor->id_proveedor ?>">Ver Proveedor</a></li>
                                <li><a data-toggle="modal" data-target="#llamadaCliente">Llamada al cliente</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url() ?>index.php/proveedores/editar/<?php echo $proveedor->id_proveedor ?>">Editar</a></li>
                                <li><a href="<?php echo base_url() ?>index.php/proveedores/eliminar/<?php echo $proveedor->id_proveedor ?>">Eliminar</a></li>
                                <li><a href="#">Commentar</a></li>
                            </ul>
                        </div>



                    </td>



                </tr>
                <?php endforeach; ?>

                </tbody>
            </table>
                <?php else: ?>
                    <p> No hay proveedores para mostrar </p>
                <?php endif; ?>
            </div>

            <div class="rigth">
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

<!-- script>
    jQuery(document).ready(function() {

        "use strict";

        jQuery('#table1').dataTable();

        jQuery('#table2').dataTable({
            "sPaginationType": "full_numbers"
        });

        // Select2
        jQuery('select').select2({
            minimumResultsForSearch: -1
        });

        jQuery('select').removeClass('form-control');

        // Delete row in a table
        jQuery('.delete-row').click(function(){
            var c = confirm("Continue delete?");
            if(c)
                jQuery(this).closest('tr').fadeOut(function(){
                    jQuery(this).remove();
                });

            return false;
        });

        // Show aciton upon row hover
        jQuery('.table-hidaction tbody tr').hover(function(){
            jQuery(this).find('.table-action-hide a').animate({opacity: 1});
        },function(){
            jQuery(this).find('.table-action-hide a').animate({opacity: 0});
        });


    });
</script -->


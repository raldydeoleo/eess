<?php /** @var array $empleados */?>



    <div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">Lista de Empleados</h4>

        <?php if (count($empleados)): ?>
            <div class="table-responsive">
        <table class="table table-info table-hover" id="table1">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Cedula</th>
                        <th>Sueldo</th>
                        <th>Fecha Ingreso</th>
                        <th>Estado</th>
                        <th>Telefono</th>
                        <th>Celular</th>
                        <th>Email</th>
                        <th>Edad</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>

                <?php foreach($empleados as $empleado): ?>
                <tr class="odd gradeX">
                    <td><?php echo $empleado->id_empleado ?></td>
                    <td><?php echo $empleado->nombre_empleado ?></td>
                    <td><?php echo $empleado->apellido_empleado?></td>
                    <td><?php echo $empleado->cedula_empleado?></td>
                    <td><?php echo $empleado->sueldo_empleado?></td>
                    <td><?php echo $empleado->fechaingreso_empleado?></td>
                    <td><?php echo $empleado->estado_empleado?></td>
                    <td><?php echo $empleado->telefono_empleado?></td>
                    <td><?php echo $empleado->celular_empleado?></td>
                    <td><?php echo $empleado->email_empleado?></td>
                    <td><?php echo $empleado->edad_empleado?></td>
                    <td>
                 <div class="btn-group">
                   <a data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-gear"></i> </a>
                            <ul role="menu" class="dropdown-menu pull-right">
                    <li><a href="<?php echo base_url() ?>index.php/empleados/verEmpleado/<?php echo $empleado->id_empleado ?>">Percepciones y deducciones</a></li>
                    <li><a href="<?php echo base_url() ?>index.php/empleados/generar_recibo/<?php echo $empleado->id_empleado ?>">Imprimir Recibo</a></li>
                    <li><a href="<?php echo base_url() ?>index.php/empleados/ver/<?php echo $empleado->id_empleado ?>">Ver</a></li>
                    <li><a href="<?php echo base_url() ?>index.php/empleados/editar/<?php echo $empleado->id_empleado ?>">Editar</a></li>
                    <li><a href="<?php echo base_url() ?>index.php/empleados/editar/<?php echo $empleado->id_empleado ?>">Desactivar</a></li>

                    <li class="divider"></li>
                    <li><a data-toggle="modal" data-target="#llamadaCliente">Prestamo</a></li>
                    <li><a href="<?php echo base_url() ?>index.php/empleados/editar/<?php echo $empleado->id_empleado ?>">Commentar</a></li>
                            </ul>
                </div>


                    </td>


                </tr>
                <?php endforeach; ?>

                </tbody>
            </table>

                <?php else: ?>
                    <p> No hay empleados para mostrar </p>
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
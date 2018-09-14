<?php /** @var array $vehiculos */?>


<div class="contentpanel">
    <div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="">Estimaciones
            </h4>
            <h1 class="panel-title"> Precio de Piezas y/o Servicios</h1>
            <div class="table-responsive">
        <table class="table table-info table-hover" id="table1">
                <thead>
                    <tr>
                        <!-- Estimaciones de precios - Piezas yServicios -->
                        <th>Mantenimientos</th>
                        <th>Piezas y servicios</th>
                        <th>Tiempo de Accion</th>
                        <th>Precios</th>
                    </tr>
                </thead>

                    <tr>
                        <th>10014</th>
                        <th>Alineacion</th>
                        <th>2 Horas</th>
                        <th>$5600</th>
                    </tr>

                <tbody>
                
                </tbody>
            </table>
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
</script 


                <?php foreach($vehiculos as $vehiculo): ?>
                <tr class="odd gradeX">
                    <td><?=$vehiculo[ID_CLIENTE]?></td>
                    <td><?=$vehiculo[CLIENTE_PSEUDO]?></td>
                    <td>8093422439</td>
                    <td>8094423802</td>
                    <td>franfer@gmail.com</td>
                    <td><?=$vehiculo[MARCA_PSEUDO]?></td>
                    <td>Frontier 2015</td>
                    <td>G259935</td>
                    <td>02/06/2016</td>
                    <td>3:00 PM</td>
                </tr>
                <?php endforeach; ?>



-->


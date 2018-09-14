<?php /** @var array $empleados */?>

<div class="col-md-12">

    
            <div class="rigth">
               <!--  <ul class="pagination pagination-split">
                    <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
                inicio  -->
            
            <div class="col-md-12">    

    <div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">Seguimiento de Empleados</h4>
            <div class="table-responsive">
        <table class="table table-info table-hover" id="table1">
                <thead>
                    <tr>
                       
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Celular</th>
                        <th>Email</th>
                        <th>Cedula</th>
                        <th>Sueldo</th>
                        <th>Fecha Ingreso</th>


                    </tr>
                </thead>
                <tbody>

                
                <tr class="odd gradeX">
                    <td>1001</td>
                    <td>Nelson</td>
                    <td>Cepeda</td>
                    <td>Urb. Corona Plaza</td>
                    <td>8094423802</td>
                    <td>8094423802</td>
                    <td>ncepeda@eess.com.do</td>
                    <td>031-0310001-9</td>
                    <td>25,000</td>
                    <td>02/06/2016</td>

                </tr>
                

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


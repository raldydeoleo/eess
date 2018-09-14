<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.png" type="image/png">



    <link href="<?php echo base_url() ?>assets/css/style.default.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url() ?>assets/js/html5shiv.js"></script>
    <script src="<?php echo base_url() ?>assets/js/respond.min.js"></script>
    <![endif]-->
    <link href="<?php echo base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>


    <div class="panel panel-info">

        <div class="panel-body">

            <div class="col-md-8">
                <div class="panel-heading">

                    <h4 class="panel-title">Recibo de nomina individual empleado</h4>
                </div>
                <form method="post" action="<?php echo base_url() ?>index.php/empleados/percepydeduc/<?php /** echo $id_empleado; */ ?>">

          
              <div class="col-md-12">
                  <div class="people-item">
                      <div class="media">
                          <a href="#" class="pull-left">
                              <img alt="" src="<?php echo base_url() ?>assets/images/photos/user2.png" class="thumbnail media-object">
                          </a>
                          <div class="media-body">
                              <h4 class="person-name">Codigo:<?php  echo $id_empleado; ?></h4>
                              <h4 class="person-name"><?php  echo $nombre_empleado; ?> <?php  echo $apellido_empleado; ?></h4>
                              <div class="text-muted"><i class="fa fa-map-marker"></i><?php  echo $direccion_empleado; ?></div>
                              <div class="text-muted"><i class="fa fa-briefcase"></i> <a href="">Cargo: <?php  echo $cargo_empleado; ?></a></div>
                              <div class="text-muted"><i class="fa fa-phone"></i> Cedula: <?php  echo $cedula_empleado; ?></div>
                              <div class="text-muted"><i class="fa fa-phone"></i> Sueldo base: <?php  echo $sueldo_empleado; ?></div>

                          </div>
                      </div>
                  </div>
              </div>





             

<!-- INICIO TABLA RECIBO -->

                <div class="col-md-12">

                    <div class="table-responsive">
                      <table class="table table-info table-hover" id="table1">

                          <thead>
                          <tr role="row">
                              <th>Recibo #</th>
                              <th>ID Empleado</th>
                              <th>Proyecto</th>
                              <th>% Asoc</th>
                              <th>Percepciones</th>
                              <th>Sueldo Bruto</th>
                              <th>Deducciones</th>
                              <th>Sueldo Neto</th>
                              <th>Fecha de nomina</th>
                              <th>Estado</th>
                              <th>imprimir</th>

                          </tr>
                          </thead>


                          <tbody>
                    <?php 

                       $fecha_recibo = date('d-m-Y');

                        //intenta conectarse a la base de datos
                        $mysqli = new mysqli("localhost", "eesscomd_root","netpro2016", "eesscomd_db_eess2");
                            if ($mysqli === false){

                                die ("Error: No se establecio la conexion. " . mysqli_connect_error());
                            }


                    $sql = "SELECT * FROM percepciones WHERE id_empleado = $id_empleado ";
                            if ($result = $mysqli->query($sql)){
                                if ($result->num_rows >0){
                                     

                                    while ($row = $result->fetch_array()){
                                        echo "<tr>";
                                        
                                        echo "<td>";
                                        echo  $row[0];  
                                        echo "</td>";

                                        echo "<td>";
                                        echo  $row[1];  
                                        echo "</td>";

                                        echo "<td>";
                                        echo  $row[2];
                                        echo "</td>";

                                        echo "<td>";
                                        echo  $row[3];
                                        echo "</td>";

                                        echo "<td>";
                                        echo  $row[7];
                                        echo "</td>";
                                       
                                        echo "<td>";
                                        echo  $row[4];
                                        echo "</td>";


                                        echo "<td>";
                                        echo  $row[12];
                                        echo "</td>";

                                        

                                        echo "<td>";
                                        echo  $row[18];
                                        echo "</td>";

                                        echo "<td>"; 
                                        echo  $row[19];
                                        echo "</td>";

                                        echo "<td>";
                                        echo "Pagado";
                                        echo "</td>";

                                        echo "<td>";
                                        echo "<div class=\"ckbox ckbox-warning\">
                                    <input type=\"checkbox\" id=\"\"  />
                                    <label for=\"checkboxWarning\"></label>
                                </div>";
                                        echo "</td>";

                                    }
                                     echo " </tr>";
                                     echo " </tbody>";
                                     echo " </table>";

                                }
                            }
                            //echo $fecha_nomina;
                        ?>
                       
                       </div>
                  </div>

<!-- FIN TABLA RECIBO -->


                  </div>

            <div class="col-md-4 right">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">Info empleado</h4>
                    </div>
                    <div class="panel-body">
                       
                    <div class="form-group">

                         <div class="col-md-4">
                             <label>Fecha</label>
                             <input type="text" name="fecha_recibo" class="form-control"   required="required" value="<?php echo $fecha_recibo; ?>" />

                         </div>
                        <div class="col-md-4">
                            <label>Tipo:</label>
                            <div class="form-group">
                                <div class="ckbox ckbox-warning">
                                    <input type="checkbox" id="checkboxWarning" checked="checked" />
                                    <label for="checkboxWarning">Fijo</label>
                                </div>

                                <div class="ckbox ckbox-primary">
                                    <input type="checkbox" id=""  />
                                    <label for="checkboxDanger">Temporal</label>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <label>Estatus:</label>
                            <div class="ckbox ckbox-primary">
                                <input type="checkbox" id="" checked="checked" />
                                <label for="checkboxDanger">Activo</label>
                            </div>
                        </div>
                    </div>
                    </div>

                </div><!-- panel -->

                <form class="form-horizontal form-bordered">

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <a class="btn btn-danger" href="<?php echo base_url() ?>index.php/empleados/generar_nomina">Cancelar</a>
                                <input type="submit"  class="btn btn-success" value="Imprimir"  />
                            </div>
                        </div>
                    </div>
                </form>
                
                    </div>



        </div>
    </div>

</body>
</html>





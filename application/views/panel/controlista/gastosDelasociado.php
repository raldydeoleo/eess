<?php /** @var array $detalle_asociado */?>


<div class="panel panel-default">
    <div class="panel-heading">
        <center><h2 class="panel-title">Detalle del Asociado</h2></center>

    </div>
    <div class="panel-body panel-body-nopadding">

        <form class="form-horizontal form-bordered">

            <div class="form-group">
                <div class="col-md-6">
                <label class="col-sm-3 control-label" for="readonlyinput">Proyecto:</label>
                <div class="col-sm-6">
                    <h4 class="dark"></h4>
                </div>
            </div>

                <div class="col-md-6">
                    <label class="col-sm-3 control-label" for="readonlyinput">Asociado:</label>
                    <div class="col-sm-6">
                        <h4 class="dark"> <?php echo $detalle_asociado->id_asociado; ?> </h4>
                    </div>
               </div>
            </div>

            <div class="form-group">  <h2 class="dark">Nomina</h2></div>
            <div class="form-group">

                <!-- INICIO TABLA RECIBO -->

                <div class="col-md-12">

                    <div class="table-responsive">
                        <table class="table table-info table-hover" id="table1">

                            <thead>
                            <tr role="row">
                                <th>Recibo #</th>
                                <th>ID Empleado</th>
                                <th>Asociado</th>
                                <th>%(Porciento)</th>
                                <th>Total Percepciones</th>
                                <th>Sueldo Bruto</th>
                                <th>Total Deducciones</th>
                                <th>Sueldo Neto</th>
                                <th>Fecha de nomina</th>


                            </tr>
                            </thead>


                            <tbody>
                            <?php

                            $mysqli = new mysqli("localhost", "eesscomd_root","netpro2016", "eesscomd_db_eess2");
                            if ($mysqli === false){

                                die ("Error: No se establecio la conexion. " . mysqli_connect_error());
                            }


                            $sql = "SELECT * FROM percepciones WHERE id_asociado =" . $detalle_asociado->id_asociado;
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
                                        echo  $row[3];
                                        echo "</td>";

                                        echo "<td>";
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

                                    }
                                    echo " </tr>";
                                    echo " </tbody>";
                                    echo " </table>";

                                }
                            }

                            ?>

                    </div>
                </div>

                <!-- FIN TABLA RECIBO -->

                <div class="form-group">  <h2 class="dark">Compras:</h2></div>

                <div class="col-md-6">
                <label class="col-sm-3 control-label" for="readonlyinput">Costo:</label>
                <div class="col-sm-9">
                    <ul>
                        <li><h4 class="dark">Materiales : RD$0.00</h4></li>

                        <li><h4 class="dark">Combustibles: RD$0.00 </h4></li>
                    </ul>
                </div>
            </div>

                <div class="form-group"> <h2 class="dark"></h2></div>
                <div class="form-group"> <h2 class="dark">Balance:</h2></div>
                <div class="form-group">
                <div class="col-md-6">


                </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for="readonlyinput">Porcentaje a Asociados:</label>
                <div class="col-sm-6">
                    <ul>
                        <li><h4 class="dark">RD$0.00</h4></li>

                    </ul>
                </div>
            </div>

        </form>

    </div><!-- panel-body -->

    <div class="panel-footer">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <center>
                    <button class="btn btn-primary">Imprimir</button>&nbsp;
                    <button class="btn btn-default">Salir</button>
                </center>
            </div>
        </div>
    </div><!-- panel-footer -->


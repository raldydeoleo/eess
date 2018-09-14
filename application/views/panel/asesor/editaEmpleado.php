<div xmlns="http://www.w3.org/1999/html">

</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.png" type="image/png">



    <link href="<?php  echo base_url() ?>assets/css/style.default.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url() ?>assets/js/html5shiv.js"></script>
    <script src="<?php echo base_url() ?>assets/js/respond.min.js"></script>
    <![endif]-->
    <link href="<?php echo base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">

</head>
<body

<div class="col-md-12">
    <p></p>
</div>
<div class="col-md-8">
    <div class="panel panel-primary">
    <div class="panel-heading">

        <h5 class="panel-title"> Actualizar datos del empleado</h1>
    </div>

        <div class="panel-body" >


    <form method="post" action="<?php echo base_url() ?>index.php/empleados/guardar_post/<?php echo $id_empleado; ?>">

        <div class="form-group">
            <div class="panel panel-info">
                <div class="panel-heading">

                    <h5 class="panel-title">Informacion del empleado</h5>
                </div>
            <div class="col-md-1">
                <label> id </label>
                <input type="text" name="id_empleado" class="form-control" required="required"   value="<?php echo $id_empleado; ?>" />
            </div>

        <div class="col-md-3">
            <label> Nombre </label>
            <input type="text" name="nombre_empleado" class="form-control"   required="required" value="<?php echo $nombre_empleado; ?>" />
        </div>

            <div class="col-md-3">
                    <label> Apellido </label>
                    <input type="text" name="apellido_empleado" class="form-control"   required="required" value="<?php echo $apellido_empleado; ?>" />
                </div>

                <div class="col-md-3">
                    <label> Cargo </label>
                    <input type="text" name="cargo_empleado" class="form-control"   required="required" value="<?php echo $cargo_empleado; ?>" />
                </div>

            <div class="col-md-2">
                <label> Telefono </label>
                <input type="text" name="telefono_empleado" class="form-control" required="required" value="<?php echo $telefono_empleado; ?>" />
            </div>

                <div class="col-md-2">
                    <label> Celular </label>
                    <input type="text" name="celular_empleado" class="form-control" required="required" value="<?php echo $celular_empleado; ?>" />
                </div>
        <div class="col-md-3">
            <label> Email </label>
            <input type="email" name="email_empleado" class="form-control"  required="required" value="<?php echo $email_empleado; ?>" />
        </div>

            <div class="col-md-4">
                <label> Direccion </label>
                <input type="text" name="direccion_empleado" class="form-control"  required="required" value="<?php echo $direccion_empleado; ?>" />
            </div>

            <div class="col-md-3">
                <label> Ciudad </label>
                <input type="text" name="ciudad_empleado" class="form-control"  required="required" value="<?php echo $ciudad_empleado; ?>" />
            </div>
    </div>
    </div>

        <div class="panel panel-info">
            <div class="panel-heading">

                <h5 class="panel-title">Otros datos del empleado</h5>
            </div>

            <div class="col-md-2">
                <label> Sueldo  </label>
                <input type="text" name="sueldo_empleado" class="form-control"  required="required" value="<?php echo $sueldo_empleado; ?>" />
            </div>

            <div class="col-md-3">
                <label> Cedula </label>
                <input type="text" name="cedula_empleado" class="form-control"  required="required" value="<?php echo $cedula_empleado; ?>" />
            </div>
            <div class="col-md-3">
                <label> Fecha de Ingreso </label>
                <input type="text" name="fechaingreso_empleado" class="form-control"  required="required" value="<?php echo $fechaingreso_empleado; ?>" />
            </div>

            <div class="col-md-3">
                <label> Estado </label>
                <input type="text" name="estado_empleado" class="form-control"  required="required" value="<?php echo $estado_empleado; ?>" />
            </div>
            <div class="col-md-3">
                <label> NSS </label>
                <input type="text" name="nss_empleado" class="form-control"  required="required" value="<?php echo $nss_empleado; ?>" />
            </div>

            <div class="col-md-3">
                <label> Edad</label>
                <input type="text" name="edad_empleado" class="form-control"  required="required" value="<?php echo $edad_empleado; ?>" />
            </div>

            <div class="col-md-3">
                <label> Comentario</label>
                <input type="textarea" name="comentario_empleado" class="form-control"   value="<?php  echo $comentario_empleado; ?>" />
            </div>

            <div class="col-md-9"></div>

            <div class="col-md-3">
                <a class="btn btn-danger" href="<?php echo base_url() ?>index.php/empleados/listaEmpleados">Cancelar</a>
                <input type="submit"  class="btn btn-success" value="Actualizar"  />

            </div>
            </div>
    </div>



       <!--     <div class="panel panel-danger">
                <div class="panel-heading">

                    <h5 class="panel-title">Informacion Bancaria</h5>
                </div>
            <div class="panel-body">
                <table class="table table-warning table-hover mb30" id="">
                    <thead>
                    <tr>
                        <th>Banco </th>
                        <th>Cuenta</th>
                        <th>Tipo de Cuenta</th>

                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" name="banco1_proveedor" class="form-control"  value="" /> </td>
                            <td><input type="text" name="cuenta1_proveedor" class="form-control"   value="" /></td>
                           <td><input type="text" name="tipocuenta1_proveedor" class="form-control"   value="" /></td>

                        </tr>
                        <tr>

                            <td><input type="text" name="banco2_proveedor" class="form-control"   value="" />  </td>
                            <td><input type="text" name="cuenta2_proveedor" class="form-control"   value="" /></td>
                            <td><input type="text" name="tipocuenta2_proveedor" class="form-control"   value="" /></td>
                        </tr>

                    <tr>
                        <td><input type="text" name="banco3_proveedor" class="form-control"   value="" /> </td>
                        <td> <input type="text" name="cuenta3_proveedor" class="form-control"   value="" /></td>
                        <td><input type="text" name="tipocuenta3_proveedor" class="form-control"   value="" /></td>



                    </tr>
                    </tbody>
                    </table>

-->


            </div>

            </div>

        </div>


    </form>
</div>

        <?php /**
        if (isset($_POST['submit']){
        $mysqli = new mysqli('localhost', 'root','','mensajes');
        if ($mysqli === FALSE) {
        die ("Error, fue imposible conectarse a la base de datos" . mysqli_error());
        }
        else{

        $sql = ("UPDATE  ");

        }

        }
         */
        ?>
</div>
</div>

</body>
</html>

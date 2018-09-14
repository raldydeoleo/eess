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

            <div class="col-md-12">
                <div class="panel-heading">
                    <h4 class="panel-title">Percepciones</h4>
                </div>

      <div class="panel-body" >

                <form method="post" action="<?php echo base_url() ?>index.php/empleados/percepydeduc/<?php  echo $id_empleado; ?>">


          <div class="col-md-12">

              <div class="col-md-4">


                  <div class="people-item">
                      <div class="media">
                          <a href="#" class="pull-left">
                              <img alt="" src="<?php echo base_url() ?>assets/images/photos/empleado.png" class="thumbnail media-object">
                          </a>
                          <div class="media-body">
                               <h4 class="person-name">Codigo:<?php  echo $id_empleado; ?></h4>
                               <h4 class="person-name"><?php  echo $nombre_empleado; ?> <?php  echo $apellido_empleado; ?></h4>
                               <div class="text-muted"><i class="fa fa-map-marker"></i><?php  echo $direccion_empleado; ?></div>
                               <div class="text-muted"><i class="fa fa-briefcase"></i> <a href="">Cargo: <?php  echo $cargo_empleado; ?></a></div>
                               <div class="text-muted"><i class="fa fa-phone"></i> Cedula: <?php  echo $cedula_empleado; ?></div>

                           </div>
                      </div>
                  </div>



              </div>
              <div class="col-md-1">
                  <label> ID </label>
                  <input type="text" name="id_empleado" class="form-control"  readonly="readonly" value="<?php  echo $id_empleado; ?>" />
              </div>
              <div class="col-md-2">
                  <label> Sueldo base </label>
                  <input type="text" name="sueldo_base" id="sueldo_base" class="form-control"  readonly="readonly" value="<?php  echo $sueldo_empleado; ?>" />
              </div>

              <div class="col-md-1">
                  <label> Horas Extras </label>
                  <input type="text" name="he_empleado" id="he_empleado" class="form-control" onkeyup="afp()" value="<?php  /** echo $he_empleado; */?>" />
              </div>
              <div class="col-md-2">
                  <label> Comision </label>
                  <input type="text" name="comision_empleado" id="comision_empleado" class="form-control"  onkeyup="sumar_percepciones()" value="<?php /** echo $comision_empleado; */?>" />
              </div>
              <div class="col-md-2">
                  <label> Total Percepciones </label>
                  <input type="text" name="total_percepcion" id="total_percepcion"  class="form-control" readonly="readonly" value="" />
              </div>

              <div class="col-md-2">
                  <label> Bono </label>
                  <input type="text" name="bono" id="bono" class="form-control"   value="" />
              </div>
              <div class="col-md-2">
                  <label> Sueldo Vacaciones </label>
                  <input type="text" name="sueldo_vacaciones" id="sueldo_vacaciones" onkeyup="total_ganado()" class="form-control"   value="" />
              </div>
              <div class="col-md-2">
                  <label> Sueldo Navidad </label>
                  <input type="text" name="sueldo_navidad" id="sueldo_navidad" onchange="sumar_otros()" class="form-control"   value="" />
              </div>

              <div class="col-md-2">
                  <label> Total Otras Percepciones</label>
                  <input type="text" name="total_otras_perc" id="total_otras_perc" readonly="readonly"  class="form-control"   value="" />
              </div>
              <div class="col-md-2">
                  <label> Sueldo bruto </label>
                  <input type="text" name="sueldo_bruto" id="sueldo_bruto" class="form-control"  readonly="readonly" required="required" value="" />
              </div>

            </div>

   </div>


            <div class="col-md-12 right">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">Deducciones</h4>
                    </div>
                    <div class="panel-body">
                    <div class="form-group">
                        <div class="col-md-1">
                            <label> AFP </label>
                            <input type="text" name="afp_empleado" id="afp_empleado" class="form-control"  required="required" value="<?php /**  echo $afp_empleado; */?>" />
                        </div>
                        <div class="col-md-1">
                            <label> ARS </label>
                            <input type="text" name="ars_empleado" id="ars_empleado" class="form-control"  required="required" value="<?php /** echo $ars_empleado; */ ?>" />
                        </div>

                        <div class="col-md-2">
                            <label> Prestamo </label>
                            <input type="text" name="prestamo_empleado" id="prestamo" class="form-control"   value="<?php /** echo $prestamo_empleado; */ ?>" />
                        </div>

                        <div class="col-md-2">
                            <label> ISR </label>
                            <input type="text" name="isr_empleado" id="isr_empleado" class="form-control"  onkeyup="sumar_deducciones()" value="" />
                        </div>

                        <div class="col-md-2">
                            <label> Total Deducciones </label>
                            <input type="text" name="total_deduccion" id="total_deduccion" class="form-control"  onkeyup="sumar_deducciones()" value="" />
                        </div>

                        <div class="col-md-2">
                            <label> Sueldo neto </label>
                            <input type="text" name="sueldo_neto" id="sueldo_neto" class="form-control" readonly="readonly"   required="required" value="" />
                        </div>


                            <div class="col-md-2">
                            <label> Fecha </label>
                                <input type="text" name="fecha_percepcion" class="form-control" required="required" placeholder="dd-mm-aaaa" required="required" value="" />
                            </div>
                        </div>

<!-- INICIO DE CODIGO COMBOS PARA SELECCIONAR PROYECTO Y ASOCIADO -->

                        <div class="form-group">

                            <div class="col-md-3">
                                <?php echo form_label('Proyecto: '); ?>

                                <?php
                                $mysqli =new mysqli("localhost", "eesscomd_root","netpro2016", "eesscomd_db_eess2");
                                if ($mysqli === false){
                                    die("Error: No se establecio la conexion." . mysqli_connect_error());
                                }
                                $sql = "SELECT id_proyecto, nombre_proyecto FROM proyectos";
                                if ($result = $mysqli->query($sql)){
                                    if ($result->num_rows > 0){
                                        echo "<select class='form-control' name='id_proyecto'>";
                                        while ($row = $result->fetch_array()){

                                            echo "<option value='$row[0]'>";
                                            // echo $row[0];
                                            echo " $row[1]" ?>
                                            <?php echo "</option> ";

                                        }

                                    } echo "</select>";
                                    $result->close();
                                } else {
                                    echo "No se encontraron registros.";
                                }
                                //}
                                $mysqli->close();

                                ?>

                            </div>

                            <div class="col-md-3">

                                <?php echo form_label('Asociado: '); ?>

                                <?php
                                $mysqli =new mysqli("localhost", "eesscomd_root","netpro2016", "eesscomd_db_eess2");
                                if ($mysqli === false){
                                    die("Error: No se establecio la conexion." . mysqli_connect_error());
                                }
                                $sql = "SELECT id_asociado, nombre_asociado FROM asociado";
                                if ($result = $mysqli->query($sql)){
                                    if ($result->num_rows > 0){
                                        echo "<select class='form-control' name='id_asociado'>";
                                        while ($row = $result->fetch_array()){

                                            echo "<option value='$row[0]'>";
                                            // echo $row[0];
                                            echo " $row[1]" ?>
                                            <?php echo "</option> ";

                                        }

                                    } echo "</select>";
                                    $result->close();
                                } else {
                                    echo "No se encontraron registros.";
                                }
                                //}
                                $mysqli->close();
                                ?>


                            </div>
                            <div class="col-md-1">
                                <label> (%) Porcieto: </label>
                                <input type="text" name="porciento_asosciado" id="porciento_asosciado" class="form-control"   value="" />
                            </div>
                        </div>
                        <!-- INICIO DE CODIGO COMBOS PARA SELECCIONAR PROYECTO Y ASOCIADO -->


                        <div class="form-group">

                                <div class="col-md-2">
                                    <label>Tipo:</label>
                                <div class="ckbox ckbox-warning">
                                    <input type="checkbox" id="checkboxWarning" checked="checked" />
                                    <label for="checkboxWarning">Fijo</label>
                                </div>


                                <div class="ckbox ckbox-primary">
                                    <input type="checkbox" id="checkboxDanger"  />
                                    <label for="checkboxDanger">Temporal</label>
                                </div>
                                </div>
                                <div class="col-md-2">
                                    <label>Estatus:</label>
                                    <div class="ckbox ckbox-primary">
                                        <input type="checkbox" id="checkboxDanger" checked="" />
                                        <label for="checkboxDanger">Activo</label>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-4">
                                        <a class="btn btn-danger" href="<?php echo base_url() ?>index.php/empleados/listaEmpleados">Cancelar</a>
                                        <input type="submit"  class="btn btn-success" value="Registrar"  />
                                    </div>
                                </div>
                            </div>

                    </div>
                    </div>
                    </div>

                </div><!-- panel -->

                </form>

            <!-- Javascript -->


            <script type="text/javascript">

                /**
                 * Funcion para realizar la suma de las deducciones que se les descontaran al sueldo (AFP, ARS, Prestamo.
                 * al sueldo bruto, ademas de sumarle a este resultado el total de otras percepciones no fijas.
                 */
                function sumar_deducciones(){
                    var valor1=verificar("afp_empleado");
                    var valor2=verificar("ars_empleado");
                    var valor3=verificar("prestamo");
                    var valor4=verificar("sueldo_bruto");
                    var valor5=verificar("total_otras_perc");
                    var valor6=verificar("isr_empleado");

                    // realizamos la suma de los valores y los ponemos en la casilla del
                    // formulario que contiene el sueldo neto.
                    //document.getElementById("total_deduccion").value=parseFloat(valor1)+parseFloat(valor2)+parseFloat(valor3)+parseFloat(valor4);
                    document.getElementById("sueldo_neto").value=parseFloat(valor4)-(parseFloat(valor1)+parseFloat(valor2)+parseFloat(valor3))+parseFloat(valor5);
                    document.getElementById("total_deduccion").value=parseFloat(valor1)+parseFloat(valor2)+parseFloat(valor3)+parseFloat(valor6);
                }


                /**
                 * Funcion para realizar la suma de Bonificacion, Salario de vacaciones y Salario de navidad cuando exista.
                 *
                 */
                function sumar_otros(){
                    var valor1=verificar("bono");
                    var valor2=verificar("sueldo_vacaciones");
                    var valor3=verificar("sueldo_navidad");

                    document.getElementById("total_otras_perc").value=parseFloat(valor1)+parseFloat(valor2)+parseFloat(valor3);
                }


                /**
                 * Funcion para realizar la suma
                 * de los valores (horas extras mas comision) y los ponemos en la casilla del
                 * formulario que contiene el Total percepcion. Luego se lo restamos a sueldo bruto. AFP y ARS se le calcula como un porcentaje del sueldo base.
                 */
                function sumar_percepciones()
                {
                    var valor1=verificar("sueldo_base");
                    var valor2=verificar("he_empleado");
                    var valor3=verificar("comision_empleado");
                    //var valor4=verificar("sueldo_bruto");
                    var valor4=verificar("total_otras_perc");


                    document.getElementById("sueldo_bruto").value=parseFloat(valor1)+parseFloat(valor2)+parseFloat(valor3)+parseFloat(valor4);
                    document.getElementById("total_percepcion").value=parseFloat(valor2)+parseFloat(valor3);
                    document.getElementById("afp_empleado").value=parseFloat(valor1)*0.0287;
                    document.getElementById("ars_empleado").value=parseFloat(valor1)*0.0304;
                }


                /**
                 * Funcion para verificar los valores de los cuadros de texto. Si no es un
                 * valor numerico, cambia de color el borde del cuadro de texto
                 */
                function verificar(id)
                {
                    var obj=document.getElementById(id);
                    if(obj.value=="")
                        value="0";
                    else
                        value=obj.value;
                    if(validate_importe(value,1))
                    {
                        // marcamos como erroneo
                        obj.style.borderColor="#808080";
                        return value;
                    }else{
                        // marcamos como erroneo
                        obj.style.borderColor="#f00";
                        return 0;
                    }
                }

                /**
                 * Funcion para validar el importe
                 * Tiene que recibir:
                 *  El valor del importe (Ej. document.formName.operator)
                 *  Determina si permite o no decimales [1-si|0-no]
                 * Devuelve:
                 *  true-Todo correcto
                 *  false-Incorrecto
                 */
                function validate_importe(value,decimal)
                {
                    if(decimal==undefined)
                        decimal=0;

                    if(decimal==1)
                    {
                        // Permite decimales tanto por . como por ,
                        var patron=new RegExp("^[0-9]+((,|\.)[0-9]{1,2})?$");
                    }else{
                        // Numero entero normal
                        var patron=new RegExp("^([0-9])*$")
                    }

                    if(value && value.search(patron)==0)
                    {
                        return true;
                    }
                    return false;
                }
            </script>
            <!-- Javascript end -->


</body>
</html>





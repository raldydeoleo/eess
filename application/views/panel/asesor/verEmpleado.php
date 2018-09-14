<?php /** @var  $empleado */?>

    <div class="col-md-8" xmlns="http://www.w3.org/1999/html">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-btns">
                    <a href="" class="panel-close">×</a>
                    <a href="" class="minimize">−</a>
                </div>
                <h5 class="panel-title">Informacion individual del Empleado</h5>
            </div>


                <div class="panel-body" >
                    <div class="col-md-6">


                        <div class="people-item">
                            <div class="media">
                                <a href="#" class="pull-left">
                                    <img alt="" src="<?php echo base_url() ?>assets/images/photos/empleado.png" class="thumbnail media-object">
                                </a>
                                <div class="media-body">
                                    <h3 class="person-name">Codigo:<?php  echo $empleado->id_empleado; ?></h3>
                                    <h3 class="person-name"><?php  echo $empleado->nombre_empleado; ?> <?php  echo $empleado->apellido_empleado; ?></h3>
                                    <div class="text-muted"><i class="fa fa-map-marker"></i><?php  echo $empleado->direccion_empleado; ?></div>
                                    <div class="text-muted"><i class="fa fa-briefcase"></i> <a href="">Cargo: <?php  echo $empleado->cargo_empleado; ?></a></div>
                                    <div class="text-muted"><i class=""></i> Cedula: <?php  echo $empleado->cedula_empleado; ?></div>
                                    <div class="text-muted"><i class="fa fa-money"></i>Sueldo base: <?php  echo $empleado->sueldo_empleado; ?></div>

                                </div>
                            </div>
                        </div>
                     </div>

                    <div class="col-md-6">
                        <div class="people-item">
                            <div class="media">

                                <div class="media-body">
                                    <h3 class="person-name">Departamento:<?php echo $empleado->id_departamento; ?></h3>
                                    <div class="person-name"><i class="fa fa-map-marker"></i>Ciudad:<?php echo $empleado->ciudad_empleado; ?></div>
                                    <div class="text-muted">Estado:<?php  echo $empleado->estado_empleado; ?></div>
                                    <div class="text-muted"><i class="fa fa-calendar"></i> Fecha de ingreso: <?php  echo $empleado->fechaingreso_empleado; ?></div>
                                    <div class="text-muted"><i class="fa fa-phone"></i> Celular: <?php  echo $empleado->celular_empleado; ?></div>
                                    <div class="text-muted"><i class="fa fa-chat"></i>Comentario: <?php  echo $empleado->comentario_empleado; ?></div>

                                </div>
                            </div>
                        </div>
                    </div>

        <div> <a class="btn btn-info" href="<?php echo base_url() ?>index.php/empleados/listaEmpleados/"> Volver atrás </a> </div>
        <div> <a class="btn btn-info" onclick="prueba();" href="#"> Test </a> </div>
        </div>
</div>
</div>

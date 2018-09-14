<?php /** @var array $contenido */?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/favicon.png" type="image/png">

    <!--TITULO--><title>Electrical Equipment</title>
    <!--TITULO<title><?=APP_TITULO; ?></title> -->
    <!--FAVICON-->
    <link href="<?= base_url('assets/images/'.APP_LOGO); ?>" rel="shortcut icon" type="image/png" />


    <!--BEGIN CSS FILES -->

    <link href=" <?=base_url('assets/css/style.default.css'); ?>" rel="stylesheet"> <!-- css para estilo visual del dashboard principal -->
    <link href=" <?=base_url('assets/css/jquery.datatables.css'); ?>" rel="stylesheet">
    <link href=" <?=base_url('assets/css/custom.css'); ?>" rel="stylesheet">
    <!--END CSS FILES-->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9] -->
    <script src="<?= base_url()?>assets/js/html5shiv.js"></script>
    <script src="<?= base_url()?>assets/js/respond.min.js"></script>
    <!--[endif]-->


    <link href="<?php echo base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <!--<link href=" <?=base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">  aplica boostrap desde assets/css/ -->
    <!--<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->


    <style>
        .eymicon{
            width: 100px;
            height: auto;
        }
    </style>
</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>



<section>

    <div class="leftpanel">

        <div class="logopanel">
            <h1><span>[</span> ELECTRICAL <span>]</span></h1>
        </div><!-- logopanel -->

        <div class="leftpanelinner">

            <!-- This is only visible to small devices -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media userlogged">
                    <img alt="" src="<?=base_url()?>assets/images/photos/loggeduser.png" class="media-object">
                    <div class="media-body">
                        <h4>Raldy De Oleo</h4>
                        <span>"Life is so..."</span>
                    </div>
                </div>

                <h5 class="sidebartitle actitle">Account</h5>
                <ul class="nav nav-pills nav-stacked nav-bracket mb30 ">
                    <li><a href="profile.html"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                    <li><a href=""><i class="fa fa-cog"></i> <span>Account Settings</span></a></li>
                    <li><a href=""><i class="fa fa-question-circle"></i> <span>Help</span></a></li>
                    <li><a href="<?=base_url()?>#"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                </ul>
            </div>

            <h5 class="sidebartitle">Navegacion</h5>
            <!-- MENU -->
            <ul class="nav nav-pills nav-stacked nav-bracket ">

                <!--Menu Administracion -->
                <div class="info-summary"><h5>Administracion</h5></div>
                <li  class="nav-parent"><a href="<?php echo base_url() ?>#"><i class="fa fa-user"></i> <span>Clientes</span></a>
                         <ul class="children" >
                            <li><a href="<?=base_url()?>index.php/clientes/nuevo_cliente">Registrar Cliente</a></li>
                            <li><a href="<?=base_url()?>#">Ver un Cliente</a></li>
                            <li><a href="<?=base_url()?>index.php/clientes/seguimientoClientes">Lista de  Clientes</a></li>
                        </ul>
                </li>

                 <li class="nav-parent"><a href="<?php echo base_url() ?>#"><i class="fa fa-user"></i> <span>Nomina</span></a>


                                <ul class="children">
                                    <li><a href="<?=base_url()?>index.php/empleados/gen_nomina">Generar Nomina</a></li>
                                    <li><a href="<?=base_url()?>index.php/empleados/prn_nomina">Imprimir Nomina</a></li>
                                    <li><a href="<?=base_url()?>index.php/empleados/generar_nomina">Ver percepciones</a></li>
                                    <li><a href="<?=base_url()?>index.php/empleados/nuevo_empleado">Crear Empleado</a></li>
                                    <li><a href="<?=base_url()?>index.php/empleados/creaDepEmpleado">Crear Departamentos</a></li>
                                    <li><a href="<?=base_url()?>index.php/empleados/arsEmpleado">ARS de Empleados</a></li>
                                    <li><a href="<?=base_url()?>index.php/empleados/prestamoEmpleados">Prestamo a Empleados</a></li>
                                    <li><a href="<?=base_url()?>index.php/empleados/listaEmpleados">Lista de Empleados</a></li>
                                </ul>
                </li>

                 <li class="nav-parent"><a href="<?php echo base_url()?>#"><i class="fa fa-user"></i> <span>Proveedores</span></a>
                            <ul class="children">
                                <li><a href="<?=base_url()?>index.php/proveedores/nuevo_proveedor">Registrar Proveedor</a></li>
                                <li><a href="<?=base_url()?>#">Ver un Proveedor</a></li>
                                <li><a href="<?=base_url()?>index.php/comentarios/">Lista de Proveedores</a></li>
                            </ul>
                 </li>

                <li class="nav-parent"><a href="<?=base_url() ?>#"><i class="fa fa-bell"></i> <span>Proyectos</span></a>
                    <ul class="children">
                        <li><a href="<?php echo base_url() ?>index.php/proyectos/nuevo_proyecto">Registrar Proyecto</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/proyectos/gastosDelproyecto">Balance Proyectos</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/proyectos/listaProyectos">Proyectos Activos</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/proyectos/seguimientoProyectos">Lista Proyectos</a></li>
                    </ul>
                </li>
                        <li class="nav-parent"><a href="<?php echo base_url()?>#"><i class="fa fa-bell"></i> <span>Bancos</span></a>
                            <ul class="children">
                                <li><a href="<?=base_url()?>#">Bancos</a></li>
                                <li><a href="<?=base_url()?>index.php/citas/balanceBancos">Balance en Bancos</a></li>
                                <li><a href="<?=base_url()?>#">Cuentas</a></li>
                                <li><a href="<?=base_url()?>index.php/citas/crearCheque">Registrar Cheque</a></li>
                                <li><a href="<?=base_url()?>index.php/citas/crearDeposito">Registrar deposito</a></li>
                                <li><a href="<?=base_url()?>index.php/Cajachica/desembolsoCajachica">Caja Chica</a></li>
                                <li><a href="<?=base_url()?>index.php/Cajachica/historialcajachica">Historial de Caja Chica</a></li>
                                <li><a href="<?=base_url()?>index.php/Cajachica/historialCheques">Historial de Cheques</a></li>
                                <li><a href="<?=base_url()?>index.php/Cajachica/historialDepositos">Historial de Depositos</a></li>
                                <li><a href="<?=base_url()?>index.php/Cajachica/historialEgresos">Historial de Egresos</a></li>
                            </ul>
                         </li>


                <li class="nav-parent"><a href="<?php echo base_url()?>#"><i class="fa fa-bell"></i> <span>Inventario</span></a>
                    <ul class="children">
                        <li><a href="<?=base_url()?>index.php/facturas/listadoArticulos">Materiales</a></li>
                        <li><a href="<?=base_url()?>index.php/citas/crearMaterial">Crear Material</a></li>
                        <li><a href="<?=base_url()?>index.php/citas/entradaMaterial">Entrada de Materiales</a></li>
                    </ul>
                </li>

                 </li>



                <!-- Fin menu Administracion -->

                <!-- Menu Proyectos -->
                <div class="info-summary"><h5>Orden de compra</h5></div>
                <li  class="nav-parent"><a href="<?php echo base_url()?>#"><i class="fa fa-bell"></i> <span>Orden de Compras</span></a>
                    <ul class="children">
                        <li><a href="<?=base_url() ?>index.php/compras/nueva_ordencompra">Registrar Orden de Compra</a></li>
                        <li><a href="<?=base_url() ?>index.php/compras/nueva_compra">Registrar Compras</a></li>
                        <li><a href="<?=base_url() ?>index.php/citas/compraMateriales">Materiales</a></li>
                        <li><a href="<?=base_url() ?>index.php/citas/compraCombustibles">Combustibles</a></li>
                        <li><a href="<?=base_url() ?>index.php/citas/compraAlimentos">Alimentos</a></li>
                        <li><a href="<?=base_url() ?>index.php/citas/compraOficina">Oficina</a></li>
                        <li><a href="<?=base_url() ?>index.php/compras/crearOrdencompra">Orden de Compra</a></li>
                        <li><a href="<?=base_url() ?>index.php/compras/listaCompras">Lista de Compras</a></li>
                        <li><a href="<?=base_url() ?>index.php/compras/listaOrdenesCompra">Lista de Ordenes</a></li>
                    </ul>
                </li>
 <!-- Fin menu Proyectos -->

                <!-- menu financiero -->
                <div class="info-summary"><h5>Finanzas</h5></div>

                <li class="nav-parent"><a href="<?php echo base_url() ?>#"><i class="fa fa-bell"></i> <span>Ingresos</span></a>
                    <ul class="children">

                        <li><a href="<?php echo base_url() ?>index.php/ordenes_trabajo/ingresos">Registrar Ingreso</a></li>
                        <li><a href="<?php echo base_url() ?>#">Detalle Ingreso</a></li>
                    </ul>

                </li>

                <li  class="nav-parent"><a href="<?php echo base_url() ?>#"><i class="fa fa-bell"></i> <span>Gastos</span></a>
                    <ul class="children">
                        <li><a href="<?php echo base_url() ?>index.php/Ordenes_trabajo/gastos">Registrar Gasto</a></li>
                        <li><a href="<?php echo base_url() ?>#">Gastos Generales</a></li>

                    </ul>
                </li>

                <!-- Fin menu Financiero -->

                <!-- menu Facturacion -->
                <div class="info-summary"><h5>Facturacion</h5></div>

                <li class="nav-parent"><a href="<?php echo base_url() ?>#"><i class="fa fa-bell"></i> <span>Facturas</span></a>
                    <ul class="children">

                        <li><a href="<?=base_url()?>index.php/facturas/facturar">Facturar</a></li>
                        <li><a href="<?=base_url()?>index.php/facturas/cotizar">Cotizar</a></li>
                        <li><a href="<?=base_url()?>#">Presupuesto</a></li>
                        <li><a href="<?=base_url()?>index.php/facturas/listadoFacturas">Listado de Facturas</a></li>
                        <li><a href="<?=base_url()?>index.php/facturas/listadoArticulos">Listado de Articulos</a></li>

                    </ul>
                </li>

                <!-- fin menu Facturacion -->

                <!-- menu Proyectos -->
                <div class="info-summary"><h5>Asociados</h5></div>

                <li  class="nav-parent"><a href="<?php echo base_url() ?>#"><i class="fa fa-bell"></i> <span>Seguimiento Asociados</span></a>
                    <ul class="children">
                        <li><a href="<?php echo base_url() ?>index.php/citas/listaAsociados">Asociados</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/citas/crearAsociado">Crear Asociado</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/citas/constanciaCobroAsociado">Constancia Cobro Asociado</a></li>
                        <li><a href="<?php echo base_url() ?>#">Recordatorios de pagos</a></li>

                    </ul>
                </li>

                <div class="info-summary"><h5>Contabilidad</h5></div>
                <li  class="nav-parent"><a href="#"><i class="fa fa-bell"></i> <span>Cuentas por Pagar</span></a>
                    
                    <ul class="children">
                        <li><a href="<?php echo base_url() ?>index.php/citas/cuentasPorpagar">Cuentas por Pagar</a></li>
                        <li><a href="<?php echo base_url() ?>#">Por cobrar a cliente</a></li>
                        <li><a href="<?php echo base_url() ?>#">Por cobrar a Asociados</a></li>


                    </ul>
                </li>


                <div class="info-summary"><h5>Usuarios</h5></div>
                <li  class="nav-parent"><a href="#"><i class="fa fa-bell">
                </i> <span>Usuarios</span></a>
                    
                    <ul class="children">
                        <li><a href="<?php echo base_url() ?>index.php/usuarios/nuevo_usuario">Crear usuario</a></li>
                        <li><a href="<?php echo base_url() ?>index.php/usuarios/listaUsuarios">Lista de usuarios</a></li>
                        <li><a href="<?php echo base_url() ?>#">Permisos a usuarios</a></li>


                    </ul>
                </li>

            </ul>
                <!-- fin menu proyectos -->

            </ul>

            <div class="infosummary">

            </div><!-- infosummary -->

        </div><!-- leftpanelinner -->
    </div><!-- leftpanel -->

    <div class="mainpanel">

        <div class="headerbar">

            <a class="menutoggle"><i class="fa fa-bars"></i></a>

            <form class="searchform" action="index.html" method="post">
                <input type="text" class="form-control" name="keyword" placeholder="Buscar..." />
            </form>

            <div class="header-right">
                <ul class="headermenu">
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span class="badge">2</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-head pull-right">
                                <h5 class="title">2 Newly Registered Users</h5>
                                <ul class="dropdown-list user-list">
                                    <li class="new">
                                        <div class="thumb"><a href=""><img src="<?=base_url()?>assets/images/photos/user1.png" alt="" /></a></div>
                                        <div class="desc">
                                            <h5><a href="">Draniem Daamul (@draniem)</a> <span class="badge badge-success">new</span></h5>
                                        </div>
                                    </li>
                                    <li class="new">
                                        <div class="thumb"><a href=""><img src="<?=base_url()?>assets/images/photos/user2.png" alt="" /></a></div>
                                        <div class="desc">
                                            <h5><a href="">Zaham Sindilmaca (@zaham)</a> <span class="badge badge-success">new</span></h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb"><a href=""><img src="<?=base_url()?>assets/images/photos/user3.png" alt="" /></a></div>
                                        <div class="desc">
                                            <h5><a href="">Weno Carasbong (@wenocar)</a></h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb"><a href=""><img src="<?=base_url()?>assets/images/photos/user4.png" alt="" /></a></div>
                                        <div class="desc">
                                            <h5><a href="">Nusja Nawancali (@nusja)</a></h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb"><a href=""><img src="<?=base_url()?>assets/images/photos/user5.png" alt="" /></a></div>
                                        <div class="desc">
                                            <h5><a href="">Lane Kitmari (@lane_kitmare)</a></h5>
                                        </div>
                                    </li>
                                    <li class="new"><a href="">See All Users</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-envelope"></i>
                                <span class="badge">1</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-head pull-right">
                                <h5 class="title">You Have 1 New Message</h5>
                                <ul class="dropdown-list gen-list">
                                    <li class="new">
                                        <a href="">
                                            <span class="thumb"><img src="<?=base_url()?>assets/images/photos/user1.png" alt="" /></span>
                                                    <span class="desc">
                                                        <span class="name">Draniem Daamul <span class="badge badge-success">new</span></span>
                                                        <span class="msg">Lorem ipsum dolor sit amet...</span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="thumb"><img src="<?=base_url()?>assets/images/photos/user2.png" alt="" /></span>
                                                    <span class="desc">
                                                        <span class="name">Nusja Nawancali</span>
                                                        <span class="msg">Lorem ipsum dolor sit amet...</span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="thumb"><img src="<?=base_url()?>assets/images/photos/user3.png" alt="" /></span>
                                                    <span class="desc">
                                                        <span class="name">Weno Carasbong</span>
                                                        <span class="msg">Lorem ipsum dolor sit amet...</span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="thumb"><img src="<?=base_url()?>assets/images/photos/user4.png" alt="" /></span>
                                                    <span class="desc">
                                                        <span class="name">Zaham Sindilmaca</span>
                                                        <span class="msg">Lorem ipsum dolor sit amet...</span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="thumb"><img src="<?=base_url()?>assets/images/photos/user5.png" alt="" /></span>
                                                    <span class="desc">
                                                        <span class="name">Veno Leongal</span>
                                                        <span class="msg">Lorem ipsum dolor sit amet...</span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li class="new"><a href="">Read All Messages</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-globe"></i>
                                <span class="badge">5</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-head pull-right">
                                <h5 class="title">You Have 5 New Notifications</h5>
                                <ul class="dropdown-list gen-list">
                                    <li class="new">
                                        <a href="">
                                            <span class="thumb"><img src="<?=base_url()?>assets/images/photos/user4.png" alt="" /></span>
                                                    <span class="desc">
                                                        <span class="name">Zaham Sindilmaca <span class="badge badge-success">new</span></span>
                                                        <span class="msg">is now following you</span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li class="new">
                                        <a href="">
                                            <span class="thumb"><img src="<?=base_url()?>assets/images/photos/user5.png" alt="" /></span>
                                                    <span class="desc">
                                                        <span class="name">Weno Carasbong <span class="badge badge-success">new</span></span>
                                                        <span class="msg">is now following you</span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li class="new">
                                        <a href="">
                                            <span class="thumb"><img src="<?=base_url()?>assets/images/photos/user3.png" alt="" /></span>
                                                    <span class="desc">
                                                        <span class="name">Veno Leongal <span class="badge badge-success">new</span></span>
                                                        <span class="msg">likes your recent status</span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li class="new">
                                        <a href="">
                                            <span class="thumb"><img src="<?=base_url()?>assets/images/photos/user3.png" alt="" /></span>
                                                    <span class="desc">
                                                        <span class="name">Nusja Nawancali <span class="badge badge-success">new</span></span>
                                                        <span class="msg">downloaded your work</span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li class="new">
                                        <a href="">
                                            <span class="thumb"><img src="<?=base_url()?>assets/images/photos/user3.png" alt="" /></span>
                                                    <span class="desc">
                                                        <span class="name">Nusja Nawancali <span class="badge badge-success">new</span></span>
                                                        <span class="msg">send you 2 messages</span>
                                                    </span>
                                        </a>
                                    </li>
                                    <li class="new"><a href="">See All Notifications</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <img src="<?=base_url()?>assets/images/photos/loggeduser.png" alt="" />
                                Raldy De Oleo
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                                <li><a href="profile.html"><i class="glyphicon glyphicon-user"></i> My Profile</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> Help</a></li>
                                <li><a href="<?=base_url()?>#"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button id="chatview" class="btn btn-default tp-icon chat-icon">
                            <i class="glyphicon glyphicon-comment"></i>
                        </button>
                    </li>
                </ul>
            </div><!-- header-right -->

        </div><!-- headerbar -->

        <div class="contentpanel">
            <!-- content goes here... -->

            <!--BEGIN CONTENIDO NETO-->
            <?= $contenido ?>


            <!--END CONTENIDO NETO-->

        </div>

    </div><!-- mainpanel -->

    <div class="rightpanel">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified">
            <li class="active"><a href="#rp-alluser" data-toggle="tab"><i class="fa fa-users"></i></a></li>
            <li><a href="#rp-favorites" data-toggle="tab"><i class="fa fa-heart"></i></a></li>
            <li><a href="#rp-history" data-toggle="tab"><i class="fa fa-clock-o"></i></a></li>
            <li><a href="#rp-settings" data-toggle="tab"><i class="fa fa-gear"></i></a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="rp-alluser">
                <h5 class="sidebartitle">Online Users</h5>
                <ul class="chatuserlist">
                    <li class="online">
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="<?=base_url()?>assets/images/photos/userprofile.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Eileen Sideways</strong>
                                <small>Los Angeles, CA</small>
                            </div>
                        </div><!-- media -->
                    </li>
                    <li class="online">
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="<?=base_url()?>assets/images/photos/user1.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <span class="pull-right badge badge-danger">2</span>
                                <strong>Zaham Sindilmaca</strong>
                                <small>San Francisco, CA</small>
                            </div>
                        </div><!-- media -->
                    </li>
                    <li class="online">
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="<?=base_url()?>assets/images/photos/user2.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Nusja Nawancali</strong>
                                <small>Bangkok, Thailand</small>
                            </div>
                        </div><!-- media -->
                    </li>
                    <li class="online">
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="<?=base_url()?>assets/images/photos/user3.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Renov Leongal</strong>
                                <small>Cebu City, Philippines</small>
                            </div>
                        </div><!-- media -->
                    </li>
                    <li class="online">
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="<?=base_url()?>assets/images/photos/user4.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Weno Carasbong</strong>
                                <small>Tokyo, Japan</small>
                            </div>
                        </div><!-- media -->
                    </li>
                </ul>

                <div class="mb30"></div>

                <h5 class="sidebartitle">Offline Users</h5>
                <ul class="chatuserlist">
                    <li>
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="<?=base_url()?>assets/images/photos/user5.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Eileen Sideways</strong>
                                <small>Los Angeles, CA</small>
                            </div>
                        </div><!-- media -->
                    </li>
                    <li>
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="<?=base_url()?>assets/images/photos/user2.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Zaham Sindilmaca</strong>
                                <small>San Francisco, CA</small>
                            </div>
                        </div><!-- media -->
                    </li>
                    <li>
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="<?=base_url()?>assets/images/photos/user3.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Nusja Nawancali</strong>
                                <small>Bangkok, Thailand</small>
                            </div>
                        </div><!-- media -->
                    </li>
                    <li>
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="<?=base_url()?>assets/images/photos/user4.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Renov Leongal</strong>
                                <small>Cebu City, Philippines</small>
                            </div>
                        </div><!-- media -->
                    </li>
                    <li>
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="<?=base_url()?>assets/images/photos/user5.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Weno Carasbong</strong>
                                <small>Tokyo, Japan</small>
                            </div>
                        </div><!-- media -->
                    </li>
                    <li>
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="<?=base_url()?>assets/images/photos/user4.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Renov Leongal</strong>
                                <small>Cebu City, Philippines</small>
                            </div>
                        </div><!-- media -->
                    </li>
                    <li>
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="<?=base_url()?>assets/images/photos/user5.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Weno Carasbong</strong>
                                <small>Tokyo, Japan</small>
                            </div>
                        </div><!-- media -->
                    </li>
                </ul>
            </div>
            <div class="tab-pane" id="rp-favorites">
                <h5 class="sidebartitle">Favorites</h5>
                <ul class="chatuserlist">
                    <li class="online">
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="<?=base_url()?>assets/images/photos/user2.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Eileen Sideways</strong>
                                <small>Los Angeles, CA</small>
                            </div>
                        </div><!-- media -->
                    </li>
                    <li>
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="<?=base_url()?>assets/images/photos/user1.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Zaham Sindilmaca</strong>
                                <small>San Francisco, CA</small>
                            </div>
                        </div><!-- media -->
                    </li>
                    <li>
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="<?=base_url()?>assets/images/photos/user3.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Nusja Nawancali</strong>
                                <small>Bangkok, Thailand</small>
                            </div>
                        </div><!-- media -->
                    </li>
                    <li class="online">
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="<?=base_url()?>assets/images/photos/user4.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Renov Leongal</strong>
                                <small>Cebu City, Philippines</small>
                            </div>
                        </div><!-- media -->
                    </li>
                    <li class="online">
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="<?=base_url()?>assets/images/photos/user5.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Weno Carasbong</strong>
                                <small>Tokyo, Japan</small>
                            </div>
                        </div><!-- media -->
                    </li>
                </ul>
            </div>
            <div class="tab-pane" id="rp-history">
                <h5 class="sidebartitle">History</h5>
                <ul class="chatuserlist">
                    <li class="online">
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="<?=base_url()?>assets/images/photos/user4.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Eileen Sideways</strong>
                                <small>Hi hello, ctc?... would you mind if I go to your...</small>
                            </div>
                        </div><!-- media -->
                    </li>
                    <li>
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="<?=base_url()?>assets/images/photos/user2.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Zaham Sindilmaca</strong>
                                <small>This is to inform you that your product that we...</small>
                            </div>
                        </div><!-- media -->
                    </li>
                    <li>
                        <div class="media">
                            <a href="#" class="pull-left media-thumb">
                                <img alt="" src="<?=base_url()?>assets/images/photos/user3.png" class="media-object">
                            </a>
                            <div class="media-body">
                                <strong>Nusja Nawancali</strong>
                                <small>Are you willing to have a long term relat...</small>
                            </div>
                        </div><!-- media -->
                    </li>
                </ul>
            </div>
            <div class="tab-pane pane-settings" id="rp-settings">

                <h5 class="sidebartitle mb20">Settings</h5>
                <div class="form-group">
                    <label class="col-xs-8 control-label">Show Offline Users</label>
                    <div class="col-xs-4 control-label">
                        <div class="toggle toggle-success"></div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-8 control-label">Enable History</label>
                    <div class="col-xs-4 control-label">
                        <div class="toggle toggle-success"></div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-8 control-label">Show Full Name</label>
                    <div class="col-xs-4 control-label">
                        <div class="toggle-chat1 toggle-success"></div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-8 control-label">Show Location</label>
                    <div class="col-xs-4 control-label">
                        <div class="toggle toggle-success"></div>
                    </div>
                </div>

            </div><!-- tab-pane -->

        </div><!-- tab-content -->
    </div><!-- rightpanel -->

</section>

<script src="<?=base_url()?>assets/js/jquery-1.11.1.min.js"></script>
<script src="<?=base_url()?>assets/js/jquery-ui-1.10.3.min.js"></script>


<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/js/colorpicker.js"></script>
<script src="<?=base_url()?>assets/js/custom.js"></script>
<script src="<?=base_url()?>assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?=base_url()?>assets/js/jquery.autogrow-textarea.js"></script>
<script src="<?=base_url()?>assets/js/jquery.cookies.js"></script>
<script src="<?=base_url()?>assets/js/jquery.maskedinput.min.js"></script>
<script src="<?=base_url()?>assets/js/jquery.sparkline.min.js"></script>
<script src="<?=base_url()?>assets/js/jquery.tagsinput.min.js"></script>
<script src="<?=base_url()?>assets/js/modernizr.min.js"></script>
<script src="<?=base_url()?>assets/js/retina.min.js"></script>
<script src="<?=base_url()?>assets/js/select2.min.js"></script>
<script src="<?=base_url()?>assets/js/toggles.min.js"></script>



<script src="<?=base_url()?>assets/js/bootstrap-wizard.min.js"></script>
<script src="<?=base_url()?>assets/js/jquery.validate.min.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap-timepicker.min.js"></script>






<script>
    jQuery(document).ready(function(){

        "use strict";



        // Basic Wizard
        jQuery('#basicWizard').bootstrapWizard();

        // Progress Wizard
        $('#progressWizard').bootstrapWizard({
            'nextSelector': '.next',
            'previousSelector': '.previous',
            onNext: function(tab, navigation, index) {

                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                jQuery('#progressWizard').find('.progress-bar').css('width', $percent+'%');
            },
            onPrevious: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                jQuery('#progressWizard').find('.progress-bar').css('width', $percent+'%');
            },
            onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                jQuery('#progressWizard').find('.progress-bar').css('width', $percent+'%');
            }
        });

        // Disabled Tab Click Wizard
        jQuery('#disabledTabWizard').bootstrapWizard({
            tabClass: 'nav nav-pills nav-justified nav-disabled-click',
            onTabClick: function(tab, navigation, index) {
                return false;
            }
        });

        // With Form Validation Wizard
        var $validator = jQuery("#firstForm").validate({
            highlight: function(element) {
                jQuery(element).closest('.form-group').removeClass('has-success').addClass('has-error');
            },
            success: function(element) {
                jQuery(element).closest('.form-group').removeClass('has-error');
            }
        });

        jQuery('#validationWizard').bootstrapWizard({
            tabClass: 'nav nav-pills nav-justified nav-disabled-click',
            onTabClick: function(tab, navigation, index) {
                return false;
            },
            onNext: function(tab, navigation, index) {
                var $valid = jQuery('#firstForm').valid();
                if(!$valid) {

                    $validator.focusInvalid();
                    return false;
                }
            }
        });

        jQuery(".select2").select2({
            width: '100%',
            minimumResultsForSearch: -1
        });

        // Spinner
        var spinner = jQuery('#spinner').spinner();
        spinner.spinner('value', 0);


        // Date Picker
        jQuery('#datepicker').datepicker({
            numberOfMonths: 1,
            showButtonPanel: true
        });

        // Input Masks
        jQuery("#phone").mask("(999) 999-9999");
        jQuery("#phone2").mask("(999) 999-9999");

        // Time Picker
        jQuery('#timepicker').timepicker({defaultTIme: false});
        jQuery('#timepicker2').timepicker({showMeridian: false});
        jQuery('#timepicker3').timepicker({minuteStep: 15});




    });
</script>

</body>
</html>
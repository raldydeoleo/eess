<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.png" type="image/png">

  <title>Electrical Equipment</title>

  <!--BEGIN CSS FILES-->
    <link href=" <?=base_url('assets/css/style.default.css'); ?>" rel="stylesheet">
    <link href=" <?=base_url('assets/css/jquery.datatables.css'); ?>" rel="stylesheet">
    <link href=" <?=base_url('assets/css/custom.css'); ?>" rel="stylesheet">
    <!--END CSS FILES-->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9] -->
    <script src="<?= base_url()?>assets/js/html5shiv.js"></script>
    <script src="<?= base_url()?>assets/js/respond.min.js"></script>
    <!--[endif]-->

     <link href=" <?=base_url('assets/css/style.default.css'); ?>" rel="stylesheet">


  <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"
      rel="stylesheet"> -->
      
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body class="signin">


<section>
  
    <div class="signinpanel">
        
        <div class="row">
            
            <div class="col-md-7">
                
                <div class="signin-info">
                    <div class="logopanel">
                        <h1><span>[</span> Electrical Equipment <span>]</span></h1>
                    </div><!-- logopanel -->
                
                    <div class="mb20"></div>
                
                    <h5><strong>Sistema de gestion de procesos</strong></h5>
                    <ul>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Recursos humanos</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Proyectos</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Finanzas</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Compras</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Facturacion</li>
                    </ul>
                    <div class="mb20"></div>
                    <strong>No tienes usuario? <a href="signup.html">Registrese</a></strong>
                </div><!-- signin0-info -->
            
            </div><!-- col-sm-7 -->
            
            <div class="col-md-5">
                
                <form method="post" action="<?=base_url()?>index.php/usuarios/login">
                    <h4 class="nomargin">Iniciar Sesion</h4>
                    <p class="mt5 mb20">Accede a tu cuenta.</p>
                
                    <input type="text" class="form-control uname" name="username" id="username" placeholder="Username" />
                    <input type="password" class="form-control pword" name="clave" id="password" placeholder="Clave" />
                    <!-- <a href=""><small>¿Olvidaste tu contraseña?</small></a> -->
                    <button class="btn btn-success btn-block">Iniciar Sesión</button>
                    
                </form>
            </div><!-- col-sm-5 -->
            
        </div><!-- row -->
        
        <div class="signup-footer">
            <div class="pull-left">
                &copy; 2016. All Rights Reserved. <a href="http://brainsoft.com.do" target="_blank">Raldy De Oleo</a>
            </div>
            <div class="pull-right">
                Created By: <a href="#" target="_blank">Sistek</a>
            </div>
        </div>
        
    </div><!-- signin -->
  
</section>


<script src="<?=base_url()?>assets/js/jquery-1.11.1.min.js"></script>
<script src="<?=base_url()?>assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/js/modernizr.min.js"></script>
<script src="<?=base_url()?>assets/js/jquery.sparkline.min.js"></script>
<script src="<?=base_url()?>assets/js/jquery.cookies.js"></script>

<script src="<?=base_url()?>assets/js/toggles.min.js"></script>
<script src="<?=base_url()?>assets/js/retina.min.js"></script>

<script src="<?=base_url()?>assets/js/custom.js"></script>


</body>
</html>

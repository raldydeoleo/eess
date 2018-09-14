<!DOCTYPE html>
<html lang="en">
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.png" type="image/png">

  <title>EYM</title>

  <link href="<?=base_url()?>assets/css/style.default.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="<?=base_url()?>assets/js/html5shiv.js"></script>
  <script src="<?=base_url()?>assets/js/respond.min.js"></script>
  <![endif]-->

</head>

<body class="signin">


<section>
  
    <div class="signinpanel">
        
        <div class="row">
            
            <div class="col-md-7">
                
                <div class="signin-info">
                    <div class="logopanel">
                        <h1><span>[</span> EYM <span>]</span></h1>
                    </div><!-- logopanel -->
                
                    <div class="mb20"></div>
                
                    <h5><strong>Sistema de automatizacion de proceso taller</strong></h5>
                    <ul>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Secretaria</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Asesor</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Controlista</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Supervisor</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Tecnico</li>
                    </ul>
                    <div class="mb20"></div>
                    <!-- strong>Not a member? <a href="signup.html">Sign Up</a></strong -->
                </div><!-- signin0-info -->
            
            </div><!-- col-sm-7 -->
            
            <div class="col-md-5">
                
                <form method="post" action="<?=base_url()?>inicio/login">
                    <h4 class="nomargin">Iniciar Sesión</h4>
                    <p class="mt5 mb20">Accede a tu cuenta.</p>
                
                    <input type="text" class="form-control uname" name="username" id="username" placeholder="Username" />
                    <input type="password" class="form-control pword" name="clave" id="username" placeholder="Clave" />
                    <!-- <a href=""><small>¿Olvidaste tu contraseña?</small></a> -->
                    <button class="btn btn-success btn-block">Iniciar Sesión</button>
                    
                </form>
            </div><!-- col-sm-5 -->
            
        </div><!-- row -->
        
        <div class="signup-footer">
            <div class="pull-left">
                &copy; 2016. Powered by <a href="http://brainsoft.com.do" target="_blank">Brainsoft</a>
            </div>
            <div class="pull-right">
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
<script>
    jQuery(document).ready(function(){
        
        // Please do not use the code below
        // This is for demo purposes only
        var c = jQuery.cookie('change-skin');
        if (c && c == 'greyjoy') {
            jQuery('.btn-success').addClass('btn-orange').removeClass('btn-success');
        } else if(c && c == 'dodgerblue') {
            jQuery('.btn-success').addClass('btn-primary').removeClass('btn-success');
        } else if (c && c == 'katniss') {
            jQuery('.btn-success').addClass('btn-primary').removeClass('btn-success');
        }
    });
</script>

</body>
</html>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Electrical Equipment Supply and Service</title>

 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <!--TITULO--><title>Electrical Equipment</title>
    <!--TITULO<title><?=APP_TITULO; ?></title> -->
    <!--FAVICON-->
    <link href="<?= base_url('assets/images/'.APP_LOGO); ?>" rel="shortcut icon" type="image/png" />


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
      rel="stylesheet"> <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->


	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Pantalla principal</h1>

	<div id="body">

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
                    <strong>No tienes usuario? <a href="signup.html">Registrarse</a></strong>
                </div><!-- signin0-info -->
            
            </div><!-- col-sm-7 -->
            
            <div class="col-md-5">
                
                <form method="post" action="<?=base_url()?>index.php/inicio/ejemplo">
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
  
		<div class="container_12">
<div class="col-md-6">
    




        </div>


  </div>
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

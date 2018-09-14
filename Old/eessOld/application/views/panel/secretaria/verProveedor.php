<?php /** @var  $proveedor */?>
<div class="col-md-8">
    <div class="panel panel-default">
        <div class="panel-body" >
<h1> Proveedor :<?php echo $proveedor->nombre_proveedor ?> <br /> Empresa : <?php echo $proveedor->empresa_proveedor; ?> </h1>
<div> RNC:  :<?php echo nl2br($proveedor->rnc_proveedor) ?> </div>
<br />
<div> <a class="btn btn-info" href="<?php echo base_url() ?>index.php/proveedores"> Volver atrás </a> </div>
</div>
</div>
</div>

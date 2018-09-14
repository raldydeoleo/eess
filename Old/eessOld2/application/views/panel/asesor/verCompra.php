<?php /** @var  $compra */?>
<div class="col-md-8">
    <div class="panel panel-default">

        <div class="panel-body" >
<h1> Descripcion :<?php echo $compra->desc_compra ?> Monto (RD$) : <?php echo $compra->precio_compra; ?>) </h1>
<div> Fecha:  :<?php echo nl2br($compra->fecha_compra) ?> </div>
<br />
<div> <a class="btn btn-info" href="<?php echo base_url() ?>index.php/compras"> Volver atrás </a> </div>
</div>
</div>
</div>
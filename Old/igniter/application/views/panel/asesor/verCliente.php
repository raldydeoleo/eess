<?php /** @var  $clientes */?>

    <div class="col-md-8" xmlns="http://www.w3.org/1999/html">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-btns">
                    <a href="" class="panel-close">×</a>
                    <a href="" class="minimize">−</a>
                </div>
                <h5 class="panel-title">Vista individual Cliente</h5>
            </div>


                <div class="panel-body" >
        <h1> Nombre :<?php echo $clientes->nombre_cliente ?> <br />Apellido : <?php echo $clientes->apellido_cliente; ?>) </h1>
        <h1> Empresa :<?php echo $clientes->empresa_cliente ?> <br />Telefono : <?php echo $clientes->telefono_cliente; ?>) </h1>
        <div> RNC:  :<?php echo nl2br($clientes->rnc_cliente) ?> </div>

        <div> <a class="btn btn-info" href="<?php echo base_url() ?>index.php/clientes"> Volver atrás </a> </div>
        </div>
</div>
</div>
<?php
/**
 * @var array $ots
 */
?>

<?php /** @var array $clientes */?>
<?php /** @todo (23/07/2016) Wolfan Fabian - Esta vista debe ser preparada para paginacion */?>
<?php /** @todo (23/07/2016) Wolfan Fabian - Esta vista debe ser preparada para busquedas en la misma vista */?>


<div class="panel panel-default">
    <div class="panel-heading">
        <h5 class="subtitle mb5">Ordenes de trabajo  </h5>
        <p class="m20">Lista general de las ordenes de trabajo. </p>
        <br>
        <div class="table-responsive">
            <table class="table table-info table-hover" id="table1">

                <thead>
                <tr role="row">
                    <th>#OT</th>
                    <th>Vehiculo</th>
                    <th>Cliente</th>
                    <th>Estado</th>
                    <th>Ver</th>
                </tr>
                </thead>


                <tbody>
                <?php foreach($ots as $ot): ?>
                    <tr class="gradeA odd" role="row">


                        <td class="sorting_1">
                            <a href="<?= base_url("clientes/mostrar/{$ot[ID_ORDEN_TRABAJO]}"); ?>">
                                <?= $ot[ID_ORDEN_TRABAJO]; ?>
                            </a>
                        </td>

                        <td> <?=$ot['marca'][NOMBRE_CN] . ' ' . $ot['modelo'][NOMBRE_CN] ; ?> </td>

                        <td class="center"> <?=$ot['cliente'][NOMBRES_CN]; ?></td>
                        <td> Estado ND </td>

                        <td class="table-action">
                            <a href="<?php echo base_url() ?>"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>

            </table>
        </div>

        <div class="rigth">
            <ul class="pagination pagination-split">
                <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
        </div>
    </div>
</div>
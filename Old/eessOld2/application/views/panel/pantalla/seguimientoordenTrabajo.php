<?php
/**
 * @var array $ots
 */
?>


<div class="col-md-11">
    <div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">Seguimiento de Orden de Trabajo</h4>
        <br>
            <div class="table-responsive">
        <table class="table table-info table-hover" id="table1">
                <thead>
                    <tr>
                        <!-- cliente -->
                        <th>Orden de Trabajo</th>
                        <th>Estado</th>
                        <th>Cliente</th>
                        <th>Vehiculo</th>
                        <th>Mantenimiento</th>
                        <th>Asesor</th>
                        <th>Supervisor</th>

                    </tr>
                </thead>
                <tbody>


                <?php
                /**
                foreach($ots as $ot): ?>
                    <tr class="gradeA odd" role="row">


                        <td class="sorting_1">
                            <a href="<?= base_url("ordenes_trabajo/mostrar/{$ot[ID_ORDEN_TRABAJO]}"); ?>">
                                <?= $ot[ID_ORDEN_TRABAJO]; ?>
                            </a>
                        </td>
                        <td> Estado ND </td>
                        <td class="center"> <?=$ot['cliente'][NOMBRES_CN]; ?></td>
                        <td> <?=$ot['marca'][NOMBRE_CN] . ' ' . $ot['modelo'][NOMBRE_CN] ; ?> </td>
                        <td>
                        </td>
                        <td> Bruno Ureña
                        </td>
                        <td>Wolfan Fabian
                        </td>
                    </tr>
                <?php endforeach;     */?>

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
</div><?php /** @var array $vehiculos */?>



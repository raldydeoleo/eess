<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">Asignacion de Orden de trabajo</h4>
        <p>Asignacion de ordenes a equipo tecnico y supervision</p>
    </div>

    <div class="panel-body panel-body-noadding">

    <div class="col-md-11">
        <h5 class="subtitle md5">Ordenes de Reparación </h5>
        <br />
        <div class="table-responsive">
            <table class="table table-warning table-hover table-bordered mb30">
                <thead>
                <tr class="subtitle">
                    <th>Orden de Trabajo</th>
                    <th>Tipo Orden</th>
                    <th>Fecha</th>
                    <th>Prioridad</th>
                    <th>Km/Mi</th>
                    <th>Supervisor</th>
                    <th>Ver</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>24333</td>
                    <td>Cita</td>
                    <td>15/08/2016</td>
                    <td>1</td>
                    <td>27,050 Km</td>
                    <td>dsanchez</td>
                    <td class="table-action">
                        <a href="<?php echo base_url() ?>"><i class="fa fa-eye"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>26005</td>
                    <td>Mantenimiento</td>
                    <td>21/09/2016</td>
                    <td>3</td>
                    <td>43,785 Km</td>
                    <td>dsanchez</td>
                    <td class="table-action">
                        <a href="<?php echo base_url() ?>"><i class="fa fa-eye"></i></a>
                    </td>
                </tr>

                </tbody>
            </table>
        </div><!-- table-responsive -->

        <div class="panel-default">
            <ul class="pagination pagination-split">
                <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
        </div>

    </div>

</div><!-- contentpanel -->
<div class="panel panel-default">
    <div class="panel-heading">
        <h5 class="subtitle mb5">Seguimiento de Equipos Tecnicos</h5>
        <p class="m20">Lista general de los equipos en labor </p>
        <br>
        <div class="table-responsive">
            <table class="table table-info table-hover" id="table1">

                <thead>
                <tr role="row">
                    <th>#</th>
                    <th>Tecnico</th>
                    <th>Vehiculo</th>
                    <th>Mantenimiento</th>
                    <th>Piezas</th>
                    <th>Servicios</th>
                    <th>Ver</th>
                </tr>
                </thead>


                <tbody>
                    <tr>
                        <td>24333</td>
                        <td>Pedro Santana</td>
                        <td>Nissan Sentra</td>
                        <td>
                            Cambio de Correa, <br>
                            Cambio de Aceite <br>
                        </td>
                        <td>
                            Correa de Aire, <br>
                            Aceite Patrol <br>
                        </td>
                        <td>Servici0_1</td>
                        <td class="table-action">
                            <a href="<?php echo base_url() ?>"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>26005</td>
                        <td>Pedro Santana</td>
                        <td>Nissan Murano</td>
                        <td>
                            Cambio de Correa, <br>
                            Cambio de Aceite <br>
                        </td>
                        <td>
                            Correa de Aire, <br>
                            Aceite Patrol <br>
                        </td>
                        <td>Servici0_2</td>
                        <td class="table-action">
                            <a href="<?php echo base_url() ?>"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>
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

<script>
    $("#table tr").click(function(){
        $(this).addClass('selected').siblings().removeClass('selected');
        var value=$(this).find('td:nth-child(2)').html();
        alert(value);
//        window.location.replace("http://stackoverflow.com");
    });

    $jquery('.ok').on('click', function(e){
        alert($("#table tr.selected td:nth-child(2)").html());
    });
</script>



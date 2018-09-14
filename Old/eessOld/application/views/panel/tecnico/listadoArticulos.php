<div class="panel panel-default">
    <div class="panel-heading">
        <h5 class="subtitle mb5">Listado de Articulos</h5>
        <p class="m20">Articulos, Item o Materiales para proyectos </p>
        <br>
        <div class="table-responsive">
            <table class="table table-info table-hover" id="table1">

                <thead>
                <tr role="row">
                    <th>codigo</th>
                    <th>Descripcion</th>
                    <th>Marca</th>
                    <th>Referencia</th>
                    <th>Unidad</th>
                    <th>Precio</th>
                    <th>Existencia</th>
                    <th>Estatus</th>
                </tr>
                </thead>


                <tbody>
                        <tr>
                            <td>10001</td>
                            <td>Material de prueba</td>
                            <td>Generico</td>
                            <td>1001</td>
                            <td>Metro</td>
                            <td>2,500</td>
                            <td>450</td>
                            <td>Activo</td>

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



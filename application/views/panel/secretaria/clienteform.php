<?php /** @var array $clientes

 *
 *todo: usar este codigo para llenar los selectbox con datos de las tablas
 *   <?php
//include ('conexion.php');
$consulta ='SELECT * FROM clientes ORDER by id_cliente';
$result = mysqli_query($consulta,);

while($row = mysqli_fetch_assoc($result)){

echo $row['cliente_nombre'];
}


?>

<select name ="cat">
<?php
$catsql = "SELECT * FROM clientes;";
$catres = mysqli_query($catsql);
while($catrow= mysqli_fetch_assoc($catres)) {
echo "<option value='" . $catrow['id']
. "'>" . $catrow['cat'] . "</option>";
}
?>
</select>
 */?>
 
 <div class="col-md-12">

    
            <div class="rigth">
             <!--   <ul class="pagination pagination-split">
                    <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
                 inicio  -->
            
            <div class="col-md-12">  
 
  <div class="panel panel-default">

    <div class="panel-body">

        <div class="col-md-12">
            <div class="panel-primary">
                <div class="panel-heading">

                    <h4 class="panel-title">Registro de Cliente</h4>
                </div>
            </div>



            <?=form_open(base_url().'clientes/insertar_cliente');

//creamos los arrays que compondran nuestro formulario

$nombre_cliente = array(
    'name' => 'nombre_cliente',
    'id' => 'nombre_cliente',
    'class' => 'form-control',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('nombre_cliente') //con esto al procesar el formulario de forma incorrecta quedará guardado el dato que le habíamos puesto
);

//el segundo array(campo email)

$apellido_cliente = array(
    'name' => 'apellido_cliente',
    'id' => 'apellido_cliente',
    'class' => 'form-control',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('apellido_cliente')
);

//el tercero...(campo asunto)
$empresa_cliente = array(
    'name' => 'empresa_cliente',
    'id' => 'empresa_cliente',
    'class' => 'form-control',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('empresa_cliente')
);

//el cuarto...(campo mensaje)
$rnc_cliente = array(
    'name' => 'rnc_cliente ',
    'id' => 'rnc_cliente ',
    'class' => 'form-control',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('rnc_cliente ')
);

//el cuarto...(campo mensaje)
$telefono_cliente = array(
    'name' => 'telefono_cliente',
    'id' => 'telefono_cliente',
    'class' => 'form-control',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('telefono_cliente') //set_value('telefono_cliente')
);

//el cuarto...(campo mensaje)
$direccion_cliente = array(
    'name' => 'direccion_cliente',
    'id' => 'direccion_cliente',
    'class' => 'form-control',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('direccion_cliente')
);

//el cuarto...(campo mensaje)
$ciudad_cliente = array(
    'name' => 'ciudad_cliente',
    'id' => 'ciudad_cliente',
    'class' => 'form-control',
    'size' => '50',
    'style' => 'width:100%',
    'value' => set_value('ciudad_cliente')
);

            //el cuarto...(campo mensaje)
            $email_cliente = array(
                'name' => 'email_cliente',
                'id' => 'email_cliente',
                'class' => 'form-control',
                'size' => '50',
                'style' => 'width:100%',
                'value' => set_value('email_cliente')
            );


//el botón submit de nuestro formulario
$submit = array(
    'name' => 'submit',
    'id' => 'submit',
    'class' => 'form-control',
    'class' => 'btn btn-primary',
    'value' => 'Registrar',
    'title' => 'Registrar'
);


            //el botón submit de nuestro formulario
            $cancel = array(
                'name' => 'cancel',
                'id' => 'cancel',
                'class' => 'form-control',
                'class' => 'btn btn-danger',
                'value' => 'Cancelar',
                'title' => 'Cancelar'
            );

?>
<?php
echo form_fieldset('Nuevo Cliente');
?>


            <form class="form-horizontal form-bordered">

                <div class="form-group">



                    <div class="col-md-6">
                        <?php echo form_label('Nombre: '); ?>

                            <?php echo form_input($nombre_cliente); ?>


                    </div>
                    <div class="col-md-6">
                        <?php echo form_label('Apellido: '); ?>
                        <div class="input-group mb15 col-sm-12">
                            <?php echo form_input($apellido_cliente); ?>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <?php echo form_label('Empresa: '); ?>
                        <div class="input-group mb15 col-sm-12">
                            <?php echo form_input($empresa_cliente); ?>

                        </div>

                    </div>
                    <div class="col-md-4">

                        <?php echo form_label('RNC: '); ?>
                        <div class="input-group mb15 col-sm-12">
                            <?php echo form_input($rnc_cliente); ?>

                        </div>
                    </div>
                </div>


                    <div class="form-group">


                        <div class="col-md-9">

                            <?php echo form_label('Direccion: '); ?>
                            <div class="input-group mb15 col-sm-12">
                                <?php echo form_input($direccion_cliente); ?>

                            </div>
                        </div>




                            <div class="col-md-3">

                                <?php echo form_label('Telefono: '); ?>
                                <div class="input-group mb15 col-sm-12">
                                    <?php echo form_input($telefono_cliente); ?>

                                </div>
                            </div>




                        <div class="col-md-6">

                            <?php echo form_label('Ciudad: '); ?>
                            <div class="input-group mb15 col-sm-12">
                                <?php echo form_input($ciudad_cliente); ?>

                            </div>
                        </div>

                        <div class="col-md-6">

                            <?php echo form_label('email: '); ?>
                            <div class="input-group mb15 col-sm-12">
                                <?php echo form_input($email_cliente); ?>

                            </div>
                        </div>

                     </div>



                           <div class="form-group">
                               <div class="col-md-9">
                               </div>
                               <div class="col-md-3">

                                    <?php echo form_reset($cancel);
                                    //nuestro boton submit
                                    ?>


                                        <?php echo form_submit($submit);
                                        //nuestro boton submit
                                        ?>

                            </div>
                        </div>
                    </div>
</form>
<table>


       <tr>
        <td>

        </td>
        <td>
            <!--con la funcion validation_errors ci nos muestra los errores al pulsar el botón submit, la podemos colocar donde queramos-->
            <font color="red" style="font-weight: bold; font-size: 14px; text-decoration: underline"><?php echo validation_errors(); ?></font>
        </td>
    </tr>

    <?php
    echo form_close();
    ?>
</table>
<?php
echo form_fieldset_close();
?>


       </div>
    </div>
</div>


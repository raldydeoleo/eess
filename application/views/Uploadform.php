<html>
<head>
    <title>Upload Form</title>
</head>
<body>
<?php echo form_open_multipart('upload/do_upload');

$submit = array(
    'name' => 'submit',
    'id' => 'submit',
    'class' => 'form-control',
    'class' => 'btn btn-primary',
    'value' => 'Cargar',
    'title' => 'Cargar'
);

$upload = array(
    'name' => 'imagen',
    'id' => 'imagen',
    'class' => 'form-control',

    'value' => '',

);
?>



    <?php
    echo form_upload('name' => 'image', 'class' => 'form-control'); ?>

<?php echo form_submit($submit);

?>
    <h1>Cargar</h1><br>
    <input type="file" name="imagen" id="imagen">
    <input form_summit() submit" name="agregaimagen" id="addimagen" value="Agregar">

</form>

<?php form_close(); ?>

</body>
</html>
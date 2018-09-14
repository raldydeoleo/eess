<?php

$nombre_img = $_FILES['imagen']['name'];
$tipo = $_FILES['imagen']['type'];
$tamno = $_FILES['imagen']['size'];


$sql = "UPDATE tblimagen set rutaimagen = '$nombre_img'";
$result = mysqli_query($sql);

?>

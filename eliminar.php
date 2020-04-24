<?php



require('conexion.php');

$id=$_GET['id'];

$sql="DELETE FROM registros WHERE idRegistro='$id'";

mysqli_query($conexion,$sql);

header('Location: index.php');



?>
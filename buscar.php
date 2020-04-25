<?php
require_once('conexion.php');

$json = file_get_contents('php://input');

$data = json_decode($json);
$findChar=$data->data;


$sql="SELECT * FROM registros WHERE nombre LIKE '%".$findChar."%'  ";
//OR apellido LIKE '%."$data->data".%' OR direccion LIKE '%."$data->data".%' OR telefono LIKE '%."$data->data".%'
$resultado=mysqli_query($conexion,$sql);
$resultados=mysqli_fetch_all($resultado);
//echo $data->data;
echo json_encode($resultados);


?>
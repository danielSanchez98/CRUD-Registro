<?php
require_once('conexion.php');

$json = file_get_contents('php://input');

$data = json_decode($json);
$findChar=$data->data;


$sql="SELECT * FROM registros WHERE nombre LIKE '%".$findChar."%' OR apellido LIKE '%".$findChar."%' OR direccion LIKE '%".$findChar."%' OR telefono LIKE '%".$findChar."%' ";
$resultado=mysqli_query($conexion,$sql);

$resultados=array();
while($r=mysqli_fetch_assoc($resultado)){
    $resultados[]=$r;
};
if (count($resultados)>0) {
    echo json_encode($resultados);
}else{
    echo '{"idRegistro": "null"}';
}
//echo $data->data;



?>
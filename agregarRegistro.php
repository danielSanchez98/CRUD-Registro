<?php
    require('conexion.php');
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];

    $sql= "INSERT INTO registros (nombre,apellido,direccion,telefono) VALUES ('$nombre', '$apellido','$direccion','$telefono')";

    mysqli_query($conexion, $sql);

    header('Location: index.php');

?>
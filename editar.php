<?php
require('conexion.php');
$accionLink='editar.php'; 
$update='update';
$btnLabel='Edit';
$titleForm='Edite su información';
$edit=true;

session_start();

if(isset($_SESSION['id']) && $_SESSION['update']=='ok' && (isset($_POST['nombre']) || isset($_POST['apellido']) || isset($_POST['direccion']) || isset($_POST['telefono']))){
    
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];

    $sql="UPDATE registros SET nombre='$nombre', apellido='$apellido', direccion='$direccion', telefono='$telefono' WHERE idRegistro='".$_SESSION['id']."'";
    mysqli_query($conexion, $sql);
    
    session_unset();

    header('Location: index.php');
}else if (empty($_SESSION['update']) || isset($_SESSION['id'])) {
    $_SESSION['update']='ok';
    $id=$_GET['id'];
    $_SESSION['id']=$id;
    $sql= "SELECT * FROM registros WHERE idRegistro='$id'";

    $resultado=mysqli_query($conexion,$sql);

    $resultado_personas=mysqli_fetch_all($resultado);
    
   
} else{
    session_unset();
}






?>


<?php require('includes/header.php');?>

<?php require('includes/formulario.php');?>
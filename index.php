<?php
    require('conexion.php');
   
    $accionLink='agregarRegistro.php'; 
    $update='';
    $btnLabel='Register';
    $titleForm='Registre su información';
    $edit=false;
    $resultado_personas=[''];
   
    $sql="SELECT * FROM  registros";
    $resultado=mysqli_query($conexion,$sql);

    $resultado_lista=mysqli_fetch_all($resultado);

?>



<?php require('includes/header.php');?>
    
    

    <?php require('includes/formulario.php');?>

        <div class="resultados">

            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Creado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($resultado_lista as $datoVar): ?>
                        <tr>

                            <td><?php echo $datoVar[1]?></td>
                            <td><?php echo $datoVar[2]?></td>
                            <td><?php echo $datoVar[3]?></td>
                            <td><?php echo $datoVar[4]?></td>
                            <td><?php echo $datoVar[5]?> </td>
                            <td>
                                <a id="edit" href="editar.php?id=<?php echo $datoVar[0];?>">Edit</a> 
                                <a id="delete" href="eliminar.php?id=<?php echo $datoVar[0];?>"> Delete</a>                        

                            </td>
                        </tr>

                        
                    <?php endforeach;?>   
                </tbody>
            </table>

        </div>

    </div>
    <script src="assets/JS/app.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/CSS/style.css">
</head>
<body>

    <div class="nav">
        <a href="index.php">CRUD Registro</a>
    </div>
    
    <div class="container">
        <div class="registro">
            <div class="formulario">
                <h2>Registro</h2>

                <form action="" method="post">

                    <label for="nombre">nombre</label>
                    <input type="text" name="nombre" id="nombre" autofocus>

                    <label for="apellido">apellido</label>
                    <input type="text" name="apellido" id="apellido">

                    <label for="direccion">direccion</label>
                    <input type="text" name="direccion" id="direccion">

                    <label for="telefono">telefono</label>
                    <input type="text" name="telefono" id="telefono">

                    <button type="submit">Register</button>
                    


                </form>
            </div>




        </div>

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
                    <tr>

                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td> </td>
                    <td>
                         <a id="edit" href="edit.php">Edit</a> 
                         <a id="delete" href=""> Delete</a> 
                        

                    </td>


                    </tr>

                    
                    
                </tbody>
            </table>

        </div>

    </div>
</body>
</html>
<div class="container">
<div class="registro <?php echo $update?>">
            <div class="formulario">
                <h2><?php echo $titleForm?></h2>
                
                <form action=<?php echo $accionLink ?> method="post">
                <?php foreach($resultado_personas as $persona): ?>
                    

                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" value="<?php echo ($edit==true) ?   $persona[1] :  "";?>" autofocus>

                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" id="apellido" value="<?php echo ($edit==true) ?  $persona[2] :  "";?>">

                    <label for="direccion">Dirección</label>
                    <input type="text" name="direccion" id="direccion" value="<?php echo ($edit==true) ?  $persona[3] :  "";?>">

                    <label for="telefono">Telefono</label>
                    <input type="text" name="telefono" id="telefono" value="<?php echo ($edit==true) ?  $persona[4] :  "";?>">

                    <button type="submit"><?php echo $btnLabel?></button>
                    
                    <?php endforeach;?> 

                </form>
            </div>




        </div>
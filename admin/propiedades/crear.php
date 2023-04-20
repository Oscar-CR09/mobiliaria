<?php
    require '../../includes/funciones.php';
    
    incluirTemplate('header');
        
    //base de datos
    require '../../includes/config/database.php';

    $db = conectarDB();

    //consultar para obtener vendedores 
    $consulta = "SELECT *from vendedores";
    $resultado = mysqli_query($db, $consulta);

    //arreglo con mensaje de errores

    $errores=[];

    $titulo = "";
    $precio = "";
    $descripcion = "";
    $habitaciones = "";
    $wc = "";
    $estacionamiento = "";
    $vendedores_id = "";
//ejecutarel codigo despues de que el usuario envia formulario 


    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $habitaciones = $_POST['habitaciones'];
        $wc = $_POST['wc'];
        $estacionamiento = $_POST['estacionamiento'];
        $vendedores_id = $_POST['vendedores_id'];
        $creado = date('Y/m/a');

        if(!$titulo){
            $errores[] ="Debes añadir un titulo";

        }

        if(!$precio){
            $errores[]="El precio es obligatorio";
        }

        if(strlen($descripcion)<50){
            $errores[]="La descripcion es obligatorio y debe tener al menos 50 caracteres";
        }

        if(!$habitaciones){
            $errores[]="El numero de habitaciones es obligatorio";
        }

        if(!$wc){
            $errores[]="El numero de baños es obligatorio";
        }

        if(!$estacionamiento){
            $errores[]="El numero de estacionamientos es obligatorio";
        }

        if(!$vendedores_id){
            $errores[]="Elige un vendedor";
        }
        // echo "<pre>";
        // var_dump($errores);
        // echo "</pre>";

        // exit;

        //revisar que el array de errores este vacio
        if (empty($errores)){
            //insertar en la base de datos
            $query = "INSERT INTO propiedades(titulo, precio, descripcion, habitaciones, wc, estacionamiento, creadol, vendedores_id ) VALUES 
            ('$titulo','$precio','$descripcion','$habitaciones','$wc','$estacionamiento', '$creadol','$vendedores_id' ) ";

            // echo "$query";

            $resultado = mysqli_query($db, $query);

            if ($resultado){
                echo "Insertado correctamente";
            }

        }



    }
    


?>

    <main class="contenedor seccion">
        <h1>Crear</h1>

       
        <a href="../index.php" class="boton boton-verde">volver</a>

        <?php foreach($errores as $errores): ?>

        <div class="alerta error">
            <?php echo $errores; ?>            
        </div>
            
        <?php endforeach; ?>
        <br>

        <form class="formulario" method="POST" action="../propiedades/crear.php">

            <fieldset>
                <legend>Informacion General</legend>
                
                <label for="titulo">Titulo:</label>
                <input 
                    type="text" 
                    id="titulo" 
                    name="titulo" 
                    placeholder="Titulo Propiedad" 
                    value="<?php echo $titulo; ?>">
                
                <label for="precio">Precio:</label>
                <input 
                    type="number" 
                    id="precio" 
                    name="precio" 
                    placeholder="Precio Propiedad" 
                    value="<?php echo $precio; ?>">

                <label for="imagen">Imagen:</label>
                <input 
                    type="file" 
                    id="imagen" 
                    accept="image/jpeg, image/png">

                <label for="descripcion">Descripcion:</label>
                <textarea 
                    id="descripcion" 
                    name="descripcion" 
                    cols="100" 
                    rows="10"> <?php echo $descripcion; ?> </textarea>

            </fieldset>

            <fieldset>
                <legend>Informacion Propiedad</legend>
                <label for="habitaciones">Habitaciones:</label>
                <input 
                    type="number" 
                    id="habitaciones" 
                    name="habitaciones" 
                    placeholder="Ejemplo: 3" 
                    min="1" 
                    max="9" 
                    value="<?php echo $habitaciones; ?>">
                
                <label for="wc">Baños:</label>
                <input 
                    type="number" 
                    id="wc" 
                    name="wc" 
                    placeholder="Ejemplo: 3" 
                    min="1" 
                    max="9" 
                    value="<?php echo $wc; ?>">

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" 
                    id="estacionamiento" 
                    name="estacionamiento" 
                    placeholder="Ejemplo: 3" 
                    min="1" 
                    max="9" 
                    value="<?php echo $estacionamiento; ?>">

            </fieldset>    

            <fieldset>
                
                <legend>Vendedor</legend>
                <select name="vendedor" >

                    <option value=""> -- Seleccione --</option>
                    <?php while($vendedor = mysqli_fetch_assoc($resultado) ) : ?>
                        <option <?php echo $vendedores_id === $vendedor['id'] ? 'selected': ''; ?> value="<?php echo $vendedor['id']; ?>">
                        <?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?> </option>

                    <?php endwhile; ?>

                </select>

            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton boton-verde" >
       
        </form>
    
    </main>    


<?php

    incluirTemplate('footer',$inicio = true);

?>
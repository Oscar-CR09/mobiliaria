<?php

    //base de datos
    require '../../includes/config/database.php';

    $db = conectarDB();

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";

        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $habitaciones = $_POST['habitaciones'];
        $wc = $_POST['wc'];
        $estacionamiento = $_POST['estacionamiento'];
        $vendedores_id = $_POST['vendedores_id'];

        //insertar en la base de datos

        $query = "INSERT INTO propiedades (titulo, precio,descripcion, habitaciones, wc, estacionamiento, vendedores_id ) VALUES ('$titulo','$precio','$descripcion','$habitaciones','$wc','$estacionamiento','$vendedores_id ')";

        // echo "$query";

        $resultado = mysqli_query($db, $query);

        if ($resultado){
            echo "Insertado correctamente";
        }
    }
    

    require '../../includes/funciones.php';
    
    incluirTemplate('header');
    
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>

       
        <a href="../index.php" class="boton boton-verde">volver</a>

        <br>

        <form class="formulario" method="POST" action="../propiedades/crear.php">

            <fieldset>
                <legend>Informacion General</legend>
                
                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo " placeholder="Titulo Propiedad">
                
                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio Propiedad">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png">

                <label for="descripcion">Descripcion:</label>
                <textarea id="descripcion" name="descripcion" cols="100" rows="10"></textarea>

            </fieldset>

            <fieldset>
                <legend>Informacion Propiedad</legend>
                <label for="habitacion">Habitaciones:</label>
                <input type="number" id="habitacion" name="habitacion" placeholder="Ejemplo: 3" min="1" max="9" >
             
                <label for="wc">Baños:</label>
                <input type="number" id="wc" name="wc" placeholder="Ejemplo: 3" min="1" max="9" >

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ejemplo: 3" min="1" max="9" >
            </fieldset>    

            <fieldset>
                
                <legend>Vendedor</legend>
                <select name="vendedor" id="">

                    <option value="1">Juan </option>
                    <option value="2">Karen </option>

                </select>

            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton boton-verde" >
       
        </form>
    
    </main>    


<?php

    incluirTemplate('footer');

?>
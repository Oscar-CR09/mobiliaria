<?php

    require '../../includes/funciones.php';
    
    incluirTemplate('header');
    
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>

        
        <form class="formulario">

            <fieldset>
                <legend>Informacion General</legend>
                
                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" placeholder="Titulo Propiedad">
                
                <label for="precio">Precio:</label>
                <input type="number" id="precio" placeholder="Precio Propiedad">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png">

                <label for="descripcion">Descripcin:</label>
                <textarea id="descripcion" cols="100" rows="10"></textarea>

            </fieldset>

            <fieldset>
                <legend>Informacion Propiedad</legend>
                <label for="habitacion">Habitaciones:</label>
                <input type="number" id="habitaciones" placeholder="Ejemplo: 3" min="1" max="9" >
             
                <label for="wc">Baños:</label>
                <input type="number" id="wc" placeholder="Ejemplo: 3" min="1" max="9" >

                <label for="estacionamiento">Estacionamiento:</label>
                <input type="number" id="estacionamiento" placeholder="Ejemplo: 3" min="1" max="9" >
            </fieldset>    

            <fieldset>
                
                <legend>Vendedor</legend>
                <select name="" id="">

                    <option value="1">Juan </option>
                    <option value="2">Karen </option>

                </select>

            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton boton-verde" >
            

       
        </form>

       
        <br>
        <a href="../index.php" class="boton boton-verde">volver</a>

    
    </main>    


<?php

    incluirTemplate('footer',$inicio = true);

?>
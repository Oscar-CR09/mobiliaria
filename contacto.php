<?php
    include '/includes/templates/header.php';
?>

    <main class="contenedor seccion">
        <h1>Contacto</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="imagen/webp">
            <source srcset="build/img/destacada3.jpg" type="imagen/jpeg">
            <img src="build/img/destacada3.jpg" alt="imagen Contacto">

        </picture>
        <h2>Llene el formulario de Contacto </h2>

        <form class="formulario">
            <fieldset>
                <legend> Información Personal</legend>

                <label for="nombre" >Nombre  </label>
                <input type="text" placeholder="Tu nombre" id="nombre">

                <label for="email" >Email   </label>
                <input type="email" placeholder="Tu email" id="email">

                <label for="telefono"> Telefono   </label>
                <input type="tel" placeholder="Tu telefono" id="telefono">

                <label for="mensaje" >Mensaje   </label>
                <textarea id="mensaje"></textarea>

            </fieldset>

            <fieldset>
                <legend>Informacio sobre la propiedad</legend>

                <label for="opciones" >Vende o Compra  </label>
                <select id="opciones">
                    <option value="" disabled selected> --seleccione-- </option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>

                </select>

                <label for="presupuesto"> Precio o Presupuesto </label>
                <input type="number" placeholder="Tu Precio o Presupuesto" id="presupuesto">

                
            </fieldset>

            <fieldset>
                <legend>Informacio sobre la propiedad</legend>

                <p>Como desea ser contactado</p>
                <div class="forma-contacto">
                    <label for="contactar-telefono">Telefono</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">
                </div>
                <div class="forma-contacto">
                    <label for="contactar-email">Email</label>
                    <input name="contacto" type="radio" value="email" id="contactar-email">
                </div>

                <p>Si eligió telefono, elija la fecha y la hora </p>
                <label for="fecha"> Fecha:   </label>
                <input type="date" id="fecha">

                <label for="hora"> Hora:   </label>
                <input type="time" id="hora" min="09:00" max="18:00">


            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">

        </form>
    </main>    

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.html">Nosotros</a>
                <a href="anuncios.html">Anuncios</a>
                <a href="blog.html">Blog</a>
                <a href="contacto.html">Contacto</a>
            </nav>

        </div> 

        <p class="copyrigth">Todos los derechos Reservados 2023 &copy;</p>

    </footer>

    <script> src= '/build/js/bundle.min.js'</script>
    
</body>
</html>
<?php

    require 'includes/funciones.php';
    
    incluirTemplate('header');
    
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque </h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="imag/webp">
            <source srcset="build/img/destacada.jpg" type="imag/jpeg">
            <img src="build/img/destacada.jpg" alt="imagen de la Propiedad">

        </picture>
        <div class="resumen-propiedad">
            <p class="precio">3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono"  src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono"  src="build/img/icono_estacionamiento.svg" alt="icono_estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono"  src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p>4</p>
                </li>

            </ul>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Rem obcaecati minus facilis, consequuntur nulla perferendis illo ex! Ipsum,
                neque debitis aut 
                voluptatum non dignissimos iure ipsa ex velit distinctio cupiditate?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui obcaecati 
                maxime in quod repudiandae,
                repellendus quasi saepe optio iusto omnis quam. 
                Non architecto consectetur tempora rem minus voluptate neque distinctio.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non provident assumenda nobis quae odit, 
                iusto molestias, necessitatibus fuga 
                porro minus odio doloribus esse eveniet debitis dolorum a ea vero. Ipsa.
            </p>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti reprehenderit, 
                sed,
                 exercitationem recusandae quia ipsa consequatur cupiditate eaque eius nam,
                 nulla eos officia facere inventore?
                 Quisquam sapiente ullam dolor dignissimos.
            </p>


        </div>
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
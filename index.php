<?php

    require 'includes/funciones.php';
    
    incluirTemplate('header',$inicio = true);
    
?>


    <main class="contenedor seccion">
        <h1>Mas sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono seguridad" >
                <h3>Seguridad</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati dolores 
                    iusto beatae ab aperiam ullam quasi dolor consequatur porro repudiandae? 
                    Similique aliquam optio nihil dignissimos odio porro esse expedita placeat.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono precio" >
                <h3>Precio</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati dolores 
                    iusto beatae ab aperiam ullam quasi dolor consequatur porro repudiandae? 
                    Similique aliquam optio nihil dignissimos odio porro esse expedita placeat.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono Tiempo" >
                <h3>A Tiempo</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati dolores 
                    iusto beatae ab aperiam ullam quasi dolor consequatur porro repudiandae? 
                    Similique aliquam optio nihil dignissimos odio porro esse expedita placeat.</p>
            </div>
        </div>
    </main>  
    
    <section class="seccion contenedor">
        <h2>Casas y departamentos en Venta</h2>
        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source src="build/img/anuncio1.webp" type="image/webp">
                    <source src="build/img/anuncio1.jpg" type="image/jpg">
                    <img src="build/img/anuncio1.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa de Lujo en el Lago</h3>
                    <p>Casa en el Lago con excelente vista, acabados de lujo a un excelente precio</p>
                    <p class="precio">$3,000,000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" src="build/img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono_estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                            <p>4</p>
                        </li>

                    </ul>

                    <a href="anuncio.html" class="boton boton-amarillo-block">Ver Propiedad</a>
                </div><!-- contenido-anuncio -->
            </div> <!-- anuncio-->
            <div class="anuncio">
                <picture>
                    <source src="build/img/anuncio2.webp" type="image/webp">
                    <source src="build/img/anuncio2.jpg" type="image/jpg">
                    <img src="build/img/anuncio2.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa terminados de lujo</h3>
                    <p>Casa en el Lago con excelente vista, acabados de lujo a un excelente precio</p>
                    <p class="precio">$3,000,000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" src="build/img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono_estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img  src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                            <p>4</p>
                        </li>

                    </ul>

                    <a href="anuncio.html" class="boton boton-amarillo-block">Ver Propiedad</a>
                </div><!-- contenido-anuncio -->
            </div> <!-- anuncio-->
            <div class="anuncio">
                <picture>
                    <source src="build/img/anuncio3.webp" type="image/webp">
                    <source src="build/img/anuncio3.jpg" type="image/jpg">
                    <img src="build/img/anuncio3.jpg" alt="anuncio">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa con alberca</h3>
                    <p>Casa en el Lago con excelente vista, acabados de lujo a un excelente precio</p>
                    <p class="precio">$3,000,000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" src="build/img/icono_wc.svg" alt="icono wc">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono_estacionamiento">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                            <p>4</p>
                        </li>

                    </ul>

                    <a href="anuncio.html" class="boton boton-amarillo-block">Ver Propiedad</a>
                </div><!-- contenido-anuncio -->
            </div> <!-- anuncio-->
        </div><!-- contenedor - anuncio -->

        <div class="alinear-derecha">
            <a href="anuncios.html" class="boton-verde">Ver todas </a>
        </div>
    </section>
       <!--Contacto  -->
    <section class="imagen-contacto">
        <!-- <img src="/build/img/encuentra.jpg" class="imagen-contacto" alt="imagen-c"> -->
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llena el formulario de contacto y un asesor se pondra en contacto contigo a la breveda</p>
        <a href="contacto.html" class="boton-amarillo">Contactanos</a>

    </section>
<!-- blog -->
    <div class="contenedor seccion seccion-inferior"> 
        <section class="blog">
            <h3>Nuestro Blog</h3>
            
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <img  src="build/img/blog1.jpg" alt="texto Entrada Blog">
                </div>
                    </picture>
                    <div class="texto-entrada">

                        <a href="entrada.html">
                            <h4>Terraza en el techo de tu casa</h4>
                            <p class="informacion-meta">Escritorio el: <span>06/04/2023</span> por: <span>Administrador</span></p>
                           
                            <p>Consejo para construir una terraza con los mejores materiales </p>
                        </a>

                    </div>
               

            </article>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <img  src="build/img/blog2.jpg" alt="texto Entrada Blog">
                </div>
                    </picture>
                    <div class="texto-entrada">
                        <a href="entrada.html">
                            <h4>Guia para tu decoracion de tu hogar</h4>
                            <p class="informacion-meta">Escritorio el: <span>06/04/2023</span> por: <span>Administrador</span></p>
                            <p>Maximiza el espacio de tu hogar con esta guia, aprende a combinar muebles
                                y colores para darle vida a tu espacio     
                            </p>
                        </a>
                    </div>


            </article>
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                    Se compro de una excelente forma, muy buena atencion y la casa que 
                    me ofrecieron cumple con todas mis expectativas. 

                </blockquote>

                <p>Oscar CR</p>

            </div>

        </section>
    </div>

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
    <!-- <script>src='/src/js/app.js'</script> -->
    
</body>
</html>
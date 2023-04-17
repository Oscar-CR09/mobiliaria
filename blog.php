<?php

    require 'includes/funciones.php';
    
    incluirTemplate('header');
    
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Nuestro Blog</h1>
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
                                <p>Escritorio el: <span>06/04/2023</span> por: <span>Administrador</span></p>
                            
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
                                <p>Escritorio el: <span>06/04/2023</span> por: <span>Administrador</span></p>
                                <p>Maximiza el espacio de tu hogar con esta guia, aprende a combinar muebles
                                    y colores para darle vida a tu espacio     
                                </p>
                            </a>
                        </div>


                </article>
                <article class="entrada-blog">
                    <div class="imagen">
                        <picture>
                            <source srcset="build/img/blog3.jpg" type="image/jpeg">
                            <source srcset="build/img/blog3.webp" type="image/webp">
                            <img  src="build/img/blog3.jpg" alt="texto Entrada Blog">
                    </div>
                        </picture>
                        <div class="texto-entrada">

                            <a href="entrada.html">
                                <h4>Terraza en el techo de tu casa</h4>
                                <p>Escritorio el: <span>06/04/2023</span> por: <span>Administrador</span></p>
                            
                                <p>Consejo para construir una terraza con los mejores materiales </p>
                            </a>

                        </div>
                

                </article>
                <article class="entrada-blog">
                    <div class="imagen">
                        <picture>
                            <source srcset="build/img/blog4.jpg" type="image/jpeg">
                            <source srcset="build/img/blog4.webp" type="image/webp">
                            <img  src="build/img/blog4.jpg" alt="texto Entrada Blog">
                    </div>
                        </picture>
                        <div class="texto-entrada">
                            <a href="entrada.html">
                                <h4>Guia para tu decoracion de tu hogar</h4>
                                <p>Escritorio el: <span>06/04/2023</span> por: <span>Administrador</span></p>
                                <p>Maximiza el espacio de tu hogar con esta guia, aprende a combinar muebles
                                    y colores para darle vida a tu espacio     
                                </p>
                            </a>
                        </div>


                </article>               
    </main>    

<?php

    incluirTemplate('footer',$inicio = true);

?>
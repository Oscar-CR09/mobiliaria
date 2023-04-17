<?php

    require 'includes/funciones.php';
    
    incluirTemplate('header');
    
?>
    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>
        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>

                    <source srcset="build/img/nosotros.jpg" type="ima/jpeg">
                    <source srcset="build/img/nosotros.webp" type="ima/webp">
                    
                    <img  src="build/img/nosotros.jpg" alt="Sobre nosotros">
    
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>
                    25años de experiencia 
                </blockquote>
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
        </div>
    </main>    
    <section class="contenedor seccion">
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
    </section>  

<?php

    incluirTemplate('footer',$inicio = true);

?>
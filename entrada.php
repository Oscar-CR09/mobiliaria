<?php

    require 'includes/funciones.php';
    
    incluirTemplate('header');
    
?>
    <main class="contenedor seccion contenido-centrado">
        <h1 >Casa en venta frente al bosque </h1>

        <picture>
            <source srcset="build/img/destacada2.webp" type="imag/webp">
            <source srcset="build/img/destacada2.jpg" type="imag/jpeg">
            <img src="build/img/destacada2.jpg" alt="imagen de la Propiedad">

            <p class="informacion-meta">Escrito el : <span>08/04/2023 </span> por: <span>Administrador</span></p>

        </picture>
        <div class="resumen-propiedad">

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

<?php

    incluirTemplate('footer',$inicio = true);

?>
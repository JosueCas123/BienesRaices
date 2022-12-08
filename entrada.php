<?php 

require 'includes/funciones.php';


incluirTemplate('header' );

?>

    <main class="contenedor seccion contenido-centrado">
        <h1> Guia para la decoracion de tu hogar </h1>

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp"> 
            <source srcset="build/img/destacada2.webp" type="image/webp"> 
            <img loading="lazy" src="build/img/destacada2.jpg" alt="imagen de la propiedad">
        </picture>
        <p class="informacion-meta"> Escrito el: <span>20/10/2021</span> por: <span>Admi</span></p>
        <div class="resumen-propiedad">
           
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos aliquid molestias omnis reiciendis ex minima libero alias, doloribus eveniet assumenda nisi saepe iusto modi quia voluptas nulla qui veritatis. Quos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas maxime quisquam nesciunt dicta voluptatibus laboriosam fugiat enim tempore eligendi minus facere libero perferendis ea officia laudantium in deleniti, optio sit. </p>
                 
                 
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui cumque minus dolores rerum pariatur sit distinctio? At sed, repellendus molestias provident voluptate animi magni impedit cupiditate eius veritatis earum sequi?</p>
        </div>
    </main>

    <?php 

incluirTemplate('footer' );
?>
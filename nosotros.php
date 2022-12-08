<?php 

require 'includes/funciones.php';


incluirTemplate('header' );

?>


    <main class="contenedor seccion">
        <h1>Conoce sobre nosotros </h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">  
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg"> 
                    
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>
                    25 años de experienciass
                </blockquote>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos aliquid molestias omnis reiciendis ex minima libero alias, doloribus eveniet assumenda nisi saepe iusto modi quia voluptas nulla qui veritatis. Quos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas maxime quisquam nesciunt dicta voluptatibus laboriosam fugiat enim tempore eligendi minus facere libero perferendis ea officia laudantium in deleniti, optio sit. </p>
                 
                 
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui cumque minus dolores rerum pariatur sit distinctio? At sed, repellendus molestias provident voluptate animi magni impedit cupiditate eius veritatis earum sequi?</p>
            </div>
        </div>
    </main>
    <section class="contenedor seccion">
        <h1>Mas Sobre Nosotros </h1>
S
        <div class="iconos-nosotros">
            <div class="iconos">
                <img src="build/img/icono1.svg" alt="Icono seguridad"
                loading = "lazy"> 
                <h3>Seguridad</h3>
                <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum quo odio rerum accusantium perferendis, laboriosam praesentium atque quis aspernatur dicta molestias! Vel delectus esse officiis, perspiciatis amet officia nihil adipisci?</p>
            </div>
            <div class="iconos">
                <img src="build/img/icono2.svg" alt="Icono Precio
                loading = "lazy"> 
                <h3>Precio</h3>
                <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum quo odio rerum accusantium perferendis, laboriosam praesentium atque quis aspernatur dicta molestias! Vel delectus esse officiis, perspiciatis amet officia nihil adipisci?</p>
            </div>
            <div class="iconos">
                <img src="build/img/icono3.svg" alt="Icono Tiempo"
                loading = "lazy"> 
                <h3> A Tiempo</h3>
                <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum quo odio rerum accusantium perferendis, laboriosam praesentium atque quis aspernatur dicta molestias! Vel delectus esse officiis, perspiciatis amet officia nihil adipisci?</p>
            </div>
        </div>
    </section>
    <?php 
incluirTemplate('footer' );
?>
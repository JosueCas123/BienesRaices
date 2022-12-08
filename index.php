<?php 

require 'includes/funciones.php';


incluirTemplate('header', $inicio = true );

?>

    <main class="contenedor seccion">
        <h1>Mas Sobre Nosotros </h1>

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
    </main>
    <section class="seccion contenedor">
        <h2>Casas y Depas en Venta</h2>
        <?php 

        
          $limite = 3;
          include 'includes/templates/anuncios.php';
        ?>
        
        <div class="alinear-derercha">
            <a href="Anuncios.php" class="boton-verde">ver todas</a>
        </div>
    </section>
    <section class="imagen-cotacto">
        <h2>Encuentra las casas de tus sueños</h2>
        <p>Llena el formulario de contactos y un asesor e pondra en contacto contigo a la brevedad</p>
        <a href="contactos.php" class="boton-amarillo"> contactanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro blog</h3>

            <article class="entrada-blog">
                <div class="iamgen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="Texto entrada blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php"> 
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admi</span> </p>

                        <p>
                            consejos para contruir una terraza en le techo de casa con los mejores materiales y ahorrando materiales
                        </p>
                    </a>
                </div>
            </article>
            <article class="entrada-blog">
                <div class="iamgen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="Texto entrada blog">
                    </picture>
                </div>
                <div class="texto-entrada">
                    <a href="entrada.php"> 
                        <h4>Guia para la decoracion de tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admi</span> </p>

                        <p>
                            Maximiza el espacio de tu hogar con esta guia, aprende  a cambiar muebles y colores para darle vida a tu espacio 
                        </p>
                    </a>
                </div>
            </article>
        </section>
        <section class="testimoniales"> 
            <h3>Textimoniales</h3>

            <div class="testimonial">
                <blockquote>
                   El personal se a comportado de una exelente forma, muy buena atencion y la casa que me ofrecio cumple con todas mis expectyativas.  
                </blockquote>
                <p>-Josue Castillo</p>
            </div>
        </section>
        
        
<?php 

incluirTemplate('footer' );
?>


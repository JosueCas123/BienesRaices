<?php

require 'includes/funciones.php';


incluirTemplate('header');

?>

<main class="contenedor seccion">
    <h1>contactos</h1>

    <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp">
        <source srcset="build/img/destacada3.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagem de contacto">
    </picture>
    <h2> Llene el formulario de contacto </h2>

    <form class="formulario">
        <fieldset>
            <legend>Informacion Personal</legend>

            <label for="nombre">Nombre</label>
            <input type="text" placeholder="tu Nombre" id="nombre">

            <label for="Email">E-mail</label>
            <input type="emails" placeholder="Ingresa tu Email" id="Email">

            <label for="telefono">telefono</label>
            <input type="tel" placeholder="Tu telefono" id="telefono">

            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje"></textarea>

        </fieldset>

        <fieldset>
            <legend>Informacion sobre la propiedad</legend>
            <label for="opciones">Vende o Compra</label>
            <select name="" id="opciones">
                <option value="disabled selected">--seleccione--</option>
                <option value="Compra">Compra</option>
                <option value="Vende">Vende</option>
            </select>

            <label for="presupuesto">Precio o Presupuiesto</label>
            <input type="number" placeholder="tu Precio o Presupuesto" id="presupuesto">

        </fieldset>
        <fieldset>
            <legend>contacto</legend>

            <p>Como desea ser contactado</p>

            <div class="form-contacto">
                <label for="contactar-telefono"> telefono</label>
                <input name="contacto" type="radio" value="telefono" id="contactar-telefono">
                <label for="contactar-E-mail">E-mail</label>
                <input name="contacto" type="radio" value="email" id="contactar-E-mail">
            </div>
            <p>Si eligio telñefeno elija la hora y la fecha</p>

            <label for="fecha">Fecha</label>
            <input type="date" id="fecha">

            <label for="hora">Hora</label>
            <input type="time" id="hora" min="9:00" max="18:00">

        </fieldset>

        <input type="submit" value="enviar" class="boton-verde">
    </form>
</main>

<?php

incluirTemplate('footer');
?>
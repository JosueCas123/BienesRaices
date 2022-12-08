<fieldset>
                <legend>Informacion General </legend>
                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="propiedad[titulo]" placeholder="titulo de la propiedad" value="<?php echo s($propiedad->titulo); ?>">

                <label for="precio"> Precio: </label>
                <input type="number" id="precio" name="propiedad[precio]" placeholder="Precio de la propiedad" value="<?php echo s($propiedad->precio); ?>">

                <label for="imagen"> Imagen: </label>
                <input type="file" id="imagen" accept="image/jpeg, image/png" name="propiedad[imagen]">

                <?php if($propiedad->imagen){ ?>
                    <img src="/imagenes/<?php echo $propiedad->imagen ?>" class="imagen-small" >

                <?php } ?>

                <label for="descripcion"> Descripcion</label>
                <textarea id="descripcion" name="propiedad[descripcion]"><?php echo s($propiedad->descripcion); ?></textarea>

            </fieldset>

            <fieldset>
                <legend> Informacion Propiedad </legend>

                <label for="habitaciones">Habitaciones</label>

                <input type="number" id="habitaciones" name="propiedad[habitaciones]" placeholder="ej:3" min="1" max="9" value="<?php echo s($propiedad->habitaciones); ?>">

                <label for="wc">Baños</label>

                <input type="number" id="wc" name="propiedad[wc]" placeholder="ej:3" min="1" max="9" value="<?php echo s($propiedad->wc); ?>">

                <label for="estacionamiento">Estacionamiento</label>

                <input type="number" id="estacionamiento" name="propiedad[estacionamiento]" placeholder="ej:3" min="1" max="9" value="<?php echo s($propiedad->estacionamiento); ?>">

    
            </fieldset>

            <fieldset>
                <legend>vendedor</legend>

        
            </fieldset>
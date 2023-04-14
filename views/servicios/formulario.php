<fieldset class="contenedor-forma">
    <legend>Informacion del servicio</legend>

    <label for="nombre">Nombre: </label>
    <input type="text" id="nombre" name="servicios[nombre]" placeholder="Nombre del servicio" value="<?php echo $servicios->nombre; ?>">

    <label for="imagen">Imagen: </label>
    <input type="file" id="imagen" name="servicios[imagen]" placeholder="Imagen del servicio">

    <label for="descripcionResumida">Descripcion Resumida</label>
    <textarea id="descripcionResumida" name="servicios[descripcionResumida]"><?php echo $servicios->descripcionResumida ?></textarea>

    <label for="descripcionCompleta">Descripcion Completa</label>
    <textarea id="descripcionCompleta" name="servicios[descripcionCompleta]"><?php echo $servicios->descripcionCompleta ?></textarea>

    
</fieldset>
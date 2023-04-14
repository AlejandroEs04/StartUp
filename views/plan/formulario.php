<fieldset class="contenedor-forma">
    <legend>Informacion del plan</legend>

    <label for="nombre">Nombre: </label>
    <input type="text" id="nombre" name="planes[plan]" placeholder="Nombre del Plan" value="<?php echo $planes->plan; ?>">

    <label for="precio">Precio: </label>
    <input type="text" id="precio" name="planes[costo]" placeholder="Precio del Plan" value="<?php echo $planes->costo; ?>">

    <label for="descripcion">Descripcion</label>
    <textarea id="descripcion" name="planes[descripcion]"><?php echo $planes->descripcion ?></textarea>
</fieldset>
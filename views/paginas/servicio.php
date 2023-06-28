<div class="contenedor">
    <h2><?php echo $servicio->nombre; ?></h2>

    <div class="grid2">
        <div class="contenedor">
            <p><?php echo $servicio->descripcionCompleta; ?></p>
        </div>

        <div class="imagenServicio">
            <img src="imagenes/<?php echo $servicio->imagen; ?>">
        </div>
    </div>

    <?php incluirTemplateArray('planes', $planes); ?>

    <?php incluirTemplate('contacto'); ?>
</div>
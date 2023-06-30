<div class="contenedor">
    <?php 
        $resultado = $_GET['resultado'];
        if($resultado):
            $mensaje = mostrarNotificacion( intval( $resultado) );
            if($mensaje): ?>
                <p class="alerta exito"><?php echo $mensaje; ?></p>
            <?php endif;
        endif;
    ?>
    <h2><?php echo $servicio->nombre; ?></h2>

    <div class="grid2">
        <div class="contenedor textoServicio">
            <p><?php echo $servicio->descripcionResumida; ?></p>
            <p><?php echo $servicio->descripcionCompleta; ?></p>
        </div>

        <div class="imagenServicio">
            <img src="imagenes/<?php echo $servicio->imagen; ?>">
        </div>

        <div class="acciones">
            <a href="#contacto" class="boton">
                Contactactenos
            </a>
        </div>
    </div>

    <?php incluirTemplateArray('planes', $planes); ?>
    <?php 
        $infoExtra = [
            'servicio' => $servicio = $_GET['id'] ?? null,
            'plan' => $plan = $_GET['plan'] ?? null
        ];
        $_SESSION['infoExtra'] = $infoExtra; 
    ?>
    <?php incluirTemplateArray('contacto', $planId); ?>
</div>
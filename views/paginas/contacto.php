<div class="contenedor">
    <div class="contenedor-contactanos">
        <div class="contenedor-contacto">
            <?php foreach($errores as $error): ?>
                <div class="alerta error">
                    <?php echo $error; ?>
                </div>
            <?php endforeach; ?>

            <?php 
                if($resultado):
                    $mensaje = mostrarNotificacion( intval( $resultado) );
                    if($mensaje): ?>
                        <p class="alerta exito"><?php echo $mensaje; ?></p>
                    <?php endif;
                endif;
            ?>
            <?php incluirTemplate('formulario'); ?>
        </div>

        <div class="contenedor-texto">
            <img src="/../build/img/logo.svg" alt="Logo" class="logo-texto">
            <p>En breve nos pondremos en contacto con usted.</p>
            <p class="color">Gracias por sus contactarnos :D</p>
            <div class="social-media">
                <a href="#"><img src="/../build/img/whatsapp.svg" alt="Whatsapp"></a>
                <a href="#"><img src="/../build/img/facebook.svg" alt="Facebook"></a>
                <a href="https://github.com/AlejandroEs04"><img src="/../build/img/github.svg" alt="Github"></a>
            </div>
        </div>
    </div>
</div>


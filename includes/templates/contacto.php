<div class="contenedor-contacto-index">
        <div>
            <h2>Contactanos</h2>
            <?php foreach($errores as $error): ?>
                <div class="alerta error">
                    <?php echo $error; ?>
                </div>
            <?php endforeach; ?>

            <?php 
                $resultado = $_GET['resultado'];
                if($resultado):
                    $mensaje = mostrarNotificacion( intval( $resultado) );
                    if($mensaje): ?>
                        <p class="alerta exito"><?php echo $mensaje; ?></p>
                    <?php endif;
                endif;
            ?>
            <form class="formulario-index" method="POST" id="contacto" action="/"> 
                <div class="input-contacto">
                    <label>Nombre</label>
                    <input type="text" name="contacto[name]" placeholder="Nombre">
                </div>
                                
                <div class="input-contacto">
                    <label>Apellido</label>
                    <input type="text" name="contacto[lastName]" placeholder="Apellido">
                </div>

                <div class="input-contacto" id="correo">
                    <label>Correo Electronico</label>
                    <input type="email" name="contacto[email]" placeholder="Email">
                </div>

                <div class="input-contacto" id="mensaje">
                    <label>Mensaje</label>
                    <textarea name="contacto[message]" value="comentario"></textarea>
                </div>

                <div class="contenedor-boton">
                    <input type="submit" class="boton-enviar" value="Enviar">
                </div>
            </form>
        </div>

        <div class="opciones-contacto">
            <h3>Tambien puedes contactarnos por</h3>
            <div class="social-media index-contacto-media">
                <div class="icono-index">
                    <a href="#"><img src="/../build/img/whatsapp.svg" alt="Whatsapp"></a>
                    <p>Whatsapp</p>
                </div>

                <div class="icono-index">
                    <a href="#"><img src="/../build/img/facebook.svg" alt="Facebook"></a>
                    <p>Facebook</p>
                </div>
            </div>
            <div class="texto-contacto">
                <p>En breve nos pondremos en contacto con usted.</p>
                <p class="color">Gracias por sus contactarnos :D</p>
            </div>
        </div>
    </div>
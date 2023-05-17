<main class="contenedor" id="main">
    <div class="informacion">
        <h2>Ofrecemos</h2>
        <div class="servicios">
            <div class="servicio">
                <h2>Desarrollo Web</h2>
                <p>Ofrecemos un servicio de front end, back end y base de datos en el desarrollo de paginas web, para su empresa, negocio y/o compania</p>
                <img src="/../build/img/website.svg" class="inverter">
            </div>
            <div class="servicio">
                <h2>Tiempos Justos</h2>
                <p>Para ofrecer el mejor servicio a nuestros usuarios, proponemos tiempos justos y realistas, para evitar conveniencias en cuestion del tiempo, y asi ofrecer un servicio de calidad</p>
                <img src="/../build/img/tiempo.svg" class="inverter">
            </div>
            <div class="servicio">
                <h2>Mantenimiento</h2>
                <p>Estamos concientes que para llegar a un mayor publico y una mejor experiencia de usuario, ofrecemos servicio de mantenimiento gratuito, durante un año, para mentener la pagina en optimas condiciones</p>
                <img src="/../build/img/mantenimiento.svg" class="inverter">
            </div>
        </div>
    </div>

    <div class="informacion" id="servicios">
        <div class="servicios-ofrecemos">
            <h2>Nuestros Servicios</h2>
            <div class="servicios">
                <div class="servicio-info">
                    <img src="/../build/img/monitor.gif">
                    <h2>Paginas Web</h2>
                    <p>Buscamos crear paginas bien diseñadas y oprimizadas, para que tu negocio crezca y se posicione mejor en el mercado</p>
                </div>

                <div class="servicio-info">
                    <img src="/../build/img/shop.gif">
                    <h2>Tiendas Virtuales</h2>
                    <p>Tiendas Online, con un apartado para que los clientes puedan comprar sus productos y un apartado para que el vendedor pueda administrar su pagina</p>
                </div>

                <div class="servicio-info">
                    <img src="/../build/img/www.gif">
                    <h2>Dominio gratis</h2>
                    <p>Le otorgamos 1 año completo de dominio gratis para su sitio web</p>
                </div>

                <div class="servicio-info">
                    <img src="/../build/img/config.gif">
                    <h2>Administracion completa</h2>
                    <p>Capacidad de poder administrar su pagina web de forma directa.</p>
                </div>

                <div class="servicio-info">
                    <img src="/../build/img/tool.gif">
                    <h2>Capacitacion</h2>
                    <p>Se capacitara de forma gratuita para saber como se utilizan la pagina web</p>
                </div>

                <div class="servicio-info imagen-info"></div>
            </div>
        </div>
    </div>

    <div class="informacion planes">
        <h2>Planes disponibles</h2>
        <div class="servicios paquetes">
            <div class="paquete">
                <h3>Plan Basico</h3>
                <p>Precio: <span>$8,000 mxn</span></p>
                <a href="/planes?plan=1">Saber Mas</a>
            </div>

            <div class="paquete">
                <h3>Plan Intermedio</h3>
                <p>Precio: <span>$15,000 mxn</span></p>
                <a href="/planes?plan=2">Saber Mas</a>
            </div>

            <div class="paquete">
                <h3>Plan Pro</h3>
                <p>Precio: <span>$35,000 mxn</span></p>
                <a href="/planes?plan=3">Saber Mas</a>
            </div>
        </div>
        <p>Tambien, puedes ponerte en contacto con nosotros para una cotizacion:D</p>
    </div>

    <div class="contenedor-contacto-index">
        <div>
            <h2>Contactanos</h2>
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
            <form class="formulario-index" method="POST" action="/">
                
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
                    <label>Comentarios</label>
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
</main>
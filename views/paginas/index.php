<main class="contenedor" id="main">
    <?php 
        $resultado = $_GET['resultado'];
        if($resultado):
            $mensaje = mostrarNotificacion( intval( $resultado) );
            if($mensaje): ?>
                <p class="alerta exito"><?php echo $mensaje; ?></p>
            <?php endif;
        endif;
    ?>
    <div class="informacion">
        <h2>Ofrecemos</h2>
        <div class="servicios ofrecemos">
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
                <div class="servicio-info text-alignLeft">
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

   <?php incluirTemplateArray('planes', $planes); ?>

   <?php incluirTemplateArray('contacto', $planes); ?>

    
</main>
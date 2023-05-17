<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../build/css/app.css">
    <link rel="icon" href="../build/img/Icono.ico">
    <title>DD-Code.com</title>
</head>
<body>
    <header class="<?php if(!$admin) { echo "header"; } else { echo "admin-header"; } ?>" id="fondo">
        <div class="fondo-header">
            <div class="contenedor contenedor-header <?php if($admin) { echo "admin-nav"; } ?>" id="nav">
                <div class="contenedor-logo">
                    <a href="/" class="logo">
                        <img src="/../build/img/logo.svg">
                    </a>
                    <div class="nav-hide">
                        <div class="imagen-nav"><img src="/../build/img/icono-hamburguesa.svg" class="nav-boton"></div>
                    </div>
                    
                </div>

                <nav class="navegacion">
                    <a href="/">Inicio</a>
                    <?php if(!$admin) {?>
                    <a href="/nosotros">Nosotros</a>
                    <div class="nav-servicio">
                        <div class="a-servicio">
                            <a href="/#servicios">Servicios</a>
                            <img src="/../build/img/flecha.svg">
                        </div>
                        <div class="a-servicios">
                            <a href="#">Sitios Web</a>
                            <a href="#">Tiendas Virtuales</a>
                        </div>
                    </div>
                    <a href="/contacto">Contactanos</a>
                    <a href="/portafolio">Portafolio</a>
                    <?php } else { ?>
                        <a href="/admin">Administrador</a>
                        <a href="/servicios">Servicios</a>
                        <a href="/logout">Logout</a>
                    <?php } ?>
                </nav>
            </div>
        </div>
        <?php if($other) { ?>
                <div class="contenedor-info-tipo">
                    <?php
                    echo "<h1 class='tipo'>${tipo}</h1>";
                    echo "<p class='tipo'>${info}</p>";
                    ?>
                </div>
            <?php } ?>
    </header>

    <?php echo $contenido; ?>

    <footer class="footer">
        <a href="/" class="logo">
            <img src="/../build/img/logo.svg">
        </a>
        <nav class="navegacion">
                <a href="/">Inicio</a>
                <a href="/nosotros">Nosotros</a>
                <a href="/contacto">Contactanos</a>
                <a href="/portafolio">Portafolio</a>
        </nav>
    </footer>
    <script src="/build/js/app.js"></script>
</body>
</html>
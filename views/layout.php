<?php
    if(!isset($_SESSION)) {
        session_start();
    }
    $auth = $_SESSION['login'] ?? false;

    if(!isset($inicio)) {
        $inicio = false;
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../build/css/app.css">
    <title>Pagina Web</title>
</head>
<body>
    <header class="header" id="fondo">
        <div class="fondo-header">
            <div class="contenedor contenedor-header" id="nav">
                <div class="contenedor-logo">
                    <h1>Logo</h1>
                    <div class="imagen-nav"><img src="/../build/img/icono-hamburguesa.svg"></div>
                </div>

                <nav class="navegacion">
                    <a href="/">Inicio</a>
                    <a href="/nosotros">Nosotros</a>
                    <div class="nav-servicio">
                        <div class="a-servicio">
                            <a href="/servicios">Servicios</a>
                            <img src="/../build/img/flecha.svg">
                        </div>
                        <div class="a-servicios">
                            <a href="#">Servicio 1</a>
                            <a href="#">Servicio 2</a>
                            <a href="#">Servicio 3</a>
                            <a href="#">Servicio 4</a>
                        </div>
                    </div>
                    <a href="/contacto">Contactanos</a>
                    <a href="/portafolio">Portafolio</a>
                </nav>
            </div>
        </div>
        <div class="contenedor contenedor-ofrecemos">
            <h1>Desarrollo web <span>Especializado</span></h1>
        </div>
    </header>

    <?php echo $contenido; ?>

    <footer class="footer">
        <h1>Logo</h1>
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
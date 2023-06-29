<div class="contenedor-admin seccion">
    <h1>Crear Servicio</h1>

    <div class="acciones">
        <a href="/admin" class="boton">
            Volver
        </a>
    </div>  

    <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <div class="contenedor-contacto">
        <form class="formulario" method="POST" enctype="multipart/form-data" action="/crear/servicios">
            <?php include __DIR__ . '/formulario.php'; ?>
            <input type="submit" value="Crear Servicio" class="boton boton-mediano">
        </form>
    </div>
</div>
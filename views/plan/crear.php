<main class="contenedor seccion">
    <h1>Crear Plan</h1>

    <div class="acciones">
        <div class="boton boton-chico">
            <a href="/admin">Volver</a>
        </div>
    </div>  

    <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php debuguear($error); ?>
        </div>
    <?php endforeach; ?>

    <div class="contenedor-contacto">
        <form class="formulario" method="POST" enctype="multipart/form-data" action="/crear/plan">
            <?php include __DIR__ . '/formulario.php'; ?>
            <input type="submit" value="Crear Plan" class="boton boton-mediano">
        </form>
    </div>
</main>
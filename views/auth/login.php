<main>
    <div class="contenedor-grid">
        <div class="texto-auth contenedor-auth">
            <h2>Inicia Sesion</h2>
            <p>Ingresa con tu nombre de usuario y tu contrasena</p>
        </div>

        <div class="form-auth">
            <form class="formulario-admin" method="POST" action="/login">
                    <legend>Ingresa tus datos</legend>
                    <label>Nombre de usuario</label>
                    <input type="text" placeholder="Nombre de usuario" name="usuario[nombre]">

                    <label>Contrasena</label>
                    <input type="password" placeholder="Contrasena" name="usuario[password]">

                    <input type="submit" class="boton boton-enviar" value="Enviar">
            </form>
        </div>
    </div>
</main>
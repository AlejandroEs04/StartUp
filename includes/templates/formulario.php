<form class="formulario" method="POST" action="/contacto">
    <fieldset class="contenedor-forma">
        <legend>Informacion de contacto</legend>

        <label>Nombre</label>
        <input type="text" name="contacto[name]" placeholder="Nombre">
                        
        <label>Apellido</label>
        <input type="text" name="contacto[lastName]" placeholder="Apellido">

        <label>Correo Electronico</label>
        <input type="email" name="contacto[email]" placeholder="Email">

        <label>Comentarios</label>
        <textarea name="contacto[message]" value="comentario"></textarea>
    </fieldset>
    <div class="contenedor-boton">
        <input type="submit" class="boton-enviar" value="Enviar">
    </div>
</form>
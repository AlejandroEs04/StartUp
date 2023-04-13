<div class="contenedor">
    <div class="contenedor-contactanos">
        <div class="contenedor-contacto">
            <form class="formulario" method="POST" action="/contacto">
                <fieldset class="contenedor-forma">
                    <legend>Informacion de contacto</legend>

                    <label>Nombre</label>
                    <input type="text" name="nombre" placeholder="Nombre">
                    
                    <label>Apellido</label>
                    <input type="text" name="apellido" placeholder="Apellido">

                    <label>Comentarios</label>
                    <textarea name="comentario" value="comentario"></textarea>

                    <label>Correo Electronico</label>
                    <input type="email" name="correo" placeholder="Email">
                </fieldset>
                <div class="contenedor-boton">
                    <input type="submit" class="boton-enviar" value="Enviar Comentario">
                </div>
            </form>
        </div>

        <div class="contenedor-texto">
            <img src="/../build/img/logo.svg" alt="Logo" class="logo-texto">
            <p>En breve nos pondremos en contacto con usted.</p>
            <p class="color">Gracias por sus comentarios :D</p>
            <div class="social-media">
                <a href="#"><img src="/../build/img/whatsapp.svg" alt="Whatsapp"></a>
                <a href="#"><img src="/../build/img/facebook.svg" alt="Facebook"></a>
                <a href="https://github.com/AlejandroEs04"><img src="/../build/img/github.svg" alt="Github"></a>
            </div>
        </div>
    </div>
</div>


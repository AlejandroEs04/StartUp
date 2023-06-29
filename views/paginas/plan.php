<div class="contenedor">
    <?php 
        $resultado = $_GET['resultado'];
        if($resultado):
            $mensaje = mostrarNotificacion( intval( $resultado) );
            if($mensaje): ?>
                <p class="alerta exito"><?php echo $mensaje; ?></p>
            <?php endif;
        endif;
    ?>
    <h2><?php echo $plan->plan; ?></h2>
    <div class="flex contenedor-plan">
        <div class="bg-blanco contenedor-contenido flex70">
            <p><?php echo $plan->descripcion; ?></p>
        </div>

        <div class="bg-gray contenedor-contenido flex30">
            <p>Price: <span>$<?php echo $plan->costo; ?></span></p>
        </div>
        
        
    </div>

    <div class="bg-blanco contenedor-contenido contenedor-descripcion">
        <h3>Este plan ofrece: </h3>
        <div class="contenedor-tabla">
            <table class="tabla-plane">
                <tr>
                    <th>Secciones</th>
                    <td><?php echo $plan->secciones; ?> secciones</td>
                </tr>

                <tr>
                    <th>Mantenimiento</th>
                    <td><?php echo $plan->mantenimiento; ?> meses gratuito</td>
                </tr>

                <tr>
                    <th>Dominio Gratuito el primer año</th>
                    <td>Si</td>
                </tr>

                <tr>
                    <th>Hosting Gratuito el primer año</th>
                    <td>Si</td>
                </tr>

                <tr>
                    <th>Administracion de contenido</th>
                    <td>Si</td>
                </tr>
                        
                <tr>
                    <th>Capacitacion</th>
                    <td>Si</td>
                </tr>
            </table>
        </div>
    </div>

    <div>
        <?php incluirTemplateArray('planes', $planes); ?>
    </div>

    <div>
        <?php incluirTemplate('Contacto') ?>
    </div>
</div>
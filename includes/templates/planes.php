<div class="informacion planes">
        <h2>Planes disponibles</h2>
        <div class="servicios paquetes">
            <?php 
                $planes = $_POST['info'];
                foreach($planes as $plan):
            ?>
                <div class="paquete">
                    <h3><?php echo $plan->plan; ?></h3>
                    <p>Precio: <span><?php echo $plan->costo; ?></span></p>
                    <a href="/planes?plan=<?php echo $plan->id; ?>">Saber Mas</a>
                </div>
            <?php endforeach; ?>
        </div>
        <p>Tambien, puedes ponerte en contacto con nosotros para una cotizacion:D</p>
    </div>
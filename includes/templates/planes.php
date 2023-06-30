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
                    <a 
                        href="
                            <?php 
                                echo $_SERVER['REQUEST_URI'];
                                if(empty($_GET)) {
                                    echo "?plan=" . $plan->id . "#contacto";
                                } else {
                                    echo "&plan=" . $plan->id . "#contacto";
                                }
                            ?>
                            "
                    >
                        Agregar Plan
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <p>Tambien, puedes ponerte en contacto con nosotros para una cotizacion:D</p>
    </div>
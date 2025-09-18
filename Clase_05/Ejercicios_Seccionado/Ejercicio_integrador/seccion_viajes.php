<?php foreach ($lista_destinos as $indice => $destino): ?>
    <div class="packages-item">

        <div class="packages-img">
            <img src="<?= $destino["imagen"]; ?>"
            class="img-fluid w-100 rounded-top"
            alt="Image">

            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i><?= $destino["ciudad_pais"]; ?></small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i><?= $destino["cantidad_dias"]; ?>days</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i><?= $destino["cantidad_dias"]; ?> Person</small>
            </div>

            <div class="packages-price py-2 px-4">$<?= number_format($destino["precio"], 2, ".", ","); ?></div>

        </div>

        <div class="packages-content bg-light">

            <div class="p-4 pb-0">
                <h5 class="mb-0"><?= $destino["ciudad_pais"]; ?></h5>
                <small class="text-uppercase"><?= $destino["nombre_hotel"]; ?></small>

                <div class="mb-3">
                    <?php for ($i = 1; $i <= $destino["cantidad_estrellas"]; $i++): ?>
                        <small class="fa fa-star text-primary"></small>
                    <?php endfor; ?>
                <!--Para ver el nro solo:
                Nro de Estrellas <small class="fa fa-star text-primary"></small>
                -->

                <!--
                Para ver tantas estrellas: (se repite cuantas tenga)
                Puedes generar otro ciclo repetitivo aqui para que repita cada estrella, tantas veces:
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                -->
                </div>

                <p class="mb-4"><?= $destino["descripcion"]; ?></p>
            </div>

            <div class="row bg-primary rounded-bottom mx-0">

                <div class="col-6 text-start px-0">
                    <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                </div>

                <div class="col-6 text-end px-0">
                    <a href="#" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                </div>

            </div>

        </div>

    </div>
<?php endforeach; ?>

<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

        <!-- Panel principal -->
        <li class="nav-item">
            <a class="nav-link <?= ($paginaActual == 'index') ? 'active' : 'collapsed'; ?>" href="index.php">
                <i class="bi bi-grid"></i>
                <span>Panel</span>
            </a>
        </li>

        <!-- Menú Transporte -->
        <?php if ($usuario['nivelId'] != 3): ?>
            <li class="nav-item">
                <a class="nav-link <?= in_array($paginaActual, ['transporte_carga', 'chofer_carga']) ? '' : 'collapsed'; ?>"
                    data-bs-toggle="collapse" href="#transporte-nav" aria-expanded="<?= in_array($paginaActual, ['transporte_carga', 'chofer_carga']) ? 'true' : 'false'; ?>">
                    <i class="bi bi-truck"></i><span>Transporte</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="transporte-nav" class="nav-content collapse <?= in_array($paginaActual, ['transporte_carga', 'chofer_carga']) ? 'show' : ''; ?>">
                    <li>
                        <a href="transporte_carga.php" class="<?= ($paginaActual == 'transporte_carga') ? 'active' : ''; ?>">
                            <i class="bi bi-circle"></i><span>Cargar nuevo transporte</span>
                        </a>
                    </li>
                    <?php if ($usuario['nivelId'] != 2): ?>
                        <li>
                            <a href="chofer_carga.php" class="<?= ($paginaActual == 'chofer_carga') ? 'active' : ''; ?>">
                                <i class="bi bi-circle"></i><span>Cargar nuevo chofer</span>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </li>
        <?php endif; ?>

        <!-- Menú Viajes -->
        <li class="nav-item">
            <a class="nav-link <?= in_array($paginaActual, ['viaje_carga', 'viajes_listado']) ? '' : 'collapsed'; ?>"
                data-bs-toggle="collapse" href="#viajes-nav" aria-expanded="<?= in_array($paginaActual, ['viaje_carga', 'viajes_listado']) ? 'true' : 'false'; ?>">
                <i class="bi bi-globe2"></i><span>Viajes</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="viajes-nav" class="nav-content collapse <?= in_array($paginaActual, ['viaje_carga', 'viajes_listado']) ? 'show' : ''; ?>">
                <?php if ($usuario['nivelId'] != 3): ?>
                    <li>
                        <a href="viaje_carga.php" class="<?= ($paginaActual == 'viaje_carga') ? 'active' : ''; ?>">
                            <i class="bi bi-circle"></i><span>Cargar nuevo</span>
                        </a>
                    </li>
                <?php endif; ?>
                <li>
                    <a href="viajes_listado.php" class="<?= ($paginaActual == 'viajes_listado') ? 'active' : ''; ?>">
                        <i class="bi bi-circle"></i><span>Listado de viajes</span>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</aside>

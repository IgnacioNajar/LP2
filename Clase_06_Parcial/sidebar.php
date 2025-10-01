<?php
include_once('mis_datos.php');
?>

<div class="sidebar">

    <div class="scrollbar-inner sidebar-wrapper">

        <div class="user">

            <div class="photo">
                <img src="<?= $userPhoto; ?>" alt="user-img">
            </div>

            <div class="info">
                <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                    <span>
                        <?= $userName; ?>
                        <span class="user-level">Admin</span>
                        <span class="caret"></span>
                    </span>
                </a>

                <div class="clearfix"></div>

                <div class="collapse in" id="collapseExample" aria-expanded="true">
                    <ul class="nav">

                        <li>
                            <a href="#profile">
                                <span class="link-collapse">My Profile</span>
                            </a>
                        </li>

                        <li>
                            <a href="#edit">
                                <span class="link-collapse">Edit Profile</span>
                            </a>
                        </li>

                        <li>
                            <a href="#settings">
                                <span class="link-collapse">Settings</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>

        </div>

        <ul class="nav">

            <li class="nav-item <?= ($paginaActual == 'inicio') ? 'active' : ''; ?>">
                <a href="index.php">
                    <i class="la la-dashboard"></i>
                    <p>Inicio</p>
                </a>
            </li>

            <li class="nav-item <?= ($paginaActual == 'listado') ? 'active' : ''; ?>">
                <a href="listado.php">
                    <i class="la la-th"></i>
                    <p>Listado de viajes</p>
                </a>
            </li>

        </ul>

    </div>

</div>

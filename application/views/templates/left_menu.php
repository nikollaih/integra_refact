<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <div class="brand-container">
                <img src="<?= base_url() ?>assets/images/brand.png" alt="" class="thumb-lg">  
            </div>
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <?php 
                    if(!is_logged()){
                ?>
                        <li class="menu-title" data-key="t-menu">Menu Invitados</li>
                        <!-- Invitados -->
                        <li>
                            <a href="<?= base_url() ?>Invitados/aplicativos">
                                <i class="fas fa-home"></i>
                                <span data-key="t-dashboard">Aplicativos</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.html">
                                <i class="fas fa-rocket"></i>
                                <span data-key="t-dashboard">Aprender</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>Areas">
                                <i class="fas fa-book"></i>
                                <span data-key="t-dashboard">Áreas</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.html">
                                <i class="fas fa-upload"></i>
                                <span data-key="t-dashboard">Subir Actividades</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.html">
                                <i class="fas fa-graduation-cap"></i>
                                <span data-key="t-dashboard">Moodle</span>
                            </a>
                        </li>
                        <!-- Invitados -->
                <?php
                    }

                    if(is_logged() && logged_user()["rol"] == "Docente"){
                        ?>
                            <!-- Docente -->
                            <li class="menu-title mt-2" data-key="t-components">Menu Docentes</li>
                            <li>
                                <a href="<?= base_url() ?>Asignaciones">
                                    <i class="fas fa-book"></i>
                                    <span data-key="t-dashboard">Asignaciones</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>Proyectos">
                                    <i class="fas fa-project-diagram"></i>
                                    <span data-key="t-dashboard">Proyectos</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>Comunicacion">
                                    <i class="fas fa-volume-up"></i>
                                    <span data-key="t-dashboard">Comunicación</span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html">
                                    <i class="fas fa-cogs"></i>
                                    <span data-key="t-dashboard">Planeación</span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html">
                                    <i class="fas fa-key"></i>
                                    <span data-key="t-dashboard">Cambiar Contraseña</span>
                                </a>
                            </li>
                            <!-- Docente -->
                        <?php
                    }

                    if(is_logged() && logged_user()["rol"] == "Estudiante"){
                        ?>
                            <!-- Estudiante -->
                            <li class="menu-title mt-2" data-key="t-components">Menu Estudiante</li>
                            <li>
                                <a href="<?= base_url() ?>Areas">
                                    <i class="fas fa-book"></i>
                                    <span data-key="t-dashboard">Áreas</span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html">
                                    <i class="fas fa-key"></i>
                                    <span data-key="t-dashboard">Cambiar Contraseña</span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html">
                                    <i class="fas fa-sign-out-alt"></i>
                                    <span data-key="t-dashboard">Cerrar Sesion</span>
                                </a>
                            </li>
                        <?php
                    }
                ?>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
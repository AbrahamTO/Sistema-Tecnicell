<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
        </ul>


        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->

            <a class="nav-link" title="Editar Perfil de Usuario" href="panel.php?modulo=perfilUsuario">
                <i class="far fa-user"></i>
            </a>
            <a class="nav-link text-danger" href="panel.php?modulo=cerrar" title="Cerrar sesion">
                <i class="fas fa-door-closed"></i>
            </a>

        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="dist/img/usuario.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a title="Logo" class="d-block">TECNICELL PLUS</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item has-treeview menu-open">
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="panel.php?modulo=inicio" class="nav-link <?php echo ($modulo == "inicio" || $modulo == "") ? " active " : " "; ?>">
                                    <i class="fa fa-chart-bar nav-icon" aria-hidden="true"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="panel.php?modulo=clientes" class="nav-link <?php echo ($modulo == "clientes") ? " active " : " "; ?>">
                                    <i class="fas fa-users nav-icon" aria-hidden="true"></i>
                                    <p>Clientes</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="panel.php?modulo=productos" class="nav-link <?php echo ($modulo == "productos") ? " active " : " "; ?>">
                                    <i class="fas fa-archive nav-icon" aria-hidden="true"></i>
                                    <p>Productos</p>
                                </a>
                            </li>
                        </ul>

                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
</div>
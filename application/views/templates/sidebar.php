<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url() ?>" class="brand-link">
        <img src="<?= base_url('assets/') ?>img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight">Monitoring System</span>

    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-3">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= base_url() ?>" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-auto-close">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-fw fa-image"></i>
                        <p>
                            Capture Monitoring
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('capture/apps') ?>" class="nav-link">
                                <i class="fab fa-app-store fa-xs"></i>
                                <p> Apps</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('capture/website') ?>" class="nav-link">
                                <i class="fab fa-edge fa-xs"></i>
                                <p> Website</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview menu-close">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-fw fa-laptop"></i>
                        <p>
                            IP Monitoring
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ">
                        <li class="nav-item">
                            <a href="<?= base_url('ipmonitoring/servers') ?>" class="nav-link">
                                <i class="fas fa-server fa-xs"></i>
                                <p> Servers</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('ipmonitoring/website') ?>" class="nav-link">
                                <i class="fab fa-chrome fa-xs"></i>
                                <p> Website</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview menu-close">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-fw fa-ship"></i>
                        <p>
                            Port Monitoring
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ">
                        <li class="nav-item">
                            <a href="<?= base_url('portmonitoring') ?>" class="nav-link ">
                                <i class="fas fa-anchor fa-xs"></i>
                                <p>Mip</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview menu-close">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-fw fa-book"></i>
                        <p>
                            Log
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ">
                        <li class="nav-item">
                            <a href="<?= base_url('log/servers') ?>" class="nav-link">
                                <i class="fas fa-server fa-xs"></i>
                                <p> Servers</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('log/website') ?>" class="nav-link">
                                <i class="fab fa-chrome fa-xs"></i>
                                <p> Website</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Simple Link
                            <span class="right badge badge-danger">New</span>
                            <span class="right badge badge-danger">New1</span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!--
 /.sideb
ar -->








</aside>
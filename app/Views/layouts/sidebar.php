<!-- Main Sidebar container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= url_to('dashboard') ?>" class="brand-link">
        <img src="<?= base_url('adminLTE'); ?>/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Clothing Store</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-weight="treeview" role="menu" dara-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
                <li class="nav-header">Menu</li>
                <li class="nav-item">
                    <a href="<?= url_to('dashboard') ?>" class="nav-link">
                        <i class="fas fa-home nav-icon"></i>
                        <p> dashboard </P>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= url_to('bhn_baju') ?>" class="nav-link">
                        <i class="fas fa-seedling nav-icon"></i>
                        <p> Bahan Baju </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= url_to('merek') ?>" class="nav-link">
                        <i class="fas fa-rocket nav-icon"></i>
                        <p> Merek </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= url_to('baju') ?>" class="nav-link">
                        <i class="fas fa-tshirt nav-icon"></i>
                        <p> Baju </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= url_to('bhn_celana') ?>" class="nav-link">
                        <i class="fas fa-shoe-prints nav-icon"></i>
                        <p> Bahan Celana </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= url_to('celana') ?>" class="nav-link">
                        <i class="fas fa-socks nav-icon"></i>
                        <p> Celana </p>
                    </a>
                </li>
                </li>
            </ul>
        </nav>
        <!--/.sidebar-menu-->
    </div>
    <!--/.sidebar -->
</aside>
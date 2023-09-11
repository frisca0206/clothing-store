<!-- Main Sidebar container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= url_to('dashboard') ?>" class="brand-link">
        <img src="<?= base_url('assets'); ?>/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Clothing Store</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" dara-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
                <li class="nav-header">Menu</li>
                <li class="nav-item">
                    <a href="<?= url_to('dashboard') ?>" class="nav-link">
                        <i class="fas fa-home nav-icon"></i>
                        <p> dashboard </P>
                    </a>
                </li>


                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-dolly-flatbed"></i>
                        <p>Master Data<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="<?= url_to('bhn_baju') ?>" class="nav-link">
                                <i class="fas fa-seedling nav-icon"></i>
                                <p> Clothing Material </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= url_to('merek') ?>" class="nav-link">
                                <i class="fas fa-rocket nav-icon"></i>
                                <p> Brand </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= url_to('baju') ?>" class="nav-link">
                                <i class="fas fa-tshirt nav-icon"></i>
                                <p> T-Shirt </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= url_to('bhn_celana') ?>" class="nav-link">
                                <i class="fas fa-shoe-prints nav-icon"></i>
                                <p> Pants Material </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= url_to('celana') ?>" class="nav-link">
                                <i class="fas fa-socks nav-icon"></i>
                                <p> Pants </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= url_to('gudang') ?>" class="nav-link">
                                <i class="fas fa-warehouse nav-icon"></i>
                                <p> Warehouse </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-dolly-flatbed"></i>
                        <p>Stock Item<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="<?= url_to('stok_baju') ?>" class="nav-link">
                                <i class="fas fa-list-alt nav-icon"></i>
                                <p> Stock of T-shirt </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= url_to('stok_celana') ?>" class="nav-link">
                                <i class="fas fa-list-alt nav-icon"></i>
                                <p> Stock of Pants </p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!--/.sidebar-menu-->
    </div>
    <!--/.sidebar -->
</aside>
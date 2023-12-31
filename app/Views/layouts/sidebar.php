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
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
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
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-dolly-flatbed"></i>
                        <p>Master Data<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="<?= url_to('bhn_baju') ?>" class="nav-link">
                                <i class="fas fa-spa nav-icon"></i>
                                <p> Clothing Material </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= url_to('merek') ?>" class="nav-link">
                                <i class="fas fa-registered nav-icon"></i>
                                <p> Brand </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= url_to('ukuran_sepatu') ?>" class="nav-link">
                                <i class="fas fa-ruler nav-icon"></i>
                                <p> Shoe Size </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= url_to('sepatu') ?>" class="nav-link">
                                <i class="fas fa-socks nav-icon"></i>
                                <p> Shoe </p>
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
                    <a href="" class="nav-link">
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
                        <li class="nav-item">
                            <a href="<?= url_to('stok_sepatu') ?>" class="nav-link">
                                <i class="fas fa-list-alt nav-icon"></i>
                                <p> Stock of Shoes </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-dolly-flatbed"></i>
                        <p>Transaction<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview pl-3">
                        <li class="nav-item">
                            <a href="<?= url_to('pnjln_baju') ?>" class="nav-link">
                                <i class="fas fa-hand-holding-usd nav-icon"></i>
                                <p> T-shirt Sales </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= url_to('pnjln_celana') ?>" class="nav-link">
                                <i class="fas fa-hand-holding-usd nav-icon"></i>
                                <p> Pants Sales </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= url_to('pnjln_sepatu') ?>" class="nav-link">
                                <i class="fas fa-hand-holding-usd nav-icon"></i>
                                <p> Shoes Sales </p>
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
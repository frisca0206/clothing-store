<?= $this->extend('layouts/template'); ?>

<?= $this->Section('content'); ?>

<div class="content-wrapper">
    <!--Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $page_title ?></h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- /.content-header -->

    <!-- Main Content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Manage Stock of T-shirts</h3>
                            <div class="d-flex justify-content-end mb-1">
                                <a href="<?= url_to('stok_baju-create') ?>" class="btn btn-success mb-2"
                                    id="btn_modal_create">Create</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="stok_baju_table" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>T-shirt</th>
                                        <th>Warehouse</th>
                                        <th>Stock Amount</th>
                                        <th width="150">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($stoks_baju as $key => $stok_baju) : ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $stok_baju['baju_id'] ?></td>
                                        <td><?= $stok_baju['gudang'] ?></td>
                                        <td><?= $stok_baju['jumlah_stok'] ?></td>
                                        <td>
                                            <a href="<?= url_to('stok_baju-edit', $stok_baju['id'])?>"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            <a href="<?= url_to('stok_baju-delete', $stok_baju['id'])?>"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-boody -->
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>



<?= $this->endSection('content'); ?>
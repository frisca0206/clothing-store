<?= $this->extend('layouts/template'); ?>

<?= $this->Section('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
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
                            <h3 class="card-title">Manage T-shirt Sales</h3>
                            <div class="d-flex justify-content-end mb-1">
                                <a href="<?= url_to('pnjln_baju-create') ?>" class="btn btn-success mb-2"
                                    id="btn_modal_create">Create</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="pnjln_baju_table" class="table table-bordered table-hover masterdata-datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>T-shirt Name</th>
                                        <th>Date</th>
                                        <th>Buyer's Name</th>
                                        <th>Number of Items</th>
                                        <th>Total Price</th>
                                        <th>Total Paid</th>
                                        <th>Total Return</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pnjlns_baju as $key => $pnjln_baju) : ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $pnjln_baju['nama_baju'] ?></td>
                                        <td><?= $pnjln_baju['tanggal'] ?></td>
                                        <td><?= $pnjln_baju['nama_pembeli'] ?></td>
                                        <td><?= $pnjln_baju['jumlah_item'] ?></td>
                                        <td><?= $pnjln_baju['ttl_harga'] ?></td>
                                        <td><?= $pnjln_baju['ttl_dibayarkan'] ?></td>
                                        <td><?= $pnjln_baju['ttl_kembalian'] ?></td>
                                        <td>
                                            <a href="<?= url_to('pnjln_baju-edit', $pnjln_baju['id'])?>"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            <a href="<?= url_to('pnjln_baju-delete', $pnjln_baju['id'])?>"
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
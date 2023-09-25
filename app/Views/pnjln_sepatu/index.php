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
                            <h3 class="card-title">Manage Shoes Sales</h3>
                            <div class="d-flex justify-content-end mb-1">
                                <a href="<?= url_to('pnjln_sepatu-create') ?>" class="btn btn-success mb-2"
                                    id="btn_modal_create">Create</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="pnjln_sepatu_table"
                                class="table table-bordered table-hover masterdata-datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Shoes Name</th>
                                        <th>Date</th>
                                        <th>Buyer's Name</th>
                                        <th>Number Of Items</th>
                                        <th>Total Price</th>
                                        <th>Total Paid</th>
                                        <th>Total Return</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pnjlns_sepatu as $key => $pnjln_sepatu) : ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $pnjln_sepatu['nama_sepatu'] ?></td>
                                        <td><?= $pnjln_sepatu['tanggal'] ?></td>
                                        <td><?= $pnjln_sepatu['nama_pembeli'] ?></td>
                                        <td><?= $pnjln_sepatu['jumlah_item'] ?></td>
                                        <td><?= $pnjln_sepatu['ttl_harga'] ?></td>
                                        <td><?= $pnjln_sepatu['ttl_dibayarkan'] ?></td>
                                        <td><?= $pnjln_sepatu['ttl_kembalian'] ?></td>
                                        <td>
                                            <a href="<?= url_to('pnjln_sepatu-edit', $pnjln_sepatu['id'])?>"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            <a href="<?= url_to('pnjln_sepatu-delete', $pnjln_sepatu['id'])?>"
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
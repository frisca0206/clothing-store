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
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?= url_to('stok_baju-store')?>" method="POST">
                                <?= csrf_field() ?>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="bhn_baju_id">T-shirt</label>
                                            <select id="bhn_baju_id" name="bhn_baju_id" class="form-control">
                                                <option value=""></option>
                                                <?php foreach ($shirts as $key => $baju) : ?>
                                                <option value="<?php echo $baju['id'] ?>">
                                                    <?php echo $baju['bhn_baju_id']; ?>
                                                </option>
                                                <?php  endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="gudang">Warehouse</label>
                                            <select id="gudang" name="gudang" class="form-control">
                                                <option value=""></option>
                                                <?php foreach ($gudangs as $key => $gudang) : ?>
                                                <option value="<?php echo $gudang['id'] ?>">
                                                    <?php echo $gudang['gudang']; ?>
                                                </option>
                                                <?php  endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="jumlah_stok">Stok Amount</label>
                                            <input type="number" class="form-control" id="jumlah_stok"
                                                name="jumlah_stok" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 text-right">
                                    <a href="<?= url_to('stok_baju') ?>" type="button"
                                        class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary" id="btn_submit">Add Stock of
                                        T-shirt</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
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
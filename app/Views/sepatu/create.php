<?= $this->extend('layouts/template'); ?>

<?= $this->Section('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div c;ass="row mb-2">
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
                            <form action="<?= url_to('sepatu-store')?>" method="POST">
                                <?= csrf_field() ?>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="nama_sepatu">Shoe Name</label>
                                            <input type="text" class="form-control" id="nama_sepatu" name="nama_sepatu"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="ukuran_sepatu"> Shoe Size</label>
                                            <select id="ukuran_sepatu" name="ukuran_sepatu" class="form-control">
                                                <option value=""></option>
                                                <?php foreach ($sizes as $key => $size) : ?>
                                                <option value="<?php echo $size['id']; ?>">
                                                    <?php echo $size['ukuran_sepatu']; ?>
                                                </option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="merek"> Brand</label>
                                            <select id="merek" name="merek" class="form-control">
                                                <option value=""></option>
                                                <?php foreach ($mereks as $key => $merek) : ?>
                                                <option value="<?php echo $merek['id']; ?>">
                                                    <?php echo $merek['merek']; ?>
                                                </option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="harga">Price</label>
                                            <input type="number" class="form-control" id="harga" name="harga" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 text-right">
                                    <a href="<?= url_to('sepatu') ?>" type="button" class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary" id="btn_submit">Create Shoe</button>
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
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

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?= url_to('stok_sepatu-update')?>" method="POST">
                                <?= csrf_field() ?>
                                <input type="hidden" name="stok_sepatu_id" value="<?= $stok_sepatu['id'] ?>">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label> Shoes Name </label>
                                            <select id="nama_sepatu" name="nama_sepatu" class="form-control">
                                                <option value=""></option>
                                                <?php foreach ($shoes as $key => $shoe) : ?>
                                                <option value="<?= $shoe['id']; ?>"
                                                    <?php if($stok_sepatu['sepatu_id'] == $shoe['id']) echo "selected"; ?>>
                                                    <?= $shoe['nama_sepatu']; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label> Warehouse </label>
                                            <select id="gudang" name="gudang" class="form-control">
                                                <option value=""></option>
                                                <?php foreach ($gudangs as $key => $gudang) : ?>
                                                <option value="<?= $gudang['id']; ?>"
                                                    <?php if($stok_sepatu['gudang_id'] == $gudang['id']) echo "selected"; ?>>
                                                    <?= $gudang['gudang']; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="jumlah_stok"> Stock Amount </label>
                                            <input type="number" class="form-control" id="jumlah_stok"
                                                name="jumlah_stok" value="<?= $stok_sepatu['jumlah_stok'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 text-right">
                                    <a href="<?= url_to('stok_sepatu') ?>" type="button"
                                        class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary" id="btn_submit">Update Stock Of
                                        Shoes</button>
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
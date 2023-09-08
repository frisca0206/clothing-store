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
                        <div class="card-body">\
                            <form action="<?= url_to('stok_celana-update')?>" method="POST">
                                <?= csrf_field() ?>
                                <input type="hidden" name="stok_celana_id" value="<?= $stok_celana['id'] ?>">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Pants</label>
                                            <select id="nama_celana" name="nama_celana" class="form-control">
                                                <option value=""></option>
                                                <?php foreach ($trousers as $key => $celana) : ?>
                                                <option value="<?= $celana['id']; ?>"
                                                    <?php if($stok_celana['celana_id'] == $celana['id']) echo "selected"; ?>>
                                                    <?= $celana['nama_celana']; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Warehouse</label>
                                            <select id="gudang" name="gudang" class="form-control">
                                                <option value=""></option>
                                                <?php foreach ($gudangs as $key => $gudang) : ?>
                                                <option value="<?= $gudang['id']; ?>"
                                                    <?php if($stok_celana['gudang_id'] == $gudang['id']) echo "selected"; ?>>
                                                    <?= $gudang['gudang']; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="jumlah_stok">Stock Amount</label>
                                            <input type="number" class="form-control" id="jumlah_stok"
                                                name="jumlah_stok" value="<?= $stok_celana['jumlah_stok'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 text-right">
                                    <a href="<?= url_to('stok_celana') ?>" type="button"
                                        class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary" id="btn_submit">Update Stock of
                                        Pants</button>
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
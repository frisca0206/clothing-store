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
                            <form action="<?= url_to('sepatu-update')?>" method="POST">
                                <?= csrf_field() ?>
                                <input type="hidden" name="sepatu_id" value="<?= $sepatu['id'] ?>">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="nama_sepatu"> Shoe Name </label>
                                            <input type="text" class="form-control" id="nama_sepatu" name="nama_sepatu"
                                                value="<?= $sepatu['nama_sepatu'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label> Shoe Size </label>
                                            <select id="ukuran_sepatu" name="ukuran_sepatu" class="form-control">
                                                <option value=""></option>
                                                <?php foreach ($sizes as $key => $size) : ?>
                                                <option value="<?= $size['id']; ?>"
                                                    <?php if($sepatu['ukuran_sepatu_id'] == $size['id']) echo "selected"; ?>>
                                                    <?= $size['ukuran_sepatu']; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label> Brand </label>
                                            <select id="merek" name="merek" class="form-control">
                                                <option value=""></option>
                                                <?php foreach ($mereks as $key => $merek) : ?>
                                                <option value="<?= $merek['id']; ?>"
                                                    <?php if($sepatu['merek_id'] == $merek['id']) echo "selected"; ?>>
                                                    <?= $merek['merek']; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="harga">Price</label>
                                            <input type="number" class="form-control" id="harga" name="harga"
                                                value="<?= $sepatu['harga'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 text-right">
                                    <a href="<?= url_to('sepatu') ?>" type="button" class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary" id="btn_submit">Update Shoe</button>
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
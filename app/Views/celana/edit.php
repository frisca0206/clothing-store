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
                            <form action="<?= url_to('celana-update')?>" method="POST">
                                <?= csrf_field() ?>
                                <input type="hidden" name="celana_id" value="<?= $celana['id'] ?>">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="nama_pembeli">Nama Pembeli</label>
                                            <input type="text" class="form-control" id="nama_pembeli"
                                                name="nama_pembeli" value="<?= $celana['nama_pembeli'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="bhn_celana">Bahan Celana</label>
                                            <select id="bhn_celana" class="form-control" name="bhn_celana"
                                                class="bhn_celana">
                                                <option value=""></option>
                                                <?php foreach ($bahans_celana as $key => $bhn_celana) : ?>
                                                <option value="<?php echo $bhn_celana['id']; ?>"
                                                    <?php if($celana['bhn_celana_id'] == $bhn_celana['id']) echo "selected"; ?>>
                                                    <?php echo $bhn_celana['bhn_celana']; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="merek">Merek</label>
                                            <select id="merek" class="form-control" name="merek" class="merek">
                                                <option value=""></option>
                                                <?php foreach ($mereks as $key => $merek) : ?>
                                                <option value="<?php echo $merek['id']; ?>"
                                                    <?php if($celana['merek_id'] == $merek['id']) echo "selected"; ?>>
                                                    <?php echo $merek['merek']; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="harga">Harga</label>
                                            <input type="text" class="form-control" id="harga" name="harga"
                                                value="<?= $celana['harga'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 text-right">
                                    <a href="<?= url_to('celana') ?>" type="button" class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary" id="btn_submit">Update Celana</button>
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
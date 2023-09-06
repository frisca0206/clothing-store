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
                            <form action="<?= url_to('baju-update')?>" method="POST">
                                <?= csrf_field() ?>
                                <input type="hidden" name="baju_id" value="<?= $baju['id'] ?>">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="nama_pembeli">Nama Pembeli</label>
                                            <input type="text" class="form-control" id="nama_pembeli"
                                                name="nama_pembeli" value="<?= $baju['nama_pembeli'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="bhn_baju">Bahan Baju</label>
                                            <select id="bhn_baju" class="form-control" name="bhn_baju" class="bhn_baju">
                                                <option value=""></option>
                                                <?php foreach ($bahans_baju as $key => $bhn_baju) : ?>
                                                <option value="<?php echo $bhn_baju['id']; ?>"
                                                    <?php if($baju['bhn_baju_id'] == $bhn_baju['id']) echo "selected"; ?>>
                                                    <?php echo $bhn_baju['bhn_baju']; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="merek">Merek</label>
                                            <select id="merek" class="form-control" name="merek" class="merek">
                                                <option value=""></option>
                                                <?php foreach ($mereks as $key => $merek) : ?>
                                                <option value="<?php echo $merek['id']; ?>"
                                                    <?php if($baju['merek_id'] == $merek['id']) echo "selected"; ?>>
                                                    <?php echo $merek['merek']; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="harga">Harga</label>
                                            <input type="text" class="form-control" id="harga" name="harga"
                                                value="<?= $baju['harga'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 text-right">
                                    <a href="<?= url_to('baju') ?>" type="button" class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary" id="btn_submit">Update Baju</button>
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
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
                            <form action="<?= url_to('pnjln_sepatu-store')?>" method="POST">
                                <?= csrf_field() ?>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="nama_sepatu">Shoes Name</label>
                                            <select id="nama_sepatu" name="nama_sepatu" class="form-control">
                                                <option value=""></option>
                                                <?php foreach ($shoes as $key => $shoe) : ?>
                                                <option value="<?php echo $shoe['id']; ?>"
                                                    data-harga-sepatu="<?= $shoe['harga'];?>">
                                                    <?php echo $shoe['nama_sepatu']; ?>
                                                </option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal">Date</label>
                                            <input type="date" class="form-control" id="tanggal" name="tanggal"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_pembeli">Buyer's Name</label>
                                            <input type="text" class="form-control" id="nama_pembeli"
                                                name="nama_pembeli" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="jumlah_item">Number Of Items</label>
                                            <input type="number" class="form-control" id="jumlah_item"
                                                name="jumlah_item" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="ttl_harga">Total Price</label>
                                            <input type="text" class="form-control" id="ttl_harga" name="ttl_harga"
                                                required readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="ttl_dibayarkan">Total Paid</label>
                                            <input type="text" class="form-control" id="ttl_dibayarkan"
                                                name="ttl_dibayarkan" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="ttl_kembalian">Total Return</label>
                                            <input type="text" class="form-control" id="ttl_kembalian"
                                                name="ttl_kembalian" required readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 text-right">
                                    <a href="<?= url_to('pnjln_sepatu') ?>" type="button"
                                        class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary" id="btn_submit">Add Shoes
                                        Sales</button>
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

<?= $this->Section('page_script'); ?>

<script type="text/javascript">
let total_harga = 0;

$('#jumlah_item').on('input', function() {
    let jumlah_item = this.value;
    let harga_sepatu = $('#nama_sepatu option:selected').attr('data-harga-sepatu');
    if (harga_sepatu) {
        total_harga = harga_sepatu * jumlah_item;
    } else {
        total_harga = 0;
    }
    $('#ttl_harga').val(total_harga);
});

$('#ttl_dibayarkan').on('input', function() {
    let total_dibayarkan = this.value;
    total_kembalian = total_dibayarkan - total_harga;
    $('#ttl_kembalian').val(total_kembalian);
});
</script>

<?= $this->endSection('page_script'); ?>
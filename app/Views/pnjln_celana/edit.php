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
                            <form action="<?= url_to('pnjln_celana-update')?>" method="POST">
                                <?= csrf_field() ?>
                                <input type="hidden" name="pnjln_celana_id" value="<?= $pnjln_celana['id'] ?>">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Pants Name</label>
                                            <select id="nama_celana" name="nama_celana" class="form-control">
                                                <option value=""></option>
                                                <?php foreach ($trousers as $key => $celana) : ?>
                                                <option value="<?= $celana['id']; ?>"
                                                    data-harga-celana="<?= $celana['harga'];?>"
                                                    <?php if($pnjln_celana['celana_id'] == $celana['id']) echo "selected"; ?>>
                                                    <?= $celana['nama_celana']; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal">Date</label>
                                            <input type="date" class="form-control" id="tanggal" name="tanggal"
                                                value="<?= $pnjln_celana['tanggal'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_pembeli">Buyer's Name</label>
                                            <input type="text" class="form-control" id="nama_pembeli"
                                                name="nama_pembeli" value="<?= $pnjln_celana['nama_pembeli'] ?>"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="jumlah_item">Number of Items</label>
                                            <input type="number" class="form-control" id="jumlah_item"
                                                name="jumlah_item" value="<?= $pnjln_celana['jumlah_item'] ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="ttl_harga">Total Price</label>
                                            <input type="text" class="form-control" id="ttl_harga" name="ttl_harga"
                                                value="<?= $pnjln_celana['ttl_harga'] ?>" required readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="ttl_dibayarkan">Total Paid</label>
                                            <input type="text" class="form-control" id="ttl_dibayarkan"
                                                name="ttl_dibayarkan" value="<?= $pnjln_celana['ttl_dibayarkan'] ?>"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="ttl_kembalian">Total Return</label>
                                            <input type="text" class="form-control" id="ttl_kembalian"
                                                name="ttl_kembalian" value="<?= $pnjln_celana['ttl_kembalian'] ?>"
                                                required readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 text-right">
                                    <a href="<?= url_to('pnjln_celana') ?>" type="button"
                                        class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary" id="btn_submit">Update Pants
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
let total_harga = "<?= $pnjln_celana['ttl_harga'] ?>";

$('#jumlah_item').on('input', function() {
    let jumlah_item = this.value;
    let harga_celana = $('#nama_celana option:selected').attr('data-harga-celana');
    if (harga_celana) {
        total_harga = harga_celana * jumlah_item;
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
<?= $this->extend('templates/dashboard/index'); ?>
<?= $this->section('content'); ?>


<a href="/makam" class="btn btn-primary mb-3">Kembali</a>

<div class="card mb-5">
    <h5 class="card-header">Form Tambah Karyawan</h5>
    <div class="card-body">
        <form class="row g-3" method="POST" action="/store-data-karyawan">
            <?= csrf_field() ?>
            <div class="col-12">
                <label for="nama" class="form-label">Nama Jenasah</label>
                <input required autocomplete="off" autofocus type="text" name="nama" value="<?= old('nama'); ?>" class="form-control <?= ($validasi->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama">
                <div class="invalid-feedback text-danger">
                    <?= $validasi->getError('nama'); ?>
                </div>
            </div>
            <div class="col-12">
                <label for="jk" class="form-label">Jenis Kelamin</label>
                <select required name="jk" id="jk" class="form-select">
                    <option selected>Choose one...</option>
                    <option id="jk" value="L">Laki-laki</option>
                    <option id="jk" value="p">Perempuan</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="tgl_lhr" class="form-label">Tempat, Tanggal Lahir</label>
                <input autocomplete="off" value="<?= old('tgl_lhr'); ?>" type="text" name="tgl_lhr" required class="form-control <?= ($validasi->hasError('tgl_lhr')) ? 'is-invalid' : ''; ?>" id="tgl_lhr">
                <div class="invalid-feedback text-danger">
                    <?= $validasi->getError('tgl_lhr'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <label for="tgl_wafat" class="form-label">Tempat, Tanggal Wafat</label>
                <input autocomplete="off" value="<?= old('tgl_wafat'); ?>" type="text" class="form-control <?= ($validasi->hasError('tgl_wafat')) ? 'is-invalid' : ''; ?>" name="tgl_wafat" required id="tgl_wafat">
                <div class="invalid-feedback text-danger">
                    <?= $validasi->getError('tgl_wafat'); ?>
                </div>
            </div>

            <div class="col-12">
                <button type="submit" class="btn text-white" style="background-color: royalblue;">Save</button>
            </div>
        </form>
    </div>
</div>

<script src="<?= base_url(); ?>/assets/datepicker/js/bootstrap-datepicker.js"></script>
<script>
    $('#tgl_lhr').datepicker({
        format: 'yyyy-mm-dd',
    });
    $('#tgl_wafat').datepicker({
        format: 'yyyy-mm-dd',
    });
</script>

<?= $this->endSection(); ?>
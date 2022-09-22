<?= $this->extend('templates/dashboard/index'); ?>
<?= $this->section('content'); ?>


<a href="tambah-makam" class="btn btn-primary mb-3">Tambah Makam</a>
<div class="card p-3">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tanggal Lahir</th>
                    <!-- <th scope="col">Action</th> -->
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($makam as $a) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $a->nama; ?></td>
                        <td><?= $a->jk; ?></td>
                        <td><?= $a->tgl_lhr; ?></td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>
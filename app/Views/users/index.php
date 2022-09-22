<?= $this->extend('templates/dashboard/index'); ?>
<?= $this->section('content'); ?>


<!-- <a href="<?= url_to('register') ?>" class="btn btn-primary mb-3">Tambah User</a> -->
<div class="card p-3">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <!-- <th scope="col">Action</th> -->
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($datausers as $a) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $a->username; ?></td>
                        <td><?= $a->email; ?></td>
                        <td><?= $a->name; ?></td>
                        <td>

                            <!-- <a href="/editUser/<?= $a->userId; ?>" class="btn btn-warning">Edit</a> -->
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>
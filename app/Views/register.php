<?= $this->extend('templates/home/tmp_home'); ?>
<?= $this->section('container'); ?>
<div class=" d-flex justify-content-center">
    <div class="mt-5 col-sm-4">
        <?php if (session()->get('success')) : ?>
            <div class="alert alert-success alert-dismissible">
                <h5><i class="icon fas fa-check"></i> Success!</h5>
                <?= session()->get('success'); ?>
            </div>
        <?php endif; ?>
        <div class="card p-5">
            <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success alert-dismissible">
                    <h5><i class="icon fas fa-check"></i> Success!</h5>
                    <?= session('success'); ?>
                </div>
            <?php endif; ?>
            <h3 class="text-center">Register</h3>
            <hr>
            <form class="row g-3" method="POST" action="#">
                <?= csrf_field() ?>
                <div class="col-md-12">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input required autofocus type="text" name="name" value="<?= old('name'); ?>" class="form-control" id="name">

                </div>
                <div class="col-md-12">
                    <label for="username" class="form-label">Username</label>
                    <input required autofocus type="text" name="username" value="<?= old('username'); ?>" class="form-control" id="username">

                </div>
                <div class="col-md-12 ">
                    <label for="password" class="form-label">Password</label>
                    <input required autofocus type="password" name="password" class="form-control" id="password">

                </div>
                <div class="col-md-12 ">
                    <label for="pass_confirm">Konfirmasi Password</label>
                    <input required autofocus type="password" name="pass_confirm" class="form-control " id="pass_confirm">

                </div>
                <div class="col-12 mt-2">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
            <hr>
            <p><a href="/login">Sudah punya akun? Login sekarang</a></p>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>
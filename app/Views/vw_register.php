<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>


<header class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="h1 text-light">Register Form</h1>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-md-6">

            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <h4 class="text-light">Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>
            <form method="post" action="<?= base_url(); ?>/register/process">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="username" class="form-label text-light">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label text-light">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="password_conf" class="form-label text-light">Confirm Password</label>
                    <input type="password" class="form-control" id="password_conf" name="password_conf">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label text-light">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection() ?>
<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>


<div class="container text-center">
    <div class="row justify-content-start">
        <div class="col">
            <main class="form-signin">
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <?php echo session()->getFlashdata('error'); ?>
                    </div>
                <?php endif; ?>
                <form method="post" action="<?= base_url(); ?>/login/process">
                    <?= csrf_field(); ?>
                    <h1 class="h3 mb-5 fw-normal text-light" style="width: 50%; margin:auto; padding-top:12%;">Login</h1>
                    <input type="text" name="username" id="username" placeholder="Username" class="form-control mb-4" style="width: 50%; margin:auto;" required autofocus>
                    <input type="password" name="password" id="password" placeholder="Password" class="form-control  mb-5" style="width: 50%; margin:auto;" required>
                    <button type="submit" class="btn btn-lg btn-primary mb-6" style="width: 50%; margin:auto;">Login</button>

                </form>
            </main>
        </div>
    </div>
</div>


<?= $this->endSection() ?>
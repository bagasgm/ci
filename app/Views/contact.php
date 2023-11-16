<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<header class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="h1 text-light">Contact us</h2>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-md-6">

            <form action="" class="form">

                <div class="form-group">
                    <label for="email" class="text-light">Email</label>
                    <input type="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email" class="text-light">Message</label>
                    <textarea name="message" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>

                <div class="form-group">
                    <br>
                    <input type="submit" value="Kirim" class="btn btn-primary w-100">
                </div>

            </form>

        </div>
    </div>
</div>

<?= $this->endSection() ?>
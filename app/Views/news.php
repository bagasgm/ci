<?= $this->extend('layout/post_layout') ?>

<?= $this->section('content') ?>

<!-- <header class="jumbotron jumbotron-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="h1">Macam - Macam Buku</h2>
            </div>
        </div>
    </div>
</header> -->

<div class="container">
    <?php foreach ($newses as $news) : ?>
        <div class="row">
            <div class="col-md-12 mb-2 card m-2">
                <div class="card-body">
                    <h5 class="h5"><a style="text-decoration:none ;" href="/news/<?= $news['slug'] ?>"><?= $news['title'] ?></a></h5>
                    <p><?= substr($news['content'], 0, 120) ?></p>
                </div>
            </div>

        </div>

    <?php endforeach ?>
</div>

<?= $this->endSection() ?>
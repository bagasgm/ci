<?= $this->extend('layout/post_layout') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-12 mb-2 card m-2">
        <div class="card-body">
            <h2 class="h2"><?= $news['title'] ?></h2>
            <div class="mb-5">
                <span><?= $news['created_at'] ?></span>
            </div>
            <div><?= $news['content'] ?></div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bagas Bookstore</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body class="bg-secondary" style="background-image: url(https://s3.amazonaws.com/impressivewebs/3923/space.jpg);">

    <?= $this->include('layout/navbar') ?>
    <?= $this->include('layout/header') ?>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?= $this->renderSection('content') ?>
            </div>
            <div class="col-md-4">
                <?= $this->include('layout/sidebar') ?>
            </div>
        </div>
    </div>

    <?= $this->include('layout/footer') ?>

    <!-- Jquery dan Bootsrap JS -->
    <script src="<?= base_url('js/jquery-3.7.0.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>
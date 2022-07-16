<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="<?= base_url(); ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <title> <?= $title; ?></title>
</head>

<body>
    <div class="container">
        <?= $this->renderSection('container'); ?>
    </div>

    <script src="<?= base_url(); ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
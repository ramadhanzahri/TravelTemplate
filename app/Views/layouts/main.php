<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Travel Booking') ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>
    <?= $this->include('partials/header') ?>
    <?= $this->include('partials/sidebar') ?>

    <main class="main-content">
        <?= $this->renderSection('content') ?>
    </main>

    <?= $this->include('partials/bottom_nav') ?>

    <script src="<?= base_url('assets/js/app.js') ?>"></script>
</body>

</html>
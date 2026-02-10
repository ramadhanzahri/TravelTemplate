<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="page-header">
    <div class="container">
        <h1>Favourite</h1>
        <p>Destinasi favorit Anda</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <?php if (empty($favourites)): ?>
            <div class="empty-state">
                <p>Belum ada destinasi favorit</p>
                <a href="<?= base_url('explore') ?>" class="btn btn-primary">Jelajahi Destinasi</a>
            </div>
        <?php else: ?>
            <div class="grid">
                <?php foreach ($favourites as $destination): ?>
                    <?= view('partials/destination_card', ['destination' => $destination]) ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?= $this->endSection() ?>
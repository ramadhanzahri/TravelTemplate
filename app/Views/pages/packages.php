<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="page-header">
    <div class="container">
        <h1>Paket Wisata</h1>
        <p>Pilih tour terbaik untuk liburan Anda</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="package-grid">
            <?php foreach ($packages as $package): ?>
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title"><?= esc($package['name']) ?></h3>
                        <p class="card-location">📍 <?= esc($package[['distination']]) ?></p>
                        <p class="package-duration">🕐 <?= esc($package['duration']) ?></p>
                        <div class="card-footer">
                            <div class="card-price">
                                <span class="price-value">Rp <?= number_format($package['price'], 0, ',', '.') ?></span>
                                <span class="price-label">/orang</span>
                            </div>
                            <div class="card-rating">
                                <span>⭐</span>
                                <span><?= $package['rating'] ?></span>
                            </div>
                        </div>
                        <a href="<?= base_url('package/' . $package['id']) ?>" class="btn btn-primary btn-block">Lihat Detail</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
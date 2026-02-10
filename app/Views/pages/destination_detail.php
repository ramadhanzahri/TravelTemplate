<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="detail-hero">
    <img src="<?= base_url('assets/img/' . $destination['image']) ?>" alt="<?= esc($destination['name']) ?>" class="detail-image">
</section>

<section class="section">
    <div class="container">
        <div class="detail-header">
            <div>
                <h1><?= esc($destination['name']) ?></h1>
                <p class="location">📍 <?= esc($destination['location']) ?></p>
            </div>
            <div class="rating-large">
                <span>⭐</span>
                <span><?= $destination['rating'] ?></span>
            </div>
        </div>

        <div class="detail-content">
            <h3>Tentang Destinasi</h3>
            <p><?= esc($destination['description']) ?></p>

            <div class="price-info">
                <span class="price-label">Harga Mulai Dari</span>
                <span class="price-large">Rp <?= number_format($destination['price'], 0, ',', '.') ?></span>
            </div>
        </div>

        <h3>Paket Tour Terkait</h3>
        <div class="package-list">
            <?php foreach ($relatedPackages as $package): ?>
                <div class="package-item">
                    <div>
                        <h4><?= esc($package['name']) ?></h4>
                        <p><?= esc($package['duration']) ?></p>
                    </div>
                    <div>
                        <div class="price-value">Rp <?= number_format($package['price'], 0, ',', '.') ?></div>
                        <a href="<?= base_url('package/' . $package['id']) ?>" class="btn btn-sm btn-primary">Detail</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
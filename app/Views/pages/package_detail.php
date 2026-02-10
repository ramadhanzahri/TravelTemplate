<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="section">
    <div class="container">
        <h1><?= esc($package['name']) ?></h1>
        <p class="location">📍 <?= esc($package['destination']) ?> . 🕐 <?= esc($package['duration']) ?></p>
        <div class="package-detail-content">
            <div class="detail-section">
                <h3>Deskripsi Paket</h3>
                <p><?= esc($package['description']) ?></p>
            </div>

            <div class="detail-section">
                <h3>Itinerary</h3>
                <ul class="itinerary-section">
                    <?php foreach ($package['itinerary'] as $day): ?>
                        <li><?= esc($day) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="detail-section">
                <h3>Sudah Termasuk</h3>
                <div class="includes-list">
                    <?php foreach ($package['includes'] as $include): ?>
                        <span class="chip">✓ <?= esc($include) ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="booking-footer">
            <div>
                <span class="price-label">Total Harga</span>
                <span class="price-large">Rp <?= number_format($package['price'], 0, ',', '.') ?></span>
                <span class="price-label">/orang</span>
            </div>
            <a href="<?= base_url('booking/' . $package['id']) ?>" class="btn btn-primary btn-lg">Book Now</a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
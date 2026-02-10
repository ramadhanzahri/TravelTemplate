<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="page-header">
    <div class="container">
        <h1>My Booking</h1>
        <p>Kelola semua pesanan Anda</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <?php if (empty($bookings)): ?>
            <div class="empty-state">
                <p>Belum ada booking</p>
                <a href="<?= base_url('explore') ?>" class="btn btn-primary">Jelajahi Destinasi</a>
            </div>
        <?php else: ?>
            <div class="booking-list">
                <?php foreach ($bookings as $booking): ?>
                    <div class="booking-card">
                        <div class="booking-header">
                            <h3><?= esc($booking['package']) ?></h3>
                            <span class="badge <?= strtolower($booking['status']) ?>"><?= esc($booking['status']) ?></span>
                        </div>
                        <div class="booking-info">
                            <p><?= date('d M Y', strtotime($booking['date'])) ?></p>
                            <p class="price-value">Rp <?= number_format($booking['total'], 0, ',', '.') ?></p>
                        </div>
                        <a href="<?= base_url('booking-detail/' . $booking['id']) ?>" class="btn btn-outline btn-sm">Lihat Detail</a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?= $this->endSection() ?>
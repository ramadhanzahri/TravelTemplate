<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="section">
    <div class="container">
        <h1>E-Ticket</h1>
        <div class="booking-code">
            <span>Kode Booking</span>
            <h2><?= esc($booking['bookingCode']) ?></h2>
        </div>

        <div class="ticket-content">
            <div class="qr-placeholder">
                <div class="qr-box">QR CODE</div>
                <p>Tunjukkan kode ini saat check-in</p>
            </div>

            <div class="ticket-details">
                <h3>Detail Pesanan</h3>
                <div class="detail-row">
                    <span>Paket</span>
                    <span><?= esc($booking['package']) ?></span>
                </div>
                <div class="detail-row">
                    <span>Tanggal</span>
                    <span><?= date('d M Y', strtotime($booking['date'])) ?></span>
                </div>
                <div class="detail-row">
                    <span>Jumlah Orang</span>
                    <span><?= $booking['guests'] ?> orang</span>
                </div>
                <div class="detail-row">
                    <span>Status</span>
                    <span class="badge <?= strtolower($booking['status']) ?>"><?= esc($booking['status']) ?></span>
                </div>
                <div class="detail-row">
                    <span>Total</span>
                    <span class="price-large">Rp <?= number_format($booking['total'], 0, ',', '.') ?></span>
                </div>
            </div>

            <div class="ticket-details">
                <h3>Data Pemesan</h3>
                <div class="detail-row">
                    <span>Nama</span>
                    <span><?= esc($booking['customerName']) ?></span>
                </div>
                <div class="detail-row">
                    <span>Email</span>
                    <span><?= esc($booking['customerEmail']) ?></span>
                </div>
                <div class="detail-row">
                    <span>Telepon</span>
                    <span><?= esc($booking['suctomerPhone']) ?></span>
                </div>
            </div>
            <button class="btn btn-outline btn-block">Download E-Ticket</button>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
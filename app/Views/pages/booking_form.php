<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="section">
    <div class="container">
        <h1>Form Booking</h1>
        <p class="subtitle"><?= esc($package['name']) ?></p>

        <form class="form-booking">
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" class="form-control" placeholder="Masukkan nama lengkap" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" placeholder="email@example.com" required>
            </div>

            <div class="form-group">
                <label for="phone">No. Telepon</label>
                <input type="tel" id="phone" class="form-control" placeholder="08xxxxxxxxxx" required>
            </div>

            <div class="form-group">
                <label for="date">Tanggal Keberangkatan</label>
                <input type="date" id="date" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="guests">Jumlah Peserta</label>
                <input type="number" id="guests" class="form-control" min="1" value="1" required>
            </div>

            <div class="form-group">
                <label for="notes">Catatan Tambahan (Opsional)</label>
                <textarea id="notes" class="form-control" rows="3" placeholder="Permintaan khusus atau catatan"></textarea>
            </div>

            <div class="price-summary">
                <div class="summary-row">
                    <span>Harga per orang</span>
                    <span>Rp <?= number_format($package['price'], 0, ',', '.') ?></span>
                </div>
                <div class="summary-row total">
                    <span>Total</span>
                    <span class="price-large">Rp <?= number_format($package['price'], 0, ',', '.') ?></span>
                </div>
            </div>

            <a href="<?= base_url('checkout') ?>" class="btn btn-primary btn-block btn-lg">Lanjut ke Pembayaran</a>
        </form>
    </div>
</section>

<?= $this->endSection() ?>
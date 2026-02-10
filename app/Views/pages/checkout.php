<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="section">
    <div class="container">
        <h1>Checkout</h1>

        <div class="checkout-content">
            <div class="order-summary">
                <h3>Ringkasan Pesanan</h3>
                <div class="summary-item">
                    <span>Paket</span>
                    <span><?= esc($booking['package']) ?></span>
                </div>
                <div class="summary-item">
                    <span>Tanggal</span>
                    <span><?= date('d M Y', strtotime($booking['date'])) ?></span>
                </div>
                <div class="summary-item">
                    <span>Jumlah Orang</span>
                    <span><?= $booking['guests'] ?> orang</span>
                </div>
                <div class="summary-item total">
                    <span>Total Pembayaran</span>
                    <span class="price-large">Rp <?= number_format($booking['total'], 0, ',', '.') ?></span>
                </div>
            </div>

            <div class="payment-methods">
                <h3>Pilih Metode Pembayaran</h3>
                <div class="payment-list">
                    <label class="payment-item">
                        <input type="radio" name="payment" value="bank" checked>
                        <span>Transfer Bank</span>
                    </label>
                    <label class="payment-item">
                        <input type="radio" name="payment" value="ewallet">
                        <span>E-Wallet (GoPay, OVO, Dana)</span>
                    </label>
                    <label class="payment-item">
                        <input type="radio" name="payment" value="credit">
                        <span>Kartu Kredit</span>
                    </label>
                </div>
            </div>

            <button class="btn btn-primary btn-block btn-lg">Bayar Sekarang</button>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
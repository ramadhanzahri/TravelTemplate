<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="hero">
    <img src="<?= base_url('assets/img/hero.svg') ?>" alt="Travel Hero" class="hero-image">
    <div class="hero-content">
        <h1>Jelajahi Indonesia Bersama Kami</h1>
        <p>Temukan destinasi impian dan buat kenangan tak terlupakan</p>
    </div>
</section>

<section class="search-section">
    <div class="container">
        <div class="search-box">
            <input type="text" placeholder="Cari destinasi atau paket wisata..." class="search-input">
            <button class="btn-seaarch">Cari</button>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-header">
            <h2>Destinasi Populer</h2>
            <a href="<?= base_url('explore') ?>" class="link-more">Lihat Semua</a>
        </div>
        <div class="grid">
            <?php foreach ($destinations as $destination): ?>
                <?= view('partials/destination_card', ['destination' => $destination]) ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section section-light">
    <div class="container">
        <h2 class="text-center">Mengapa Pilih Kami?</h2>
        <div class="features">
            <div class="features-item">
                <div class="features-icon">✓</div>
                <h3>Harga Terbaik</h3>
                <p>Dapatkan harga kompetitif untuk semua paket tour</p>
            </div>
            <div class="features-item">
                <div class="features-icon">✓</div>
                <h3>Destinasi Lengkap</h3>
                <p>Ratusan pilihan destinasi di seluruh Indonesia</p>
            </div>
            <div class="features-item">
                <div class="features-icon">✓</div>
                <h3>Booking Mudah</h3>
                <p>Proses booking cepat dan pembayaran aman</p>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
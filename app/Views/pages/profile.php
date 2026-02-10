<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="page-header">
    <div class="container">
        <h1>My Profile</h1>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="profile-card">
            <div class="profile-avatar">
                <div class="avatar-circle"><?= strtoupper(substr($user['name'], 0, 1)) ?></div>
            </div>
            <h2><?= esc($user['name']) ?></h2>
            <p class="text-muted">Member sejak <?= date('d M Y', strtotime($user['memberSince'])) ?></p>
        </div>

        <div class="profile-info">
            <h3>Informasi Akun</h3>
            <div class="info-list">
                <div class="info-item">
                    <span class="info-label">Email</span>
                    <span class="info-value"><?= esc($user['email']) ?></span>
                </div>
                <div class="info-item">
                    <span class="info-label">Telepon</span>
                    <span class="info-value"><?= esc($user['phone']) ?></span>
                </div>
                <div class="info-item">
                    <span class="info-label">Alamat</span>
                    <span class="info-value"><?= esc($user['address']) ?></span>
                </div>
            </div>
        </div>

        <button class="btn btn-primary btn-block">Edit Profile</button>
        <button class="btn btn-outline btn-block">Logout</button>
    </div>
</section>

<?= $this->endSection() ?>
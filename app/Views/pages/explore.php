<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="page-header">
    <div class="container">
        <h1>Jelajahi Destinasi</h1>
        <p>Temukan tempat wisata terbaik di Indonesia</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="filter-chips">
            <button class="chip active">Semua</button>
            <button class="chip">Pantai</button>
            <button class="chip">Gunung</button>
            <button class="chip">Budaya</button>
            <button class="chip">Adventure</button>
        </div>

        <div>
            <?php foreach ($destinations as $destination): ?>
                <?= view('partials/destination_card', ['destination' => $destination]) ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>
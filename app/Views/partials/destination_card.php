<div class="card">
    <div class="card-image">
        <img src="<?= base_url('assets/img/' . $destination['image']) ?>" alt="<?= esc($destination['name']) ?>">
        <button class="btn-fav" aria-label="Add to favourite">
            <img src="<?= base_url('assets/img/icon-heart.svg') ?>" alt="" width="20" height="20">
        </button>
    </div>
    <div class="card-body">
        <h3 class="card-title"><?= esc($destination['name']) ?></h3>
        <p class="card-location"><?= esc($destination['location']) ?></p>
        <div class="card-footer">
            <div class="card-price">
                <span class="price-label">Mulai dari</span>
                <span class="price-value">Rp <?= number_format($destination['price'], 0, ',', '.') ?></span>
            </div>
            <div class="card-rating">
                <span>⭐</span>
                <span><?= $destination['rating'] ?></span>
            </div>
        </div>
        <a href="<?= base_url('destination/' . $destination['id']) ?>" class="btn btn-primary btn-block">Lihat Detail</a>
    </div>
</div>
<nav class="bottom-nav">
    <a href="<?= base_url('/') ?>" class="nav-item <?= ($activePage ?? '') === 'home' ? 'active' : '' ?>">
        <img src="<?= base_url('assets/img/icon-home.svg') ?>" alt="" width="24" height="24">
        <span>Home</span>
    </a>
    <a href="<?= base_url('explore') ?>" class="nav-item <?= ($activePage ?? '') === 'explore' ? 'active' : '' ?>">
        <img src="<?= base_url('assets/img/icon-explore.svg') ?>" alt="" width="24" height="24">
        <span>Explore</span>
    </a>
    <a href="<?= base_url('profile') ?>" class="nav-item <?= ($activePage ?? '') === 'profile' ? 'active' : '' ?>">
        <img src="<?= base_url('assets/img/icon-profile.svg') ?>" alt="" width="24" height="24">
        <span>Profile</span>
    </a>
</nav>
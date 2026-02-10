<aside class="sidebar" id="sidebar">
    <div class="sidebar-overlay" id="sidebarOverlay"></div>
    <div class="sidebar-content">
        <div class="sidebar-header">
            <h2>Menu</h2>
            <button class="btn-close" id="btn-CloseSidebar" aria-label="Close menu">&times;</button>
        </div>
        <nav class="sidebar-nav">
            <a href="<?= base_url('favourite') ?>" class="sidebar-item <?= ($activePage ?? '') === 'favourite' ? 'active' : '' ?>">
                <img src="<?= base_url('assets/img/icon-heart.svg') ?>" alt="" width="24" height="224">
                <span>Favourite</span>
            </a>
            <a href="<?= base_url('my-bookings') ?>" class="sidebar-item <?= ($activePage ?? '') === 'my-bookings' ? 'active' : '' ?>">
                <img src="<?= base_url('assets/img/icon-booking.svg') ?>" alt="" width="24" height="24">
                <span>My Booking</span>
            </a>
            <a href="<?= base_url('help') ?>" class="sidebar-item <?= ($activePage ?? '') === 'help' ? 'active' : '' ?>">
                <img src="<?= base_url('assets/img/icon-help') ?>" alt="" width="24" height="24">
                <span>Help</span>
            </a>
        </nav>
    </div>
</aside>
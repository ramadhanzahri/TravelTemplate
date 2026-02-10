<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<section class="page-header">
    <div class="container">
        <h1>Help & FAQ</h1>
        <p>Temukan jawaban untuk pertanyaan Anda</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="faq-list">
            <?php foreach ($faqs as $index => $faq): ?>
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(<?= $index ?>)">
                        <?= esc($faq['question']) ?>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer" id="faq-<?= $index ?>">
                        <p><?= esc($faq['answer']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="help-contact">
            <h3>Masih butuh bantuan?</h3>
            <p>Hubungi customer service kami</p>
            <button class="btn btn-primary">Hubungu CS</button>
        </div>
    </div>
</section>

<script>
    function toggleFaq(index) {
        const answer = document.getElementById('faq-${index');
        const icon = answer.previousElementSibling.querySelector('.faq-icon');
        answer.classList.toggle('active');
        icon.textContent = answer.classList.contains('active') ? '-' : '+';
    }
</script>

<?= $this->endSection() ?>
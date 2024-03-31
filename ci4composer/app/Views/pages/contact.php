<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="rows">
        <div class="col">
            <h1>Hubungi Kami</h1>
            <?php foreach ($alamat as $a) : ?>
            <ul>
                <li><?= $a['tipe']; ?></li>
                <li><?= $a['alamat']; ?></li>
                <li><?= $a['kota']; ?></li>
            </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
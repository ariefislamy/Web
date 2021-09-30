<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h1>View Layanan<h/1>
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <img class="img-fluid" alt="image" src="<?= base_url('uploads/'.$layanan->gambar) ?>" />
                </div>
            </div>
        </div>
        <div class="col-6">
            <h1 class="text-primary"><?= $layanan->nama ?></h1>
            <h4>Harga : <?= $layanan->harga ?></h4>
            <h4><?= $layanan->deskripsi ?></h4>
            <h4>Estimasi : <?= $layanan->estimasi ?></h4>
            

        </div>
    </div>
</div>
<?= $this->endSection() ?>
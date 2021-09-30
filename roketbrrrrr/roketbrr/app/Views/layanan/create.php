<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php

$nama = [
    'name' => 'nama',
    'id' => 'nama',
    'value' => null,
    'class' => 'form-control',
];

$harga = [    
    'name' => 'harga',
    'id' => 'harga',
    'value' => null,
    'class' => 'form-control',
    'type' => 'number',
    'min' => 0,
];
$deskripsi = [
    'name' => 'deskripsi',
    'id' => 'deskripsi',
    'value' => null,
    'class' => 'form-control',
];
$estimasi = [
    'name' => 'estimasi',
    'id' => 'estimasi',
    'value' => null,
    'class' => 'form-control',
];
$gambar = [
    'name' => 'gambar',
    'id' => 'gambar',
    'value' => null,
    'class' => 'form-control',
];
$submit = [
    'name' => 'sumbit',
    'id' => 'submit',
    'value' => 'Tambah',
    'class' => 'btn btn-primary',
    'type' => 'submit',
];

?>
<h1>Tambah Layanan </h1>

<?= form_open_multipart('Layanan/create') ?>
    <div class="form-group">
        <?= form_label("Nama", "nama") ?>
        <?= form_input($nama) ?>
    </div>
    
    <div class="form-group">
        <?= form_label("Harga", "harga") ?>
        <?= form_input($harga) ?>
    </div>

    <div class="form-group">
        <?= form_label("Deskripsi", "deskripsi") ?>
        <?= form_input($deskripsi) ?>
    </div>

    <div class="form-group">
        <?= form_label("Estimasi", "estimasi") ?>
        <?= form_input($estimasi) ?>
    </div>

    <div class="form-group">
        <?= form_label("Gambar", "gambar") ?>
        <?= form_upload($gambar) ?>
    </div>

    <div class="text-right">
        <?= form_submit($submit) ?>
    </div>

<?= form_close() ?>
<?= $this->endSection() ?>
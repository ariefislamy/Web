<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php
    $id_layanan = [
        'name' => 'id_layanan',
        'id' => 'id_layanan',
        'value' => $model->id,
        'type' => 'hidden'
    ];
    $id_pembeli = [
        'name' => 'id_pembeli',
        'id' => 'id_pembeli',
        'value' => session()->get('id'),
        'type' => 'hidden'
    ];
    $berat = [
        'name' => 'berat',
        'id' => 'berat',
        'value' => 1,
        'min' => 1,
        'class' => 'form-control',
        'type' => 'number',
    ];
    $total_harga = [
        'name' => 'total_harga',
        'id' => 'total_harga',
        'value' => null,
        'class' =>'form-control',
        'readonly' => true,
    ];
    $alamat = [
        'name' => 'alamat',
        'id' => 'alamat',
        'value' => null,
        'class' =>'form-control',
    ];
    $submit = [
        'name' => 'submit',
        'id' => 'submit',
        'type' => 'submit',
        'value' => 'Checkout',
        'class' =>'btn btn-primary',
    ];
?>
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <img class="img-fluid" src="<?= base_url('uploads/'.$model->gambar) ?>" />
                    <h1 class="text-primary"><?= $model->nama ?></h1>
                    <h4> Harga :  <?= $model->harga ?></h4>
                    <h4> Estimasi : <?= $model->estimasi ?></h4> 
                </div>
            </div>
        </div>
        <div class="col-6">
        <h4>Checkout</h4>
        <div class="form-group">
        <?= form_open('Etalase/beli') ?>
            <?= form_input($id_layanan) ?>
            <?= form_input($id_pembeli) ?>
            <div class="form-group">
                <?= form_label('Berat (Kg)', 'berat') ?>
                <?= form_input($berat) ?>
            </div>
            <div class="form-group">
                <?= form_label('Alamat', 'alamat') ?>
                <?= form_input($alamat) ?>
            </div>
            <div class="form-group">
			<label for="service">Pilih Service</label>
			<select class="form-control" id="service">
                <option value="manual">Manual</option>
                <option value="jemput">Jemput-Kurir</option>
			</select>
		    </div>
            <div class="form-group">
                <?= form_label('Total harga', 'total_harga') ?>
                <?= form_input($total_harga) ?>
            </div>
            <div class="text-right">
                <?= form_submit($submit) ?>
            </div>
        <?= form_close() ?>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('script') ?>
<script>
    $('document').ready(function(){
        var jumlah_pembelian = 1;
        var harga = <?= $model->harga ?>;
        var ongkir = 25000;
        $("#berat").on("change", function(){
			jumlah_pembelian = $("#berat").val();
			var total_harga = (jumlah_pembelian*harga);
			$("#total_harga").val(total_harga);
		});
        $("#service").on('change', function(){
			var total_harga = (jumlah_pembelian*harga)+ongkir;
			$("#total_harga").val(total_harga);
		});
    });

</script>
<?= $this->endSection() ?>
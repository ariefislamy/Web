<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h1>Layanan</h1>
<table class="table">
    <head>
        <th>No</th>
        <th>Barang</th>
        <th>Gambar</th>
        <th>Harga</th>
        <th>Estimasi</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php foreach($layanans as $index=>$layanan): ?>
            <tr>
                <td><?= ($index+1) ?></td>
                <td><?= $layanan->nama ?></td>
                <td>
                    <img class="img-fluid" width="200px" alt="gambar" src="<?= base_url('uploads/'.$layanan->gambar) ?>" />
                </td>
                <td><?= $layanan->harga ?></td>
                <td><?= $layanan->estimasi ?></td>
                <td>
                    <a href="<?= site_url('layanan/view/'.$layanan->id) ?>" class="btn btn-primary">View</a>
                    <a href="<?= site_url('layanan/update/'.$layanan->id) ?>" class="btn btn-success">Update</a>
                    <a href="<?= site_url('layanan/delete/'.$layanan->id) ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?= $this->endSection() ?>
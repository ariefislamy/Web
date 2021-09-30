<html>
    <head>
        <style>
            table{
                border-collapse: collapse;
                width: 100%;
            }
            td, th {
                border : 1px solid #000000;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div style="font-size:64px; color:'#ddddddd' "><i>Invoice</i></div>
        <p>
            <i>Pt. Laundry Roket Meluncur</i><br>
            Lampung, Indonesia<br>
            0721-432-876
        </p>
        <hr>
        <hr>
        <p></P>
        <p>
            Pembeli : <?= $pembeli->username ?><br>
            Alamat : <?= $transaksi->alamat ?><br>
            Transaksi No : <?= $transaksi->no ?><br>
            Tanggal : <?= date('Y-m-d', strtotime($transaksi->created_date)) ?>
        </p>
        <table cellpadding="6" >
            <tr>
                <th><strong>Layanan</strong></th>
                <th><strong>Harga</strong></th>
                <th><strong>Berat</strong></th>
                <th><strong>Total Harga</strong></th>
            </tr>
            <tr>
                <td><?= $layanan->nama ?></td>
                <td><?= "Rp ".number_format($layanan->harga,2,',','.') ?></td>
                <td><?= $transaksi->berat ?></td>
                <td><?= "Rp ".number_format($transaksi->total_harga,2,',','.') ?></td>
            </tr>
        </table>
    </body>
</html>
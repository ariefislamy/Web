<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                    <br>
                        <ol class="breadcrumb">
                        <form action="<?php echo base_url('Export/bulanan'); ?>" method="post">
                        <div class="form-group row">
                            <div class="col-2">
                            <input name="tahun" value="<?php echo $tahun; ?>" readonly class="form-control" type="hidden"  id="example-text-input">
                            <input name="bulan" value="<?php echo $bulan; ?>" readonly class="form-control" type="hidden"  id="example-text-input">
                            <input name="kat" value="<?php echo $kat; ?>" readonly class="form-control" type="hidden"  id="example-text-input">
                            </div>
                        </div>
                        </ol>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <button class="btn pull-right hidden-sm-down btn-success">Excel</button>
                    </div>
                    </form>
                </div>
<div class="col-12">
        <div class="card">
            <div class="card-block">
            <h3 class="card-title text-center" >Laporan Kedatangan Dan Keberangkatan Kapal<br><?php echo $kat; ?><br>Bulan : <?php echo $bulan; ?> <?php echo $tahun; ?></h3>
            <br>
            <div class="table-responsive">
<table border="1" >
<tr >
<th rowspan="3" style="text-align:center">No</th>
<th rowspan="3" style="text-align:center">Nama<br>Kapal</th>
<th colspan="2" style="text-align:center" >Bendera</th>
<th colspan="3" style="text-align:center" >Ukuran GT</th>
<th rowspan="3" style="text-align:center" >Agen</th>
<th colspan="3" style="text-align:center" >Antar Pulau</th>
<th colspan="3" style="text-align:center" >Import</th>
<th colspan="5" style="text-align:center" >Pelabuhan Asal Tujuan</th>
</tr>

<tr>
<th rowspan="2" style="text-align:center">RI</th>
<th rowspan="2" style="text-align:center">Asing</th>
<th rowspan="2" style="text-align:center">RI</th>
<th rowspan="2" style="text-align:center">Asing</th>
<th rowspan="2" style="text-align:center">LOA</th>
<th rowspan="2" style="text-align:center">Nama Barang</th>
<th style="text-align:center" >Bongkar</th>
<th style="text-align:center" >Muat</th>
<th rowspan="2" style="text-align:center">Nama Barang</th>
<th style="text-align:center" >Import</th>
<th style="text-align:center" >Export</th>
<th rowspan="2" style="text-align:center">Dari</th>
<th rowspan="2" style="text-align:center">Tgl Tiba</th>
<th rowspan="2" style="text-align:center">Ke</th>
<th rowspan="2" style="text-align:center">Tgl Brangkat</th>
<th rowspan="2" style="text-align:center">Ket</th>
</tr>

<tr>
<th style="text-align:center" >Jumlah</th>
<th style="text-align:center" >Jumlah</th>
<th style="text-align:center" >Jumlah</th>
<th style="text-align:center" >Jumlah</th>
</tr>

<tbody>
<?php $no=1; 
foreach($bulanan as $row){
    ?>
    <?php if( ($row->jumlah_kapal) == '1' ) { 
        ?>
            <tr>
            <td style="text-align:center"><?php echo $no++; ?></td>
            <td><?php echo $row->nama_kapal; ?></td>
            <?php if( ($row->bendera) == 'RI' ) {
                ?>
                <td><?php echo $row->bendera; ?></td>
                <td></td>
            <?php } ?>
            <?php if( ($row->bendera) != 'RI' ) {
                ?>
                <td></td>
                <td><?php echo $row->bendera; ?></td>               
            <?php } ?>
            <?php if( ($row->bendera) == 'RI' ) {
                ?>
                <td><?php echo $row->gt1; ?></td>
                <td></td>
            <?php } ?>
            <?php if( ($row->bendera) != 'RI' ) {
                ?>
                <td></td>
                <td><?php echo $row->gt1; ?></td>               
            <?php } ?>
            <td><?php echo $row->loa1; ?></td>
            <td><?php echo $row->agen; ?></td>
            <?php if( ($row->bendera) == 'RI' ) { 
                ?>
                <td><?php echo $row->nama_barang; ?></td>
                <td><?php echo $row->bongkar; ?></td>
                <td><?php echo $row->muat; ?></td>
                <td>NL</td>
                <td>NL</td>
                <td>NL</td>
            <?php } ?>
            <?php if( ($row->bendera) != 'RI' ) { 
                ?>
                <td>NL</td>
                <td>NL</td>
                <td>NL</td>
                <td><?php echo $row->nama_barang; ?></td>
                <?php if( ($row->bongkar) == '0' ) {
                    ?>
                    <td>NL</td>
                    <?php } ?>
                <?php if( ($row->bongkar) != '0' ) {
                    ?>
                    <td><?php echo $row->bongkar; ?></td>
                    <?php } ?>
                <?php if( ($row->muat) == '0' ) {
                    ?>
                    <td>NL</td>
                    <?php } ?>
                <?php if( ($row->muat) != '0' ) {
                    ?>
                    <td><?php echo $row->muat; ?></td>
                    <?php } ?>
            <?php } ?>
            <td><?php echo $row->asal; ?></td>
            <td><?php echo $row->tanggal_tiba; ?>-<?php echo $row->bulan_tiba; ?>-<?php echo $row->tahun_tiba; ?></td>
            <td><?php echo $row->tujuan; ?></td>
            <td><?php echo $row->tanggal_selesai; ?>-<?php echo $row->bulan_selesai; ?>-<?php echo $row->tahun_selesai; ?></td>
            <td><?php echo $row->keterangan; ?></td>
            </tr>
    <?php } ?>

    <?php if( ($row->jumlah_kapal) != '1' ) { 
        ?>
            <tr>
            <td style="text-align:center"><?php echo $no++; ?></td>
            <td><?php echo $row->nama_kapal; ?></td>
            <?php if( ($row->bendera) == 'RI' ) {
                ?>
                <td><?php echo $row->bendera; ?></td>
                <td></td>
            <?php } ?>
            <?php if( ($row->bendera) != 'RI' ) {
                ?>
                <td></td>
                <td><?php echo $row->bendera; ?></td>               
            <?php } ?>
            <td><?php echo $row->gt1; ?></td>
            <td></td>
            <td><?php echo $row->loa1; ?></td>
            <td><?php echo $row->agen; ?></td>
            <td><?php echo $row->nama_barang; ?></td>
            <td>NL</td>
            <td>NL</td>
            <td>NL</td>
            <td>NL</td>
            <td>NL</td>
            <td><?php echo $row->asal; ?></td>
            <td><?php echo $row->tanggal_tiba; ?>-<?php echo $row->bulan_tiba; ?>-<?php echo $row->tahun_tiba; ?></td>
            <td><?php echo $row->tujuan; ?></td>
            <td><?php echo $row->tanggal_selesai; ?>-<?php echo $row->bulan_selesai; ?>-<?php echo $row->tahun_selesai; ?></td>
            <td><?php echo $row->keterangan; ?></td>
            </tr>

            <tr>
            <td style="text-align:center"><?php echo $no++; ?></td>
            <td><?php echo $row->nama_kapal2; ?></td>
            <?php if( ($row->bendera) == 'RI' ) {
                ?>
                <td><?php echo $row->bendera; ?></td>
                <td></td>
            <?php } ?>
            <?php if( ($row->bendera) != 'RI' ) {
                ?>
                <td></td>
                <td><?php echo $row->bendera; ?></td>               
            <?php } ?>
            <?php if( ($row->bendera) == 'RI' ) {
                ?>
                <td><?php echo $row->gt2; ?></td>
                <td></td>
            <?php } ?>
            <?php if( ($row->bendera) != 'RI' ) {
                ?>
                <td></td>
                <td><?php echo $row->gt2; ?></td>               
            <?php } ?>
            <td><?php echo $row->loa2; ?></td>
            <td><?php echo $row->agen; ?></td>
            <?php if( ($row->bendera) == 'RI' ) { 
                ?>
                <td><?php echo $row->nama_barang; ?></td>
                <?php if( ($row->bongkar) == '0' ) {
                    ?>
                    <td>NL</td>
                    <?php } ?>
                <?php if( ($row->bongkar) != '0' ) {
                    ?>
                    <td><?php echo $row->bongkar; ?></td>
                    <?php } ?>
                <?php if( ($row->muat) == '0' ) {
                    ?>
                    <td>NL</td>
                    <?php } ?>
                <?php if( ($row->muat) != '0' ) {
                    ?>
                    <td><?php echo $row->muat; ?></td>
                    <?php } ?>
                <td>NL</td>
                <td>NL</td>
                <td>NL</td>
            <?php } ?>
            <?php if( ($row->bendera) != 'RI' ) { 
                ?>
                <td>NL</td>
                <td>NL</td>
                <td>NL</td>
                <td><?php echo $row->nama_barang; ?></td>
                <?php if( ($row->bongkar) == '0' ) {
                    ?>
                    <td>NL</td>
                    <?php } ?>
                <?php if( ($row->bongkar) != '0' ) {
                    ?>
                    <td><?php echo $row->bongkar; ?></td>
                    <?php } ?>
                <?php if( ($row->muat) == '0' ) {
                    ?>
                    <td>NL</td>
                    <?php } ?>
                <?php if( ($row->muat) != '0' ) {
                    ?>
                    <td><?php echo $row->muat; ?></td>
                    <?php } ?>
            <?php } ?>
            <td><?php echo $row->asal; ?></td>
            <td><?php echo $row->tanggal_tiba; ?>-<?php echo $row->bulan_tiba; ?>-<?php echo $row->tahun_tiba; ?></td>
            <td><?php echo $row->tujuan; ?></td>
            <td><?php echo $row->tanggal_selesai; ?>-<?php echo $row->bulan_selesai; ?>-<?php echo $row->tahun_selesai; ?></td>
            <td><?php echo $row->keterangan; ?></td>
            </tr>
    <?php } ?>
<?php } ?>
</tbody>
</table>

                </div>
            </div>

        </div>
    </div>



<script src="<?php echo base_url() ?>/assets/plugins/morrisjs/morris.js"></script>
    <script src="<?php echo base_url() ?>/js/morris-data.js"></script>
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url() ?>/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url() ?>/assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url() ?>/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url() ?>/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url() ?>/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url() ?>/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url() ?>/js/custom.min.js"></script>
    <script src="<?php echo base_url() ?>/js/jquery.PrintArea.js" type="text/JavaScript"></script>
    <script>
    $(document).ready(function() {
        $("#print").click(function() {
            var mode = 'iframe'; //popup
            var close = mode == "popup";
            var options = {
                mode: mode,
                popClose: close
            };
            $("div.printableArea").printArea(options);
        });
    });
    </script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="<?php echo base_url() ?>/assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Chart JS -->
    <script src="<?php echo base_url() ?>/assets/plugins/Chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url() ?>/js/dashboard2.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url() ?>/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
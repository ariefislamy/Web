<div class="page-wrapper"> 
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Data Kapal</h4>

                                <hr>


                                    <div class="p-20">
                                    <?php if(($surat['jumlah_kapal']) != 1 ) { ?>
                                        <div class="form-group row">
                                            <h4 class="col-3">Nama Kapal</h4>
                                            <h4>: <?php echo $surat['nama_kapal']; ?> - <?php echo $surat['nama_kapal2']; ?></h4>
                                        </div>
                                        <div class="form-group row">
                                            <h4 class="col-3">Bendera</h4>
                                            <h4>: <?php echo $surat['bendera']; ?></h4>
                                        </div>
                                        <div class="form-group row">
                                            <h4 class="col-3">GT</h4>
                                            <h4>: <?php echo $surat['gt1']; ?> GT <br>: <?php echo $surat['gt2']; ?> GT</h4>
                                        </div>
                                        <div class="form-group row">
                                            <h4 class="col-3">LOA</h4>
                                            <h4>: <?php echo $surat['loa1']; ?> M <br>: <?php echo $surat['loa2']; ?> M</h4>
                                        </div>
                                    <?php } ?>
                                    <?php if(($surat['jumlah_kapal']) == 1 ) { ?>
                                        <div class="form-group row">
                                            <h4 class="col-3">Nama Kapal</h4>
                                            <h4>: <?php echo $surat['nama_kapal']; ?></h4>
                                        </div>
                                        <div class="form-group row">
                                            <h4 class="col-3">Bendera</h4>
                                            <h4>: <?php echo $surat['bendera']; ?></h4>
                                        </div>
                                        <div class="form-group row">
                                            <h4 class="col-3">GT</h4>
                                            <h4>: <?php echo $surat['gt1']; ?> GT</h4>
                                        </div>
                                        <div class="form-group row">
                                            <h4 class="col-3">LOA</h4>
                                            <h4>: <?php echo $surat['loa1']; ?> M</h4>
                                        </div>
                                    <?php } ?>
                                        <div class="form-group row">
                                            <h4 class="col-3">Nama Agen</h4>
                                            <h4>: <?php echo $surat['agen']; ?></h4>
                                        </div>
                                        <div class="form-group row">
                                            <h4 class="col-3">Nama Nahkoda</h4>
                                            <h4>: <?php echo $surat['nama_nahkoda']; ?></h4>
                                        </div>
                                        <div class="form-group row">
                                            <h4 class="col-3">Trayek</h4>
                                            <h4>: <?php echo $surat['trayek']; ?></h4>
                                        </div>
                                        <div class="form-group row">
                                            <h4 class="col-3">ETA / ETD</h4>
                                            <h4>: <?php echo $surat['tanggal_tiba']; ?> <?php echo $surat['bulan_tiba']; ?> <?php echo $surat['tahun_tiba']; ?>
                                            / <?php echo $surat['tanggal_etd']; ?> <?php echo $surat['bulan_etd']; ?> <?php echo $surat['tahun_etd']; ?>
                                            </h4>
                                        </div>
                                        <div class="form-group row">
                                            <h4 class="col-3">Pelabuhan Asal / Tujuan</h4>
                                            <h4>: <?php echo $surat['asal']; ?> / <?php echo $surat['tujuan']; ?></h4>
                                        </div>
                                        <div class="form-group row">
                                            <h4 class="col-3">PBM Yang Ditunjuk</h4>
                                            <h4>: <?php echo $surat['pbm']; ?></h4>
                                        </div>
                                        <div class="form-group row">
                                            <h4 class="col-3">JPT</h4>
                                            <h4>: <?php echo $surat['jpt']; ?></h4>
                                        </div>
                                        <div class="form-group row">
                                            <h4 class="col-3">Dermaga</h4>
                                            <h4>: <?php echo $surat['dermaga']; ?></h4>
                                        </div>
                                        <div class="form-group row">
                                            <h4 class="col-3">Perusahaan Angkutan</h4>
                                            <h4>: <?php echo $surat['perusahaan']; ?></h4>
                                        </div>
                                        <div class="form-group row">
                                            <h4 class="col-3">Jumlah Buruh / Gang</h4>
                                            <h4>: <?php echo $surat['jumlah_buruh']; ?> / <?php echo $surat['jumlah_gang']; ?></h4>
                                        </div>
                                        <div class="form-group row">
                                            <h4 class="col-3">Sistem</h4>
                                            <h4>: <?php echo $surat['sistem']; ?></h4>
                                        </div>
                                        <div class="form-group row">
                                            <h4 class="col-3">Pengirim - Penerima</h4>
                                            <h4>: <?php echo $surat['pengirim']; ?> - <?php echo $surat['penerima']; ?></h4>
                                        </div>
                                        <div class="form-group row">
                                            <h4 class="col-3">Cara Kerja</h4>
                                            <h4>: <?php echo $surat['cara_kerja']; ?></h4>
                                        </div>
                                        <div class="form-group row">
                                            <h4 class="col-3">Mulai Bongkar Muat</h4>
                                            <h4>: <?php echo $surat['tanggal_mulai']; ?> <?php echo $surat['bulan_mulai']; ?> <?php echo $surat['tahun_mulai']; ?></h4>
                                        </div>
                                        <div class="form-group row">
                                            <h4 class="col-3">Selesai Bongkar Muat</h4>
                                            <h4>: <?php echo $surat['tanggal_selesai']; ?> <?php echo $surat['bulan_selesai']; ?> <?php echo $surat['tahun_selesai']; ?></h4>
                                        </div>
                                        <div class="form-group row">
                                            <h4 class="col-3">Keterangan</h4>
                                            <h4>: <?php echo $surat['keterangan']; ?></h4>
                                        </div>
                                        <div class="form-group row">
                                            <h4 class="col-3">IMO</h4>
                                            <h4>: <?php echo $surat['imo']; ?></h4>
                                        </div>
                                        <div class="form-group row">
                                            <h4 class="col-3">Owner</h4>
                                            <h4>: <?php echo $surat['owner']; ?></h4>
                                        </div>
                                        <div class="form-group row">
                                            <h4 class="col-3">Nama Barang</h4>
                                            <h4>: <?php echo $surat['nama_barang']; ?></h4>
                                        </div>
                                    </div>

                <div class="table-responsive m-t-40">
                <table class="table table-bordered">
                    <thead>
                        <th style="text-align:center">Uraian</th>
					    <th style="text-align:center">Bongkar</th>
                        <th style="text-align:center">Muat</th>
                    </thead>

                    <tbody>
                    <tr>
                    <td style="text-align:center"><?php echo $surat['jenis_barang']; ?></td>
                    <td style="text-align:center"><?php echo $surat['bongkar']; ?> Ton/Ekor/Box/Orang</td>
                    <td style="text-align:center"><?php echo $surat['muat']; ?> Ton/Ekor/Box/Orang</td>
                    </tr>
                    </tbody>


                </table>




                                </div>
                            </div>
                        </div>
                </div>
        </div>
</div>


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

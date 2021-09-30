<body>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
                <div class="card-block">
                <div class="row button-group">
                <div class="col-lg-5 col-md-4">
                <h4 class="m-t-30">Tahun</h4>
                <form action="<?php echo base_url('/Data/search'); ?>" method="post">
            <select name="tahun" class="select2" style="width: 20%">
                                    <option value="#">Pilih</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>
                                        <option value="2029">2029</option>
                                        <option value="2030">2030</option>
                                        <option value="2031">2031</option>
                                        <option value="2032">2032</option>
                                        <option value="2033">2033</option>
                                        <option value="2034">2034</option>
                                        <option value="2035">2035</option>
                                        <option value="2036">2036</option>
                                        <option value="2037">2037</option>
                                        <option value="2038">2038</option>
                                        <option value="2039">2039</option>
                                        <option value="2040">2040</option>
                                        <option value="2041">2041</option>
                                        <option value="2042">2042</option>
                                        <option value="2043">2043</option>
                                        <option value="2044">2044</option>
                                        <option value="2045">2045</option>
                                        <option value="2046">2046</option>
                                        <option value="2047">2047</option>
                                        <option value="2048">2048</option>
                                        <option value="2049">2049</option>
                                        <option value="2050">2050</option>
                                </select>       
                                <button class="btn btn-info">Cari</button>     
                                </div>
                                </form>


                    <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped" >
                    <thead>
                        <th >Nama Kapal</th>
                        <th >Bendera</th>
					    <th >Tanggal</th>
					    <th style="text-align:center">Aksi</th>
                    </thead>

                    <tbody>
                        <?php 
                        foreach($surat as $key => $data) { ?>
                        <tr>
                        <?php if(($data['jumlah_kapal']) != 1) { ?>
                            <td><?php echo $data['nama_kapal']; ?> - <?php echo $data['nama_kapal2']; ?></td>
                            <td><?php echo $data['bendera']; ?></td>
                            <td><?php echo $data['tanggal_tiba']; ?> - <?php echo $data['bulan_tiba']; ?> - <?php echo $data['tahun_tiba']; ?></td>
                            <td style="text-align:center"><a href="<?php echo base_url('Input/valid/'.$data['id_surat']); ?>" class="btn btn-info text-white" onclick="return confirm('Apakah Anda yakin ingin memvalidasi data kapal <?php echo $data['nama_kapal']; ?> ini?')">Validasi</a>
                            <a href="<?php echo base_url('Input/edit/'.$data['id_surat']); ?>" class="btn btn-success text-white">Ubah</a>
                            <a href="<?php echo base_url('Input/delete/'.$data['id_surat']); ?>" class="btn btn-danger text-white" onclick="return confirm('Apakah Anda yakin ingin menghapus data kapal <?php echo $data['nama_kapal']; ?> ini?')" >Hapus</a></td>
                        <?php } ?>

                        <?php if(($data['jumlah_kapal']) == 1) { ?>
                            <td><?php echo $data['nama_kapal']; ?></td>
                            <td><?php echo $data['bendera']; ?></td>
                            <td><?php echo $data['tanggal_tiba']; ?> - <?php echo $data['bulan_tiba']; ?> - <?php echo $data['tahun_tiba']; ?></td>
                            <td style="text-align:center"><a href="<?php echo base_url('Input/valid/'.$data['id_surat']); ?>" class="btn btn-info text-white" onclick="return confirm('Apakah Anda yakin ingin memvalidasi data kapal <?php echo $data['nama_kapal']; ?> ini?')">Validasi</a>
                            <a href="<?php echo base_url('Input/edit/'.$data['id_surat']); ?>" class="btn btn-success text-white">Ubah</a>
                            <a href="<?php echo base_url('Input/delete/'.$data['id_surat']); ?>" class="btn btn-danger text-white" onclick="return confirm('Apakah Anda yakin ingin menghapus data kapal <?php echo $data['nama_kapal']; ?> ini?')" >Hapus</a></td>
                        <?php } ?>
                        </tr>
                        <?php } ?>
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
</body>
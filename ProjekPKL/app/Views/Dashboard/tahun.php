<div class="page-wrapper"> 
    <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Data Tahun <?php echo $tahun; ?></h4>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#jan" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down"><strong>Jan</strong></span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#feb" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down"><strong>Feb</strong></span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#mar" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down"><strong>Mar</strong></span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#apr" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down"><strong>Apr</strong></span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#mei" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down"><strong>Mei</strong></span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#jun" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down"><strong>Jun</strong></span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#jul" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down"><strong>Jul</strong></span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#ags" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down"><strong>Ags</strong></span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#sep" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down"><strong>Sep</strong></span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#okt" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down"><strong>Okt</strong></span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#nov" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down"><strong>Nov</strong></span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#des" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down"><strong>Des</strong></span></a> </li>

                                </ul>
                                <div class="tab-content tabcontent-border">
                                    <div class="tab-pane active" id="jan" role="tabpanel">
                                        <div class="p-20">
                                        <table id="myTable" class="table table-bordered table-striped" >
                                            <thead>
                                            <th>No</th>
                                            <th>Nama Kapal</th>
                                            <th>Bendera</th>
					                        <th>Tanggal</th>
                                            <th>File</th>
					                        <th style="text-align:center">Status</th>
                                            </thead>

                                            <tbody>
                                            <?php $no=1; foreach($januari as $row):?>
                                            <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->nama_kapal; ?></td>
                                            <td><?php echo $row->bendera; ?></td>
                                            <td><?php echo $row->tanggal_tiba; ?> - <?php echo $row->bulan_tiba; ?> - <?php echo $row->tahun_tiba; ?></td>
                                            <td><a href="<?php echo base_url('Data/view/'.$row->id_surat); ?>" >Lihat <br> File</a></td>
                                            <?php 
                                            if( ($row->status) == 'valid' ) { ?>
                                            <td>Divalidasi Oleh <p class="text-info"><?php echo $row->validator; ?></p></td>
                                            <?php } ?>
                                            <?php 
                                            if( ($row->status) == 'unvalid' ) { ?>
                                            <td><p class="text-danger">Belum Tervalidasi</p></td>
                                            <?php } ?>
                                            </tr>
                                            <?php endforeach;?>
                                            </tbody>


                                            </table>
                                        </div>
                                    </div>

                                    <div class="tab-pane " id="feb" role="tabpanel">
                                        <div class="p-20">
                                        <table id="myTable" class="table table-bordered table-striped" >
                                            <thead>
                                            <th>No</th>
                                            <th>Nama Kapal</th>
                                            <th>Bendera</th>
					                        <th>Tanggal</th>
                                            <th>File</th>
					                        <th style="text-align:center">Status</th>
                                            </thead>

                                            <tbody>
                                            <?php $no=1; foreach($februari as $row):?>
                                            <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->nama_kapal; ?></td>
                                            <td><?php echo $row->bendera; ?></td>
                                            <td><?php echo $row->tanggal_tiba; ?> - <?php echo $row->bulan_tiba; ?> - <?php echo $row->tahun_tiba; ?></td>
                                            <td><a href="<?php echo base_url('Data/view/'.$row->id_surat); ?>" >Lihat <br> File</a></td>
                                                                                        <?php 
                                            if( ($row->status) == 'valid' ) { ?>
                                            <td>Divalidasi Oleh <p class="text-info"><?php echo $row->validator; ?></p></td>
                                            <?php } ?>
                                            <?php 
                                            if( ($row->status) == 'unvalid' ) { ?>
                                            <td><p class="text-danger">Belum Tervalidasi</p></td>
                                            <?php } ?>
                                            </tr>
                                            <?php endforeach;?>
                                            </tbody>


                                            </table>
                                        </div>
                                    </div>

                                    <div class="tab-pane " id="mar" role="tabpanel">
                                        <div class="p-20">
                                        <table id="myTable" class="table table-bordered table-striped" >
                                            <thead>
                                            <th>No</th>
                                            <th>Nama Kapal</th>
                                            <th>Bendera</th>
					                        <th>Tanggal</th>
                                            <th>File</th>
					                        <th style="text-align:center">Status</th>
                                            </thead>

                                            <tbody>
                                            <?php $no=1; foreach($maret as $row):?>
                                            <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->nama_kapal; ?></td>
                                            <td><?php echo $row->bendera; ?></td>
                                            <td><?php echo $row->tanggal_tiba; ?> - <?php echo $row->bulan_tiba; ?> - <?php echo $row->tahun_tiba; ?></td>
                                            <td><a href="<?php echo base_url('Data/view/'.$row->id_surat); ?>" >Lihat <br> File</a></td>
                                                                                        <?php 
                                            if( ($row->status) == 'valid' ) { ?>
                                            <td>Divalidasi Oleh <p class="text-info"><?php echo $row->validator; ?></p></td>
                                            <?php } ?>
                                            <?php 
                                            if( ($row->status) == 'unvalid' ) { ?>
                                            <td><p class="text-danger">Belum Tervalidasi</p></td>
                                            <?php } ?>

                                            </tr>
                                            <?php endforeach;?>
                                            </tbody>


                                            </table>
                                        </div>
                                    </div>

                                    <div class="tab-pane " id="apr" role="tabpanel">
                                        <div class="p-20">
                                        <table id="myTable" class="table table-bordered table-striped" >
                                            <thead>
                                            <th>No</th>
                                            <th>Nama Kapal</th>
                                            <th>Bendera</th>
					                        <th>Tanggal</th>
                                            <th>File</th>
					                        <th style="text-align:center">Status</th>
                                            </thead>

                                            <tbody>
                                            <?php $no=1; foreach($april as $row):?>
                                            <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->nama_kapal; ?></td>
                                            <td><?php echo $row->bendera; ?></td>
                                            <td><?php echo $row->tanggal_tiba; ?> - <?php echo $row->bulan_tiba; ?> - <?php echo $row->tahun_tiba; ?></td>
                                            <td><a href="<?php echo base_url('Data/view/'.$row->id_surat); ?>" >Lihat <br> File</a></td>
                                                                                        <?php 
                                            if( ($row->status) == 'valid' ) { ?>
                                            <td>Divalidasi Oleh <p class="text-info"><?php echo $row->validator; ?></p></td>
                                            <?php } ?>
                                            <?php 
                                            if( ($row->status) == 'unvalid' ) { ?>
                                            <td><p class="text-danger">Belum Tervalidasi</p></td>
                                            <?php } ?>

                                            </tr>
                                            <?php endforeach;?>
                                            </tbody>


                                            </table>
                                        </div>
                                    </div>

                                    <div class="tab-pane " id="mei" role="tabpanel">
                                        <div class="p-20">
                                        <table id="myTable" class="table table-bordered table-striped" >
                                            <thead>
                                            <th>No</th>
                                            <th>Nama Kapal</th>
                                            <th>Bendera</th>
					                        <th>Tanggal</th>
                                            <th>File</th>
					                        <th style="text-align:center">Status</th>
                                            </thead>

                                            <tbody>
                                            <?php $no=1; foreach($mei as $row):?>
                                            <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->nama_kapal; ?></td>
                                            <td><?php echo $row->bendera; ?></td>
                                            <td><?php echo $row->tanggal_tiba; ?> - <?php echo $row->bulan_tiba; ?> - <?php echo $row->tahun_tiba; ?></td>
                                            <td><a href="<?php echo base_url('Data/view/'.$row->id_surat); ?>" >Lihat <br> File</a></td>
                                                                                        <?php 
                                            if( ($row->status) == 'valid' ) { ?>
                                            <td>Divalidasi Oleh <p class="text-info"><?php echo $row->validator; ?></p></td>
                                            <?php } ?>
                                            <?php 
                                            if( ($row->status) == 'unvalid' ) { ?>
                                            <td><p class="text-danger">Belum Tervalidasi</p></td>
                                            <?php } ?>

                                            </tr>
                                            <?php endforeach;?>
                                            </tbody>


                                            </table>
                                        </div>
                                    </div>

                                    <div class="tab-pane " id="jun" role="tabpanel">
                                        <div class="p-20">
                                        <table id="myTable" class="table table-bordered table-striped" >
                                            <thead>
                                            <th>No</th>
                                            <th>Nama Kapal</th>
                                            <th>Bendera</th>
					                        <th>Tanggal</th>
                                            <th>File</th>
					                        <th style="text-align:center">Status</th>
                                            </thead>

                                            <tbody>
                                            <?php $no=1; foreach($juni as $row):?>
                                            <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->nama_kapal; ?></td>
                                            <td><?php echo $row->bendera; ?></td>
                                            <td><?php echo $row->tanggal_tiba; ?> - <?php echo $row->bulan_tiba; ?> - <?php echo $row->tahun_tiba; ?></td>
                                            <td><a href="<?php echo base_url('Data/view/'.$row->id_surat); ?>" >Lihat <br> File</a></td>
                                                                                        <?php 
                                            if( ($row->status) == 'valid' ) { ?>
                                            <td>Divalidasi Oleh <p class="text-info"><?php echo $row->validator; ?></p></td>
                                            <?php } ?>
                                            <?php 
                                            if( ($row->status) == 'unvalid' ) { ?>
                                            <td><p class="text-danger">Belum Tervalidasi</p></td>
                                            <?php } ?>

                                            </tr>
                                            <?php endforeach;?>
                                            </tbody>


                                            </table>
                                        </div>
                                    </div>

                                    <div class="tab-pane " id="jul" role="tabpanel">
                                        <div class="p-20">
                                        <table id="myTable" class="table table-bordered table-striped" >
                                            <thead>
                                            <th>No</th>
                                            <th>Nama Kapal</th>
                                            <th>Bendera</th>
					                        <th>Tanggal</th>
                                            <th>File</th>
					                        <th style="text-align:center">Status</th>
                                            </thead>

                                            <tbody>
                                            <?php $no=1; foreach($juli as $row):?>
                                            <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->nama_kapal; ?></td>
                                            <td><?php echo $row->bendera; ?></td>
                                            <td><?php echo $row->tanggal_tiba; ?> - <?php echo $row->bulan_tiba; ?> - <?php echo $row->tahun_tiba; ?></td>
                                            <td><a href="<?php echo base_url('Data/view/'.$row->id_surat); ?>" >Lihat <br> File</a></td>
                                                                                        <?php 
                                            if( ($row->status) == 'valid' ) { ?>
                                            <td>Divalidasi Oleh <p class="text-info"><?php echo $row->validator; ?></p></td>
                                            <?php } ?>
                                            <?php 
                                            if( ($row->status) == 'unvalid' ) { ?>
                                            <td><p class="text-danger">Belum Tervalidasi</p></td>
                                            <?php } ?>

                                            </tr>
                                            <?php endforeach;?>
                                            </tbody>


                                            </table>
                                        </div>
                                    </div>

                                    <div class="tab-pane " id="ags" role="tabpanel">
                                        <div class="p-20">
                                        <table id="myTable" class="table table-bordered table-striped" >
                                            <thead>
                                            <th>No</th>
                                            <th>Nama Kapal</th>
                                            <th>Bendera</th>
					                        <th>Tanggal</th>
                                            <th>File</th>
					                        <th style="text-align:center">Status</th>
                                            </thead>

                                            <tbody>
                                            <?php $no=1; foreach($agustus as $row):?>
                                            <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->nama_kapal; ?></td>
                                            <td><?php echo $row->bendera; ?></td>
                                            <td><?php echo $row->tanggal_tiba; ?> - <?php echo $row->bulan_tiba; ?> - <?php echo $row->tahun_tiba; ?></td>
                                            <td><a href="<?php echo base_url('Data/view/'.$row->id_surat); ?>" >Lihat <br> File</a></td>
                                                                                        <?php 
                                            if( ($row->status) == 'valid' ) { ?>
                                            <td>Divalidasi Oleh <p class="text-info"><?php echo $row->validator; ?></p></td>
                                            <?php } ?>
                                            <?php 
                                            if( ($row->status) == 'unvalid' ) { ?>
                                            <td><p class="text-danger">Belum Tervalidasi</p></td>
                                            <?php } ?>

                                            </tr>
                                            <?php endforeach;?>
                                            </tbody>


                                            </table>
                                        </div>
                                    </div>

                                    <div class="tab-pane " id="sep" role="tabpanel">
                                        <div class="p-20">
                                        <table id="myTable" class="table table-bordered table-striped" >
                                            <thead>
                                            <th>No</th>
                                            <th>Nama Kapal</th>
                                            <th>Bendera</th>
					                        <th>Tanggal</th>
                                            <th>File</th>
					                        <th style="text-align:center">Status</th>
                                            </thead>

                                            <tbody>
                                            <?php $no=1; foreach($september as $row):?>
                                            <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->nama_kapal; ?></td>
                                            <td><?php echo $row->bendera; ?></td>
                                            <td><?php echo $row->tanggal_tiba; ?> - <?php echo $row->bulan_tiba; ?> - <?php echo $row->tahun_tiba; ?></td>
                                            <td><a href="<?php echo base_url('Data/view/'.$row->id_surat); ?>" >Lihat <br> File</a></td>
                                                                                        <?php 
                                            if( ($row->status) == 'valid' ) { ?>
                                            <td>Divalidasi Oleh <p class="text-info"><?php echo $row->validator; ?></p></td>
                                            <?php } ?>
                                            <?php 
                                            if( ($row->status) == 'unvalid' ) { ?>
                                            <td><p class="text-danger">Belum Tervalidasi</p></td>
                                            <?php } ?>

                                            </tr>
                                            <?php endforeach;?>
                                            </tbody>


                                            </table>
                                        </div>
                                    </div>

                                    <div class="tab-pane " id="okt" role="tabpanel">
                                        <div class="p-20">
                                        <table id="myTable" class="table table-bordered table-striped" >
                                            <thead>
                                            <th>No</th>
                                            <th>Nama Kapal</th>
                                            <th>Bendera</th>
					                        <th>Tanggal</th>
                                            <th>File</th>
					                        <th style="text-align:center">Status</th>
                                            </thead>

                                            <tbody>
                                            <?php $no=1; foreach($oktober as $row):?>
                                            <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->nama_kapal; ?></td>
                                            <td><?php echo $row->bendera; ?></td>
                                            <td><?php echo $row->tanggal_tiba; ?> - <?php echo $row->bulan_tiba; ?> - <?php echo $row->tahun_tiba; ?></td>
                                            <td><a href="<?php echo base_url('Data/view/'.$row->id_surat); ?>" >Lihat <br> File</a></td>
                                                                                        <?php 
                                            if( ($row->status) == 'valid' ) { ?>
                                            <td>Divalidasi Oleh <p class="text-info"><?php echo $row->validator; ?></p></td>
                                            <?php } ?>
                                            <?php 
                                            if( ($row->status) == 'unvalid' ) { ?>
                                            <td><p class="text-danger">Belum Tervalidasi</p></td>
                                            <?php } ?>

                                            </tr>
                                            <?php endforeach;?>
                                            </tbody>


                                            </table>
                                        </div>
                                    </div>

                                    <div class="tab-pane " id="nov" role="tabpanel">
                                        <div class="p-20">
                                        <table id="myTable" class="table table-bordered table-striped" >
                                            <thead>
                                            <th>No</th>
                                            <th>Nama Kapal</th>
                                            <th>Bendera</th>
					                        <th>Tanggal</th>
                                            <th>File</th>
					                        <th style="text-align:center">Status</th>
                                            </thead>

                                            <tbody>
                                            <?php $no=1; foreach($november as $row):?>
                                            <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->nama_kapal; ?></td>
                                            <td><?php echo $row->bendera; ?></td>
                                            <td><?php echo $row->tanggal_tiba; ?> - <?php echo $row->bulan_tiba; ?> - <?php echo $row->tahun_tiba; ?></td>
                                            <td><a href="<?php echo base_url('Data/view/'.$row->id_surat); ?>" >Lihat <br> File</a></td>
                                                                                        <?php 
                                            if( ($row->status) == 'valid' ) { ?>
                                            <td>Divalidasi Oleh <p class="text-info"><?php echo $row->validator; ?></p></td>
                                            <?php } ?>
                                            <?php 
                                            if( ($row->status) == 'unvalid' ) { ?>
                                            <td><p class="text-danger">Belum Tervalidasi</p></td>
                                            <?php } ?>

                                            </tr>
                                            <?php endforeach;?>
                                            </tbody>


                                            </table>
                                        </div>
                                    </div>

                                    <div class="tab-pane " id="des" role="tabpanel">
                                        <div class="p-20">
                                        <table id="myTable" class="table table-bordered table-striped" >
                                            <thead>
                                            <th>No</th>
                                            <th>Nama Kapal</th>
                                            <th>Bendera</th>
					                        <th>Tanggal</th>
                                            <th>File</th>
					                        <th style="text-align:center">Status/</th>
                                            </thead>

                                            <tbody>
                                            <?php $no=1; foreach($desember as $row):?>
                                            <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->nama_kapal; ?></td>
                                            <td><?php echo $row->bendera; ?></td>
                                            <td><?php echo $row->tanggal_tiba; ?> - <?php echo $row->bulan_tiba; ?> - <?php echo $row->tahun_tiba; ?></td>
                                            <td><a href="<?php echo base_url('Data/view/'.$row->id_surat); ?>" >Lihat <br> File</a></td>
                                                                                        <?php 
                                            if( ($row->status) == 'valid' ) { ?>
                                            <td>Divalidasi Oleh <p class="text-info"><?php echo $row->validator; ?></p></td>
                                            <?php } ?>
                                            <?php 
                                            if( ($row->status) == 'unvalid' ) { ?>
                                            <td><p class="text-danger">Belum Tervalidasi</p></td>
                                            <?php } ?>

                                            </tr>
                                            <?php endforeach;?>
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

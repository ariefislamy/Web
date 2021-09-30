<style>
	.data{
		display: none;
	}
		
</style>
            <div class="page-wrapper"> 
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Masukan Data</h4>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#pkk" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down"><strong>PKK</strong></span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#rkbm" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down"><strong>RKB</strong></span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#lab" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down"><strong>LAB</strong></span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#lk3" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down"><strong>LK3</strong></span></a> </li>
                                </ul>
                                <!-- Tab panes -->
                                
                                <div class="tab-content tabcontent-border">
                                    <div class="tab-pane active" id="pkk" role="tabpanel">
                                    <div class="p-20">
                                    <form action="<?php echo base_url('Input/update/'.$surat['id_surat']); ?>" method="post">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label"><strong>Jumlah Kapal</strong></label>
                                            <div class="col-1">
                                            <input value="<?php echo $surat['jumlah_kapal']; ?>" name="jumlah_kapal" class="form-control" type="number" min="1" max="2" id="jumlah">
                                            </div>
                                        </div>

                                    <div id="2" class="data">
                                    
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label"><strong>Nama Kapal</strong></label>
                                            <div class="col-4">
                                                <input value="<?php echo $surat['nama_kapal']; ?>" name="nama_kapal1" class="form-control" type="text" id="example-text-input">
                                            </div>
                                            <div class="col-4">
                                                <input value="<?php echo $surat['nama_kapal2']; ?>" name="nama_kapal2" class="form-control" type="text" id="example-text-input">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label"><strong>Bendera</strong></label>
                                            <div class="col-4">
                                                <input value="<?php echo $surat['bendera']; ?>" name="bendera2" class="form-control" type="text"  id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label"><strong>GT</strong></label>
                                            <div class="col-2">
                                                <input value="<?php echo $surat['gt1']; ?>" name="gt1" class="form-control" type="number"  id="example-text-input">
                                            </div>
                                            <div class="col-2">
                                                <input value="<?php echo $surat['gt2']; ?>" name="gt2" class="form-control" type="number"  id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label"><strong>LOA</strong></label>
                                            <div class="col-2">
                                                <input value="<?php echo $surat['loa1']; ?>" name="loa1" class="form-control" type="text"  id="example-text-input">
                                            </div>
                                            <div class="col-2">
                                                <input value="<?php echo $surat['loa2']; ?>" name="loa2" class="form-control" type="text"  id="example-text-input">
                                            </div>
                                        </div>
                                        </div>

                                        <div id="1" class="data">
                                    
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label"><strong>Nama Kapal</strong></label>
                                        <div class="col-4">
                                            <input value="<?php echo $surat['nama_kapal']; ?>" name="nama_kapal" class="form-control" type="text" id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label"><strong>Bendera</strong></label>
                                        <div class="col-4">
                                            <input value="<?php echo $surat['bendera']; ?>" name="bendera1" class="form-control" type="text"  id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label"><strong>GT</strong></label>
                                        <div class="col-2">
                                            <input value="<?php echo $surat['gt1']; ?>" name="gt" class="form-control" type="number"  id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label"><strong>LOA</strong></label>
                                        <div class="col-2">
                                            <input value="<?php echo $surat['loa1']; ?>" name="loa" class="form-control" type="text"  id="example-text-input">
                                        </div>
                                    </div>
                                    </div>


                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label"><strong>ETA</strong></label>
                                            <div class="col-2">
                                                <input value="<?php echo $surat['tanggal_tiba']; ?>" name="tanggal_tiba" class="form-control" type="number" placeholder="Tanggal" min="1" max="31" id="example-text-input">
                                            </div>
                                            <div class="col-2">
                                            <select name="bulan_tiba" class="custom-select col-12" id="inlineFormCustomSelect">
                                                <option value="<?php echo $surat['bulan_tiba']; ?>" selected="<?php echo $surat['bulan_tiba']; ?>"><?php echo $surat['bulan_tiba']; ?></option>
                                                <option value="Januari">Januari</option>
                                                <option value="Februari">Februari</option>
                                                <option value="Maret">Maret</option>
                                                <option value="April">April</option>
                                                <option value="Mei">Mei</option>
                                                <option value="Juni">Juni</option>
                                                <option value="Juli">Juli</option>
                                                <option value="Agustus">Agustus</option>
                                                <option value="September">September</option>
                                                <option value="Oktober">Oktober</option>
                                                <option value="November">November</option>
                                                <option value="Desember">Desember</option>
                                            </select>                                             
                                            </div>
                                            <div class="col-2">
                                                <input value="<?php echo $surat['tahun_tiba']; ?>" name="tahun_tiba" class="form-control" type="number" placeholder="Tahun" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label"><strong>PBM</strong></label>
                                            <div class="col-4">
                                                <input value="<?php echo $surat['pbm']; ?>" name="pbm" class="form-control" type="text"  id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label"><strong>JPT</strong></label>
                                            <div class="col-4">
                                                <input value="<?php echo $surat['jpt']; ?>" name="jpt" class="form-control" type="text"  id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label"><strong>Agen</strong></label>
                                            <div class="col-4">
                                                <input value="<?php echo $surat['agen']; ?>" name="agen" class="form-control" type="text"  id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label"><strong>Asal</strong></label>
                                            <div class="col-4">
                                                <input value="<?php echo $surat['asal']; ?>" name="asal" class="form-control" type="text"  id="example-text-input">
                                            </div>
                                            <label for="example-text-input" class="col-form-label"><strong>&emsp;&emsp;&emsp;&emsp; Tujuan</strong></label>
                                            <div class="col-4">
                                                <input value="<?php echo $surat['tujuan']; ?>" name="tujuan" class="form-control" type="text"  id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label"><strong>Nama Barang</strong></label>
                                            <div class="col-4">
                                                <input value="<?php echo $surat['nama_barang']; ?>" name="nama_barang" class="form-control" type="text"  id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label"><strong>Jenis Barang</strong></label>
                                            <div class="col-4">
                                            <select name="jenis_barang" class="custom-select col-12" id="inlineFormCustomSelect">
                                                <option value="<?php echo $surat['jenis_barang']; ?>" selected=""><?php echo $surat['jenis_barang']; ?></option>
                                                <option value="Penumpang">Penumpang</option>
                                                <option value="Peti Kemas">Peti Kemas</option>
                                                <option value="General Cargo / Gencar">General Cargo / Gencar</option>
                                                <option value="Bulk Cargo">Bulk Cargo</option>
                                                <option value="Unitize">Unitize</option>
                                                <option value="Curah Cair">Curah Cair</option>
                                                <option value="Curah Kering">Curah Kering</option>
                                                <option value="Ternak">Ternak</option>
                                                <option value="Kendaraan">Kendaraan</option>
                                                <option value="KLM">Barang KLM</option>
                                            </select>                                            
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label"><strong>Bongkar</strong></label>
                                            <div class="col-4">
                                                <input value="<?php echo $surat['bongkar']; ?>" name="bongkar" class="form-control" type="text"  id="example-text-input">
                                            </div>
                                            <label for="example-text-input" class="col-form-label"><strong>&emsp;&emsp;&emsp;&emsp;&emsp; Muat</strong></label>
                                            <div class="col-4">
                                                <input value="<?php echo $surat['muat']; ?>" name="muat" class="form-control" type="text"  id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label"><strong>Dermaga</strong></label>
                                            <div class="col-4">
                                                <input value="<?php echo $surat['dermaga']; ?>" name="dermaga" class="form-control" type="text" id="example-text-input">
                                            </div>
                                        </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane  p-20" id="rkbm" role="tabpanel">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label"><strong>Perusahaan angkutan</strong></label>
                                            <div class="col-4">
                                                <input value="<?php echo $surat['perusahaan']; ?>" name="perusahaan" class="form-control" type="text" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label"><strong>Jumlah buruh</strong></label>
                                            <div class="col-4">
                                                <input value="<?php echo $surat['jumlah_buruh']; ?>" name="jumlah_buruh" class="form-control" type="text" id="example-text-input">
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label"><strong>Jumlah gang</strong></label>
                                            <div class="col-4">
                                                <input value="<?php echo $surat['jumlah_gang']; ?>" name="jumlah_gang" class="form-control" type="text" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label"><strong>Sistem</strong></label>
                                            <div class="col-4">
                                                <input value="<?php echo $surat['sistem']; ?>" name="sistem" class="form-control" type="text" id="example-text-input">                                          
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane p-20" id="lab" role="tabpanel">
                                        <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label"><strong>Jenis Kegiatan</strong></label>
                                            <div class="col-4">
                                            <select name="jenis_kegiatan" class="custom-select col-12" id="inlineFormCustomSelect">
                                                <option value="<?php echo $surat['jenis_kegiatan']; ?>" selected=""><?php echo $surat['jenis_kegiatan']; ?></option>
                                                <option value="Bongkar">Bongkar</option>
                                                <option value="Muat">Muat</option>
                                                <option value="Bongkar dan Muat">Bongkar dan Muat</option>
                                            </select>                                            
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label"><strong>Pengirim</strong></label>
                                            <div class="col-4">
                                                <input value="<?php echo $surat['pengirim']; ?>" name="pengirim" class="form-control" type="text" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label"><strong>Penerima</strong></label>
                                            <div class="col-4">
                                                <input value="<?php echo $surat['penerima']; ?>" name="penerima" class="form-control" type="text" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label"><strong>Cara Kerja</strong></label>
                                            <div class="col-4">
                                                <textarea name="cara_kerja" class="form-control" rows="5"><?php echo $surat['cara_kerja']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label"><strong>Mulai Rencana Kerja</strong></label>
                                            <div class="col-2">
                                                <input value="<?php echo $surat['tanggal_mulai']; ?>" name="tanggal_mulai" class="form-control" type="number" placeholder="Tanggal" min="0" max="31" id="example-text-input">
                                            </div>
                                            <div class="col-2">
                                            <select name="bulan_mulai" class="custom-select col-12" id="inlineFormCustomSelect">
                                            <option value="<?php echo $surat['bulan_mulai']; ?>" selected=""><?php echo $surat['bulan_mulai']; ?></option>
                                                <option value="Januari">Januari</option>
                                                <option value="Februari">Februari</option>
                                                <option value="Maret">Maret</option>
                                                <option value="April">April</option>
                                                <option value="Mei">Mei</option>
                                                <option value="Juni">Juni</option>
                                                <option value="Juli">Juli</option>
                                                <option value="Agustus">Agustus</option>
                                                <option value="September">September</option>
                                                <option value="Oktober">Oktober</option>
                                                <option value="November">November</option>
                                                <option value="Desember">Desember</option>
                                            </select>                                             
                                            </div>
                                            <div class="col-2">
                                                <input value="<?php echo $surat['tahun_mulai']; ?>" name="tahun_mulai" class="form-control" type="number" placeholder="Tahun" id="example-text-input">
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label"><strong>Selesai Rencana Kerja</strong></label>
                                            <div class="col-2">
                                                <input value="<?php echo $surat['tanggal_selesai']; ?>" name="tanggal_selesai" class="form-control" type="number" placeholder="Tanggal" min="0" max="31" id="example-text-input">
                                            </div>
                                            <div class="col-2">
                                            <select name="bulan_selesai" class="custom-select col-12" id="inlineFormCustomSelect">
                                                <option value="<?php echo $surat['bulan_selesai']; ?>" selected=""><?php echo $surat['bulan_selesai']; ?></option>
                                                <option value="Januari">Januari</option>
                                                <option value="Februari">Februari</option>
                                                <option value="Maret">Maret</option>
                                                <option value="April">April</option>
                                                <option value="Mei">Mei</option>
                                                <option value="Juni">Juni</option>
                                                <option value="Juli">Juli</option>
                                                <option value="Agustus">Agustus</option>
                                                <option value="September">September</option>
                                                <option value="Oktober">Oktober</option>
                                                <option value="November">November</option>
                                                <option value="Desember">Desember</option>
                                            </select>                                             
                                            </div>
                                            <div class="col-2">
                                                <input value="<?php echo $surat['tahun_selesai']; ?>" name="tahun_selesai" class="form-control" type="number" placeholder="Tahun" id="example-text-input">
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label"><strong>Keterangan</strong></label>
                                            <div class="col-4">
                                                <textarea name="keterangan" class="form-control" rows="5"><?php echo $surat['keterangan']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane p-20" id="lk3" role="tabpanel">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label"><strong>Call sign / IMO</strong></label>
                                            <div class="col-4">
                                                <input value="<?php echo $surat['imo']; ?>" name="imo" class="form-control" type="text" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label"><strong>ETD</strong></label>
                                            <div class="col-2">
                                                <input value="<?php echo $surat['tanggal_etd']; ?>" name="tanggal_etd" class="form-control" type="number" placeholder="Tanggal" min="0" max="31" id="example-text-input">
                                            </div>
                                            <div class="col-2">
                                            <select name="bulan_etd" class="custom-select col-12" id="inlineFormCustomSelect">
                                                <option value="<?php echo $surat['bulan_etd']; ?>" selected="<?php echo $surat['bulan_etd']; ?>"><?php echo $surat['bulan_etd']; ?></option>
                                                <option value="Januari">Januari</option>
                                                <option value="Februari">Februari</option>
                                                <option value="Maret">Maret</option>
                                                <option value="April">April</option>
                                                <option value="Mei">Mei</option>
                                                <option value="Juni">Juni</option>
                                                <option value="Juli">Juli</option>
                                                <option value="Agustus">Agustus</option>
                                                <option value="September">September</option>
                                                <option value="Oktober">Oktober</option>
                                                <option value="November">November</option>
                                                <option value="Desember">Desember</option>
                                            </select>                                             
                                            </div>
                                            <div class="col-2">
                                                <input value="<?php echo $surat['tahun_etd']; ?>" name="tahun_etd" class="form-control" type="number" placeholder="Tahun" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label"><strong>Owner</strong></label>
                                            <div class="col-4">
                                                <input value="<?php echo $surat['owner']; ?>" name="owner" class="form-control" type="text" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                        <label for="example-text-input" class="col-2 col-form-label"><strong>Trayek</strong></label>
                                            <div class="col-4">
                                            <select name="trayek" class="custom-select col-12" id="inlineFormCustomSelect">
                                                <option value="<?php echo $surat['trayek']; ?>" selected=""><?php echo $surat['trayek']; ?></option>
                                                <option value="Linier">Linier</option>
                                                <option value="Tramper">Tramper</option>
                                            </select>                                            
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-2 col-form-label"><strong>Nama Nahkoda</strong></label>
                                            <div class="col-4">
                                                <input value="<?php echo $surat['nama_nahkoda']; ?>" name="nama_nahkoda" class="form-control" type="text" id="example-text-input">
                                            </div>
                                        </div>
                                </div>
                                <br>
                                    <div class="col-2 form-group">
                                        <button type="submit" class="btn btn-info">Simpan</button>
                                    </div>
                                    </form>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
	    $(document).ready(function(){
		    $("#jumlah").on('change', function(){
			    $(".data").hide();
			    $("#" + $(this).val()).fadeIn(700);
		    }).change();
	    });
    </script>
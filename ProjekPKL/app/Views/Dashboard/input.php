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
                    <h4 class="card-title">Masukan Data PKK</h4>
                        <hr>
                        <form action="<?php echo base_url('Input/store'); ?>" method="post">
                        <div class="wrapper">
	                <div class="menu">
                    <div class="form-group row">
                        <label class="col-2 col-form-label" for="jumlah"><strong>Jumlah Kapal</strong></label>
                        <div class="col-1">
                            <input name="jumlah_kapal" value ="<?php echo $user['kapal']; ?>" class="form-control" type="number" min="1" max="2" id="jumlah">
                        </div>
                    </div>
	</div>
    <p>
    </p>

<div class="content">
	<div id="1" class="data">
		<div class="form-group row">
        <label class="col-2 col-form-label" for="example-text-input"><strong>Nama Kapal</strong></label>
        <div class="col-4">
            	<input class="form-control" name="nama_kapal" type="text" id="example-text-input">
        	</div>
    	</div>

    	<div class="form-group row">
        	<label class="col-2 col-form-label" for="example-text-input"><strong>Bendera</strong></label>
        	<div class="col-4">
            	<input class="form-control" name="bendera1" type="text" id="example-text-input">
        	</div>
    	</div>

    	<div class="form-group row">
        	<label class="col-2 col-form-label" for="example-text-input"><strong>GT</strong></label>
        	<div class="col-2">
            	<input class="form-control" name="gt" placeholder="Kapal 1" type="number"  id="example-text-input">
        	</div>
    	</div>

    	<div class="form-group row">
        	<label class="col-2 col-form-label" for="example-text-input"><strong>LOA</strong></label>
        	<div class="col-2">
            	<input class="form-control" name="loa" placeholder="Kapal 1" type="text"  id="example-text-input">
        	</div>
    	</div>
	</div>
	<div id="2" class="data">
    <div class="form-group row">
        <label class="col-2 col-form-label" for="example-text-input"><strong>Nama Kapal</strong></label>
        	<div class="col-4">
            	<input class="form-control" placeholder="Kapal 1" name="nama_kapal1" type="text" id="example-text-input">
        	</div>
            <div class="col-4">
                <input class="form-control" placeholder="Kapal 2" name="nama_kapal2" class="form-control" type="text"  id="example-text-input">
            </div>
    	</div>

    	<div class="form-group row">
        	<label class="col-2 col-form-label" for="example-text-input"><strong>Bendera</strong></label>
        	<div class="col-4">
            	<input class="form-control" name="bendera2" type="text" id="example-text-input">
        	</div>
    	</div>

    	<div class="form-group row">
        	<label class="col-2 col-form-label" for="example-text-input"><strong>GT</strong></label>
        	<div class="col-2">
            	<input class="form-control" name="gt1" placeholder="Kapal 1" type="number"  id="example-text-input">
        	</div>
            <div class="col-2">
                <input class="form-control" placeholder="Kapal 2" name="gt2" class="form-control" type="text"  id="example-text-input">
            </div>
    	</div>
        <p></p>
    	<div class="form-group row">
        	<label class="col-2 col-form-label" for="example-text-input"><strong>LOA</strong></label>
        	<div class="col-2">
            	<input class="form-control" name="loa1" placeholder="Kapal 1" type="text"  id="example-text-input">
        	</div>
            <div class="col-2">
                <input class="form-control" placeholder="Kapal 2" name="loa2" class="form-control" type="text"  id="example-text-input">
            </div>
    	</div>
    	</div>
	</div>
</div>

<div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label"><strong>ETA</strong></label>
    <div class="col-2">
        <input name="tanggal_tiba" class="form-control" type="number" placeholder="Tanggal" min="1" max="31" id="example-text-input">
    </div>
    <div class="col-2">
    <select name="bulan_tiba" class="custom-select col-12" id="inlineFormCustomSelect">
        <option selected="">Bulan</option>
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
        <input name="tahun_tiba" class="form-control" type="number" placeholder="Tahun" id="example-text-input">
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label"><strong>PBM</strong></label>
    <div class="col-4">
        <input name="pbm" class="form-control" type="text"  id="example-text-input">
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label"><strong>JPT</strong></label>
    <div class="col-4">
        <input name="jpt" class="form-control" type="text"  id="example-text-input">
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label"><strong>Agen</strong></label>
    <div class="col-4">
        <input name="agen" class="form-control" type="text"  id="example-text-input">
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label"><strong>Asal</strong></label>
    <div class="col-4">
        <input name="asal" class="form-control" type="text"  id="example-text-input">
    </div>
    <label for="example-text-input" class="col-form-label"><strong>&emsp;&emsp;&emsp;&emsp; Tujuan</strong></label>
    <div class="col-4">
        <input name="tujuan" class="form-control" type="text"  id="example-text-input">
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label"><strong>Nama Barang</strong></label>
    <div class="col-4">
        <input name="nama_barang" class="form-control" type="text"  id="example-text-input">
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label"><strong>Jenis Barang</strong></label>
    <div class="col-4">
    <select name="jenis_barang" class="custom-select col-12" id="inlineFormCustomSelect">
        <option selected="">-- Pilih --</option>
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
        <input name="bongkar" class="form-control" type="text"  id="example-text-input">
    </div>
    <label for="example-text-input" class="col-form-label"><strong>&emsp;&emsp;&emsp;&emsp;&emsp; Muat</strong></label>
    <div class="col-4">
        <input name="muat" class="form-control" type="text"  id="example-text-input">
    </div>
</div>
<div class="form-group row">
    <label for="example-text-input" class="col-2 col-form-label"><strong>Dermaga</strong></label>
    <div class="col-4">
        <input name="dermaga" class="form-control" type="text" id="example-text-input">
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

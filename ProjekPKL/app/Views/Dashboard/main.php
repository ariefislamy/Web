<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                <?php         
                foreach($jumlah_data as $rows){ 
                ?>     
                
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-inverse card-info">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><?php echo $rows->kapal; ?></h1>
                                <h6 class="text-white">Kapal Masuk Tahun <?php echo $tahun; ?></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-primary card-inverse">
                            <div class="box text-center">
                                <h1 class="font-light text-white"><?php echo $rows->jumlah_bongkar; ?></h1>
                                <h6 class="text-white">Barang Bongkar Tahun <?php echo $tahun; ?></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-inverse card-success">
                            <div class="box text-center">
                                <h1 class="font-light text-white"><?php echo $rows->jumlah_muat; ?></h1>
                                <h6 class="text-white">Barang Muat Tahun <?php echo $tahun; ?></h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card card-inverse card-warning">
                            <div class="box text-center">
                                <h1 class="font-light text-white"><?php echo $tot_user; ?></h1>
                                <h6 class="text-white">Users</h6>
                            </div>
                        </div>
                    </div>
                    <?php } ?> 
                </div>












<canvas id="test"></canvas>

    <?php
    //Inisialisasi nilai variabel awal
    $januariRI=0;
    $februariRI=0;
    $maretRI=0;
    $aprilRI=0;
    $meiRI=0;
    $juniRI=0;
    $juliRI=0;
    $agustusRI=0;
    $septemberRI=0;
    $oktoberRI=0;
    $novemberRI=0;
    $desemberRI=0;

    $januariAsing=0;
    $februariAsing=0;
    $maretAsing=0;
    $aprilAsing=0;
    $meiAsing=0;
    $juniAsing=0;
    $juliAsing=0;
    $agustusAsing=0;
    $septemberAsing=0;
    $oktoberAsing=0;
    $novemberAsing=0;
    $desemberAsing=0;

    foreach ($jumlah_januari1 as $row)
    {
        $jan=$row->kapal;
        $januariRI .= $jan;
    }
    foreach ($jumlah_februari1 as $row)
    {
        $jan=$row->kapal;
        $februariRI .= $jan;
    }
    foreach ($jumlah_maret1 as $row)
    {
        $jan=$row->kapal;
        $maretRI .= $jan;
    }
    foreach ($jumlah_april1 as $row)
    {
        $jan=$row->kapal;
        $aprilRI .= $jan;
    }
    foreach ($jumlah_mei1 as $row)
    {
        $jan=$row->kapal;
        $meiRI .= $jan;
    }
    foreach ($jumlah_juni1 as $row)
    {
        $jan=$row->kapal;
        $juniRI .= $jan;
    }
    foreach ($jumlah_juli1 as $row)
    {
        $jan=$row->kapal;
        $juliRI .= $jan;
    }
    foreach ($jumlah_agustus1 as $row)
    {
        $jan=$row->kapal;
        $agustusRI .= $jan;
    }
    foreach ($jumlah_september1 as $row)
    {
        $jan=$row->kapal;
        $septemberRI .= $jan;
    }
    foreach ($jumlah_oktober1 as $row)
    {
        $jan=$row->kapal;
        $oktoberRI .= $jan;
    }
    foreach ($jumlah_november1 as $row)
    {
        $jan=$row->kapal;
        $novemberRI .= $jan;
    }
    foreach ($jumlah_desember1 as $row)
    {
        $jan=$row->kapal;
        $desemberRI .= $jan;
    }


    foreach ($jumlah_januari2 as $row)
    {
        $jan=$row->kapal;
        $januariAsing .= $jan;
    }
    foreach ($jumlah_februari2 as $row)
    {
        $jan=$row->kapal;
        $februariAsing .= $jan;
    }
    foreach ($jumlah_maret2 as $row)
    {
        $jan=$row->kapal;
        $maretAsing .= $jan;
    }
    foreach ($jumlah_april2 as $row)
    {
        $jan=$row->kapal;
        $aprilAsing .= $jan;
    }
    foreach ($jumlah_mei2 as $row)
    {
        $jan=$row->kapal;
        $meiAsing .= $jan;
    }
    foreach ($jumlah_juni2 as $row)
    {
        $jan=$row->kapal;
        $juniAsing .= $jan;
    }
    foreach ($jumlah_juli2 as $row)
    {
        $jan=$row->kapal;
        $juliAsing .= $jan;
    }
    foreach ($jumlah_agustus2 as $row)
    {
        $jan=$row->kapal;
        $agustusAsing .= $jan;
    }
    foreach ($jumlah_september2 as $row)
    {
        $jan=$row->kapal;
        $septemberAsing .= $jan;
    }
    foreach ($jumlah_oktober2 as $row)
    {
        $jan=$row->kapal;
        $oktoberAsing .= $jan;
    }
    foreach ($jumlah_november2 as $row)
    {
        $jan=$row->kapal;
        $novemberAsing .= $jan;
    }
    foreach ($jumlah_desember2 as $row)
    {
        $jan=$row->kapal;
        $desemberAsing .= $jan;
    }
    ?>

<script>

var barChartData = {
  labels: [
    "Januari",
    "Februari",
    "Maret",
    "April",
    "Mei",
    "Juni",
    "Juli",
    "Agustus",
    "September",
    "Oktober",
    "November",
    "Desember"
  ],

  datasets: [
    {
      label: "Kapal RI",
      fill:false,
      borderColor: "red",
      borderWidth: 1,
      data: [<?php echo $januariRI; ?>, <?php echo $februariRI; ?>, <?php echo $maretRI; ?>, <?php echo $aprilRI; ?>, <?php echo $meiRI; ?>, <?php echo $juniRI; ?>, <?php echo $juliRI; ?>, <?php echo $agustusRI; ?>, <?php echo $septemberRI; ?>, <?php echo $oktoberRI; ?>, <?php echo $novemberRI; ?>, <?php echo $desemberRI; ?>]
    },
    {
      label: "Kapal Asing",
      fill:false,
      borderColor: "blue",
      borderWidth: 1,
      data: [<?php echo $januariAsing; ?>, <?php echo $februariAsing; ?>, <?php echo $maretAsing; ?>, <?php echo $aprilAsing; ?>, <?php echo $meiAsing; ?>, <?php echo $juniAsing; ?>, <?php echo $juliAsing; ?>, <?php echo $agustusAsing; ?>, <?php echo $septemberAsing; ?>, <?php echo $oktoberAsing; ?>, <?php echo $novemberAsing; ?>, <?php echo $desemberAsing; ?>]
    }
  ]
};

var chartOptions = {
  responsive: true,
  legend: {
    position: "top"
  },
  title: {
    display: true,
    text: "Jumlah Kapal Tahun <?php echo $tahun; ?>"
  },
  scales: {
    yAxes: [{
      ticks: {
        beginAtZero: true
      }
    }]
  }
}

  var ctx = document.getElementById("test").getContext("2d");
  window.myBar = new Chart(ctx, {
    type: "line",
    data: barChartData,
    options: chartOptions
  });

</script>






                <!-- Row -->


                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->

                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->

        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
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

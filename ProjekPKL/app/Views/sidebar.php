<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="<?php echo base_url() ?>/assets/images/users/avatar.png" alt="user" /> </div>
                    <!-- User profile text-->
                    <div class="profile-text"><span class="caret"><?php echo $user['nama_lengkap']; ?></span>
                    <br>
                    <a><i class="fa fa-circle text-success"></i> Online</a>
  
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <br>
                        <li>
                            <a href="<?php echo base_url() ?>/Home" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Beranda</span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>/Input" aria-expanded="false"><i class="mdi mdi-plus-circle"></i><span class="hide-menu">Masukan Data</span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>/Data" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Lihat Data</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Laporan</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url() ?>/Laporan/kategori">Bulanan</a></li>
                                <li><a href="<?php echo base_url() ?>/Laporan">Tahunan</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item-->
                <a href="<?php echo base_url() ?>/Login/logout" class="link" data-toggle="tooltip" title="Settings"><a href="<?php echo base_url() ?>/Login/logout" class="mdi mdi-power">Keluar</a></a>
            </div>
            <!-- End Bottom points-->
        </aside>
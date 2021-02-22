<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3><?= $this->session->userdata('nama'); ?></h3>
                    <p><?= $this->session->userdata('akses_level'); ?></p>
                    <strong><span style="color:blue;">K</span>T</strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>user/dashboard" class="nav-link"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Dashboard</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn"></i></span></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>user/info" class="nav-link"><i class="fa big-icon fa-info"></i> <span class="mini-dn">Info Kelompok Ternak</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn"></i></span></a>
                        </li>
                        <?php if ($cek == 0) { ?>
                            
                        <?php } else { ?>
                            <li class="nav-item">
                                <a href="<?= base_url(); ?>user/info/master_data" class="nav-link"><i class="fa big-icon fa-table"></i> <span class="mini-dn">Master Data</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn"></i></span></a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="content-inner-all">
            <div class="header-top-area">
                <div class="fixed-header-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="admin-logo logo-wrap-pro">
                                    <a href="#"><img src="<?= base_url(); ?>assets/templates/admin/img/logo/log.png" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                                
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                        
                                        <li class="nav-item">
                                            <a href="<?= base_url('login/logout') ?>" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <span class="adminpro-icon adminpro-locked author-log-ic header-riht-inf"></span>
                                                <span class="admin-name">Logout</span>
                                            </a>
                                            
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header top area end-->

            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li class="nav-item">
                                            <a href="<?= base_url(); ?>user/dashboard" class="nav-link"><span class="mini-dn">Dashboard</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn"></i></span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?= base_url(); ?>user/info" class="nav-link"><span class="mini-dn">Info Kelompok Ternak</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn"></i></span></a>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Master Data <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li>
                                                    <a href="<?= base_url(); ?>user/info/anggota">Data Anggota</a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url(); ?>user/info/berkas">Data Berkas Kelompok</a>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    
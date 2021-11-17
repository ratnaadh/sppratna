<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>SMK NEGERI 4 BOGOR</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url('assets/admin/css/font-face.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/admin/vendor/font-awesome-4.7/css/font-awesome.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/admin/vendor/font-awesome-5/css/fontawesome-all.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/admin/vendor/mdi-font/css/material-design-iconic-font.min.css')?>" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url('assets/admin/vendor/bootstrap-4.1/bootstrap.min.css')?>" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url('assets/admin/vendor/animsition/animsition.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/admin/vendor/wow/animate.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/admin/vendor/css-hamburgers/hamburgers.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/admin/vendor/slick/slick.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/admin/vendor/select2/select2.min.css')?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.css')?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url('assets/admin/css/theme.css')?>" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="active has-sub">
                        <a class="js-arrow" href="<?php echo site_url('admin/overview') ?>">
                            <i class="fas fa-home"></i>Beranda</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/spp') ?>">
                            <i class="fas fa-money-bill-alt"></i>SPP</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/kompetensi_keahlian') ?>">
                            <i class="fas fa-list-ul"></i>Kompetensi Keahlian</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/kelas') ?>">
                            <i class="fas fa-list-ul"></i>Kelas</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/siswa') ?>">
                            <i class="fas fa-users"></i>Siswa</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/petugas') ?>">
                            <i class="fas fa-users"></i>Petugas</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/pembayaran') ?>">
                            <i class="fas fa-history"></i>Transaksi Pembayaran</a>
                    </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <?php $this->load->view("admin/_partials/sidebar.php"); ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php $this->load->view("admin/_partials/navbar.php"); ?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                        <!-- BREADCRUMP -->
                        <?php $this->load->view("admin/_partials/breadcrump.php"); ?>
                        <!-- END BREADCRUMP -->

                        <!-- ALERT -->
                        <?php if ($this->session->flashdata('success')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $this->session->flashdata('success'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($this->session->flashdata('danger')) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $this->session->flashdata('danger'); ?>
                            </div>
                        <?php endif; ?>
                        <!-- END ALERT -->

                        <!-- CONTENT -->
                        <?php $this->load->view($content); ?>
                        
                        <!-- END CONTENT -->

                        <!-- FOOTER -->
                        <?php $this->load->view("admin/_partials/footer.php"); ?>
                        <!-- END FOOTER -->
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url('assets/admin/vendor/jquery-3.2.1.min.js')?>"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url('assets/admin/vendor/bootstrap-4.1/popper.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/bootstrap-4.1/bootstrap.min.js')?>"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url('assets/admin/vendor/slick/slick.min.js')?>">
    </script>
    <script src="<?php echo base_url('assets/admin/vendor/wow/wow.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/animsition/animsition.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')?>">
    </script>
    <script src="<?php echo base_url('assets/admin/vendor/counter-up/jquery.waypoints.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/counter-up/jquery.counterup.min.js')?>">
    </script>
    <script src="<?php echo base_url('assets/admin/vendor/circle-progress/circle-progress.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/chartjs/Chart.bundle.min.js')?>"></script>
    <script src="<?php echo base_url('assets/admin/vendor/select2/select2.min.js')?>">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url('assets/admin/js/main.js')?>"></script>

</body>

</html>
<!-- end document-->

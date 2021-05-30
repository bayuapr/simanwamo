<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Penyewaan Mobil | Pt. Prasido Dwijaya</title>
    <!-- site favicon -->
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/') ?>assets_shop/images/favicon.jpg" />
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>assets_shop/css/fontawesome.min.css">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>assets_shop/css/bootstrap.min.css">
    <!-- lightcase css link -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>assets_shop/css/lightcase.css">
    <!-- animate css link -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>assets_shop/css/animate.css">
    <!-- nice select css link -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>assets_shop/css/nice-select.css">
    <!-- datepicker css link -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>assets_shop/css/datepicker.min.css">
    <!-- wickedpicker css link -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>assets_shop/css/wickedpicker.min.css">
    <!-- jquery ui css link -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>assets_shop/css/jquery-ui.min.css">
    <!-- owl carousel css link -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>assets_shop/css/owl.carousel.min.css">
    <!-- main style css link -->
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>assets_shop/css/main.css">
</head>

<!--  header-section start  -->
<header class="header-section header-section--style2">
    <div class="header-bottom">
        <div class="container">
            <nav class="navbar navbar-expand-lg p-0">
                <a class="site-logo site-title" href="<?php echo base_url('pelanggan/dashboard') ?>"><img src="<?php echo base_url('assets/') ?>assets_shop/images/logo_insatnsi.jpg" alt="site-logo"><span class="logo-icon"><i class="flaticon-fire"></i></span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="menu-toggle"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav main-menu m-auto">
                        <li><a href="<?php echo base_url('pelanggan/dashboard') ?>">Beranda</a></li>
                        <li><a href="<?php echo base_url('pelanggan/mobil') ?>">Mobil</a></li>
                        <li><a href="<?php echo base_url('pelanggan/transaksi') ?>">Transaksi</a></li>
                        <li><a href="<?php echo base_url('pelanggan/tentang') ?>">Tentang</a></li>
                        <li><a href="<?php echo base_url('pelanggan/hubungi') ?>">Hubungi</a></li>
                        <li><a href="<?php echo base_url('register') ?>">Register</a></li>
                        <?php if ($this->session->userdata('nama')) { ?>
                            <li><a href="<?php echo base_url('auth/logout') ?>">Selamat Datang <?php echo $this->session->userdata('nama') ?> <span> | Logout</span></a></li>
                        <?php } else { ?>
                            <li><a href="<?php echo base_url('auth/login') ?>">Login</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
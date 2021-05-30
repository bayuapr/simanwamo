<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" class="nav-link nav-link-lg nav-link-user">
                            <div class="d-sm-none d-lg-inline-block">Selamat Datang <?php echo $this->session->userdata('nama_admin') ?></div>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html">Sistem Manajemen Penyewaan Mobil</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">SMPM</a>
                    </div>
                    <!-- menu -->
                    <ul class="sidebar-menu">
                        <li><a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
                        <li><a class="nav-link" href="<?php echo base_url('admin/data_mobil') ?>"><i class="fas fa-car"></i> <span>Data Mobil</span></a></li>
                        <li><a class="nav-link" href="<?php echo base_url('admin/data_servis_pajak') ?>"><i class="fas fa-car"></i> <span>Data Servis & Pajak</span></a></li>
                        <li><a class="nav-link" href="<?php echo base_url('admin/data_type') ?>"><i class="fas fa-car-side"></i> <span>Data Type</span></a></li>
                        <li><a class="nav-link" href="<?php echo base_url('admin/data_pelanggan') ?>"><i class="fas fa-users"></i> <span>Data Pelanggan</span></a></li>
                        <li><a class="nav-link" href="<?php echo base_url('admin/data_supir') ?>"><i class="fas fa-user-tie"></i> <span>Data Supir</span></a></li>
                        <!-- <li><a class="nav-link" href="<?php echo base_url('admin/data_user') ?>"><i class="fas fa-user-tie"></i> <span>Data User</span></a></li> -->
                        <li><a class="nav-link" href="<?php echo base_url('admin/hubungi') ?>"><i class="fas fa-user-tie"></i> <span>Pesan Pelanggan</span></a></li>
                        <li><a class="nav-link" href="<?php echo base_url('admin/transaksi') ?>"><i class="fas fa-cash-register"></i> <span>Transaksi</span></a></li>
                        <li><a class="nav-link" href="<?php echo base_url('admin/laporan') ?>"><i class="fas fa-folder-open"></i> <span>Laporan</span></a></li>
                        <!-- <li><a class="nav-link" href="<?php echo base_url('auth_admin/ganti_password') ?>"><i class="fas fa-lock"></i> <span>Ganti Password</span></a></li> -->
                        <li><a class="nav-link" href="<?php echo base_url('auth_admin/logout_admin') ?>"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
                    </ul>

                </aside>
            </div>
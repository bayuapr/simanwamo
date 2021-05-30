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
                            <div class="d-sm-none d-lg-inline-block">Selamat Datang <?php echo $this->session->userdata('nama_lengkap') ?></div>
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
                        <li><a class="nav-link" href="<?php echo base_url('supir/jadwal_antar') ?>"><i class="fas fa-tachometer-alt"></i> <span>Jadwal Antar</span></a></li>
                        <li><a class="nav-link" href="<?php echo base_url('supir/jadwal_jemput') ?>"><i class="fas fa-car"></i> <span>Jadwal Jemput</span></a></li>
                        <li><a class="nav-link" href="<?php echo base_url('auth/ganti_password') ?>"><i class="fas fa-lock"></i> <span>Ganti Password</span></a></li>
                        <li><a class="nav-link" href="<?php echo base_url('auth_supir/logout_supir') ?>"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
                    </ul>

                </aside>
            </div>
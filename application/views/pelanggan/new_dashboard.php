    <!-- banner-section start  -->
    <section class="banner-section banner-section--style2 bg_img" data-background="<?php echo base_url('assets/') ?>assets_shop/images/banner.jpg">
        <!-- <div class="banner-el-img"><img src="<?php echo base_url('assets/') ?>assets_shop/images/elements/banner-man.png" alt="image"></div> -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <div class="banner-content">
                        <h1 class="title">PT. Prasido Dwijaya</h1>
                        <p>Pilihan terbaik untuk anda yang ingin mendapatkan kenyamanan berkendara dengan pelayanan terbaik. Tinggal duduk tenang dan anda akan sampai di tujuan dengan aman dan nyaman</p>
                        <a href="<?php echo base_url('pelanggan/mobil') ?>" class="cmn-btn">Lihat Mobil</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end  -->

    <!-- about-section start -->
    <section class="about-section pt-120 pb-120">
        <div class="element text-center"><img src="<?php echo base_url('assets/') ?>assets_shop/images/elements/car2.png" alt="image"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="block-area">
                        <div class="block-header">
                            <h2 class="title">Kenapa harus sewa mobil disini?</h2>
                        </div>
                        <div class="block-body">
                            <ul class="cmn-list">
                                <li>Kondisi kendaraan terjaga</li>
                                <li>Akses mudah</li>
                                <li>Harga yang kompetitif</li>
                                <li>Pengemudi yang berpengalaman</li>
                                <li>Aman dan nyaman</li>
                                <li>Fleksibel</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->

    <!-- counter-section start -->
    <div class="counter-section bg_img overlay-main" data-background="<?php echo base_url('assets/') ?>assets_shop/images/bg1.jpg">
        <div class="container">
            <div class="row mb-none-30">
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-item counter-item--style2">
                        <div class="icon">
                            <i class="fa fa-car"></i>
                        </div>
                        <div class="content">
                            <span class="counter"> <?php echo $total_mobil ?>
                            </span>
                            <span class="title">total mobil</span>
                        </div>
                    </div>
                </div><!-- counter-item end -->
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-item counter-item--style2">
                        <div class="icon">
                            <i class="fa fa-smile-o"></i>
                        </div>
                        <div class="content">
                            <span class="counter"> <?php echo $total_pelanggan ?>
                            </span>
                            <span class="title">total pelanggan</span>
                        </div>
                    </div>
                </div><!-- counter-item end -->
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-item counter-item--style2">
                        <div class="icon">
                            <i class="fa fa-truck"></i>
                        </div>
                        <div class="content">
                            <span class="counter"> <?php echo $total_supir ?>
                            </span>
                            <span class="title">total supir</span>
                        </div>
                    </div>
                </div><!-- counter-item end -->
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-item counter-item--style2">
                        <div class="icon">
                            <i class="fa fa-puzzle-piece"></i>
                        </div>
                        <div class="content">
                            <span class="counter"> <?php echo $total_type ?>
                            </span>
                            <span class="title">total tipe mobil</span>
                        </div>
                    </div>
                </div><!-- counter-item end -->
            </div>
        </div>
    </div>
    <!-- counter-section end -->
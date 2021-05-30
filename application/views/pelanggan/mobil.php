    <!-- inner-apge-banner start -->
    <section class="inner-page-banner bg_img overlay-3" data-background="<?php echo base_url('assets/') ?>assets_shop/images/inner-page-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">Mobil</h2>
                    <ol class="page-list">
                        <li><a href="index.html"><i class="fa fa-home"></i> Beranda</a></li>
                        <li>Mobil</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-apge-banner end -->

    <!-- car-search-section start -->
    <section class="car-search-section pt-120 pb-120">
        <div class="container">
            <?php echo $this->session->flashdata('pesan') ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="car-search-filter-area">
                        <div class="car-search-filter-form-area">
                            <form class="car-search-filter-form">
                                <div class="row justify-content-between">
                                    <div class="col-lg-4 col-md-5 col-sm-6">
                                        <div class="cart-sort-field">
                                            <h2>Daftar Mobil</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-6 d-flex">
                                        <!-- <input type="text" name="car_search" id="car_search" placeholder="cari mobil...">
                                        <button class="search-submit-btn">cari</button> -->
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="view-style-toggle-area">
                            <button class="view-btn list-btn"><i class="fa fa-bars"></i></button>
                            <button class="view-btn grid-btn active"><i class="fa fa-th-large"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-70">
                <div class="col-lg-12">
                    <div class="car-search-result-area grid--view row mb-none-30">
                        <?php foreach ($mobil as $mb) : ?>
                            <div class="col-md-4 col-12">
                                <div class="car-item">
                                    <div class="thumb bg_img" data-background="<?php echo base_url('assets/upload/') . $mb->gambar ?>"></div>
                                    <div class="car-item-body">
                                        <div class="content">
                                            <h4 class="title"><?php echo $mb->merek ?></h4>
                                            <h5>Rp. <?php echo number_format($mb->harga, 0, ',', '.') ?> / Hari</h5>
                                            <span class="price">No. Plat: <?php echo $mb->no_plat ?></span>
                                            <p> </p>
                                            <?php
                                            if ($mb->status == 0) {
                                                echo "<span class='btn btn-danger' disable>Telah Disewa!</span>";
                                            } else {
                                                echo anchor('pelanggan/sewa/tambah_sewa/' . $mb->id_mobil, '<button class="btn btn-success">Sewa</button>');
                                            } ?>
                                            <a class="btn btn-warning" href="<?php echo base_url('pelanggan/mobil/detail_mobil/') . $mb->id_mobil ?>">Detail</a>
                                        </div>
                                        <div class="car-item-meta">
                                            <ul class="details-list">
                                                <li><?php if ($mb->tape_cd == 1) {
                                                        echo "<i class='fa fa-check-circle text-warning'></i>";
                                                    } else {
                                                        echo "<i class='fa fa-times-circle text-danger'></i>";
                                                    } ?> Tape/CD</li>
                                                <li><?php if ($mb->dongkrak_stang == 1) {
                                                        echo "<i class='fa fa-check-circle text-warning'></i>";
                                                    } else {
                                                        echo "<i class='fa fa-times-circle text-danger'></i>";
                                                    } ?> Dongkrak & Stang</li>
                                                <li><?php if ($mb->ban_cadangan == 1) {
                                                        echo "<i class='fa fa-check-circle text-warning'></i>";
                                                    } else {
                                                        echo "<i class='fa fa-times-circle text-danger'></i>";
                                                    } ?> Ban Cadang</li>
                                                <li><?php if ($mb->karpet == 1) {
                                                        echo "<i class='fa fa-check-circle text-warning'></i>";
                                                    } else {
                                                        echo "<i class='fa fa-times-circle text-danger'></i>";
                                                    } ?> Karpet</li>
                                                <li><?php if ($mb->kunci_roda == 1) {
                                                        echo "<i class='fa fa-check-circle text-warning'></i>";
                                                    } else {
                                                        echo "<i class='fa fa-times-circle text-danger'></i>";
                                                    } ?> Kunci Roda</li>
                                                <li><?php if ($mb->tempat_tisue == 1) {
                                                        echo "<i class='fa fa-check-circle text-warning'></i>";
                                                    } else {
                                                        echo "<i class='fa fa-times-circle text-danger'></i>";
                                                    } ?> Tempat Tisue</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- car-item end -->
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- car-search-section end -->
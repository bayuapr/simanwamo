    <!-- inner-apge-banner start -->
    <section class="inner-page-banner bg_img overlay-3" data-background="<?php echo base_url('assets/') ?>assets_shop/images/inner-page-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">Mobil</h2>
                    <ol class="page-list">
                        <li><a href="<?php echo base_url('pelanggan/dashboard')?>"><i class="fa fa-home"></i> Beranda</a></li>
                        <li>Detail Mobil</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-apge-banner end -->

    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-body">
                <?php foreach ($detail as $dt) : ?>
                    <div class="row">
                        <div class="col-md-6">
                            <img width="350px" src="<?php echo base_url('assets/upload/') . $dt->gambar ?>" alt="">
                        </div>
                        <div class="col-md-6">
                            <table class="table">
                                <tr>
                                    <th>Merek</th>
                                    <td><?php echo $dt->merek ?></td>
                                </tr>
                                <tr>
                                    <th>No.Plat</th>
                                    <td><?php echo $dt->no_plat ?></td>
                                </tr>
                                <tr>
                                    <th>Warna</th>
                                    <td><?php echo $dt->warna ?></td>
                                </tr>
                                <tr>
                                    <th>Tahun</th>
                                    <td><?php echo $dt->tahun ?></td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td><?php if ($dt->status == '1') {
                                            echo "Tersedia";
                                        } else {
                                            echo "Tidak Tersedia/Sedang Disewa";
                                        }
                                        ?></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <?php
                                        if ($dt->status == 0) {
                                            echo "<span class='btn btn-danger' disable>Telah Disewa!</span>";
                                        } else {
                                            echo anchor('pelanggan/sewa/tambah_sewa/' . $dt->id_mobil, '<button class="btn btn-success">Sewa</button>');
                                        } ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
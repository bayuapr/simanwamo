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

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header alert alert-success">
                        Invoice Pembayaran Anda
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <?php foreach ($transaksi as $tr) : ?>
                                <tr>
                                    <th>Merek Mobil</th>
                                    <td>:</td>
                                    <td><?php echo $tr->merek ?></td>
                                </tr>

                                <tr>
                                    <th>Tanggal Sewa</th>
                                    <td>:</td>
                                    <td><?php echo $tr->tanggal_sewa ?></td>
                                </tr>

                                <tr>
                                    <th>Tanggal Kembali</th>
                                    <td>:</td>
                                    <td><?php echo $tr->tanggal_kembali ?></td>
                                </tr>

                                <tr>
                                    <th>Biaya Sewa/Hari</th>
                                    <td>:</td>
                                    <td>Rp. <?php echo number_format($tr->harga, 0, ',', '.') ?></td>
                                </tr>

                                <tr>
                                    <th>Biaya Supir/Hari</th>
                                    <td>:</td>
                                    <td>Rp. <?php echo number_format($tr->supir, 0, ',', '.') ?></td>
                                </tr>

                                <tr style="display:none;">
                                    <?php
                                    $x = ($tr->harga);
                                    $y = ($tr->supir);
                                    $jml = abs($x + $y);
                                    ?>
                                    <td>Jumlah Sewa + Mobil/Hari</td>
                                    <td>:</td>
                                    <td>Rp.<?php echo number_format($jml, 0, ',', '.') ?></td>
                                </tr>

                                <tr>
                                    <?php
                                    $x = strtotime($tr->tanggal_kembali);
                                    $y = strtotime($tr->tanggal_sewa);
                                    $jmlHari = abs(($x - $y) / (60 * 60 * 24));
                                    ?>
                                    <th>Jumlah Hari Sewa</th>
                                    <td>:</td>
                                    <td><?php echo $jmlHari ?> Hari</td>
                                </tr>

                                <tr class="text-success">
                                    <th>Biaya Sewa/Hari</th>
                                    <td>:</td>
                                    <td><button class="btn btn-sm btn-success">Rp. <?php echo number_format($jml * $jmlHari, 0, ',', '.') ?></button></td>
                                </tr>

                                <tr>
                                    <th></th>
                                    <td></td>
                                    <td><a href="<?php echo base_url('pelanggan/transaksi/cetak_invoice/' . $tr->id_sewa) ?>" class="btn btn-sm btn-secondary">Print Invoice</td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header alert alert-primary">
                        Informasi Pembayaran
                    </div>
                    <div class="card-body">
                        <p class="text-success mb-3">Silahkan Melakukan Pembayaran Melalui Nomor Rekening di Bawah Ini:</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Bank BRI 1239437982870</li>
                            <li class="list-group-item">Bank BNI 1239437982870</li>
                        </ul>

                        <?php

                        if (empty($tr->bukti_pembayaran)) { ?>
                            <button style="width: 100%" type="button" class="btn btn-sm btn-danger mt-3" data-toggle="modal" data-target="#exampleModal">
                                Upload Bukti Pembayaran
                            </button>
                        <?php } elseif ($tr->status_pembayaran == '0') { ?>
                            <button style="width: 100%" class="btn btn-sm btn-warning"><i class="fa fa-clock-o">Menunggu Konfirmasi</i></button>
                        <?php } elseif ($tr->status_pembayaran == '1') { ?>
                            <button style="width: 100%" class="btn btn-sm btn-success"><i class="fa fa-check">Pembayaran Selesai</i></button>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran Anda</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="<?php echo base_url('pelanggan/transaksi/pembayaran_aksi') ?>" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Upload Bukti Pembayaran</label>
                            <input type="hidden" name="id_sewa" class="form-control" value="<?php echo $tr->id_sewa ?>">
                            <input type="file" name="bukti_pembayaran" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-sm btn-success">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
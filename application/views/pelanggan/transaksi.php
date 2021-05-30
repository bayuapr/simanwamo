    <!-- inner-apge-banner start -->
    <section class="inner-page-banner bg_img overlay-3" data-background="<?php echo base_url('assets/') ?>assets_shop/images/inner-page-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">Transaksi</h2>
                    <ol class="page-list">
                        <li><a href="<?php echo base_url('pelanggan/dashboard') ?>"><i class="fa fa-home"></i> Beranda</a></li>
                        <li>Detail Transaksi</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-apge-banner end -->

    <div class="container mt-5 mb-5">
        <div class="card mx-auto">
            <div class="card-header">
                Data Transaksi Anda
            </div>
            <span><?php echo $this->session->flashdata('pesan') ?></span>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>Merek Mobil</th>
                            <th>No Plat</th>
                            <th>Harga Sewa/Hari</th>
                            <th>Aksi</th>
                            <th>Batal</th>
                        </tr>

                        <?php $no = 1;
                        foreach ($transaksi as $tr) : ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $tr->nama ?></td>
                                <td><?php echo $tr->merek ?></td>
                                <td><?php echo $tr->no_plat ?></td>
                                <td>Rp. <?php echo number_format($tr->harga, 0, ',', '.') ?></td>
                                <td>
                                    <?php if ($tr->status_sewa == "Selesai") { ?>
                                        <button class="btn btn-sm btn-danger">Sewa Selesai</button>
                                    <?php } else { ?>
                                        <a href="<?php echo base_url('pelanggan/transaksi/pembayaran/' . $tr->id_sewa) ?>" class="btn btn-sm btn-success">Cek Pembayaran</a>
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php
                                    if ($tr->status_sewa == 'Belum Selesai') { ?>
                                        <a onclick="return confirm('Anda Yakin Batal ?')" class="btn btn-sm btn-danger" href="<?php echo base_url('pelanggan/transaksi/batal_transaksi/' . $tr->id_sewa) ?>">Batal</a>
                                    <?php } else { ?>
                                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">
                                            Batal
                                        </button>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Informasi Batal Transaksi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Maaf, transaksi ini sudah selesai dan tidak dapat dibatalkan!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-success" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
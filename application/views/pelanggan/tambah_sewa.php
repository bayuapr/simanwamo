    <!-- inner-apge-banner start -->
    <section class="inner-page-banner bg_img overlay-3" data-background="<?php echo base_url('assets/') ?>assets_shop/images/inner-page-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">Sewa</h2>
                    <ol class="page-list">
                        <li><a href="<?php echo base_url('pelanggan/dashboard') ?>"><i class="fa fa-home"></i> Beranda</a></li>
                        <li>Sewa Mobil</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-apge-banner end -->

    <div class="container mt-5 mb-5">
        <div class="card">
            <div class="card-header">
                Form Sewa Mobil
            </div>
            <div class="card-body">
                <?php foreach ($detail as $dt) : ?>
                    <form action="<?php echo base_url('pelanggan/sewa/tambah_sewa_aksi/ ') ?>" method="post">
                        <div class="form-group">
                            <label>Harga Sewa/Hari</label>
                            <input type="hidden" name="id_mobil" value="<?php echo $dt->id_mobil ?>">
                            <input type="text" name="harga" class="form-control" value="<?php echo $dt->harga ?>" readonly>
                        </div>

                        <div class="form-group">
                            <label>Denda/Hari</label>
                            <input type="text" name="denda" class="form-control" value="<?php echo $dt->denda ?>" readonly>
                        </div>

                        <div class="form-group">
                            <label>Detail Alamat</label>
                            <input type="text" name="alamat_detail" class="form-control">
                            <a href="https://support.google.com/maps/answer/144361?co=GENIE.Platform%3DDesktop&hl=id&oco=0" style="color: blue;">Cara membagikan alamat dengan gmaps</a>
                            <?php echo form_error('alamat_detail', '<div class="text-small text-danger">', '</div>') ?>

                        </div>

                        <div class="form-row align-items-center">
                            <label>Supir</label>
                            <select name="supir" class="custom-select mr-sm-2">
                                <option selected>---Pilih---</option>
                                <option value="<?php echo $dt->supir ?>">Tersedia</option>
                                <option value="0">Tidak Tersedia</option>
                            </select>
                            <?php echo form_error('supir', '<div class="text-small text-danger">', '</div>') ?>
                        </div>

                        <div class="form-group">
                            <label>Tanggal Sewa</label>
                            <input type="date" name="tanggal_sewa" min="<?= date('Y-m-d') ?>" class="form-control">
                            <?php echo form_error('tanggal_sewa', '<div class="text-small text-danger">', '</div>') ?>
                        </div>

                        <div class="form-group">
                            <label>Tanggal Kembali</label>
                            <input type="date" name="tanggal_kembali" min="<?= date('Y-m-d') ?>" class="form-control">
                            <?php echo form_error('tanggal_kembali', '<div class="text-small text-danger">', '</div>') ?>
                        </div>

                        <div class="form-group">
                            <label>Jam Sewa</label>
                            <input type="time" name="jam_sewa" min="<?= time('H:i') ?>" class="form-control">
                            <?php echo form_error('jam_sewa', '<div class="text-small text-danger">', '</div>') ?>
                        </div>

                        <button type="submit" class="btn btn-warning">Sewa</button>

                    </form>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
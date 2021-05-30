<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Update Data mobil</h1>
        </div>

        <div class="card">
            <div class="card-body">
                <?php foreach ($mobil as $mb) : ?>
                    <form action="<?php echo base_url('admin/data_mobil/update_mobil_aksi') ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Type Mobil</label>
                                    <input type="hidden" name="id_mobil" value="<?php echo $mb->id_mobil ?>">
                                    <select name="kode_type" class="form-control">
                                        <option value="<?php echo $mb->kode_type ?>"><?php echo $mb->kode_type ?></option>
                                        <?php foreach ($type as $tp) : ?>
                                            <option value="<?php echo $tp->kode_type ?>"><?php echo $tp->nama_type ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php echo form_error('kode_type', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Merek</label>
                                    <input type="text" name="merek" class="form-control" value="<?php echo $mb->merek ?>">
                                    <?php echo form_error('merek', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>No. Plat</label>
                                    <input type="text" name="no_plat" class="form-control" value="<?php echo $mb->no_plat ?>">
                                    <?php echo form_error('no_plat', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Warna</label>
                                    <input type="text" name="warna" class="form-control" value="<?php echo $mb->warna ?>">
                                    <?php echo form_error('warna', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Tahun</label>
                                    <input type="text" name="tahun" class="form-control" value="<?php echo $mb->tahun ?>">
                                    <?php echo form_error('tahun', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option <?php if ($mb->status == "1") {
                                                    echo " selected='selected'";
                                                }
                                                echo $mb->status; ?> value="1">Tersedia</option>
                                        <option <?php if ($mb->status == "0") {
                                                    echo " selected='selected'";
                                                }
                                                echo $mb->status; ?> value="0">Tidak Tersedia</option>
                                    </select>
                                    <?php echo form_error('status', '<div class="text-small text-danger">', '</div>') ?>

                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input type="text" name="harga" class="form-control" value="<?php echo $mb->harga ?>">
                                        <?php echo form_error('harga', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Denda</label>
                                        <input type="text" name="denda" class="form-control" value="<?php echo $mb->denda ?>">
                                        <?php echo form_error('denda', '<div class="text-small text-danger">', '</div>') ?>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Supir</label>
                                    <input type="text" name="supir" class="form-control" value="<?php echo $mb->supir ?>">
                                    <?php echo form_error('supir', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Tape/CD</label>
                                    <select name="tape_cd" class="form-control">
                                        <option <?php if ($mb->tape_cd == "1") {
                                                    echo " selected='selected'";
                                                }
                                                echo $mb->tape_cd; ?> value="1">Tersedia</option>
                                        <option <?php if ($mb->tape_cd == "0") {
                                                    echo " selected='selected'";
                                                }
                                                echo $mb->tape_cd; ?> value="0">Tidak Tersedia</option>
                                    </select>
                                    <?php echo form_error('tape_cd', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Dongkrak & Stang</label>
                                    <select name="dongkrak_stang" class="form-control">
                                        <option <?php if ($mb->dongkrak_stang == "1") {
                                                    echo " selected='selected'";
                                                }
                                                echo $mb->dongkrak_stang; ?> value="1">Tersedia</option>
                                        <option <?php if ($mb->dongkrak_stang == "0") {
                                                    echo " selected='selected'";
                                                }
                                                echo $mb->dongkrak_stang; ?> value="0">Tidak Tersedia</option>
                                    </select>
                                    <?php echo form_error('dongkrak_stang', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Ban Cadang</label>
                                    <select name="ban_cadangan" class="form-control">
                                        <option <?php if ($mb->ban_cadangan == "1") {
                                                    echo " selected='selected'";
                                                }
                                                echo $mb->ban_cadangan; ?> value="1">Tersedia</option>
                                        <option <?php if ($mb->ban_cadangan == "0") {
                                                    echo " selected='selected'";
                                                }
                                                echo $mb->ban_cadangan; ?> value="0">Tidak Tersedia</option>
                                    </select>
                                    <?php echo form_error('ban_cadangan', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Karpet</label>
                                    <select name="karpet" class="form-control">
                                        <option <?php if ($mb->karpet == "1") {
                                                    echo " selected='selected'";
                                                }
                                                echo $mb->karpet; ?> value="1">Tersedia</option>
                                        <option <?php if ($mb->karpet == "0") {
                                                    echo " selected='selected'";
                                                }
                                                echo $mb->karpet; ?> value="0">Tidak Tersedia</option>
                                    </select>
                                    <?php echo form_error('karpet', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Kunci Roda</label>
                                    <select name="kunci_roda" class="form-control">
                                        <option <?php if ($mb->kunci_roda == "1") {
                                                    echo " selected='selected'";
                                                }
                                                echo $mb->kunci_roda; ?> value="1">Tersedia</option>
                                        <option <?php if ($mb->kunci_roda == "0") {
                                                    echo " selected='selected'";
                                                }
                                                echo $mb->kunci_roda; ?> value="0">Tidak Tersedia</option>
                                    </select>
                                    <?php echo form_error('kunci_roda', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Tempat Tisue</label>
                                    <select name="tempat_tisue" class="form-control">
                                        <option <?php if ($mb->tempat_tisue == "1") {
                                                    echo " selected='selected'";
                                                }
                                                echo $mb->tempat_tisue; ?> value="1">Tersedia</option>
                                        <option <?php if ($mb->tempat_tisue == "0") {
                                                    echo " selected='selected'";
                                                }
                                                echo $mb->tempat_tisue; ?> value="0">Tidak Tersedia</option>
                                    </select>
                                    <?php echo form_error('tempat_tisue', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Gambar</label>
                                    <p>gambar sebelumnya</p>
                                    <img src="<?php echo base_url('assets/upload/' . $mb->gambar) ?>" width="400px">
                                    <hr>
                                    <?php echo form_open_multipart('editUpload'); ?>
                                    <input type="file" name="gambar" class="form-control" value="<?php echo $mb->gambar ?>">
                                </div>
                                <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                                <button type="reset" class="btn btn-danger mt-4">Reset</button>

                            </div>
                        </div>
                    </div>
                </form>
            <?php endforeach; ?>
        </div>
    </div>
</section>
</div>
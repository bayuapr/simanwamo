<div class="main-content">
    <div class="section">
        <div class="section-header">
            <h1>Form Update Servis & Pajak Mobil</h1>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <?php foreach ($servis_pajak as $sp) : ?>
                <form method="POST" action="<?php echo base_url('admin/data_servis_pajak/update_servis_pajak_aksi') ?>">
                    <div class="form-group">
                        <label>Merek Mobil</label>
                        <input type="hidden" name="id" value="<?php echo $sp->id_sp ?>">
                        <input type="text" name="merek_mobil" class="form-control" value="<?php echo $sp->merek_mobil ?>">
                        <?php echo form_error('merek_mobil', '<div class="text-small text-danger">', '</div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Nomor Plat</label>
                        <input type="text" name="nomor_plat" class="form-control" value="<?php echo $sp->nomor_plat ?>">
                        <?php echo form_error('nomor_plat', '<div class="text-small text-danger">', '</div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Transaksi</label>
                        <input type="date" name="tanggal" class="form-control" value="<?php echo $sp->tanggal ?>">
                        <?php echo form_error('tanggal', '<div class="text-small text-danger">', '</div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Servis</label>
                        <select name="servis" class="form-control">
                            <option <?php if ($sp->servis == "Mesin") {
                                        echo " selected='selected'";
                                    }
                                    echo $sp->servis; ?> value="Mesin">Mesin</option>
                            <option <?php if ($sp->servis == "Body") {
                                        echo " selected='selected'";
                                    }
                                    echo $sp->servis; ?> value="Body">Body</option>
                            <option <?php if ($sp->servis == "Full") {
                                        echo " selected='selected'";
                                    }
                                    echo $sp->servis; ?> value="Full">Full</option>
                        </select>
                        <!-- <?php echo form_error('servis', '<div class="text-small text-danger">', '</div>') ?> -->
                    </div>

                    <div class="form-group">
                        <label>Pajak</label>
                        <select name="pajak" class="form-control">
                            <option <?php if ($sp->pajak == "Tahunan") {
                                        echo " selected='selected'";
                                    }
                                    echo $sp->pajak; ?> value="Tahunan">Tahunan</option>
                            <option <?php if ($sp->pajak == "5 Tahunan") {
                                        echo " selected='selected'";
                                    }
                                    echo $sp->pajak; ?> value="5 Tahunan">5 Tahunan</option>
                        </select>
                        <!-- <?php echo form_error('pajak', '<div class="text-small text-danger">', '</div>') ?> -->
                    </div>

                    <div class="form-group">
                        <label>Total Biaya</label>
                        <input type="text" name="total_biaya" class="form-control" value="<?php echo $sp->total_biaya ?>">
                        <?php echo form_error('total_biaya', '<div class="text-small text-danger">', '</div>') ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>
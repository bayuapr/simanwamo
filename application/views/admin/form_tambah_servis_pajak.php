<div class="main-content">
    <div class="section">
        <div class="section-header">
            <h1>Form Tambah Servis & Pajak Mobil</h1>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <form method="POST" action="<?php echo base_url('admin/data_servis_pajak/tambah_servis_pajak_aksi') ?>">
                <div class="form-group">
                    <label>Merek Mobil</label>
                    <select name="merek" class="form-control">
                        <option value="">--Pilih Merek Mobil--</option>
                        <?php foreach ($mobil as $mb) : ?>
                            <option value="<?php echo $mb->merek ?>"><?php echo $mb->merek ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?php echo form_error('merek', '<div class="text-small text-danger">', '</div>') ?>
                </div>

                <div class="form-group">
                    <label>Nomor Plat</label>
                    <select name="no_plat" class="form-control">
                        <option value="">--Pilih Nomor Plat--</option>
                        <?php foreach ($mobil as $mb) : ?>
                            <option value="<?php echo $mb->no_plat ?>"><?php echo $mb->no_plat ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?php echo form_error('no_plat', '<div class="text-small text-danger">', '</div>') ?>
                </div>
                

                <div class="form-group">
                    <label>Tanggal Transaksi</label>
                    <input type="date" name="tanggal" class="form-control">
                    <?php echo form_error('tanggal', '<div class="text-small text-danger">', '</div>') ?>
                </div>

                <div class="form-group">
                    <label>Servis</label>
                    <select name="servis" class="form-control">
                        <option value="-">--Pilih Servis--</option>
                        <option value="Mesin">Mesin</option>
                        <option value="Body">Body</option>
                        <option value="Full">Full</option>
                    </select>
                    <!-- <?php echo form_error('servis', '<div class="text-small text-danger">', '</div>') ?> -->
                </div>

                <div class="form-group">
                    <label>Pajak</label>
                    <select name="pajak" class="form-control">
                        <option value="-">--Pilih Pajak--</option>
                        <option value="Tahunan">Tahunan</option>
                        <option value="5 Tahun">5 Tahun</option>
                    </select>
                    <!-- <?php echo form_error('pajak', '<div class="text-small text-danger">', '</div>') ?> -->
                </div>

                <div class="form-group">
                    <label>Total Biaya</label>
                    <input type="text" name="total_biaya" class="form-control">
                    <?php echo form_error('total_biaya', '<div class="text-small text-danger">', '</div>') ?>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </form>
        </div>
    </div>
</div>
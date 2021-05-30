<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Transaksi Selesai</h1>
        </div>
    </section>
    <div class="card">
        <div class="card-body">
            <?php foreach ($transaksi as $tr) : ?>
                <form action="<?php echo base_url('admin/transaksi/transaksi_selesai_aksi') ?>" method="post">
                    <input type="hidden" name="id_sewa" value="<?php echo $tr->id_sewa ?>">
                    <input type="hidden" name="tanggal_kembali" value="<?php echo $tr->tanggal_kembali ?>">
                    <input type="hidden" name="denda" value="<?php echo $tr->denda ?>">

                    <div class="form-group">
                        <label>Supir</label>
                        <select name="nama_supir" class="form-control">
                            <option value="<?php echo $tr->nama_supir ?>"><?php echo $tr->nama_supir ?></option>
                            <?php foreach ($supir as $sp) : ?>
                                <option value="<?php echo $sp->nama_supir ?>"><?php echo $sp->nama_supir ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?php echo form_error('nama_supir', '<div class="text-small text-danger">', '</div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Jam Sewa</label>
                        <input type="time" name="jam_sewa" min="<?= time('H:i') ?>" class="form-control" value="<?php echo $tr->jam_sewa ?>" readonly>
                    </div>


                    <div class="form-group">
                        <label>Jam Kembali</label>
                        <input type="time" name="jam_kembali" min="<?= time('H:i') ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Tanggal Pengembalian</label>
                        <input type="date" name="tanggal_pengembalian" class="form-control" value="<?php echo $tr->tanggal_pengembalian ?>">
                    </div>

                    <div class="form-group">
                        <label>Jam Pengembalian</label>
                        <input type="time" name="jam_pengembalian" min="<?= time('H:i') ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Status Pengembalian</label>
                        <select name="status_pengembalian" class="form-control">
                            <option value="<?php echo $tr->status_pengembalian ?>"><?php echo $tr->status_pengembalian ?></option>
                            <option value="Kembali">Kembali</option>
                            <option value="Belum Kembali">Belum Kembali</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Status Sewa</label>
                        <select name="status_sewa" class="form-control">
                            <option value="<?php echo $tr->status_sewa ?>"><?php echo $tr->status_sewa ?></option>
                            <option value="Selesai">Selesai</option>
                            <option value="Belum Selesai">Belum Selesai</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>
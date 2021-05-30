<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Update Pelanggan</h1>
        </div>
    </section>
    <div class="card">
        <div class="card-body">
            <?php foreach ($pelanggan as $pg) : ?>
                <form method="POST" action="<?php echo base_url('admin/data_pelanggan/update_pelanggan_aksi') ?>">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="hidden" name="id_pelanggan" value="<?php echo $pg->id_pelanggan ?>">
                        <input type="text" name="nama" class="form-control" value="<?php echo $pg->nama ?>">
                        <?php echo form_error('nama', '<span class="text-small text-danger">', '</span>') ?>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo $pg->email ?>">
                        <?php echo form_error('email', '<span class="text-small text-danger">', '</span>') ?>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="<?php echo $pg->alamat ?>">
                        <?php echo form_error('alamat', '<span class="text-small text-danger">', '</span>') ?>
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <select class="form-control" name="gender">
                            <option value="<?php echo $pg->gender ?>"><?php echo $pg->gender ?></option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <?php echo form_error('gender', '<span class="text-small text-danger">', '</span>') ?>
                    </div>
                    <div class="form-group">
                        <label>No. Telepon</label>
                        <input type="text" name="no_telepon" class="form-control" value="<?php echo $pg->no_telepon ?>">
                        <?php echo form_error('no_telepon', '<span class="text-small text-danger">', '</span>') ?>
                    </div>
                    <div class="form-group">
                        <label>No. KTP</label>
                        <input type="text" name="no_ktp" class="form-control" value="<?php echo $pg->no_ktp ?>">
                        <?php echo form_error('no_ktp', '<span class="text-small text-danger">', '</span>') ?>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" value="<?php echo $pg->password ?>">
                        <?php echo form_error('password', '<span class="text-small text-danger">', '</span>') ?>
                    </div>

                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-sm btn-danger">Reset</button>

                </form>
            <?php endforeach; ?>

        </div>
    </div>
</div>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Update Supir</h1>
        </div>
    </section>
    <div class="card">
        <div class="card-body">
            <?php foreach ($supir as $sp) : ?>
                <form method="POST" action="<?php echo base_url('admin/data_supir/update_supir_aksi') ?>">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="hidden" name="id_supir" value="<?php echo $sp->id_supir ?>">
                        <input type="text" name="nama_supir" class="form-control" value="<?php echo $sp->nama_supir ?>">
                        <?php echo form_error('nama_supir', '<span class="text-small text-danger">', '</span>') ?>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo $sp->email ?>">
                        <?php echo form_error('email', '<span class="text-small text-danger">', '</span>') ?>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="<?php echo $sp->alamat ?>">
                        <?php echo form_error('alamat', '<span class="text-small text-danger">', '</span>') ?>
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <select class="form-control" name="gender">
                            <option value="<?php echo $sp->gender ?>"><?php echo $sp->gender ?></option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <?php echo form_error('gender', '<span class="text-small text-danger">', '</span>') ?>
                    </div>
                    <div class="form-group">
                        <label>No. Telepon</label>
                        <input type="text" name="no_telepon" class="form-control" value="<?php echo $sp->no_telepon ?>">
                        <?php echo form_error('no_telepon', '<span class="text-small text-danger">', '</span>') ?>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" value="<?php echo $sp->password ?>">
                        <?php echo form_error('password', '<span class="text-small text-danger">', '</span>') ?>
                    </div>

                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-sm btn-danger">Reset</button>

                </form>
            <?php endforeach; ?>

        </div>
    </div>
</div>
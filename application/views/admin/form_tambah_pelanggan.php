<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Tambah Pelanggan</h1>
        </div>
    </section>

    <div class="card">
        <div class="card-body">
            <form method="POST" action="<?php echo base_url('admin/data_pelanggan/tambah_pelanggan_aksi') ?>">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control">
                            <?php echo form_error('nama', '<span class="text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                            <?php echo form_error('email', '<span class="text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control">
                            <?php echo form_error('alamat', '<span class="text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <select class="form-control" name="gender">
                                <option value="">--Pilih Gender--</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            <?php echo form_error('gender', '<span class="text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <label>No. Telepon</label>
                            <input type="text" name="no_telepon" class="form-control">
                            <?php echo form_error('no_telepon', '<span class="text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <label>No. KTP</label>
                            <input type="text" name="no_ktp" class="form-control">
                            <?php echo form_error('no_ktp', '<span class="text-small text-danger">', '</span>') ?>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                            <?php echo form_error('password', '<span class="text-small text-danger">', '</span>') ?>
                        </div>

                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                        <button type="reset" class="btn btn-sm btn-danger">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
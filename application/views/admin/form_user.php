<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data User</h1>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="<?php echo base_url('admin/data_user/aksi') ?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama :</label>
                                <input type="text" name="nama" class="form-control">
                                <?php echo form_error('nama', '<div class="text-danger small">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Alamat Email :</label>
                                <input type="email" name="email" class="form-control">
                                <?php echo form_error('email', '<div class="text-danger small">', '</div>') ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nomor HP(WA) :</label>
                                <input type="text" name="no_hp" class="form-control">
                                <?php echo form_error('no_hp', '<div class="text-danger small">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Password :</label>
                                <input type="password" name="password" class="form-control">
                                <?php echo form_error('password', '<div class="text-danger small">', '</div>') ?>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                            <button type="reset" class="btn btn-danger mt-4">Reset</button>
                        </div>
                </form>
            </div>
        </div>
    </section>
</div>
<div class="main-content">
    <div class="section">
        <div class="section-header">
            <h1>Form Balas Pesan Pelanggan</h1>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <?php foreach ($hubungi as $hub) : ?>
                <form method="POST" action="<?php echo base_url('admin/hubungi/kirim_email_aksi') ?>">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="hidden" name="id_hubungi" class="form-control" value="<?php echo $hub->id_hubungi ?>">
                        <input type="email" name="email" class="form-control" value="<?php echo $hub->email ?>" readonly>
                        <?php echo form_error('email', '<div class="text-danger small">', '</div>') ?>
                    </div>

                    <div class="form-group">
                        <label>Subject</label>
                        <input type="text" name="subject" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Pesan</label>
                        <textarea type="text" name="pesan" class="form-control" rows="5"></textarea>
                        <?php echo form_error('pesan', '<div class="text-danger small">', '</div>') ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>
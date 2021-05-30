<div class="main-content">
    <div class="section">
        <div class="section-header">
            <h1>Pesan Dari Pelanggan</h1>
        </div>
    </div>
    <div class="card">
        <div class="card-body">

            <?php echo $this->session->flashdata('pesan'); ?>
            <div class="form-inline float-right mb-3">
                <?php echo form_open('admin/data_type/cari') ?>
                <input type="text" name="keyword" class="form-control" placeholder="Cari">
                <button type="submit" class="btn btn-success">Cari</button>
                <?php echo form_close() ?>
            </div>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th width="20px">No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Pesan</th>
                        <th width="180px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($hubungi as $hub) : ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $hub->nama ?></td>
                            <td><?php echo $hub->email ?></td>
                            <td><?php echo $hub->pesan ?></td>
                            <td>
                                <!-- <a href="<?php echo base_url('admin/hubungi/kirim_email/') . $hub->id_hubungi ?>" class="btn btn-sm btn-primary"><i class="fas fa-comment-dots"></i> <a> -->
                                        <a href="<?php echo base_url('admin/hubungi/delete/') . $hub->id_hubungi ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> <a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="main-content">
    <div class="section">
        <div class="section-header">
            <h1>Data Type Mobil</h1>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <a class="btn btn-primary mb-3" href="<?php echo base_url('admin/data_type/tambah_type') ?>">Tambah Type</a>
            <?php echo $this->session->flashdata('pesan'); ?>
            <div class="form-inline float-right mb-3">
                <?php echo form_open('admin/data_type/cari') ?>
                <input type="text" name="keyword" class="form-control" placeholder="Cari">
                <button type="submit" class="btn btn-success">Cari</button>
                <?php echo form_close() ?>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th width="20px">No</th>
                            <th>Kode Type</th>
                            <th>Nama Type</th>
                            <th width="180px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($type as $tp) : ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $tp->kode_type ?></td>
                                <td><?php echo $tp->nama_type ?></td>
                                <td>
                                    <a href="<?php echo base_url('admin/data_type/update_type/') . $tp->id_type ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> <a>
                                            <a href="<?php echo base_url('admin/data_type/delete_type/') . $tp->id_type ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> <a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
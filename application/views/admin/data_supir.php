<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data supir</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <a href="<?php echo base_url('admin/data_supir/tambah_supir') ?>" class="btn btn-primary mb-3">Tambah Supir</a>

                <?php echo $this->session->flashdata('pesan') ?>
                <div class="form-inline float-right mb-3">
                    <?php echo form_open('admin/data_supir/cari') ?>
                    <input type="text" name="keyword" class="form-control" placeholder="Cari">
                    <button type="submit" class="btn btn-success">Cari</button>
                    <?php echo form_close() ?>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-striped tab-bordered">
                        <tr>
                            <th>NO</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Gender</th>
                            <th>No. Telepon</th>
                            <th>Aksi</th>
                        </tr>
                        <?php
                        $no = 1;
                        foreach ($supir as $sp) : ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $sp->nama_supir ?></td>
                                <td><?php echo $sp->email ?></td>
                                <td><?php echo $sp->alamat ?></td>
                                <td><?php echo $sp->gender ?></td>
                                <td><?php echo $sp->no_telepon ?></td>
                                <td>


                                    <a href="<?php echo base_url('admin/data_supir/delete_supir/') . $sp->id_supir ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                    <a href="<?php echo base_url('admin/data_supir/update_supir/') . $sp->id_supir ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
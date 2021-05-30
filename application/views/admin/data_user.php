<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>DATA USER</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <a href="<?php echo base_url('admin/data_user/tambah_user') ?>" class="btn btn-primary mb-3">Tambah Data</a>

                <?php echo $this->session->flashdata('pesan') ?>
                <div class="form-inline float-right mb-3">
                    <?php echo form_open('admin/data_user/cari') ?>
                    <input type="text" name="keyword" class="form-control" placeholder="Cari">
                    <button type="submit" class="btn btn-success">Cari</button>
                    <?php echo form_close() ?>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover table-striped tab-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Nomor HP</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($user as $us) : ?>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $us->nama ?></td>
                                    <td><?php echo $us->email ?></td>
                                    <td><?php echo $us->no_hp ?></td>
                                    <td>
                                        <!-- <a href="<?php echo base_url('admin/penyitaan/detail_penyitaan/') . $py->id ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i> <a> -->
                                        <a href="<?php echo base_url('admin/data_user/update_user/') . $us->id_user ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> <a>
                                    </td>
                            </tr>
                        <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>

            </div>
    </section>
</div>
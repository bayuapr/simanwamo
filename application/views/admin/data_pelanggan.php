<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data pelanggan</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <a href="<?php echo base_url('admin/data_pelanggan/tambah_pelanggan') ?>" class="btn btn-primary mb-3">Tambah Pelanggan</a>

                <?php echo $this->session->flashdata('pesan') ?>
                <div class="form-inline float-right mb-3">
                    <?php echo form_open('admin/data_pelanggan/cari') ?>
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
                            <th>No. KTP</th>
                            <th>Aksi</th>
                        </tr>
                        <?php
                        $no = 1;
                        foreach ($pelanggan as $pg) : ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $pg->nama ?></td>
                                <td><?php echo $pg->email ?></td>
                                <td><?php echo $pg->alamat ?></td>
                                <td><?php echo $pg->gender ?></td>
                                <td><?php echo $pg->no_telepon ?></td>
                                <td><?php echo $pg->no_ktp ?></td>
                                <td>


                                    <a href="<?php echo base_url('admin/data_pelanggan/delete_pelanggan/') . $pg->id_pelanggan ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                    <a href="<?php echo base_url('admin/data_pelanggan/update_pelanggan/') . $pg->id_pelanggan ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
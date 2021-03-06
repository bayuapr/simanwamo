<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data mobil</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <a href="<?php echo base_url('admin/data_mobil/tambah_mobil') ?>" class="btn btn-primary mb-3">Tambah Data</a>
                <?php echo $this->session->flashdata('pesan') ?>
                <div class="form-inline float-right mb-3">
                    <?php echo form_open('admin/data_mobil/cari') ?>
                    <input type="text" name="keyword" class="form-control" placeholder="Cari">
                    <button type="submit" class="btn btn-success">Cari</button>
                    <?php echo form_close() ?>
                </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-striped tab-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Type</th>
                                    <th>Merek</th>
                                    <th>No. Plat</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    $no = 1;
                                    foreach ($mobil as $mb) : ?>
                                        <td><?php echo $no++ ?></td>
                                        <td><img width="60px" src="<?php echo base_url() . 'assets/upload/' . $mb->gambar ?>"></td>
                                        <td><?php echo $mb->kode_type ?></td>
                                        <td><?php echo $mb->merek ?></td>
                                        <td><?php echo $mb->no_plat ?></td>
                                        <td><?php
                                            if ($mb->status == "0") {
                                                echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                            } else {
                                                echo "<span class='badge badge-primary'>Tersedia</span>";
                                            }

                                            ?></td>
                                        <td>
                                            <a href="<?php echo base_url('admin/data_mobil/detail_mobil/') . $mb->id_mobil ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i> <a>
                                                    <a href="<?php echo base_url('admin/data_mobil/delete_mobil/') . $mb->id_mobil ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> <a>
                                                            <a href="<?php echo base_url('admin/data_mobil/update_mobil/') . $mb->id_mobil ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> <a>
                                        </td>
                                </tr>
                            <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
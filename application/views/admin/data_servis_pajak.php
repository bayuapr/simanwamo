<div class="main-content">
    <div class="section">
        <div class="section-header">
            <h1>Data Servis & Pajak Mobil</h1>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <a class="btn btn-primary mb-3" href="<?php echo base_url('admin/data_servis_pajak/tambah_servis_pajak') ?>">Tambah Servis Pajak</a>
            <?php echo $this->session->flashdata('pesan'); ?>
            <div class="form-inline float-right mb-3">
                <?php echo form_open('admin/data_servis_pajak/cari') ?>
                <input type="text" name="keyword" class="form-control" placeholder="Cari">
                <button type="submit" class="btn btn-success">Cari</button>
                <?php echo form_close() ?>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th width="20px">No</th>
                            <th>Merek Mobil</th>
                            <th>Nomor Plat</th>
                            <th>Tanggal Transaksi</th>
                            <th>Servis</th>
                            <th>Pajak</th>
                            <th>Total Biaya</th>
                            <th width="180px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($servis_pajak as $sp) : ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $sp->merek ?></td>
                                <td><?php echo $sp->no_plat ?></td>
                                <td><?php echo date('d/m/Y', strtotime($sp->tanggal));  ?></td>
                                <td><?php echo $sp->servis ?></td>
                                <td><?php echo $sp->pajak ?></td>
                                <td>Rp.<?php echo number_format($sp->total_biaya, 0, ',', '.')  ?></td>
                                <td>
                                    <a href="<?php echo base_url('admin/data_servis_pajak/update_servis_pajak/') . $sp->id_sp ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> <a>
                                            <a href="<?php echo base_url('admin/data_servis_pajak/delete_servis_pajak/') . $sp->id_sp ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> <a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
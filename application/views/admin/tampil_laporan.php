<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Laporan Transaksi</h1>
        </div>
    </section>
    <div class="card">
        <div class="card-body">
            <form method="POST" action="<?php echo base_url('admin/laporan') ?>">
                <div class="form-group">
                    <label>Dari Tanggal</label>
                    <input type="date" name="dari" class="form-control">
                    <?php echo form_error('dari', '<span class="text-small text-danger">', '</span>') ?>
                </div>

                <div class="form-group">
                    <label>Sampai Tanggal</label>
                    <input type="date" name="sampai" class="form-control">
                    <?php echo form_error('sampai', '<span class="text-small text-danger">', '</span>') ?>
                </div>

                <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-eye">Tampilkan Data Laporan</i></button>
            </form>
            <hr>

            <div class="btn-group">
                <a class="btn btn-sm btn-success" target="_blank" href="<?php echo base_url() . 'admin/laporan/cetak_laporan/?dari=' . set_value('dari') . '&sampai=' . set_value('sampai') ?>"><i class="fas fa-print"></i>Cetak</a>
            </div>

            <div class="table-responsive mt-3">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>No</th>
                        <th>Pelanggan</th>
                        <th>Mobil</th>
                        <th>Alamat</th>
                        <th>Tgl. Sewa</th>
                        <th>Jam Sewa</th>
                        <th>Tgl. Kembali</th>
                        <th>Jam Kembali</th>
                        <th>Harga/Hari</th>
                        <th>Denda/Hari</th>
                        <th>Supir/Hari</th>
                        <th>Total Denda</th>
                        <th>Tgl. Dikembalikan</th>
                        <th>Jam Dikembalikan</th>
                        <th>Status Pengembalian</th>
                        <th>Status Sewa</th>
                    </tr>

                    <?php $no = 1;
                    foreach ($laporan as $tr) : ?>

                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $tr->nama ?></td>
                            <td><?php echo $tr->merek ?></td>
                            <td><?php echo $tr->alamat_detail ?></td>
                            <td><?php echo date('d/m/Y', strtotime($tr->tanggal_sewa));  ?></td>
                            <td><?php echo date('H:i', strtotime($tr->jam_sewa)); ?></td>
                            <td><?php echo date('d/m/Y', strtotime($tr->tanggal_kembali));  ?></td>
                            <td><?php echo date('H:i', strtotime($tr->jam_kembali)); ?></td>
                            <td>Rp. <?php echo number_format($tr->harga, 0, ',', '.')  ?></td>
                            <td>Rp. <?php echo number_format($tr->denda, 0, ',', '.')  ?></td>
                            <td>Rp.<?php
                                    if ($tr->supir == 0) {
                                        echo "-";
                                    } else {
                                        echo number_format($tr->supir, 0, ',', '.');
                                    } ?></td>
                            <td>Rp.<?php
                                    if ($tr->total_denda == 0) {
                                        echo "-";
                                    } else {
                                        echo number_format($tr->total_denda, 0, ',', '.');
                                    } ?></td>
                            <td><?php
                                if ($tr->tanggal_pengembalian == "0000-00-00") {
                                    echo "-";
                                } else {
                                    echo date('d/m/Y', strtotime($tr->tanggal_pengembalian));
                                }
                                ?></td>
                            <td><?php
                                if ($tr->jam_pengembalian == "00:00:00") {
                                    echo "-";
                                } else {
                                    echo date('H:i', strtotime($tr->jam_pengembalian));
                                }
                                ?></td>
                            <td><?php echo $tr->status_pengembalian ?></td>
                            <td><?php echo $tr->status_sewa ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</div>
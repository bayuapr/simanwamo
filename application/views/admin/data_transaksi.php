<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Transaksi</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table table-bordered table-striped">
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
                            <th>Cek Pembayaran</th>
                            <th>Aksi</th>
                        </tr>

                        <?php $no = 1;
                        foreach ($transaksi as $tr) : ?>

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

                                <td>
                                    <center>
                                        <?php
                                        if (empty($tr->bukti_pembayaran)) { ?>
                                            <button class="btn btn-sm btn-danger"><i class="fas fa-times-circle"></i></button>
                                        <?php } else { ?>
                                            <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/transaksi/pembayaran/' . $tr->id_sewa) ?>"><i class="fas fa-check-circle"></i></a>
                                        <?php } ?>
                                    </center>
                                </td>

                                <td>
                                    <?php
                                    if ($tr->status == "1") {
                                        echo "-";
                                    } else { ?>

                                        <div class="row">
                                            <a class="btn btn-sm btn-success mr-1" href="<?php echo base_url('admin/transaksi/transaksi_selesai/' . $tr->id_sewa) ?>"><i class="fas fa-check"></i></a>
                                            <?php
                                            if ($tr->status_sewa == 'Belum Selesai') { ?>
                                                <a onclick="return confirm('Anda Yakin Batal ?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/transaksi/batal_transaksi/' . $tr->id_sewa) ?>"> <i class="fas fa-times"></i></a>
                                            <?php } else { ?>
                                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
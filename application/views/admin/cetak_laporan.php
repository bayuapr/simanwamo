<h2 style="text-align: center;">Laporan Transaksi Sewa Mobil</h2>
<table>
    <tr>
        <td>Dari Tanggal</td>
        <td>:</td>
        <td><?php echo date('d-M-Y', strtotime($_GET['dari'])); ?></td>
    </tr>
    <tr>
        <td>Sampai Tanggal</td>
        <td>:</td>
        <td><?php echo date('d-M-Y', strtotime($_GET['sampai'])); ?></td>
    </tr>

    <table class="table table-bordered table-striped mt-4">
        <tr>
            <th>No</th>
            <th>Pelanggan</th>
            <th>Mobil</th>
            <!-- <th>Alamat</th> -->
            <th>Tgl. Sewa</th>
            <!-- <th>Jam Sewa</th> -->
            <th>Tgl. Kembali</th>
            <!-- <th>Jam Kembali</th> -->
            <th>Harga/Hari</th>
            <th>Denda/Hari</th>
            <th>Supir/Hari</th>
            <th>Total Denda</th>
            <th>Tgl. Dikembalikan</th>
            <!-- <th>Jam Dikembalikan</th> -->
            <th>Status Pengembalian</th>
            <th>Status Sewa</th>
        </tr>

        <?php $no = 1;
        foreach ($laporan as $tr) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $tr->nama ?></td>
            <td><?php echo $tr->merek ?></td>
            <!-- <td><?php echo $tr->alamat_detail ?></td> -->
            <td><?php echo date('d/m/Y', strtotime($tr->tanggal_sewa));  ?></td>
            <!-- <td><?php echo date('H:i', strtotime($tr->jam_sewa)); ?></td> -->
            <td><?php echo date('d/m/Y', strtotime($tr->tanggal_kembali));  ?></td>
            <!-- <td><?php echo date('H:i', strtotime($tr->jam_kembali)); ?></td> -->
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
            <!-- <td><?php
                if ($tr->jam_pengembalian == "00:00:00") {
                    echo "-";
                } else {
                    echo date('H:i', strtotime($tr->jam_pengembalian));
                }
                ?></td> -->
            <td><?php echo $tr->status_pengembalian ?></td>
            <td><?php echo $tr->status_sewa ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</table>

<script type="text/javascript">
    window.print();
</script>
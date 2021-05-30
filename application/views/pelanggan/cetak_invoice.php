<table style="width:  60%">
    <?php foreach ($transaksi as $tr) : ?>
        <h2>Invoice Pembayaran Anda</h2>
        <tr>
            <td>Nama Pelanggan</td>
            <td>:</td>
            <td><?php echo $tr->nama ?></td>
        </tr>
        <tr>
            <td>Merek Mobil</td>
            <td>:</td>
            <td><?php echo $tr->merek ?></td>
        </tr>

        <tr>
            <td>Tanggal Sewa</td>
            <td>:</td>
            <td><?php echo $tr->tanggal_sewa ?></td>
        </tr>

        <tr>
            <td>Tanggal Kembali</td>
            <td>:</td>
            <td><?php echo $tr->tanggal_kembali ?></td>
        </tr>

        <tr>
            <td>Biaya Sewa/Hari</td>
            <td>:</td>
            <td>Rp. <?php echo number_format($tr->harga, 0, ',', '.') ?></td>
        </tr>

        <tr>
            <td>Biaya Supir/Hari</td>
            <td>:</td>
            <td>Rp. <?php echo number_format($tr->supir, 0, ',', '.') ?></td>
        </tr>

        <tr style="display:none;">
            <?php
            $x = ($tr->harga);
            $y = ($tr->supir);
            $jml = abs($x + $y);
            ?>
            <td>Jumlah Sewa + Mobil/Hari</td>
            <td>:</td>
            <td>Rp.<?php echo number_format($jml, 0, ',', '.') ?></td>
        </tr>

        <tr>
            <?php
            $x = strtotime($tr->tanggal_kembali);
            $y = strtotime($tr->tanggal_sewa);
            $jmlHari = abs(($x - $y) / (60 * 60 * 24));
            ?>
            <td>Jumlah Hari Sewa</td>
            <td>:</td>
            <td><?php echo $jmlHari ?> Hari</td>
        </tr>

        <tr>
            <td>Status Pembayaran</td>
            <td>:</td>
            <td>
                <?php
                if ($tr->status_pembayaran == '0') {
                    echo "Belum Lunas";
                } else {
                    echo "Lunas";
                }
                ?>
            </td>
        </tr>



        <tr style="font-weight: bold; color: green">
            <td>JUMLAH PEMBAYARAN</td>
            <td>:</td>
            <td>Rp. <?php echo number_format($jml * $jmlHari, 0, ',', '.') ?></button></td>
        </tr>

        <hr>
        <!-- <tr>
            <td>Rekening Pembayaran</td>
            <td>:</td>
            <td>
                <ul>
                    <li>Bank BRI 1239437982870</li>
                    <li>Bank BNI 1239437982870</li>
                </ul>
            </td>
        </tr> -->

    <?php endforeach; ?>
</table>

<script type="text/javascript">
    window.print();
</script>
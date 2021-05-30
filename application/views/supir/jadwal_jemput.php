<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Jemput</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table table-bordered table-striped">
                        <tr>
                            <th>No</th>
                            <th>Nama Supir</th>
                            <th>Nama Pelanggan</th>
                            <th>Mobil</th>
                            <th>Alamat</th>
                            <th>Tgl. Kembali</th>
                            <th>Jam Kembali</th>
                        </tr>

                        <?php $no = 1;
                        foreach ($transaksi as $tr) : ?>

                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $tr->nama_supir ?></td>
                                <td><?php echo $tr->nama ?></td>
                                <td><?php echo $tr->merek ?></td>
                                <td><?php echo $tr->alamat_detail ?></td>
                                <td><?php echo date('d/m/Y', strtotime($tr->tanggal_kembali));  ?></td>
                                <td><?php echo date('H:i', strtotime($tr->jam_kembali)); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
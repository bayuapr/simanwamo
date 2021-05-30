<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail mobil</h1>
        </div>
    </section>
    <?php foreach ($detail as $dt) : ?>
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-5">
                        <img width="300px" src="<?php echo base_url() . 'assets/upload/' . $dt->gambar ?>" alt="">
                    </div>
                    <div class="col-md-7">
                        <table class="table">
                            <tr>
                                <td>Type Mobil</td>
                                <td>
                                    <?php
                                    if ($dt->kode_type == "SDN") {
                                        echo "Sedan";
                                    } elseif ($dt->kode_type == "HTB") {
                                        echo "Hatchback";
                                    } elseif ($dt->kode_type == "MPV") {
                                        echo "Multi Purpose Vechile";
                                    } else {
                                        echo "<span class='text-danger'>Type Mobil Belum Terdaftar</span>";
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Merek</td>
                                <td><?php echo $dt->merek ?></td>
                            </tr>
                            <tr>
                                <td>No.Plat</td>
                                <td><?php echo $dt->no_plat ?></td>
                            </tr>
                            <tr>
                                <td>Warna</td>
                                <td><?php echo $dt->warna ?></td>
                            </tr>
                            <tr>
                                <td>Tahun</td>
                                <td><?php echo $dt->tahun ?></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>
                                    <?php
                                    if ($dt->status == "0") {
                                        echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                    } else {
                                        echo "<span class='badge badge-primary'>Tersedia</span>";
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td>Rp. <?php echo number_format($dt->harga, 0, ',', '.')  ?></td>
                            </tr>
                            <tr>
                                <td>Denda</td>
                                <td>Rp. <?php echo number_format($dt->denda, 0, ',', '.')  ?></td>
                            </tr>
                            <tr>
                                <td>Supir</td>
                                <td>Rp. <?php echo number_format($dt->supir, 0, ',', '.')  ?></td>
                            </tr>
                            <tr>
                                <td>Tape/CD</td>
                                <td>
                                    <?php
                                    if ($dt->tape_cd == "0") {
                                        echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                    } else {
                                        echo "<span class='badge badge-primary'>Tersedia</span>";
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Dongkrak & Stang</td>
                                <td>
                                    <?php
                                    if ($dt->dongkrak_stang == "0") {
                                        echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                    } else {
                                        echo "<span class='badge badge-primary'>Tersedia</span>";
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Ban Cadangan</td>
                                <td>
                                    <?php
                                    if ($dt->ban_cadangan == "0") {
                                        echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                    } else {
                                        echo "<span class='badge badge-primary'>Tersedia</span>";
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Karpet</td>
                                <td>
                                    <?php
                                    if ($dt->karpet == "0") {
                                        echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                    } else {
                                        echo "<span class='badge badge-primary'>Tersedia</span>";
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Kunci Roda</td>
                                <td>
                                    <?php
                                    if ($dt->kunci_roda == "0") {
                                        echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                    } else {
                                        echo "<span class='badge badge-primary'>Tersedia</span>";
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Tempat Tisue</td>
                                <td>
                                    <?php
                                    if ($dt->tempat_tisue == "0") {
                                        echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                                    } else {
                                        echo "<span class='badge badge-primary'>Tersedia</span>";
                                    } ?>
                                </td>
                            </tr>
                        </table>
                        <a class="btn btn-sm btn-danger ml-4" href="<?php echo base_url('admin/data_mobil') ?>">Kembali</a>
                        <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/data_mobil/update_mobil/' . $dt->id_mobil) ?>">Update</a>
                    </div>

                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
    <section class="inner-page-banner bg_img overlay-3" data-background="<?php echo base_url('assets/') ?>assets_shop/images/inner-page-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">Hubungi Kami</h2>
                    <ol class="page-list">
                        <li><a href="<?php echo base_url('pelanggan/dashboard') ?>"><i class="fa fa-home"></i> Beranda</a></li>
                        <li>Hubungi Kami</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <form action="<?php echo base_url('pelanggan/hubungi/kirim_pesan') ?>" method="post">
        <div class="container mt-5 mb-5">
            <?php echo $this->session->flashdata('pesan') ?>
            <div class="card">
                <div class="card-header">
                    Form Hubungi Kami
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" name="nama" class="form-control" placeholder="Nama..">
                        <?php echo form_error('nama', '<div class="text-danger small">', '</div>') ?>
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email..">
                        <?php echo form_error('email', '<div class="text-danger small">', '</div>') ?>
                    </div>

                    <div class="form-group">
                        <textarea type="text" name="pesan" class="form-control" rows="5" placeholder="Pesan.."></textarea>
                        <?php echo form_error('pesan', '<div class="text-danger small">', '</div>') ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </div>
        </div>
    </form>

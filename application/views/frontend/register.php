    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Welcome People..!!</h1>
                    <br>
                    <form action="<?= base_url('auth/register') ?>" method="post">
                        <div class="row">
                            <div class="form-group col-md-10">
                                <?php echo $this->session->flashdata('message'); ?>
                                <div class="d-grid gap-2">
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Input Your Name Here"> <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Input Your Email Here"> <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                                    <div class="row">
                                        <div class="col">
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Input Your Password Here"> <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                        <div class="col">
                                            <input type="password" class="form-control" name="konf-password" id="konf-password" placeholder="Confirm Your Password Here"> <?= form_error('konf-password', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn-get-started">Register</button>
                                </div>
                                <br>
                                <div class="text-center">
                                    <a class="text-white">Sudah Memiliki Akun?</a><a href="<?= base_url('auth') ?>"><strong> Masuk</strong></a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="<?= base_url() ?>/assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->
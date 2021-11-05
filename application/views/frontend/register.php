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
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap"> <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                                    <div class="row">
                                        <div class="col">
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Email Aktif"> <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                        <div class="col">
                                            <input type="text" onkeypress="return hanyaAngka(event)" name="nomor" class="form-control" id="nomor" placeholder="Nomor Handphone"> <?= form_error('nomor', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Password"> <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                        <div class="col">
                                            <input type="password" class="form-control" name="konf-password" id="konf-password" placeholder="Konfirmasi Password"> <?= form_error('konf-password', '<small class="text-danger pl-3">', '</small>') ?>
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
        <script>
            function hanyaAngka(event) {
                var angka = (event.which) ? event.which : event.keyCode
                if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
                    return false;
                return true;
            }
        </script>
    </section><!-- End Hero -->
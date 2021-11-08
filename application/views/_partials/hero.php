    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Tempat Terbaik Untuk Belajar Bisnis Ekspor-Impor</h1>
                    <h2>Kami akan membantu anda untuk belajar tentang bisnis ekspor dan impor</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <?php if (isset($user['email']) && $user['is_member'] == 0) : ?>
                            <a href="<?= base_url('frontend/membership') ?>" class="btn-get-started scrollto">Menjadi Anggota</a>
                        <?php elseif (!isset($user['email'])) : ?>
                            <a href="<?= base_url('home/membership') ?>" class="btn-get-started scrollto">Menjadi Anggota</a>
                        <?php endif; ?>
                    </div>

                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="<?= base_url() ?>/assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->
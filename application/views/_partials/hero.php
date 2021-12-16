    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                <div class="section-title">
                    <?php if (!isset($user['email'])) : ?>
                        <h1>Komunitas Ekspor Indonesia (KOIN)</h1>
                        <h2>Let's Go International With Us !!</h2>
                        <a href="<?= base_url('home/membership') ?>" class="btn-get-started scrollto">Daftar Sekarang</a>
                        <?php else: ?>
                            <h1><?=$title?></h1>
                            <h2>Let's Go International With Us !!</h2>
                            <?php endif; ?>
                </div>
            </div>
 
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <a href="<?= base_url()?>"><img src="<?= base_url() ?>/assets/img/logo-putih.png" class="img-fluid animated" alt=""></a>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->
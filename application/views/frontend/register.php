    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Welcome People..!!</h1>
                    <br>
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="form-group col-md-10">
                                <div class="d-grid gap-2">
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Input Your Name Here" required>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Input Your Email Here" required>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Input Your Password Here" required>
                                    <input type="password" class="form-control" name="konf-password" id="konf-password" placeholder="Confirm Your Password Here" required>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <div class="d-grid gap-2">
                                                <a href="" class="btn btn-success">Register</a>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="d-grid gap-2">
                                                <a href="<?= base_url('auth') ?>" type="submit" class="btn btn-primary">Back</a>
                                            </div>
                                        </div>
                                    </div>
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
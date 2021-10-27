    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Welcome People..!!</h1>
                    <br>
                    <form action="<?= base_url('') ?>" method="post">
                        <div class="row">
                            <div class="form-group col-md-8">
                                <div class="d-grid gap-2">
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="old_password" name="old_password" placeholder="Old Password"><?= form_error('old_password', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="new_password" name="new_password" placeholder="New Password"><?= form_error('new_password', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="konf_password" name="konf_password" placeholder="Confirm New Password"><?= form_error('konf_password', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="d-grid gap-2">
                                                    <button type="submit" class="btn btn-primary">Save Password</button>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-grid gap-2">
                                                    <a href="<?= base_url('frontend/profile') ?>" class="btn btn-danger">Back to Profile</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="<?= base_url('/assets/img/userimage/') . $user['foto_user']; ?>" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->
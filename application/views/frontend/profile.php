        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg">
            <div class="container-fluid" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
                        <div class="content">
                            <h3>My <strong>Profile</strong></h3>
                            <p></p>
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="<?= base_url('/assets/img/userimage/') . $user['foto_user']; ?>" class="img-fluid rounded-start img-thumbnail" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $user['nama'] ?></h5>
                                            <p class="card-text"><?= $user['email']; ?></p>
                                            <p class="card-text"><small class="text-muted">Joined Since <?php echo date('d F Y', $user['date_created']); ?> </small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-list">
                            <ul>
                                <li>
                                    <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#accordion-list-4">Change Profile Picture<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
                        <div class="content">
                            <h3><strong>Renew</strong> Your Password</h3>
                            <p>
                                <strong>Renew</strong> or <strong>update</strong> your password regularly to prevent account break-ins
                            </p>
                            <!-- <button class="btn btn-primary" onclick="">Change Password?</button> -->
                        </div>
                        <div class="accordion-list">
                            <ul>
                                <li>
                                    <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#accordion-list-1">Change Password Form <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-1" class="collapse" data-bs-parent=".accordion-list">
                                        <p></p>
                                        <form action="" method="POST">
                                            <div class="mb-3">
                                                <label for="old-password" class="form-label">Old Password</label>
                                                <input type="password" class="form-control" name="old-password" id="old-password" placeholder="Input Your Old Password Here">
                                            </div>
                                            <div class="mb-3">
                                                <label for="new-password" class="form-label">New Password</label>
                                                <input type="password" class="form-control" name="new-password" id="new-password" placeholder="Input Your New Password Here">
                                            </div>
                                            <div class="mb-3">
                                                <label for="konf-password" class="form-label">Confirm Password</label>
                                                <input type="password" class="form-control" name="konf-password" id="konf-password" placeholder="Confirm Your New Password Here">
                                            </div>
                                            <button type="submit" class="btn btn-success">Save Password</button>
                                        </form>
                                    </div>
                                </li>
                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed">Delete Account<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->
        <!-- ======= Why Us Section ======= -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            function previewFile(input) {
                var file = $("input[type=file]").get(0).files[0];
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function() {
                        $("#foto").attr("src", reader.result);
                    }
                    reader.readAsDataURL(file);
                }
            }
        </script>

        <section id="why-us" class="why-us section-bg">
            <div class="container-fluid" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
                        <div class="content">
                            <h3>My <strong>Profile</strong></h3>
                            <p></p>
                            <div class="card">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img id="foto" src="<?= base_url('/assets/img/userimage/') . $user['foto_user']; ?>" class="img-fluid rounded-start img-thumbnail" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $user['nama'] ?></h5>
                                            <p class="card-text"><?= $user['email']; ?></p>
                                            <p class="card-text">
                                                <?php if ($user['is_active'] == 1) {
                                                    echo "You're a Member";
                                                } else if ($user['is_active'] == 0) {
                                                    echo "You're not a Member";
                                                } ?>
                                            </p>
                                            <p class="card-text"><small class="text-muted">Joined Since <?= date('d F Y', $user['date_created']); ?> </small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="accordion-list">
                            <ul>
                                <li>
                                    <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#accordion-list-4">Change Profile Picture<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                                        <p></p>
                                        <form action="<?= base_url('frontend/profile/changeImage') ?>">
                                            <div class="mb-3">
                                                <label for="foto" class="form-label">New Picture</label>
                                                <input type="file" accept="image/*" class="form-control" onchange="previewFile(this);" name="foto" id="foto">
                                                <input hidden type="text" class="form-control" name="id_user" id="id_user" value="<?= $user['id_user'] ?>">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
                        <div class="content">
                            <h3><strong>Manage</strong> Your Account</h3>
                        </div>
                        <br>
                        <div class="accordion-list">
                            <ul>
                                <li>
                                    <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#accordion-list-1">Account Management<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-1" class="collapse" data-bs-parent=".accordion-list">
                                        <p></p>
                                        <div class="d-grid gap-2">
                                            <a href="<?= base_url('frontend/profile/changeName') ?>" class="btn btn-primary">Change Name</a>
                                            <a href="<?= base_url('frontend/profile/changeImage') ?>" class="btn btn-primary">Change Profile Picture</a>
                                            <a href="<?= base_url('frontend/profile/changePass') ?>" class="btn btn-primary">Change Password</a>
                                            <a href="<?= base_url('frontend/profile/delete/' . $user['id_user']) ?>" class="btn btn-danger">Delete My Account</a>
                                        </div>
                                        <!-- <form action="<?= site_url('frontend/profile') ?>" method="POST" enctype="multipart/form-data">
                                            <div class="d-grid gap-2">
                                                <input type="password" class="form-control" name="old-password" id="old-password" placeholder="Input Your Old Password Here">
                                                <input type="password" class="form-control" name="new-password" id="new-password" placeholder="Input Your New Password Here">
                                                <input type="password" class="form-control" name="konf-password" id="konf-password" placeholder="Confirm Your New Password Here">
                                                <button type="submit" class="btn btn-primary">Save Password</button>
                                            </div>
                                        </form> -->
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->
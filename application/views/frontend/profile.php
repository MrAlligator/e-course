        <!-- ======= Why Us Section ======= -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    function previewFile(input){
        var file = $("input[type=file]").get(0).files[0];
        if(file){
            var reader = new FileReader();
            reader.onload = function(){
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
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img id="foto" src="<?= base_url('/assets/img/userimage/') . $user['foto_user']; ?>" class="img-fluid rounded-start img-thumbnail" alt="...">
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
                                        <p></p>
                                        <form action="<?= base_url('frontend/profile/changeImage') ?>">
                                            <div class="mb-3">
                                                <label for="foto" class="form-label">New Picture</label>
                                                <input type="file" accept="image/*" class="form-control" onchange="previewFile(this);" name="foto" id="foto">
                                                <input hidden type="text" class="form-control" name="id_user" id="id_user" value="<?= $user['id_user']?>">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </form>
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
                            <?php echo $this->session->flashdata('message'); ?>
                            <form action="<?= site_url('frontend/profile/changepass') ?>" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="old-password" class="form-label">Old Password</label>
                                    <input type="password" class="form-control" name="old-password" id="old-password" placeholder="Input Your Old Password Here"><?= form_error('old-password', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="mb-3">
                                    <label for="new-password" class="form-label">New Password</label>
                                    <input type="password" class="form-control" name="new-password" id="new-password" placeholder="Input Your New Password Here"><?= form_error('new-password', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="mb-3">
                                    <label for="konf-password" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" name="konf-password" id="konf-password" placeholder="Confirm Your New Password Here"><?= form_error('konf-password', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <button type="submit" class="btn btn-primary">Save Password</button>
                            </form>
                        </div>
                        <br>
                        <div class="accordion-list">
                            <ul>
                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed">Delete Account<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                        <p></p>
                                        <div class="d-grid gap-2">
                                            <a href="<?= base_url('frontend/profile/delete/' . $user['id_user']) ?>" class="btn btn-danger">Delete My Account</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->


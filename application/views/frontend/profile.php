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
                            <h3><strong>Atur</strong> Akun</h3>
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
                                            <p class="card-text"><small class="text-muted">Bergabung Sejak <?= date('d F Y', $user['date_created']); ?> </small></p>
                                            <p class="card-text">
                                                <?php if ($user['role_id'] == 3) {
                                                    echo "Anggota Premium";
                                                } else if ($user['role_id'] == 2) {
                                                    echo "Keanggotaan Gratis";
                                                } else if ($user['role_id'] == 1) {
                                                    echo "Administrator";
                                                } ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <?php if ($user['role_id'] == 2) { ?>
                        <a href="<?= base_url('frontend/membership') ?>" class="btn btn-primary">Menjadi Anggota Premium</a>
                        <?php } ?>
                        <br>
                        <div class="accordion-list">
                            <ul>
                                <li>
                                    <h5>Ubah Nama Pengguna</h5>
                                    <div id="accordion-list-3" class="collapse show" data-bs-parent=".accordion-list">
                                        <p></p>
                                        <form action="<?= base_url('profile/changeName') ?>" method="POST" enctype="multipart/form-data">
                                            <div class="d-grid gap-2">
                                                <input type="text" name="newName" id="newName" class="form-control" placeholder="Nama Baru" aria-label="Nama Baru"><?= form_error('old-password', '<small class="text-danger pl-3">', '</small>') ?>
                                                <button type="submit" class="btn btn-primary">Simpan Nama Baru</button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li>
                                    <h5>Ubah Foto Profil</h5>
                                    <div id="accordion-list-4" class="collapse show" data-bs-parent=".accordion-list">
                                        <p></p>
                                        <form action="<?= base_url('profile/changeImage') ?>" method="POST" enctype="multipart/form-data">
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
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
                        <div class="content">
                            <h3><strong>Perbaharui</strong> Password</h3>
                            <p>Perbaharui password secara rutin untuk menghindari pembobolan akun.</p>
                        </div>
                        <br>
                        <div class="accordion-list">
                            <ul>
                                <li>
                                    <h5>Ubah Password</h5>
                                    <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                        <p></p>
                                        <form action="<?= site_url('profile') ?>" method="POST" enctype="multipart/form-data">
                                            <div class="d-grid gap-2">
                                                <input type="password" class="form-control" name="old-password" id="old-password" placeholder="Input Your Old Password Here"><?= form_error('old-password', '<small class="text-danger pl-3">', '</small>') ?>
                                                <input type="password" class="form-control" name="new-password" id="new-password" placeholder="Input Your New Password Here"><?= form_error('new-password', '<small class="text-danger pl-3">', '</small>') ?>
                                                <input type="password" class="form-control" name="konf-password" id="konf-password" placeholder="Confirm Your New Password Here"><?= form_error('konf-password', '<small class="text-danger pl-3">', '</small>') ?>
                                                <button type="submit" class="btn btn-primary">Simpan Password Baru</button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li>
                                    <h5>Hapus Akun</h5>
                                    <div id="accordion-list-2" class="collapse show" data-bs-parent=".accordion-list">
                                        <p></p>
                                        <div class="d-grid gap-2">
                                            <a href="<?= base_url('profile/delete/' . $user['id_user']) ?>" class="btn btn-danger">Hapus Akun</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->
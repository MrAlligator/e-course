<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<section id="membership" class="pricing">
    <div class="container" data-aos="fade-up">

<br><br><br>
<div class="section-title">
    <h2>Membership</h2>
    <p>Membership</p>
</div>

        <div class="row">
            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                    <h3>Keuntungan Menjadi Anggota</h3>
                    <!-- <h4><sup>Rp</sup>0<span>per bulan</span><br><span>Keuntungan</span></h4> -->
                    <ul>
                        <li><i class="bx bx-check"></i>
                            <h6>Dapat Data Buyers</h6>
                        </li>
                        <li><i class="bx bx-check"></i>
                            <h6>Dapat Data Inquiries</h6>
                        </li>
                        <li><i class="bx bx-check"></i>
                            <h6>Kalkulator Ekspor</h6>
                        </li>
                        <li><i class="bx bx-check"></i>
                            <h6>Konten Edukasi</h6>
                        </li>
                        <li><i class="bx bx-check"></i>
                            <h6>Tergabung Dalam Group Telegram</h6>
                        </li>
                        <li><i class="bx bx-check"></i>
                            <h6>Sharing Sesama Member</h6>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-8 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box">
                    <h3>Formulir Pendaftaran</h3>
                    <form action="<?= base_url('auth/register') ?>" method="post">
                        <div class="row">
                            <h3>Data Pribadi</h3>
                            <div class="form-group">
                                <?php echo $this->session->flashdata('message'); ?>
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" id="nama"> <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                                <div class="row">
                                    <div class="col">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" id="email"> <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <div class="col">
                                        <label>Nomor Handphone</label>
                                        <input type="text" onkeypress="return hanyaAngka(event)" name="nomor" class="form-control" id="nomor"> <?= form_error('nomor', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label>Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" name="password" id="password"><?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                                            <span id="show_pass" class="input-group-text"><i id="pass_icon" class="bi bi-eye-fill"></i></span>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label>Konfirmasi Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" name="konf-password" id="konf-password"> <?= form_error('konf-password', '<small class="text-danger pl-3">', '</small>') ?>
                                            <span id="show_pass_konf" class="input-group-text"><i id="pass_konf_icon" class="bi bi-eye-fill"></i></span>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col">
                                        <label>Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" name="password" id="password"><?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                                            <span id="show_pass" class="input-group-text"><i id="pass_icon" class="bi bi-eye-fill"></i></span>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label>Konfirmasi Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" name="konf-password" id="konf-password"> <?= form_error('konf-password', '<small class="text-danger pl-3">', '</small>') ?>
                                            <span id="show_pass_konf" class="input-group-text"><i id="pass_konf_icon" class="bi bi-eye-fill"></i></span>
                                        </div>
                                    </div>
                                </div><br>
                        <div class="row">
                            <h3>Data Perusahaan</h3>
                            <div class="form-group">
                                <?php echo $this->session->flashdata('message'); ?>
                                <label for="nama">Nama Usaha</label>
                                <input type="text" class="form-control" name="nama" id="nama"> <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                                <div class="row">
                                    <div class="col">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" id="email"> <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <div class="col">
                                        <label>Nomor Handphone</label>
                                        <input type="text" onkeypress="return hanyaAngka(event)" name="nomor" class="form-control" id="nomor"> <?= form_error('nomor', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label>Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" name="password" id="password"><?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                                            <span id="show_pass" class="input-group-text"><i id="pass_icon" class="bi bi-eye-fill"></i></span>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label>Konfirmasi Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" name="konf-password" id="konf-password"> <?= form_error('konf-password', '<small class="text-danger pl-3">', '</small>') ?>
                                            <span id="show_pass_konf" class="input-group-text"><i id="pass_konf_icon" class="bi bi-eye-fill"></i></span>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="text-center">
                                    <button type="submit" class="buy-btn">Daftar</button>
                                </div>
                                <div class="text-center">
                                    <p></p>Sudah Memiliki Akun?<a href="<?= base_url('auth') ?>"><strong> Masuk</strong></a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>

<script>
    $(document).ready(function() {
        $('#show_pass').click(function() {
            if ('password' == $('#password').attr('type')) {
                $('#pass_icon').attr("class", "bi bi-eye-slash-fill");
                $('#password').attr('type', 'text');
            } else {
                $('#pass_icon').attr("class", "bi bi-eye-fill");
                $('#password').attr('type', 'password');
            }
        });

        $('#show_pass_konf').click(function() {
            if ('password' == $('#konf-password').attr('type')) {
                $('#pass_konf_icon').attr("class", "bi bi-eye-slash-fill");
                $('#konf-password').attr('type', 'text');
            } else {
                $('#pass_konf_icon').attr("class", "bi bi-eye-fill");
                $('#konf-password').attr('type', 'password');
            }
        });
    });
</script>
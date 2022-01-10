<script src="https://google.com/recaptcha/api.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<section id="membership" class="pricing">
    <div class="container" data-aos="fade-up">

<br><br><br>
<div class="section-title">
    <h2>Keanggotaan</h2>
    <p>Halaman Keanggotaan digunakan pengguna baru untuk mendaftar menjadi member</p>
</div>

        <div class="row">
            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                <div class="card card-header text-center">
                    <h3>Keuntungan Menjadi Anggota</h3></div>
                    <div class="card card-body">
                    <!-- <h4><sup>Rp</sup>0<span>per bulan</span><br><span>Keuntungan</span></h4> -->
                    <ul>
                        <?php foreach($keuntungan as $keuntungan): ?>
                            <li><i class="bx bx-check"></i>
                            <h6><?=$keuntungan->keuntungan?></h6>
                            </li>
                        <?php endforeach?>
                    </ul>
                </div>
            </div>
 
<div class="col-lg-8 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
    <div class="card card-header text-center">
        <h3>Formulir Pendaftaran</h3>
    </div>
        
<form action="<?= base_url('auth/daftar') ?>" method="post">
    <div class="card card-body">
            <div class="text-center">
                <h5>Data Pribadi</h5><p></p>
            </div>
            <?php echo $this->session->flashdata('message'); ?>
            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
            <label for="nama"><h6>Nama Lengkap</h6></label>
            <input type="text" class="form-control" name="nama" id="nama"> <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                <div class="row">
                    <div class="col">
                        <label for="email"><h6>Alamat Email</h6></label>
                        <input type="email" name="email" class="form-control" id="email"> <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="col">
                        <label><h6>Nomor Handphone</h6></label>
                        <input type="text" onkeypress="return hanyaAngka(event)" name="nomor" class="form-control" id="nomor"> <?= form_error('nomor', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label><h6>Password</h6></label>
                        <div class="input-group">
                            <input type="password" class="form-control" name="password" id="password"><?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                            <span id="show_pass" class="input-group-text"><i id="pass_icon" class="bi bi-eye-fill"></i></span>
                        </div>
                    </div>
                    <div class="col">
                        <label><h6>Konfirmasi Password</h6></label>
                        <div class="input-group">
                            <input type="password" class="form-control" name="konf-password" id="konf-password"> <?= form_error('konf-password', '<small class="text-danger pl-3">', '</small>') ?>
                            <span id="show_pass_konf" class="input-group-text"><i id="pass_konf_icon" class="bi bi-eye-fill"></i></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label><h6>Tanggal Lahir</h6></label>
                        <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir"><?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                    </div>
                    <div class="col">
                        <label><h6>Jenis Kelamin</h6></label>
                        <select class="form-control" name="jenis_kelamin">
                            <option disabled selected>Pilih</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div><br>
                <label><h6>Kota Tempat Tinggal</h6></label>
                <input type="text" class="form-control" name="kota_tinggal" id="kota_tinggal"> <?= form_error('konf-password', '<small class="text-danger pl-3">', '</small>') ?>
            <br></div>
            
            <div class="card card-body">
                <div class="text-center">
                    <h5>Data Perusahaan</h5>
                </div><br>
                <?php echo $this->session->flashdata('message'); ?>
                    <label for="nama"><h6>Nama Usaha</h6></label>
                    <input type="text" class="form-control" name="nama_usaha" id="nama_usaha"><br>
                    
                    <label for="nama"><h6>Alamat Usaha</h6></label>
                    <input type="text" name="alamat_usaha" class="form-control" id="alamat_usaha"><br>
                    
                    <label><h6>Kota Lokasi Usaha</h6></label>
                    <input type="text" class="form-control" name="kota_usaha" id="kota_usaha">
                    
                <div class="row">
                    <div class="col">
                        <label><h6>Tahun Berdiri</h6></label>
                        <input type="number" class="form-control" name="tahun_berdiri" id="tahun_berdiri" min="1700" max="2025" maxlength=4>
                    </div>
                    <div class="col">
                        <label><h6>Jumlah Karyawan</h6></label>
                        <div class="input-group">
                        <input type="number" class="form-control" name="jumlah_karyawan" id="jumlah_karyawan">
                        <span class="input-group-text"><h6>orang</h6></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <label><h6>Alamat Email Usaha (Jika Ada)</h6></label>
                        <input type="email" class="form-control" name="email_usaha" id="email_usaha">
                    </div>
                    <div class="col-6">
                        <label><h6>Nomor Telepon Usaha</h6></label>
                        <input type="text" class="form-control" name="telp_usaha" id="telp_usaha">
                    </div>
                </div><br>

                <label for="nama"><h6>Produk yang di Ekspor</h6></label>
                <input type="text" name="produk_ekspor" class="form-control" id="produk_ekspor">

                <div class="row">
                    <div class="col-6">
                        <label><h6>Omset Usaha per Tahun</h6></label>
                        <div class="input-group">
                            <span class="input-group-text"><h6>Rp</h6></span>
                                <input type="number" class="form-control" name="omset" id="omset">
                        </div>
                    </div>
                    <div class="col-6">
                    <div class="g-recaptcha" data-sitekey="6Lfqp74dAAAAANRqXosCWSVeEBaxM1F4KV6C32Jf"></div>
                    </div>
                </div><br>
                
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Daftar</button>
                    <p></p>Sudah Memiliki Akun?<a href="<?= base_url('auth') ?>"><strong> Masuk</strong></a>
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
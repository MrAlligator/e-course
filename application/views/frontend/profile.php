<!-- ======= Why Us Section ======= -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
  <div class="container" data-aos="fade-up">
    <br><br><br><br>

    <div class="section-title">
      <h2>Profil Pengguna</h2>
      <p>Atur akunmu</p>
    </div>

    <div class="row">
      <?= $this->session->flashdata('message'); ?>
      <!-- Card Foto Profil -->
      <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="member d-flex align-items-start">
          <figure class="figure">
            <img id="foto" src="<?= base_url('/assets/img/userimage/') . $user['foto_user']; ?>" class="img-fluid " alt="<?= $user['nama']; ?>">
            <p>
            <h4 class="text-center"><?= $user['nama'] ?></h4>
            </p>
            <figcaption class="figure-caption">
              <h6 class="text-center">Bergabung Sejak <?= date('d F Y', $user['date_created']); ?></h6>
            </figcaption>
            <div class="row justify-content-end">
              <button type="button" class="btn btn-sm btn-outline-dark" data-bs-toggle="collapse" data-bs-target="#ubah-profil"><i class="ri-edit-line"> Ubah profil</i></button>
            </div><br>

            <!-- Collapse -->
            <div class="collapse" id="ubah-profil">
              <form action="<?= base_url('profile/changeProfile') ?>" method="post" enctype="multipart/form-data">
                <div class="row justify-content-end">
                  <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
                  <label for="name">
                    <h6>Ubah foto profil</h6>
                  </label>
                  <input hidden type="text" class="form-control" name="fotoDulu" id="fotoDulu" value="<?= $user['foto_user'] ?>">
                  <input type="file" accept="image/*" class="form-control" onchange="previewFile(this);" name="foto_user" id="foto">
                  <p></p>
                  <label for="name">
                    <h6>Nama baru</h6>
                  </label>
                  <input type="text" name="newName" class="form-control" aria-label="Nama Baru" value="<?= $user['nama'] ?>">
                  <p></p>
                </div>
                <p></p>
                <div class="row justify-content-end">
                  <button type="submit" class="btn btn-sm btn-outline-dark"><a>Simpan</a></button>
                </div>
              </form>
            </div>
            <!-- End Collapse -->

          </figure>
        </div>

        <div id="ubah-password-section"></div>

        <!-- End Card Foto Profil -->
        <br>
        <div class="member d-flex align-items-start">
          <div class="row justify-content-end">
            <p>
            <h4 class="text-center">Pilihan</h4>
            </p>

            <!-- Collapse -->
            <div class="collapse" id="ubah-password">

              <?= $this->session->flashdata('password_error_message'); ?>

              <form action="<?= base_url('profile/changePassword') ?>" method="POST">
                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">

                <label for="old-password">
                  <h6>Masukkan Password Lama</h6>
                </label>
                <input type="password" class="form-control <?= (form_error('old-password')) ? 'is-invalid' : ''; ?>" name="old-password" id="old-password">
                <?= form_error('old-password', '<small class="text-danger pl-3">', '</small>') ?><p></p>

                <label for="new-password">
                  <h6>Masukkan Password Baru</h6>
                </label>
                <input type="password" class="form-control <?= (form_error('new-password')) ? 'is-invalid' : ''; ?>" name="new-password" id="new-password">
                <?= form_error('new-password', '<small class="text-danger pl-3">', '</small>') ?><p></p>

                <label for="konf-password">
                  <h6>Konfirmasi Password Anda</h6>
                </label>
                <input type="password" class="form-control <?= (form_error('konf-password')) ? 'is-invalid' : ''; ?>" name="konf-password" id="konf-password">
                <?= form_error('konf-password', '<small class="text-danger pl-3">', '</small>') ?><p></p>
                <br>

                <div class="row justify-content-end">
                  <button type="submit" class="btn btn-sm btn-outline-dark">Simpan Password Baru</button>
                </div>
                <p></p><br>
              </form>
            </div>
            <!-- End Collapse -->

            <a class="btn btn-primary" id="open-password-form" data-bs-toggle="collapse" data-bs-target="#ubah-password">Ubah Password</a>
            <p></p>
            <!-- <a href="<?= base_url('profile/delete?id=' . base64_encode($user['id_user'])) ?>" class="btn btn-danger">Nonaktifkan Akun</a> -->
            <a href="<?= base_url('profile/delete/' . $user['id_user']) ?>" class="btn btn-danger">Nonaktifkan Akun</a>
            <p></p>
          </div>
        </div>

      </div>

      <div class="col-lg-8 mt-4 mt-lg-0">

        <!-- Card Data Diri -->
        <div class="member d-flex align-items-start">
          <dl class="row">
            <div class="card card-header">
              <h4 class="text-center">Data Diri</h4>
            </div>
            <p></p>
            <dt class="col-sm-4">
              <h5>Alamat Email</h5>
            </dt>
            <dd class="col-sm-8">
              <h5>: <?= $user['email'] ?></h5>
            </dd>
            <dt class="col-sm-4">
              <h5>Nomor HP</h5>
            </dt>
            <dd class="col-sm-8">
              <h5>: <?= $user['nomor_hp'] ?></h5>
            </dd>
            <dt class="col-sm-4">
              <h5>Tanggal Lahir</h5>
            </dt>
            <dd class="col-sm-8">
              <h5>: <?= date('d F Y', $user_detail['tanggal_lahir']) ?></h5>
            </dd>
            <dt class="col-sm-4">
              <h5> Jenis Kelamin</h5>
            </dt>
            <dd class="col-sm-8">
              <h5>: <?= $user_detail['jenis_kelamin'] ?></h5>
            </dd>
            <dt class="col-sm-4">
              <h5>Tempat Tinggal</h5>
            </dt>
            <dd class="col-sm-8">
              <h5>: <?= $user_detail['kota_tempat_tinggal'] ?></h5>
            </dd>
            <button type="button" class="btn btn-sm btn-outline-dark" data-bs-toggle="collapse" data-bs-target="#ubah-data-diri"><i class="ri-edit-line"> Ubah data diri</i></button>
            <p></p>
            <p></p>

            <!-- Collapse -->
            <div class="collapse" id="ubah-data-diri">
              <form action="<?= base_url('profile/changeDataDiri') ?>" method="post">
                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
                <div class="row justify-content-end">
                  <div class="col">
                    <label for="email">
                      <h6>Alamat Email</h6>
                    </label>
                    <input disabled value="<?= $user['email'] ?>" type="email" name="email" class="form-control" id="email">
                  </div>
                  <div class="col">
                    <label>
                      <h6>Nomor Handphone</h6>
                    </label>
                    <input value="<?= $user['nomor_hp'] ?>" type="text" onkeypress="return hanyaAngka(event)" name="nomor" class="form-control" id="nomor">
                  </div>
                </div>
                <p></p>
                <div class="row justify-content-end">
                  <div class="col">
                    <label>
                      <h6>Tanggal Lahir</h6>
                    </label>
                    <input value="<?= date('Y-m-d', $user_detail['tanggal_lahir']) ?>" type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
                  </div>
                  <div class="col">
                    <label>
                      <h6>Jenis Kelamin</h6>
                    </label>
                    <select class="form-control" name="jenis_kelamin">
                      <option value="<?= $user_detail['jenis_kelamin'] ?> "><?= $user_detail['jenis_kelamin'] ?></option>
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>
                <p></p>
                <label>
                  <h6>Kota Tempat Tinggal</h6>
                </label>
                <input value="<?= $user_detail['kota_tempat_tinggal'] ?>" type="text" class="form-control" name="kota_tinggal" id="kota_tinggal"><br>
                <div class="row justify-content-end">
                  <button type="submit" class="btn btn-sm btn-outline-dark"><a>Simpan</a></button>
                </div>
              </form>
            </div>
            <!-- End Collapse -->

          </dl>
        </div><br>
        <!-- End Card Data Diri -->

        <!-- Card Data Perusahaan -->
        <div class="member d-flex align-items-start">
          <dl class="row">
            <div class="card card-header">
              <h4 class="text-center">Data Perusahaan</h4>
            </div>
            <p></p>
            <dt class="col-sm-4">
              <h5>Nama Usaha</h5>
            </dt>
            <dd class="col-sm-8">
              <h5>: <?= $user_detail['nama_usaha'] ?></h5>
            </dd>
            <dt class="col-sm-4">
              <h5>Alamat Usaha</h5>
            </dt>
            <dd class="col-sm-8">
              <h5>: <?= $user_detail['alamat_usaha'] ?></h5>
            </dd>
            <dt class="col-sm-4">
              <h5>Kota Lokasi</h5>
            </dt>
            <dd class="col-sm-8">
              <h5>: <?= $user_detail['kota_lokasi_usaha'] ?></h5>
            </dd>
            <dt class="col-sm-4">
              <h5>Tahun Berdiri</h5>
            </dt>
            <dd class="col-sm-8">
              <h5>: <?= $user_detail['tahun_berdiri_usaha'] ?></h5>
            </dd>
            <dt class="col-sm-4">
              <h5>Email Usaha</h5>
            </dt>
            <dd class="col-sm-8">
              <h5>: <?= $user_detail['email_usaha'] ?></h5>
            </dd>
            <dt class="col-sm-4">
              <h5>No Telepon</h5>
            </dt>
            <dd class="col-sm-8">
              <h5>: <?= $user_detail['no_telepon'] ?></h5>
            </dd>
            <dt class="col-sm-4">
              <h5>Produk Ekspor</h5>
            </dt>
            <dd class="col-sm-8">
              <h5>: <?= $user_detail['produk_ekspor'] ?></h5>
            </dd>
            <dt class="col-sm-4">
              <h5>Jumlah Karyawan</h5>
            </dt>
            <dd class="col-sm-8">
              <h5>: <?= $user_detail['jumlah_karyawan'] ?> Orang</h5>
            </dd>
            <dt class="col-sm-4">
              <h5>Omset Pertahun</h5>
            </dt>
            <dd class="col-sm-8">
              <h5>: Rp. <?= number_format($user_detail['omset_pertahun'], 2, ',', '.') ?></h5>
            </dd>
            <button type="button" class="btn btn-sm btn-outline-dark" data-bs-toggle="collapse" data-bs-target="#ubah-data-perusahaan"><i class="ri-edit-line"> Ubah data perusahaan</i></button>
            <p></p>
            <p></p>

            <!-- Collapse -->
            <div class="collapse" id="ubah-data-perusahaan">
              <form action="<?= base_url('profile/changeDataPerusahaan') ?>" method="post">
                <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">

                <label for="nama">
                  <h6>Nama Usaha</h6>
                </label>
                <input value="<?= $user_detail['nama_usaha'] ?>" type="text" class="form-control" name="nama_usaha" id="nama_usaha">
                <p></p>

                <label for="nama">
                  <h6>Alamat Usaha</h6>
                </label>
                <input value="<?= $user_detail['alamat_usaha'] ?>" type="text" name="alamat_usaha" class="form-control" id="alamat_usaha">
                <p></p>

                <label>
                  <h6>Kota Lokasi Usaha</h6>
                </label>
                <input value="<?= $user_detail['kota_lokasi_usaha'] ?>" type="text" class="form-control" name="kota_usaha" id="kota_usaha">
                <p></p>

                <div class="row">
                  <div class="col">
                    <label>
                      <h6>Tahun Berdiri</h6>
                    </label>
                    <input value="<?= $user_detail['tahun_berdiri_usaha'] ?>" type="number" class="form-control" name="tahun_berdiri" id="tahun_berdiri" min="1700" max="2025" maxlength=4>
                  </div>
                  <div class="col">
                    <label>
                      <h6>Jumlah Karyawan</h6>
                    </label>
                    <div class="input-group">
                      <input value="<?= $user_detail['jumlah_karyawan'] ?>" type="number" class="form-control" name="jumlah_karyawan" id="jumlah_karyawan">
                      <span class="input-group-text">
                        <h6>orang</h6>
                      </span>
                    </div>
                  </div>
                </div>
                <p></p>

                <div class="row">
                  <div class="col-6">
                    <label>
                      <h6>Alamat Email Usaha (Jika Ada)</h6>
                    </label>
                    <input value="<?= $user_detail['email_usaha'] ?>" type="email" class="form-control" name="email_usaha" id="email_usaha">
                  </div>
                  <div class="col-6">
                    <label>
                      <h6>Nomor Telepon Usaha</h6>
                    </label>
                    <input value="<?= $user_detail['no_telepon'] ?>" type="text" class="form-control" name="telp_usaha" id="telp_usaha">
                  </div>
                </div>
                <p></p>

                <label for="nama">
                  <h6>Produk yang di Ekspor</h6>
                </label>
                <input value="<?= $user_detail['produk_ekspor'] ?>" type="text" name="produk_ekspor" class="form-control" id="produk_ekspor">
                <p></p>

                <label>
                  <h6>Omset Usaha per Tahun</h6>
                </label>
                <div class="input-group">
                  <span class="input-group-text">
                    <h6>Rp</h6>
                  </span>
                  <input value="<?= $user_detail['omset_pertahun'] ?>" type="number" class="form-control" name="omset" id="omset">
                </div>
                <p></p>

                <div class="row justify-content-end">
                  <button type="submit" class="btn btn-sm btn-outline-dark"><a>Simpan</a></button>
                </div>
              </form>
            </div>
            <!-- End Collapse -->

          </dl>
        </div>
        <!-- End Card Data Perusahaan -->

      </div>

    </div>

  </div>
</section>
<!-- End Team Section -->

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

<?php if ($this->session->flashdata('password_error_message')) : ?>

  <script type="text/javascript">
    $(document).ready(function() {
      const selectedElement = document.getElementById('open-password-form');

      const isElement = selectedElement.hasAttribute('aria-expanded');

      if (isElement === false) {
        document.getElementById('ubah-password').className = "collapse show";
        document.getElementById('open-password-form').setAttribute("aria-expanded", "true");
        $(window).scrollTo('#ubah-password-section', 500);
      }
    });
  </script>

<?php endif; ?>
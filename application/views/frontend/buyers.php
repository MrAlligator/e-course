<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $.noConflict();
        var table = $('#tabel_importir').DataTable();
    });
</script>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
              <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                      <div class="section-title">
                      <h1>Data Importir (Buyers)</h1>
                      <h2>Data Importir menampilkan perusahaan importir dari seluruh dunia</h2><br>
                    </div>
                      <?php if (isset($user['email']) && $user['is_member'] == 0) : ?>
                            <a href="<?= base_url('frontend/membership') ?>" class="btn-get-started scrollto">Menjadi Anggota</a>
                        <?php elseif (!isset($user['email'])) : ?>
                            <a href="<?= base_url('home/membership') ?>" class="btn-get-started scrollto">Menjadi Anggota</a>
                        <?php endif; ?>
                    </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                  <img src="<?= base_url() ?>/assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
      </div>
    </section><!-- End Hero -->
    
    <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <!-- <?php if (isset($user['email']) && $semua != 1) : ?>
                <a href="<?= base_url('frontend/buyers/getAll') ?>" class="btn btn-success">Lihat Seluruh Data Importir</a><br>
                <?php endif ?>
                <br><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#download">Unduh Dokumen</button><br> -->
        </div>

        <div class="table-responsive">
            <table id="tabel_importir" class="table table-bordered table-striped" width="100%" cellspacing="0">
                <thead class="thead-dark text-primary">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Perusahaan</th>
                        <th scope="col">Produk</th>
                        <th scope="col">Negara</th>
                        <th scope="col">Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php $i = 1;
                        foreach ($buyers as $buyer) : ?>
                            <td><?= $i++ ?></td>
                            <td><?= $buyer->nama_perusahaan ?></a></td>
                            <td><?= $buyer->produk ?></td>
                            <td><?= $buyer->negara ?></td>
                            <?php if (isset($_SESSION['email'])) { ?>
                            <td><a href="<?= base_url('frontend/buyers/detail/') . $buyer->id_importir ?>">Detail<a><br></td>
                            <?php } else { ?>
                            <td><a href="<?= base_url('home/membership') ?>">Detail<a></td>
                            <?php } ?>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>

    </div>
</section>

<div class="modal" id="download" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Unduh data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('frontend/buyers/cetak')?>" method="post">
          <div class="text-center row">
            <label>Kata kunci :</label>
            <div class="form-group col-6">
              <input type="text" name="cari" class="form-control" id="cari" placeholder="Cari . . ."></div>
              <div class="form-group col-6">
            <button class="btn btn-primary">Unduh dengan filter</button></div>
          </form>
          <div class="text-center">
            <label>Atau</label></div>
          <div class="text-center form-group">
            <a href="<?=base_url('frontend/buyers/cetak_semua')?>" class="btn btn-primary">Unduh semua data</a></div>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
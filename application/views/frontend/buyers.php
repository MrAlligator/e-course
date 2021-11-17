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

<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Data Importir</h2>
            <p>Data Importir menampilkan perusahaan importir dari seluruh dunia</p><br>
            <?php if (isset($user['email']) && $semua != 1) : ?>
                <a href="<?= base_url('frontend/buyers/getAll') ?>" class="btn btn-success">Lihat Seluruh Data Importir</a><br>
                <?php endif ?>
                <br><button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#download">Unduh Data</button><br>
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
        <div>
        <button>Unduh semua data</button></div>
        <button>Unduh berdasarkan pencarian</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready( function () {
        $.noConflict();
        var table = $('#tabel_inquiry').DataTable();
    } );
</script>

<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
        <h2>Data Produk</h2>
        <p>Data Produk menampilkan daftar permintaan produk yang diperlukan oleh perusahaan importir dari seluruh dunia</p><br>
            <?php if (isset($user['email'])&& $semua!=1) : ?>
            <a href="<?= base_url('frontend/inquiry/getAll') ?>" class="btn btn-success">Lihat Seluruh Data Permintaan</a><br>
            <br><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#download">Unduh Dokumen</button><br>
            <?php endif ?>
          </div>

<div class="table-responsive">
  <table id="tabel_inquiry" class="table table-bordered table-striped" width="100%" cellspacing="0">
      <thead class="thead-dark text-primary">
        <tr>    
          <th>No</th>	
          <th>Permintaan</th>
          <th>Negara</th>		
          <th>Detail</th>
        </tr>
      </thead>
        <?php $i=1;foreach($inquiries as $inquiry):?>
        <tr>
          <td><?=$i++?></td>
          <td><?=$inquiry->produk?></td>
          <td><?=$inquiry->negara?></td>
        <?php if (isset($_SESSION['email'])) { ?>
          <td><?=$inquiry->detail?></td>
        <?php }else{ ?>
          <td><?=$inquiry->negara?></a></td>
        <?php } ?>
          </tr>
        <?php endforeach?>
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
        <form action="<?=base_url('frontend/inquiry/cetak')?>" method="post">
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
            <a href="<?=base_url('frontend/inquiry/cetak_semua')?>" class="btn btn-primary">Unduh semua data</a></div>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>




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
        <h2>Data Permintaan</h2>
        <p>Data Permintaan menampilkan daftar permintaan yang diperlukan oleh perusahaan importir dari seluruh dunia</p><br>
            <?php if (isset($user['email'])&& $semua!=1) : ?>
            <a href="<?= base_url('frontend/inquiry/getAll') ?>" class="btn btn-success">Lihat Seluruh Data Permintaan</a><br>
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
          <td><a href="<?=base_url('frontend/Inquiry/detail/'.$inquiry->id_inquiry)?>">Selengkapnya</a></td>
        <?php }else{ ?>
          <td><a href="<?=base_url('home/membership'); ?>">Selengkapnya</a></td>
        <?php } ?>
          </tr>
        <?php endforeach?>
      </tbody>
    </table>
  </div>

  </div>
</section>




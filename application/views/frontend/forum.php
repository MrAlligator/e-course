<!-- ======= Contact Section ======= -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
    $("#like").on("click", function(){
        $(this).find($(".bi-hand-thumbs-up")).toggleClass('bi-hand-thumbs-up bi-hand-thumbs-up-fill');
    })
</script>

<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
<br><br><br>
<div class="section-title">
    <h2>Selamat Datang di forum komunitas</h2>
    <p>Forum Komunitas Ekspor Indonesia, harap mengikuti panduan komunitas</p>
</div>
<br><br>

<div class="row">
    <div class="col-lg-9 d-flex align-items-stretch">
        <div class="info">
            <div class="row">
                <div class="col-9">
                    <i class="bi bi-chat-left-quote"></i><h4>Daftar Pertanyaan atau Topik</h4> 
                </div>
                <div class="col">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#tambahPertanyaan">Buat pertanyaan baru</a>    
                </div>
            </div><br>
            <?php $i=1;foreach($kategori as $kat):?>
        <div class="card-header">
            <a href="<?=base_url('home/kategori/'.$kat->id_kategori)?>"><h4><?=$kat->nama_kategori?></h4></a>
            <a href="<?=base_url('home/kategori/'.$kat->id_kategori)?>"><p><?=$kat->deskripsi?></p></a>
        </div><br>
        <?php endforeach ?>
    </div>
</div>
<div class="col-lg-3 d-flex align-items-stretch">
    <div class="info">
        <i class="bi bi-geo-alt"></i><h4>Peraturan dalam forum</h4><br>
        1. Dilarang menggunakan kata yang mengandung unsur SARA
        <br><br>
        2. Dilarang menggunakan kata kasar dan seksual
        <br><br>
        3. Dilarang menggunakan kalimat yang dapat menyebarkan kebencian
        <br><br>
        4. Dilarang menyebarkan informasi palsu (hoax)
        <br><br>
        5. Dilarang menyebarkan kalimat yang menyesatkan atau spam
    </div>
</div>
</div>
    
    </div>
</section>

<div class="modal fade" id="tambahPertanyaan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Pertanyaan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <label for="name">Masukkan Pertanyaan</label>
            <input type="text" name="harga_beli" class="form-control" id="harga_beli" min=0 required><br>
            <label for="name">Deskripsi Pertanyaan</label>
            <textarea class="form-control" rows=8 required name="postingan" placeholder="Masukkan Deskripsi Pertanyaanmu disini . . ."></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Tambah</button>
      </div>
    </div>
  </div>
</div>
<!-- End Contact Section -->
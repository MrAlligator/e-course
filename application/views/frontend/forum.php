<!-- ======= Contact Section ======= -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
    $("#like").on("click", function(){
        $(this).find($(".bi-hand-thumbs-up")).toggleClass('bi-hand-thumbs-up bi-hand-thumbs-up-fill');
    })
</script>

<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

<div class="section-title">
    <h2>Selamat Datang di forum komunitas</h2>
    <p>Forum Komunitas Ekspor Indonesia, harap mengikuti panduan komunitas</p>
</div>

<div class="row">
<div class="col-lg-9 d-flex align-items-stretch">
    <div class="info">
        <i class="bi bi-chat-left-quote"></i><h4>Daftar Pertanyaan</h4><br>    
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
        1. Dilarang menggunakan kata yang mengandung unsur SARA<br><br>
        2. Dilarang menggunakan kata-kata kasar dan kotor
    </div>
</div>
</div>
    
    </div>
</section>
<!-- End Contact Section -->
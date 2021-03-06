<!-- ======= Contact Section ======= -->
<script src="https://google.com/recaptcha/api.js"></script>
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
    <h2>Selamat Datang di Forum Komunitas</h2>
    <p>Forum Komunitas Ekspor Indonesia, harap mengikuti panduan komunitas</p>
</div>
<br><br>

<div class="row">
    <div class="col-lg-8 d-flex align-items-stretch">
        <div class="php-email-form">
            <div class="row">
                <div class="col-9">
                    <h4>Daftar Pertanyaan atau Topik</h4> 
                </div>
                <div class="col">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#tambahPertanyaan"><h6>Buat pertanyaan baru</h6></a>    
                </div>
            </div><br>

<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="terbaru" data-bs-toggle="tab" href="#pertanyaan-terbaru" role="tab" aria-controls="home" aria-selected="true">Terbaru</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="terpopuler" data-bs-toggle="tab" href="#pertanyaan-terpopuler" role="tab" aria-controls="profile" aria-selected="true">Terpopuler</a>
    </li>
</ul>

<div class="tab-content">
    <div class="tab-pane active" id="pertanyaan-terbaru" role="tabpanel" aria-labelledby="home-tab"><p></p>
    <ul class="list-group list-group-flush">
        <?php $i=1;foreach($kategori_terbaru as $kate):?>
            <li class="list-group-item">
                <h5><a href="<?=base_url('home/kategori?id_kategori='.base64_encode($kate->id_kategori))?>">
                <?=$i++.". ".$kate->nama_kategori?></a></h5>
                <p><figcaption class="blockquote-footer">
                <?=$kate->tanggapan?> Tanggapan
                </figcaption></p>
            </li>
        <?php endforeach ?>
    </div>
    <div class="tab-pane" id="pertanyaan-terpopuler" role="tabpanel" aria-labelledby="profile-tab"><p></p>
    <ul class="list-group list-group-flush">
            <?php $i=1;foreach($kategori_terpopuler as $kat):?>
                <li class="list-group-item">
                    <h5><a href="<?=base_url('home/kategori?id_kategori='.base64_encode($kat->id_kategori))?>">
                    <?=$i++.". ".$kat->nama_kategori?></a></h5>
                    <p><figcaption class="blockquote-footer">
                    <?=$kat->tanggapan?> Tanggapan
                    </figcaption></p>
                </li>
            <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>

<div class="col-lg-4 d-flex align-items-stretch">
    <div class="php-email-form">
        <div class="section-title"><h4>Peraturan dalam forum</h4><p></p></div>
        <ul class="list-group list-group-flush">
            <?php $i=1; foreach($peraturan as $peraturan):?>
                <li class="list-group-item"><h6><?=$i++.". ".$peraturan->peraturan?></h6></li>
            <?php endforeach?>
        </ul>
    </div>
</div>
</div>
    
    </div>
</section>
<?php if(isset($_SESSION['email'])){?>
<div class="modal fade" id="tambahPertanyaan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Pertanyaan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <form action="<?=base_url('home/tambah_pertanyaan')?>" method="post">
            <div class="modal-body">
                <label for="name"><h6>Masukkan Pertanyaan</h6></label>
                <input type="text" name="pertanyaan" class="form-control" id="pertanyaan" required>
                <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                <br><div class="g-recaptcha" data-sitekey="6Lfqp74dAAAAANRqXosCWSVeEBaxM1F4KV6C32Jf"></div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary"><h6>Tambah</h6></button>
            </div>
        </form>
        </div>
  </div>
</div>
<?php }else{ ?>
    <div class="modal fade" id="tambahPertanyaan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Pertanyaan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="section-title">
                    <h3>Silakan masuk terlebih dahulu</h3>
                    <a href="<?=base_url('auth')?>" class="btn btn-primary"><h6>Masuk</h6></a>
                    <a href="<?=base_url('home/membership')?>" class="btn btn-success"><h6>Daftar</h6></a>
                </div>
            </div>
        </div>
  </div>
</div>
<?php }?>
<!-- End Contact Section -->
<script>
    $(document).ready(function(){
        $('#terpopuler').click(function(){
            $('#terbaru').attr("class", "nav-link");
            $('#terpopuler').attr("class", "nav-link active");
        });
        $('#terbaru').click(function(){
            $('#terpopuler').attr("class", "nav-link");
            $('#terbaru').attr("class", "nav-link active");
        });
    });
</script>
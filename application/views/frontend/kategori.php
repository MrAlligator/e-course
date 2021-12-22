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
    <?php foreach($pertanyaan as $pertanyaan):?> 
    <h2><?=$pertanyaan->nama_kategori?></h2>
    <p>Forum Komunitas Ekspor Indonesia, harap mengikuti panduan komunitas</p>
    <?php endforeach?>
</div>
<br><br>

<div class="row">
<?php if(isset($_SESSION['email'])){?>

    <div class="col-lg-9 mt-5 mt-lg-0 d-flex align-items-stretch">
        <div class="info">
            <div class="row"><?php date_default_timezone_set("Asia/Jakarta");?>
                <div class="form-group col-md">
                <h5>Apa tanggapanmu?</h5>
                </div>
            </div>
            <form action="<?=base_url('home/post_forum')?>" method="post">
            <div class="form-group">
                <textarea class="form-control" rows=8 required name="postingan" placeholder="Masukkan Pertanyaanmu disini . . ."></textarea>
                <input hidden type="text" value="<?=$user['id_user']?>" name="id_user">
                <input hidden type="text" value="<?=$id_kategori?>" name="id_kategori">>
                <input hidden type="text" value="<?=date('Y-m-d')?>" name="tanggal">
                <input hidden type="text" value="<?=date('H:i')?>" name="jam">
            <div class="text-center">
                <br><button class="btn btn-primary" type="submit">Kirim</button>
            </div>
            </div>
            </form>
        </div>
    </div>

<?php }else{ ?>
    <div class="col-9 mt-5 mt-lg-0 d-flex align-items-stretch">
        <div class="php-email-form">
            <div class="text-center">
                <h5><p>Agar dapat dapat memberikan tanggapan harap login terlebih dahulu
                <a href="<?=base_url('auth')?>">Login disini</a></p>
                <p>Jika belum memiliki aku silahkan mendaftar terlebih dahulu
                <a href="<?=base_url('home/membership')?>">Daftar Sekarang</a></p></h5>
            </div>
        </div>
    </div>
<?php } ?>

<div class="col-3 mt-5 mt-lg-0 d-flex align-items-stretch">
    <div class="info">              
        <i class="bi bi-chat-left-quote-fill"></i><h4>Pertanyaan / Topik Lainnya</h4><br><ul>
        <?php $i=1;foreach($kategori as $kat):?><li>
                <h6><a href="<?=base_url('home/kategori/'.$kat->id_kategori)?>"><?=$kat->nama_kategori?></a></h6>
            </li>
        <?php endforeach ?></ul>
    </div>
</div>

</div>
<br>

<div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
    <div class="info">
        <?php
        if($post):
            foreach($post as $postingan):
            $poster = $this->db->where('id_user', $postingan->id_user)->get('tb_user')->row_array()
        ?>
        
<div class="card card-body">
    <ul class="list-group list-group-flush">
        <li class="list-group-item" aria-current="true">
            <img width="50px" src="<?= base_url('/assets/img/userimage/').$poster['foto_user'];?>"
                class="rounded-circle img-thumbnail" style="float:left;vertical-align:middle;margin:0px 15px">
            <h6>
                <?=$poster['nama']?>
            </h6>
            <h6>
                <?=date('d F Y', strtotime($postingan->tanggal))?>, <?=$postingan->jam?>
            </h6>
        </li>
        <li class="list-group-item" aria-current="true">
            <h4 class="mb-1"><?=$postingan->postingan?></h4>
        </li>
        <li class="list-group-item" aria-current="true">
            <?php if(isset($_SESSION['email'])&&$poster['email']===$_SESSION['email']):?>  
                <a href="<?=base_url('home/del_post/').$postingan->id_post?>"><small>Hapus | </small></a>
                <?php endif ?>
                    <a data-bs-toggle="collapse" href="#komentar<?=$postingan->id_post?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <small>Komentar (<?=$postingan->komentar?>)</small></a>
                    
<div class="collapse" id="komentar<?=$postingan->id_post?>">
    <div class="card card-body">
        
<?php
    $comment = $this->db->where('id_post', $postingan->id_post)->get('tb_komentar')->result();
    foreach($comment as $comment):
?>

    <ul class="list-group list-group-flush">
        <li class="list-group-item" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
            <small>
                <img width="25px" src="<?= base_url('/assets/img/userimage/').$poster['foto_user'];?>"
                class="rounded-circle img-thumbnail">
                <?=$poster['nama']?>
            </small>
            <small>
                <?=date('d F Y', strtotime($comment->tanggal))?>, <?=$comment->jam?>
            </small>
        </div>
        </li>
        <li class="list-group-item" aria-current="true">
            <h5 class="mb-1"><?=$comment->komentar?></h5>
        </li>
        <?php if(isset($_SESSION['email'])&&$poster['email']===$_SESSION['email']):?>  
            <li class="list-group-item" aria-current="true">
            <a href="<?=base_url('home/del_post/').$komentar->id_komentar?>"><small>Hapus</small></a>
        <?php endif ?>
        <?php endforeach ?>
    <ul>
</div>

<form action="<?=base_url('home/post_komen')?>" method="post">
    <br><div class="input-group">
        <textarea class="form-control" name="komen" id="komen" placeholder="Masukkan komentarmu"></textarea>
        <input hidden name="id_post" id="id_post" value="<?=$postingan->id_post?>">
        <input hidden name="id_user" id="id_user" value="<?=$postingan->id_user?>">
        <input hidden name="id_kategori" id="id_kategori" value="<?=$id_kategori?>">
        <input hidden type="text" value="<?=date('Y-m-d')?>" name="tanggal">
        <input hidden type="text" value="<?=date('H:i')?>" name="jam">
        <button type="submit" class="input-group-text" data-bs-toggle="tooltip" data-bs-placement="right" title="Kirim komentar"><i class="bx bxs-send"></i></button>
    </div>
</form>

    <ul>

    </div>
</div><br>
    <?php endforeach;else:?>
        <div class="text-center"><h3>Belum ada tanggapan</h3></div>
    <?php endif?>
</div>

</div>
</section>
<!-- End Contact Section -->
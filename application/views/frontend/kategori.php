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
        <div class="php-email-form">
            <div class="row"><?php date_default_timezone_set("Asia/Jakarta");?>
                <div class="form-group col-md">
                <h5>Apa tanggapanmu?</h5>
                </div>
            </div>
            <form action="<?=base_url('home/post_forum')?>" method="post">
            <div class="form-group">
                <textarea class="form-control" rows=8 required name="postingan" placeholder="Masukkan Pertanyaanmu disini . . ."></textarea>
                <input hidden type="text" value="<?=$user['id_user']?>" name="id_user">
                <input hidden type="text" value="<?=$id_kategori?>" name="id_kategori">
                <input hidden type="number" value=0 name="like">
                <input hidden type="number" value=0 name="dislike">
                <input hidden type="text" value="<?=date('Y-m-d')?>" name="tanggal">
                <input hidden type="text" value="<?=date('H:i')?>" name="jam">
            <div class="text-center">
                <br><button type="submit">Post</button>
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
    <div class="php-email-form">
        <?php if($post):foreach($post as $postingan):?>
        diposting tanggal <?=date('d F Y', strtotime($postingan->tanggal))?> pukul <?=$postingan->jam?>
        <?php $poster = $this->db->where('id_user', $postingan->id_user)->get('tb_user')->row_array()?>
        <div class="card-header">
            <div class="row">
            <div class="col-sm-1">
                <img width="50" src="<?= base_url('/assets/img/userimage/').$poster['foto_user'];?>" class="img-profile rounded-circle img-thumbnail">
            </div>
            <div class="col">
                <?=$poster['nama']." ";
                if($poster['role_id']==1){?><i class="bx bx-badge-check"></i><?php }?>
                    <h4><?=$postingan->postingan?></h4>
            </div>
            <div class="col-sm-1">
                <?php if(isset($_SESSION['email'])&&$poster['email']===$_SESSION['email']):?>
                    <a href="<?=base_url('home/del_post/').$postingan->id_post?>"><i class="bx bx-trash"></i></a>
                <?php endif ?>
            </div><br>
            </div>
        </div>
        <h6>
            <!-- <a id="like"><i class="bi bi-hand-thumbs-up"></i></a> <?=$postingan->like?>
            <a id="dislke"><i class="bi bi-hand-thumbs-down"></i></a> <?=$postingan->dislike?> -->
        </h6><br>
    <?php endforeach;else:?>
        <div class="text-center"><h3>Belum ada postingan</h3></div>
    <?php endif?>
    </div>
</div>

</div>
</section>
<!-- End Contact Section -->
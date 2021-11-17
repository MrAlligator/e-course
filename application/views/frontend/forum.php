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
    <h2>Selamat datang di forum komunitas</h2>
    <p>Forum Komunitas Ekspor dan Impor, harap mengikuti panduan komunitas</p>
</div>

<?php if(isset($_SESSION['email'])){?>

<form action="<?=base_url('home/post_forum')?>" method="post">

<div class="row">

<div class="col-lg-9 mt-5 mt-lg-0 d-flex align-items-stretch">
    <div class="php-email-form">
        <div class="row"><?php date_default_timezone_set("Asia/Jakarta");?>
        <div class="form-group col-md">
            <h5>Posting pertanyaanmu atau informasi yang kalian ketahui</h5>
        </div>
        <div class="form-group col-md-3">
            <select class="form-control" required name="id_kategori">
                <option disabled selected>Pilih Kategori . . . </option>
                <?php $i=1;foreach($kategori as $kat):?>
                    <option value="<?=$i++?>"><?=$kat->nama_kategori?></option>
                <?php endforeach ?>
            </select>
        </div>
        </div>
        <div class="form-group row">
            <textarea class="form-control" rows=8 required name="postingan" placeholder="Masukkan Pertanyaanmu disini . . ."></textarea>
            <input hidden type="text" value="<?=$user['id_user']?>" name="id_user">
            <input hidden type="number" value=0 name="like">
            <input hidden type="number" value=0 name="dislike">
            <input hidden type="text" value="<?=date('Y-m-d')?>" name="tanggal">
            <input hidden type="text" value="<?=date('H:i')?>" name="jam">
        <div class="text-center">
            <br><button type="submit">Post</button>
        </div>
        </div>
    </div>
</div>

<div class="col-lg-3 d-flex align-items-stretch">
    <div class="info">              
        <i class="bi bi-geo-alt"></i><h4>Peraturan dalam forum</h4><br>
            1. Dilarang menggunakan kata yang mengandung unsur SARA<br><br>
            2. Dilarang menggunakan kata-kata kasar dan kotor
    </div>
</div>
</form>

</div>
<br>
<?php } ?>

<div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
    <div class="php-email-form">
        <div class="row">
        <div class="col-9"></div>
        <div class="col">
        <select class="form-control" name="id_kagetori">
                <option selected>Semua Kategori . . . </option>
                <?php $i=1;foreach($kategori as $kat):?>
                    <option value="<?=$i++?>"><?=$kat->nama_kategori?></option>
                <?php endforeach ?>
        </select><br></div></div>
        <?php foreach($post as $postingan):?>
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
    <?php endforeach; ?>
    </div>
</div>

</div>
</section>
<!-- End Contact Section -->
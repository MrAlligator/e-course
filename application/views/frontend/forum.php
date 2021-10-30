<!-- ======= Contact Section ======= -->
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
                <label>What Happen?</label>
                <textarea class="form-control" rows=8 required name="postingan"></textarea>
                <input hidden type="text" value="<?=$user['id_user']?>" name="id_user">
                <input hidden type="number" value=0 name="like">
                <input hidden type="number" value=0 name="dislike">
                <input hidden type="text" value="<?=date('Y-m-d')?>" name="tanggal">
                <input hidden type="text" value="<?=date('H:i')?>" name="jam">
            </div>
        </div>
        <div class="text-center">
            <button type="submit">Post</button>
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
    <?php foreach($post as $postingan):?>
        diposting tanggal <?=date('d F Y', strtotime($postingan->tanggal))?> pukul <?=$postingan->jam?>
        <?php $poster = $this->db->where('id_user', $postingan->id_user)->get('tb_user')->row_array()?>
        <div class="card-header">
            <?=$poster['nama'] ?>
            <h4><?=$postingan->postingan?></h4>
        </div>
            <h6>
                <!-- <i class="bx bx-like"></i><?=$postingan->like?>
                <i class="bx bx-dislike"></i><?=$postingan->dislike?> -->
                <!-- <a class="tombol-simpan" value="simpan">Simpan</a></i> 0 -->
            </h6><br>
    <?php endforeach; ?>
    </div>
</div>

</div>
</section>
<!-- End Contact Section -->
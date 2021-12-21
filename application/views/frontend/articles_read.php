<!-- ======= About Us Section ======= -->
<section id="articles" class="contact">
    <div class="container" data-aos="fade-up">

<!-- <div class="section-title">
    <h2>Baca Artikel</h2>
</div> -->

<div class="row">
    <div class="col-lg-8 mt-5 mt-lg-0 d-flex align-items-stretch">
        <div class="php-email-form">
        <?php foreach($artikel as $baca):?>
            <div class="section-title">
                <div class="text-center">
                    <h1><?=$baca->judul?></h1>
                </div>
                <h6><p>Malang, <?= date('d F Y', $baca->tanggal_input); ?><p><h6>
            </div>
            <div class="text-center">
                <!-- <h6>Diposting pada <?= date('d F Y', $baca->tanggal_input); ?></h6> -->
                <img id="foto" src="<?= base_url('/assets/img/articles/'.$baca->gambar)?>" width="800px" alt="...">
            </div>
                <p></p>
                <h6><?=$baca->isi?></h6>
                <?php endforeach?>
        </div>
    </div>
    <div class="col-lg-4 mt-5 mt-lg-0 d-flex align-items-stretch">
        <div class="php-email-form">
        <h2>Lebih banyak artikel</h2>
            <h6><a href="<?=base_url('home/articles')?>">Semua Artikel</a></h6><br>
                <?php foreach($artikel_lainnya as $lainnya):?>
                    <div class="text-center">
                    <p><a href="<?=base_url('home/article_read/'.$lainnya->id_artikel)?>"><img id="foto" src="<?= base_url('/assets/img/articles/'.$lainnya->gambar)?>" width="350px" alt="..."></a><br>
                    </p></div>
                    <a href="<?=base_url('home/article_read/'.$lainnya->id_artikel)?>"><h4><?=$lainnya->judul?></h4></a>
                    <br>
                <?php endforeach?>
        </div>
    </div>
</div>

    </div>
</section><!-- End About Us Section -->
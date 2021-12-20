<!-- ======= About Us Section ======= -->
<section id="articles" class="contact">
    <div class="container" data-aos="fade-up">

<div class="section-title">
    <h2>Baca Artikel</h2>
</div>

<div class="row">
    <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
        <div class="row">
            <div class="col-8">
                <div class="php-email-form">
                    <?php foreach($artikel as $baca):?>
                    <h3><?=$baca->judul?></h3>
                    <h6>Diposting <?=$baca->tanggal_input?></h6>
                    <img id="foto" src="<?= base_url('/assets/img/articles/1.jpg')?>" height="450px" alt="...">
                    <p></p>
                    <p><strong>Malang - </strong><?=$baca->isi?></p>
                    <?php endforeach?>
                </div>
            </div>
            <div class="col-4">
                <div class="php-email-form">
                        <h4>Lebih banyak artikel</h4>
                        <p><a href="<?=base_url('home/articles')?>">Semua Artikel >>></a></p>
                        <?php foreach($artikel_lainnya as $lainnya):?>
                        <a href="<?=base_url('home/article_read/'.$lainnya->id_artikel)?>"><img id="foto" src="<?= base_url('/assets/img/articles/'.$lainnya->gambar)?>" width="300px" alt="..."></a>
                        <a href="<?=base_url('home/article_read/'.$lainnya->id_artikel)?>"><h5><?=$lainnya->judul?></h5></a>
                        <a href="<?=base_url('home/article_read/'.$lainnya->id_artikel)?>">Read More . . . </a>
                        <br>
                        <?php endforeach?>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
</section><!-- End About Us Section -->
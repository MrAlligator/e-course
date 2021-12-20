<!-- ======= About Us Section ======= -->
<section id="articles" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Artikel</h2>
        </div>

        <div class="row">
            <?php foreach($artikel as $artikel):?>
            <div class="col-lg-4">
                <div class="php-email-form">
                    <a href="<?=base_url('home/article_read/'.$artikel->id_artikel)?>"><img id="foto" src="<?= base_url('/assets/img/articles/'.$artikel->gambar)?>" width="300px" alt="..."></a><br>
                    <a href="<?=base_url('home/article_read/'.$artikel->id_artikel)?>"><h4><?=$artikel->judul?></h4></a>
                    <a href="<?=base_url('home/article_read/'.$artikel->id_artikel)?>">Read More . . . </a>
                </div>
            </div>
            <?php endforeach ?>
            <a href="<?= base_url('/home/articles')?>" class="btn-learn-more">Lihat Semua >>></a>
        </div>
    </div>

    </div>
</section><!-- End About Us Section -->
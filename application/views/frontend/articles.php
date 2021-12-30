<!-- ======= About Us Section ======= -->
<section id="articles" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Artikel</h2>
        </div>

        <div class="row">
            <?php foreach($artikel as $artikel):?>
                <div class="col-lg-4">
            <div class="info card">
                <a href="<?=base_url('home/article_read/'.$artikel->id_artikel)?>">
                    <img class="card-img-top" src="<?= base_url('/assets/img/articles/'.$artikel->gambar)?>">
                </a>
            <!-- <div class="card-title"><h6></h6>
                <h5><?=$artikel->judul?></h5>
            </div> -->
    <blockquote class="blockquote">
            <h6></h6>
            <h5><?=$artikel->judul?></h5>
    </blockquote></a>
    <figcaption class="blockquote-footer">
    <?php
            $beda = time()-$artikel->tanggal_input;
            if($beda<(60)):
                echo "Baru saja";
            elseif($beda<(60*60)):
                echo floor($beda/60)." menit yang lalu <br>";
            elseif($beda<(60*60*24)):
                echo floor($beda/(60*60))." jam yang lalu";
            elseif($beda<(60*60*24*7)):
                echo floor($beda/(60*60*24))." hari yang lalu";
            elseif($beda<(60*60*24*30)):
                echo floor($beda/(60*60*24*7))." minggu yang lalu";
            elseif($beda<(60*60*24*30*12)):
                echo floor($beda/(60*60*24*30))." bulan yang lalu";
            else:
                echo floor($beda/(60*60*24*365))." tahun yang lalu <br>";
            endif;
            ?>
    </figcaption>
            <figure class="text-end"><a href="<?=base_url('home/article_read/'.$artikel->id_artikel)?>" class="card-link"><h6>Baca Selengkapnya<h6></a></figure>
            </div>
        </div>
            <?php endforeach ?>
        </div><br>
        <div class="row justify-content-end">
            <div class="col-3">
                <figure class="text-end"><a href="<?= base_url('/home/articles')?>"><h6>Lihat Semua Artikel</h6></a></figure>
            </div>
        </div>
    </div>

    </div>
</section><!-- End About Us Section -->
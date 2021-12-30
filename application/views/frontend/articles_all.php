<!-- ======= About Us Section ======= -->
<section id="articles" class="contact">
    <div class="container" data-aos="fade-up">
    <br>
    <br>
<div class="section-title">
<h2>Semua Artikel</h2>
</div>
    <div class="row">
        <?php foreach($artikel as $artikel):?>
        <div class="col-lg-4">
            <div class="info card"><br>
                <a href="<?=base_url('home/article_read/'.$artikel->id_artikel)?>">
                    <img class="card-img-top" src="<?= base_url('/assets/img/articles/'.$artikel->gambar)?>">
                </a>
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
            <div class="card-body">
                <div class="row justify-content-end">
                    <div class="col-7">
                    <h6><a href="<?=base_url('home/article_read/'.$artikel->id_artikel)?>" class="card-link">Baca Selengkapnya</a></h6>
                    </div>
                </div>
            </div>
            </div>
        </div>
            <?php endforeach?>
        </div>
    </div>

    </div>
</section><!-- End About Us Section -->
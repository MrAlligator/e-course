<!-- ======= About Us Section ======= -->
<section id="articles" class="contact">
    <div class="container" data-aos="fade-up">

<!-- <div class="section-title">
    <h2>Baca Artikel</h2>
</div> -->

<div class="row">
    <div class="col-lg-8 mt-5 mt-lg-0 d-flex align-items-stretch">
        <div class="php-email-form">
            <div class="section-title">
                <div class="text-center">
                        <h2><?=$artikel['judul']?></h2>
                    <h6><?= date('d F Y', $artikel['tanggal_input'])?></h6>
                </div>

            </div>
                <img class="img-fluid" src="<?= base_url('/assets/img/articles/'.$artikel['gambar'])?>">
                <p></p>
                <?=$artikel['isi']?>
        </div>
    </div>

<div class="col-lg-4 mt-5 mt-lg-0 d-flex align-items-stretch">
    <div class="php-email-form">
    <h4>Artikel Lainnya</h4>
        <figure class="text-end"><h6><a href="<?=base_url('home/articles')?>">Seluruh Artikel</a></h6></figure>
            
<ul class="list-group list-group-flush">
<?php
foreach($artikel_lainnya as $lainnya):
if($artikel['id_artikel']!=$lainnya->id_artikel):?>
    <li class="list-group-item">
    <a href="<?=base_url('home/article_read/'.$lainnya->id_artikel)?>">
        <img class="img-fluid" src="<?= base_url('/assets/img/articles/'.$lainnya->gambar)?>">
    </a>
    <a href="<?=base_url('home/article_read/'.$lainnya->id_artikel)?>">
        <blockquote class="blockquote">
            <h6></h6>
            <h5><?=$lainnya->judul?></h5>
        </blockquote></a>
    <figcaption class="blockquote-footer">
    <?php
            $beda = time()-$lainnya->tanggal_input;
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
    </li>
<?php endif;endforeach?>
</ul>
        </div>
    </div>
</div>

    </div>
</section><!-- End About Us Section -->
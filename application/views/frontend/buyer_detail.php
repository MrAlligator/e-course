<section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
              <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                      <div class="section-title">
                      <h1><?= $title ?></h1>
                      <h2>Detail data importir <?=$title?></h2><br>
                    </div>
                      <?php if (isset($user['email']) && $user['is_member'] == 0) : ?>
                            <a href="<?= base_url('frontend/membership') ?>" class="btn-get-started scrollto">Menjadi Anggota</a>
                        <?php elseif (!isset($user['email'])) : ?>
                            <a href="<?= base_url('home/membership') ?>" class="btn-get-started scrollto">Menjadi Anggota</a>
                        <?php endif; ?>
                    </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                  <img src="<?= base_url() ?>/assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
      </div>

    </section>
    <!-- End Hero -->

<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

<!-- <div class="section-title">
    <h2>Detail Importir</h2>
    <p>Detail Importir menampilkan informasi secara detail dari sebuah perusahaan importir</p>
</div> -->

<?php foreach($buyers as $buyer):?>
<div class="row">
<div class="col-lg-5 d-flex align-items-stretch">
    <div class="info">
        <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Lokasi:</h4>
            <p><?=$buyer->alamat?></p>
        </div>

        <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p><?=$buyer->email?></p>
        </div>

        <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Telepon:</h4>
            <p><?=$buyer->telepon?></p>
        </div>

        <div class="phone">
            <i class="bi bi-paperclip"></i>
            <h4>Fax:</h4>
            <p><?=$buyer->fax?></p>
        </div>
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.821187735656!2d107.13284081434126!3d-6.287220063288694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698534cc40bb31%3A0x5b6907054b200e5b!2sPT%20Samsung%20Electronics%20Indonesia!5e0!3m2!1sid!2sid!4v1635399972987!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe> -->
        </div>
</div>

<div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
        <div class="row">
            <div class="form-group col-md-6">
                <label for="name">Nama Perusahaan</label>
                <h4><?=$buyer->nama_perusahaan?></h4>
                <!-- <input type="text" name="name" class="form-control" id="name" required> -->
            </div>
            <div class="form-group col-md-6">
                <label for="name">Asal Negara</label>
                <h4><?=$buyer->negara?></h4>
                <!-- <input type="email" class="form-control" name="email" id="email" required> -->
            </div>
        </div>
        <div class="form-group">
            <label for="name">Permintaan Produk</label>
            <h4><?=$buyer->produk?></h4>
            <!-- <input type="text" class="form-control" name="subject" id="subject" required> -->
        </div>
        <div class="form-group">
            <label for="name">Website</label>
            <h4><a href="https://<?=$buyer->website?>"><?=$buyer->website?></a></h4>
            <!-- <input type="text" class="form-control" name="subject" id="subject" required> -->
        </div>
        <div class="form-group">
            <label for="name">Narahubung</label>
            <h4><?=$buyer->contact_person?></h4>
            <!-- <input type="text" class="form-control" name="subject" id="subject" required> -->
        </div>
        <!-- <div class="form-group">
            <label for="name">Detail</label>
            <textarea class="form-control" name="message" rows="10">President  :	Lee SangChul
            </textarea>
        </div> -->
        <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <!-- <div class="text-center"><button type="submit">Send Message</button></div> -->
    </form>
</div>


</div>
<?php endforeach ?>

</div>
</section>
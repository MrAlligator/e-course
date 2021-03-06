</main><!-- End #main -->
<!-- ======= Footer ======= -->
<footer id="footer">

    <!-- <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h4>Join Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div> -->

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact"><br>
                <div>
                    <img width="80%" src="<?= base_url() ?>/assets/img/logo.png" width="200px" alt="..."><p></p>
                </div><br>
                    <h6><i class="bx bxs-phone"></i> 0821-3122-2331<br></h6>
                    <h6><i class="bx bx-mail-send"></i> elecomp.sh@gmail.com<br></h6>
                </div>

                <!-- -->
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Data-data</h4>
                    <ul>
                    <?php if (isset($user['email'])) : ?>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('frontend/buyers') ?>">Data Importir (Buyer)</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('frontend/inquiry') ?>">Data Permintaan (Inquiry)</a></li>
                    <?php else : ?>
                        <li><i class="bx bx-chevron-right"></i><a href="#" data-bs-toggle="modal" data-bs-target="#buyerKonf">Data Importir (Buyer)</a></li>
                        <li><i class="bx bx-chevron-right"></i><a href="#" data-bs-toggle="modal" data-bs-target="#inquiKonf">Data Permintaan (Inquiry)</a></li>
                    <?php endif; ?>
                        <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> -->
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Menu</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('home') ?>">Beranda</a></li>
                        <?php if (isset($user['email'])): ?>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('home/articles') ?>">Artikel</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('home/forum') ?>">Forum Komunitas</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('profile') ?>">Profil Pengguna</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('home/kalkulator') ?>">Kalkulator Harga Ekspor</a></li>
                        <?php else :?>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('home/membership') ?>">Keanggotaan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('home/articles') ?>">Artikel</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('home/forum') ?>">Forum Komunitas</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#" data-bs-toggle="modal" data-bs-target="#kalkuKonf">Kalkulator Harga Ekspor</a></li>
                        <?php endif?>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Sosial Media Kami</h4>
                    <p>Sosial Media dari Komunitas Ekspor Indonesia</p>
                    <div class="social-links mt-3">
                        <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a> -->
                        <a href="https://instagram.com/komunitaseksporindonesia" class="instagram"data-bs-toggle="tooltip" data-bs-placement="right" title="@komunitaseksporindonesia"><i class="bx bxl-instagram"></i></a>
                        <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <strong><span>Komunitas Ekspor Indonesia</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
            Dikembangkan oleh <a href="https://elecompindonesia.com/">Elecomp Indonesia</a>
        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
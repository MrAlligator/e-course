<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <!-- <a href="<?= base_url() ?>" class="logo me-auto"><img src="<?= base_url() ?>/assets/img/logo-putih.png" class="img-fluid animated" width="100px" alt=""></a> -->
        <!-- <h2 class="logo me-auto"><a href="<?= base_url() ?>">Logo</a></h2> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="<?= base_url() ?>" class="logo me-auto"><img src="<?= base_url() ?>assets/img/logo-putih.png"></a> -->

        <nav id="navbar" class="navbar">
            <ul>
                <?php if (isset($user['email'])) : ?>
                    <li class="dropdown"><a href="#"><img class="img-profile rounded-circle img-thumbnail" width="40" src="<?= base_url('assets/img/userimage/') . $user['foto_user']; ?>"></a>
                        <ul>
                            <li><a href="<?= base_url('profile') ?>"><h6>Profil Pengguna</h6></a></li>
                            <li><a href="<?= base_url('auth/logout') ?>"><h6>Keluar</h6></a></li>
                        </ul>
                    </li>
                <?php else : ?>
                    <li><a class="getstarted scrollto" href="<?= base_url('auth') ?>"><h6>Masuk</h6></a></li>
                <?php endif; ?>
                <li><a href="<?= base_url('home') ?>"><h6>Beranda</h6></a></li>
                <?php if (!isset($user['email'])) : ?>
                    <li><a href="<?= base_url('home/membership') ?>"><h6>Keanggotaan</h6></a></li>
                    <?php else: ?>
                        <?php endif ?>
                        <li><a href="<?= base_url('home/articles') ?>"><h6>Artikel</h6></a></li>
                        <li><a href="<?= base_url('home/forum') ?>"><h6>Forum Komunitas</h6></a></li>
                    <?php if (isset($user['email'])) : ?>
                        <li><a href="<?= base_url('home/kalkulator') ?>"><h6>Kalkulator Harga Ekspor</h6></a></li>
                        <li class="dropdown"><a href="#"><span><h6>Data Kami</h6></span></a>
                            <!-- i class="bi bi-chevron-down"></i></a> -->
                            <ul>
                                <li><a href="<?= base_url('frontend/buyers') ?>"><h6>Data Importir (Buyer)</h6></a></li>
                                <li><a href="<?= base_url('frontend/inquiry') ?>"><h6>Data Permintaan (Inquiry)</h6></a></li>
                            </ul>
                        </li>
                        <?php else : ?>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#kalkuKonf"><h6>Kalkulator Harga Ekspor</h6></a></li>
                            <li class="dropdown"><a href="#"><span><h6>Data Kami</h6></span></a>
                            <!-- <i class="bi bi-chevron-down"></i></a> -->
                            <ul>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#buyerKonf"><h6>Data Importir (Buyer)</h6></a></li>
                                <li><a href="#" data-bs-toggle="modal" data-bs-target="#inquiKonf"><h6>Data Permintaan (Inquiry)</h6></a></li>
                            </ul>
                        </li>
                        <?php endif; ?>
                    <!-- <li><a href="#about">About</a></li>  
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#team">Team</a></li> -->
                <!-- <li><a href="#">Drop Down 3</a></li> -->
                <!-- <li><a href="#">Drop Down 4</a></li> -->
                <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a> -->
                <!-- <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul> -->
                <!-- </li> -->
                </li>
                <!-- <li><a href="#contact">Contact</a></li> -->

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<main id="main">
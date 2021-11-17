<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="<?= base_url() ?>">Komunitas Omni-Exim</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="<?= base_url('home') ?>">Beranda</a></li>
                <li class="dropdown"><a href="#"><span>Data Kami</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="<?= base_url('frontend/buyers') ?>"> Data Importir</a></li>
                        <li><a href="<?= base_url('frontend/Inquiry') ?>">Data Produk</a></li>
                    </ul>
                <li><a href="<?= base_url('home/articles') ?>">Artikel</a></li>
                <?php if (!isset($user['email'])) : ?>
                    <li><a href="<?= base_url('home/membership') ?>">Keanggotaan</a></li>
                <?php elseif (isset($user['email']) && $user['is_member'] == 0) : ?>
                    <li><a href="<?= base_url('home/membership') ?>">Keanggotaan</a></li>
                <?php elseif (isset($user['email']) && $user['is_member'] == 1) : ?>
                    <li><a href="<?= base_url('home/kalkulator') ?>">Kalkulator Impor</a></li>
                <?php endif ?>
                <li><a href="<?= base_url('home/forum') ?>">Forum</a></li>
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
                <?php if (isset($user['email'])) : ?>
                    <li class="dropdown"><a href="#"><img class="img-profile rounded-circle img-thumbnail" width="40" src="<?= base_url('assets/img/userimage/') . $user['foto_user']; ?>"><i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?= base_url('profile') ?>">Profil Pengguna</a></li>
                            <li><a href="<?= base_url('auth/logout') ?>">Keluar</a></li>
                        </ul>
                    </li>
                <?php else : ?>
                    <li><a class="getstarted scrollto" href="<?= base_url('auth') ?>">Login</a></li>
                <?php endif; ?>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<main id="main">
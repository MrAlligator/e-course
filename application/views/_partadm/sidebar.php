<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <img width="50%" src="<?= base_url() ?>/assets/img/logo.png" style="vertical-align:middle;margin:20px 0px">
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Heading -->
                <h6 class="navbar-heading p-0 text-muted">
                    <span class="docs-normal">Navigasi</span>
                </h6>
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('dashboard') ?>">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                        <a class="nav-link" href="<?= base_url('backend/auth/logout') ?>">
                            <i class="fas fa-sign-out-alt"></i>
                            <span class="nav-link-text">Keluar</span>
                        </a>
                    </li>
                </ul>
                <!-- Divider -->
                <hr class="my-3">
                <!-- Heading -->
                <h6 class="navbar-heading p-0 text-muted">
                    <span class="docs-normal">Kontrol Data</span>
                </h6>
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('backend/importir') ?>">
                            <i class="ni ni-shop text-orange"></i>
                            <span class="nav-link-text">Importir</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('backend/inquiry') ?>">
                            <i class="ni ni-archive-2 text-primary"></i>
                            <span class="nav-link-text">Permintaan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('backend/pengguna') ?>">
                            <i class="ni ni-single-02 text-yellow"></i>
                            <span class="nav-link-text">Pengguna</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('backend/artikel') ?>">
                            <i class="ni ni-books text-default"></i>
                            <span class="nav-link-text">Artikel</span>
                        </a>
                    </li>
                </ul>
                <!-- Divider -->
                <hr class="my-3">
                <!-- Heading -->
                <h6 class="navbar-heading p-0 text-muted">
                    <span class="docs-normal">Kontrol Forum</span>
                </h6>
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('backend/postingan') ?>">
                            <i class="ni ni-collection text-lime"></i>
                            <span class="nav-link-text">Tanggapan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('backend/komentar') ?>">
                            <i class="ni ni-chat-round text-cyan"></i>
                            <span class="nav-link-text">Komentar</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('backend/pertanyaan') ?>">
                            <i class="ni ni-tag text-green"></i>
                            <span class="nav-link-text">Pertanyaan</span>
                        </a>
                    </li>
                </ul>
                <!-- Divider -->
                <hr class="my-3">
                <!-- Heading -->
                <h6 class="navbar-heading p-0 text-muted">
                    <span class="docs-normal">Kontrol Halaman</span>
                </h6>
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('backend/keuntungan') ?>">
                            <i class="ni ni-diamond text-lime"></i>
                            <span class="nav-link-text">Keuntungan Anggota</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('backend/aturan') ?>">
                            <i class="ni ni-key-25 text-cyan"></i>
                            <span class="nav-link-text">Peraturan Forum</span>
                        </a>
                    </li>
                </ul>
                <!-- Divider -->
                <hr class="my-3">
                <!-- Heading -->
                <h6 class="navbar-heading p-0 text-muted">
                    <span class="docs-normal">Log</span>
                </h6>
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('backend/logger') ?>">
                            <i class="ni ni-paper-diploma text-maroon"></i>
                            <span class="nav-link-text">Log Kunjungan Kalkulator</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('backend/logger/indexBuyers') ?>">
                            <i class="ni ni-paper-diploma text-maroon"></i>
                            <span class="nav-link-text">Log Kunjungan Buyers</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('backend/logger/indexInquiry') ?>">
                            <i class="ni ni-paper-diploma text-maroon"></i>
                            <span class="nav-link-text">Log Kunjungan Inquiry</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- Header -->
<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0"><?= $title ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="card">
        <div class="card-header border-0">
            <?php echo $this->session->flashdata('message'); ?>
            <div class="row align-items-center">
                <div class="col">
                    <form method="POST" action="<?= base_url('backend/logger/searchBuyers') ?>" class="navbar-search navbar-search-light form-inline mr-sm-3">
                        <div class="form-group mb-0">
                            <div class="input-group input-group-alternative input-group-merge">
                                <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>" style="display: none;">
                                <input class="form-control" placeholder="Search" type="text" id="key" name="key">
                                <div class="input-group-prepend">
                                    <button class="input-group-text" type="submit"><i class="fas fa-search"></i></button>
                                    <a href="<?= base_url('backend/logger/indexBuyers') ?>" class="input-group-text"><i class="fas fa-sync-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col text-right">
                    <a href="#!" data-toggle="modal" data-target="#clearModal" class=" btn btn-sm btn-danger"> <i class="fas fa-sync-alt"></i> Bersihkan Log</a>
                    <!-- <a href="<?= base_url('backend/logger/download') ?>" class=" btn btn-sm btn-success"><i class="fas fa-file-download"></i> Download Log</a> -->
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table id="tabel_importir" class="table table-bordered table-striped" width="100%" cellspacing="0">
                <?php if ($total_row > 0) : ?>
                    <thead class="thead-dark text-primary">
                        <tr>
                            <th>Waktu Akses</th>
                            <th>User</th>
                            <th>Deskripsi</th>
                            <th>Berapa Kali Kunjungan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($loggers as $log) : ?>
                            <tr>
                                <th width="100px"><?= $log['log_time'] ?></th>
                                <th width="100px"><?= $log['log_user'] ?></th>
                                <th width="100px"><?= $log['log_desc'] ?></th>
                                <th width="100px"><?= $log['log_hits'] ?></th>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                <?php else : ?>
                    <thead class="thead-dark text-primary">
                        <tr>
                            <th>Waktu Akses</th>
                            <th>User</th>
                            <th>Deskripsi</th>
                            <th>Berapa Kali Kunjungan</th>
                        </tr>
                    </thead>
                    <h3 class="text-center"><?= $peringatankosong ?></h3>
                <?php endif; ?>
            </table>
        </div>
    </div>
    <?= $this->pagination->create_links() ?>
    <div class="card">
        <div class="card-header">
            <div class="header-body">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-7">
                        <h6 class="h4 text-black d-inline-block">Rekap Kunjungan Halaman Importir / Buyers</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <table id="tabel_importir" class="table table-bordered table-striped" width="100%" cellspacing="0">
                        <thead class="thead-light text-primary">
                            <tr>
                                <th>User yang paling sering Mengunjungi</th>
                                <th><?= (!empty($max['log_user'])) ? $max['log_user'] : 0; ?></th>
                            </tr>
                            <tr>
                                <th>Total Kunjungan Bulan ini</th>
                                <th><?= $pengunjung . ' Orang' ?></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- clear log Modal -->
    <div class="modal fade" id="clearModal" tabindex="-1" role="dialog" aria-labelledby="clearModal" aria-hidden="true">
        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
            <div class="modal-content bg-gradient-danger">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apa anda yakin?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="py-3 text-center">
                        <i class="ni ni-bell-55 ni-3x"></i>
                        <h4 class="heading mt-4">Perhatikan dengan Seksama..!!</h4>
                        <p>Data yang dihapus tidak akan bisa dikembalikan..!!</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a id="btn-delete" class="btn btn-danger" href="<?= base_url('backend/logger/clear_log/') ?>">Hapus</a>
                </div>
            </div>
        </div>
    </div>
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
                    <!-- Card stats -->
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Jumlah Sudah Dikonfirmasi</h5>
                                            <span class="h2 font-weight-bold mb-0"><?= $jumsudahkonfir ?></span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                                <i class="ni ni-active-40"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-sm">
                                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                        <span class="text-nowrap">Since last month</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Jumlah Belum Dikonfirmasi</h5>
                                            <span class="h2 font-weight-bold mb-0"><?= $jumbelumkonfir ?></span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                                <i class="ni ni-chart-pie-35"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0 text-sm">
                                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                        <span class="text-nowrap">Since last month</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header border-0">
                            <?php echo $this->session->flashdata('message'); ?>
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="mb-0">Tabel Konfirmasi</h3>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <!-- Projects table -->
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Email</th>
                                        <th scope="col">Bukti Transfer</th>
                                        <th scope="col">Tanggal Pembayaran</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($konfirmasi as $konfir) : ?>
                                        <tr>
                                            <td>
                                                <?= $konfir['email'] ?>
                                            </td>
                                            <td>
                                                <img src="<?= base_url('assets/img/buktitransfer/') . $konfir['buktitf'] ?>" width="300" alt="">
                                            </td>
                                            <td>
                                                <?= date('d F Y', $konfir['tanggal_pembayaran']) ?>
                                            </td>
                                            <td>
                                                <a class="badge badge-success" href="" data-toggle="modal" data-target="#acceptModal<?= $konfir['id_pembayaran'] ?>"><i class="fas fa-check-circle"></i></a>
                                                <a class="badge badge-danger" href="" data-toggle="modal" data-target="#refuseModal<?= $konfir['id_pembayaran'] ?>"><i class="fas fa-times-circle"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Tolak -->
            <?php foreach ($konfirmasi as $konfir) : ?>
                <div class="modal fade" id="refuseModal<?= $konfir['id_pembayaran'] ?>" tabindex="-1" role="dialog" aria-labelledby="refuseModal" aria-hidden="true">
                    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                        <div class="modal-content bg-gradient-danger">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Yakin Menolak Pembayaran?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                <a id="btn-delete" class="btn btn-danger" href="<?= base_url('backend/konfirmasi/refuse/' . $konfir['id_pembayaran']) ?>" data-target="modal">Tolak</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

            <!-- Modal Terima -->
            <?php foreach ($konfirmasi as $konfir) : ?>
                <div class="modal fade" id="acceptModal<?= $konfir['id_pembayaran'] ?>" tabindex="-1" role="dialog" aria-labelledby="acceptModal" aria-hidden="true">
                    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                        <form action="<?= base_url('backend/konfirmasi/acc') ?>" method="POST">
                            <div class="modal-content bg-gradient-danger">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Yakin Menerima Pembayaran?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <input type="text" name="email" id="email" value="<?= $konfir['email'] ?>" hidden>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                    <button class="btn btn-success" type="submit">Terima</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <?php endforeach ?>
        <!-- Header -->
        <!-- Header -->
        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0"><?= $title ?></h6>
                        </div>
                        <div class="col-lg-6 col-5 text-right">
                            <a href="<?= base_url('backend/konfirmasi') ?>" class="btn btn-neutral">Konfirmasi Membership</a>
                        </div>
                    </div>
                    <!-- Card stats -->
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Pengguna</h5>
                                            <span class="h2 font-weight-bold mb-0"><?= $jumuser ?></span>
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
                        <div class="col-xl-4 col-md-6">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Free Member</h5>
                                            <span class="h2 font-weight-bold mb-0"><?= $jumfree ?></span>
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
                        <div class="col-xl-4 col-md-6">
                            <div class="card card-stats">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Premium Member</h5>
                                            <span class="h2 font-weight-bold mb-0"><?= $jumprem ?></span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                                <i class="ni ni-money-coins"></i>
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
                                    <h3 class="mb-0">Pengguna</h3>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <!-- Projects table -->
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Nama User</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Foto User</th>
                                        <th scope="col">Member</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($user as $pengguna) : ?>
                                        <tr>
                                            <th scope="row">
                                                <?= $pengguna['nama'] ?>
                                            </th>
                                            <td>
                                                <?= $pengguna['email'] ?>
                                            </td>
                                            <td>
                                                <img src="<?= base_url('assets/img/userimage/') . $pengguna['foto_user'] ?>" width="50" alt="">
                                            </td>
                                            <td>
                                                <?php
                                                if ($pengguna['is_member'] == 1) {
                                                    echo "Premium";
                                                } else {
                                                    echo "Free";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <a class="badge badge-success" href="" data-toggle="modal" data-target="#infoModal<?= $pengguna['id_user'] ?>"><i class="fas fa-info-circle"></i></a>
                                                <a class="badge badge-danger" href="" data-toggle="modal" data-target="#deleteModal<?= $pengguna['id_user'] ?>"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        <?= $this->pagination->create_links() ?>
                    </div>
                </div>
            </div>

            <!-- Modal Info -->
            <?php foreach ($user as $pengguna) : ?>
                <div class="modal fade" id="infoModal<?= $pengguna['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="infoModalLabel">Detail User</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card border-0 mb-0">
                                    <div class="card-body px-lg-5 py-lg-5">
                                        <div class="row g-0">
                                            <div class="col-md-4">
                                                <img id="foto" src="<?= base_url('/assets/img/userimage/') . $pengguna['foto_user']; ?>" class="img-fluid rounded-start img-thumbnail" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body">
                                                    <h5 class="card-title"><?= $pengguna['nama'] ?></h5>
                                                    <h5 class="card-text"><?= $pengguna['nomor_hp'] ?></h5>
                                                    <h5 class="card-text"><?= $pengguna['email'] ?></h5>
                                                    <h5 class="card-text">
                                                        <small class="text-muted">
                                                            <?php if ($pengguna['role_id'] == 2 && $pengguna['is_member'] == 1) {
                                                                echo "Anggota Premium";
                                                            } else if ($pengguna['role_id'] == 2 && $pengguna['is_member'] == 0) {
                                                                echo "Anggota";
                                                            } else if ($pengguna['role_id'] == 1 && $pengguna['is_member'] == 1) {
                                                                echo "Administrator";
                                                            } ?>
                                                        </small>
                                                        <small class="text-muted">Sejak <?= date('d F Y', $pengguna['date_created']); ?></small>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

            <!-- Modal Delete -->
            <?php foreach ($user as $pengguna) : ?>
                <div class="modal fade" id="deleteModal<?= $pengguna['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
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
                                <a id="btn-delete" class="btn btn-danger" href="<?= base_url('backend/pengguna/delete/' . $pengguna['id_user']) ?>" data-target="modal">Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
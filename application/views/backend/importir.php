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
                            <form method="POST" action="<?= base_url('backend/importir/search') ?>" class="navbar-search navbar-search-light form-inline mr-sm-3">
                                <div class="form-group mb-0">
                                    <div class="input-group input-group-alternative input-group-merge">
                                        <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>" style="display: none;">
                                        <input class="form-control" placeholder="Search" type="text" id="key" name="key">
                                        <div class="input-group-prepend">
                                            <button class="input-group-text" type="submit"><i class="fas fa-search"></i></button>
                                            <a href="<?= base_url('backend/importir') ?>" class="input-group-text"><i class="fas fa-sync-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col text-right">
                            <a href="#!" data-toggle="modal" data-target="#tanyaModal" class=" btn btn-sm btn-primary"> <i class="ni ni-fat-add"></i> Tambah Importir</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="tabel_importir" class="table table-bordered table-striped" width="100%" cellspacing="0">
                        <thead class="thead-dark text-primary">
                            <tr>
                                <th width="50px">No</th>
                                <th width="150px">Nama Perusahaan</th>
                                <th>Negara</th>
                                <th width="125px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php foreach ($buyers as $buyer) : ?>
                                    <td width="50px"><?= ++$start; ?></td>
                                    <td width="150px"><?= $buyer['nama_perusahaan'] ?></a></td>
                                    <td><?= $buyer['negara'] ?></td>
                                    <td width="100px">
                                        <a class="badge badge-success" href="" data-toggle="modal" data-target="#infoModal<?= $buyer['id_importir'] ?>"><i class="fas fa-info-circle"></i></a>
                                        <a class="badge badge-warning" href="" data-toggle="modal" data-target="#editModal<?= $buyer['id_importir'] ?>"><i class="fas fa-edit"></i></a>
                                        <a class="badge badge-danger" href="" data-toggle="modal" data-target="#deleteModal<?= $buyer['id_importir'] ?>"><i class="fas fa-trash"></i></a>
                                    </td>
                            </tr>
                        <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <?= $this->pagination->create_links() ?>

            <!-- Modal Tambah -->
            <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                <div class="modal-dialog modal- modal-dialog-centered modal-xl" role="document">
                    <div class="modal-content">
                        <form action="<?= base_url('backend/importir/add') ?>" method="POST">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addModalLabel">Tambah Importir</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card border-0 mb-0">
                                    <div class="card-body px-lg-5 py-lg-5">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group mb-3">
                                                    <div class="input-group input-group-merge input-group-alternative">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ni ni-building"></i></span>
                                                        </div>

                                                        <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>" style="display: none;">
                                                        <input type="hidden" name="tgl_input" value="<?= date('Y-m-d') ?>">
                                                        <input class="form-control" type="text" name="perusahaan" id="perusahaan" placeholder="Nama Pelaku Importir" required><?= form_error('perusahaan', '<small class="text-danger pl-3">', '</small>') ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group mb-3">
                                                    <div class="input-group input-group-merge input-group-alternative">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                                        </div>
                                                        <input class="form-control" type="text" name="cp" id="cp" placeholder="Contact Person" required><?= form_error('cp', '<small class="text-danger pl-3">', '</small>') ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group mb-3">
                                                    <div class="input-group input-group-merge input-group-alternative">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ni ni-square-pin"></i></span>
                                                        </div>
                                                        <input class="form-control" type="text" name="alamat" id="alamat" placeholder="Alamat Importir" required><?= form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <div class="input-group input-group-merge input-group-alternative">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ni ni-map-big"></i></span>
                                                        </div>
                                                        <select id="negara" name="negara" class="form-control" required>
                                                            <option value="" disabled>Pilih Negara</option>
                                                            <?php foreach ($negara as $ngr) : ?>
                                                                <option value="<?= $ngr['negara']; ?>"><?= $ngr['negara']; ?></option>
                                                            <?php endforeach; ?>
                                                        </select><?= form_error('negara', '<small class="text-danger pl-3">', '</small>') ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <div class="input-group input-group-merge input-group-alternative">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ni ni-world-2"></i></span>
                                                        </div>
                                                        <input class="form-control" type="text" name="website" id="website" placeholder="Website Importir">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="form-group mb-3">
                                                    <div class="input-group input-group-merge input-group-alternative">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas fa-phone-square"></i></span>
                                                        </div>
                                                        <input class="form-control" type="text" name="telepon" id="telepon" placeholder="No Telepon Importir" onkeypress="return hanyaAngka(event)" required><?= form_error('telepon', '<small class="text-danger pl-3">', '</small>') ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <div class="input-group input-group-merge input-group-alternative">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas fa-fax"></i></span>
                                                        </div>
                                                        <input class="form-control" type="text" name="fax" id="fax" placeholder="No Fax Importir" onkeypress="return hanyaAngka(event)" required><?= form_error('fax', '<small class="text-danger pl-3">', '</small>') ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <div class="input-group input-group-merge input-group-alternative">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                                        </div>
                                                        <input class="form-control" type="text" name="email" id="email" placeholder="Email Importir" required><?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group mb-3">
                                                    <div class="input-group input-group-merge input-group-alternative">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ni ni-shop"></i></span>
                                                        </div>
                                                        <input class="form-control" type="text" name="produk" id="produk" placeholder="Produk Importir" required><?= form_error('produk', '<small class="text-danger pl-3">', '</small>') ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal Info -->
            <?php foreach ($buyers as $buyer) : ?>
                <div class="modal fade" id="infoModal<?= $buyer['id_importir'] ?>" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="infoModalLabel">Detail Importir</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="card border-0 mb-0">
                                    <div class="card-body px-lg-5 py-lg-5">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 col-7">
                                                <h6 class="h4 text-black d-inline-block mb-0">Data Diinput pada <?= $buyer['tgl_input'] ?></h6>
                                            </div>
                                            <div class="col-lg-6 col-5 text-right">
                                                <h6 class="h4 text-black d-inline-block mb-0">Data Diupdate pada <?= $buyer['tgl_edit'] ?></h6>
                                            </div>
                                        </div>
                                        <div class="row py-2">
                                            <div class="col">
                                                <div class="form-group mb-3">
                                                    <div class="input-group input-group-merge input-group-alternative">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ni ni-building"></i></span>
                                                        </div>
                                                        <input class="form-control-plaintext" disabled type="text" value="<?= $buyer['nama_perusahaan'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group mb-3">
                                                    <div class="input-group input-group-merge input-group-alternative">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                                        </div>
                                                        <input class="form-control-plaintext" disabled type="text" value="<?= $buyer['contact_person'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group mb-3">
                                                    <div class="input-group input-group-merge input-group-alternative">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ni ni-square-pin"></i></span>
                                                        </div>
                                                        <input class="form-control-plaintext" disabled type="text" value="<?= $buyer['alamat'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <div class="input-group input-group-merge input-group-alternative">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ni ni-map-big"></i></span>
                                                        </div>
                                                        <input class="form-control-plaintext" disabled type="text" value="<?= $buyer['negara'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <div class="input-group input-group-merge input-group-alternative">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ni ni-world-2"></i></span>
                                                        </div>
                                                        <input class="form-control-plaintext" disabled type="text" value="<?= $buyer['website'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="form-group mb-3">
                                                    <div class="input-group input-group-merge input-group-alternative">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas fa-phone-square"></i></span>
                                                        </div>
                                                        <input class="form-control-plaintext" disabled type="text" value="<?= $buyer['telepon'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <div class="input-group input-group-merge input-group-alternative">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fas fa-fax"></i></span>
                                                        </div>
                                                        <input class="form-control-plaintext" disabled type="text" value="<?= $buyer['fax'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <div class="input-group input-group-merge input-group-alternative">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                                        </div>
                                                        <input class="form-control-plaintext" disabled type="text" value="<?= $buyer['email'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group mb-3">
                                                    <div class="input-group input-group-merge input-group-alternative">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ni ni-shop"></i></span>
                                                        </div>
                                                        <input class="form-control-plaintext" disabled type="text" value="<?= $buyer['produk'] ?>">
                                                    </div>
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

            <!-- Modal Edit -->
            <?php foreach ($buyers as $buyer) : ?>
                <div class="modal fade" id="editModal<?= $buyer['id_importir'] ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-xl" role="document">
                        <div class="modal-content">
                            <form action="<?= base_url('backend/importir/edit') ?>" method="POST">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel">Edit Detail Importir</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body p-0">
                                    <div class="card border-0 mb-0">
                                        <div class="card-body px-lg-5 py-lg-5">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group mb-3">
                                                        <div class="input-group input-group-merge input-group-alternative">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="ni ni-building"></i></span>
                                                            </div>

                                                            <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>" style="display: none;">
                                                            <input type="text" class="form-control" name="id" id="id" value="<?= $buyer['id_importir'] ?>" hidden>
                                                            <input type="hidden" name="tgl_edit" value="<?= date('Y-m-d') ?>">
                                                            <input class="form-control" type="text" name="perusahaan" id="perusahaan" value="<?= $buyer['nama_perusahaan'] ?>" required><?= form_error('perusahaan', '<small class="text-danger pl-3">', '</small>') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group mb-3">
                                                        <div class="input-group input-group-merge input-group-alternative">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                                            </div>
                                                            <input class="form-control" type="text" name="cp" id="cp" value="<?= $buyer['contact_person'] ?>" required><?= form_error('cp', '<small class="text-danger pl-3">', '</small>') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group mb-3">
                                                        <div class="input-group input-group-merge input-group-alternative">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="ni ni-square-pin"></i></span>
                                                            </div>
                                                            <input class="form-control" type="text" name="alamat" id="alamat" value="<?= $buyer['alamat'] ?>" required><?= form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <div class="input-group input-group-merge input-group-alternative">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="ni ni-map-big"></i></span>
                                                            </div>
                                                            <select id="negara" name="negara" class="form-control" required>
                                                                <option value="<?= $buyer['negara'] ?>" selected><?= $buyer['negara'] ?></option>
                                                                <?php foreach ($negara as $ngr) : ?>
                                                                    <option value="<?= $ngr['negara']; ?>"><?= $ngr['negara']; ?></option>
                                                                <?php endforeach; ?>
                                                            </select><?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <div class="input-group input-group-merge input-group-alternative">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="ni ni-world-2"></i></span>
                                                            </div>
                                                            <input class="form-control" type="text" name="website" id="website" value="<?= $buyer['website'] ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <div class="form-group mb-3">
                                                        <div class="input-group input-group-merge input-group-alternative">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-phone-square"></i></span>
                                                            </div>
                                                            <input class="form-control" type="text" name="telepon" id="telepon" value="<?= $buyer['telepon'] ?>" onkeypress="return hanyaAngka(event)" required><?= form_error('telepon', '<small class="text-danger pl-3">', '</small>') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=" col-lg-2">
                                                    <div class="form-group">
                                                        <div class="input-group input-group-merge input-group-alternative">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-fax"></i></span>
                                                            </div>
                                                            <input class="form-control" type="text" name="fax" id="fax" value="<?= $buyer['fax'] ?>" onkeypress="return hanyaAngka(event)" required><?= form_error('fax', '<small class="text-danger pl-3">', '</small>') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <div class="input-group input-group-merge input-group-alternative">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                                            </div>
                                                            <input class="form-control" type="text" name="email" id="email" value="<?= $buyer['email'] ?>" required><?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group mb-3">
                                                        <div class="input-group input-group-merge input-group-alternative">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="ni ni-shop"></i></span>
                                                            </div>
                                                            <input class="form-control" type="text" name="produk" id="produk" value="<?= $buyer['produk'] ?>" required><?= form_error('produk', '<small class="text-danger pl-3">', '</small>') ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

            <!-- Modal Delete -->
            <?php foreach ($buyers as $buyer) : ?>
                <div class="modal fade" id="deleteModal<?= $buyer['id_importir'] ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
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
                                <a id="btn-delete" class="btn btn-danger" href="<?= base_url('backend/importir/delete/' . $buyer['id_importir']) ?>" data-target="modal">Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

            <!-- Modal Tanya -->
            <div class="modal fade" id="tanyaModal" tabindex="-1" role="dialog" aria-labelledby="tanyaModal" aria-hidden="true">
                <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                    <div class="modal-content bg-gradient-danger">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Pilih Metode Menambahkan Data</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="py-3 text-center">
                                <i class="ni ni-folder-17 ni-3x"></i>
                            </div>
                            <div class="row">
                                <div class="col text-center">
                                    <a href="#!" data-toggle="modal" data-dismiss="modal" data-target="#addModal" class="btn btn-success">Manual</a>
                                </div>
                                <div class="col text-center">
                                    <a href="#!" data-toggle="modal" data-dismiss="modal" data-target="#importModal" class="btn btn-success">Import</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Import -->
            <div class="modal fade" id="importModal" tabindex="-1" role="dialog" aria-labelledby="importModal" aria-hidden="true">
                <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                    <div class="modal-content bg-gradient">
                        <form action="<?= base_url('backend/importir/import') ?>" method="post" enctype="multipart/form-data">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Import Data Importir</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="py-3 text-center">
                                    <i class="ni ni-folder-17 ni-3x"></i>
                                    <p>Belum Mengetahui Format excel yang dipakai? Download format berikut!</p>
                                    <a href="<?= base_url('backend/importir/download') ?>" class="badge badge-primary"><i class="fas fa-file-download"></i> Download</a>
                                </div>
                                <div class="form-group py-3 text-center">
                                    <label>Pilih File Excel</label><br>
                                    <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>" style="display: none;">
                                    <input type="file" name="fileExcel">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                                <button class="btn btn-success" type="submit">Import</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- JS Hanya Angka -->
            <script>
                function hanyaAngka(event) {
                    var angka = (event.which) ? event.which : event.keyCode
                    if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
                        return false;
                    return true;
                }
            </script>
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
                        <div class="col text-right">
                            <a href="#!" data-toggle="modal" data-target="#addModal" class=" btn btn-sm btn-primary"> <i class="ni ni-fat-add"></i> Tambah Importir</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="tabel_importir" class="table table-bordered table-striped" width="100%" cellspacing="0">
                        <thead class="thead-dark text-primary">
                            <tr>
                                <th width="50px">No</th>
                                <th width="150px">Permintaan</th>
                                <th>Negara</th>
                                <th width="125px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php $i = 1;
                                foreach ($buyers as $buyer) : ?>
                                    <td width="50px"><?= ++$start; ?></td>
                                    <td width="150px"><?= $buyer['produk'] ?></a></td>
                                    <td><?= $buyer['negara'] ?></td>
                                    <td width="100px">
                                        <a class="badge badge-success" href="" data-toggle="modal" data-target="#infoModal<?= $buyer['id_inquiry'] ?>"><i class="fas fa-info-circle"></i></a>
                                        <a class="badge badge-warning" href="" data-toggle="modal" data-target="#editModal<?= $buyer['id_inquiry'] ?>"><i class="fas fa-edit"></i></a>
                                        <a class="badge badge-danger" href="" data-toggle="modal" data-target="#deleteModal<?= $buyer['id_inquiry'] ?>"><i class="fas fa-trash"></i></a>
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
                        <form action="<?= base_url('backend/inquiry/add') ?>" method="POST">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addModalLabel">Tambah Permintaan</h5>
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
                                                            <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                                        </div>
                                                        <input class="form-control" name="produk" id="produk" type="text" placeholder="Masukkan Produk">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group mb-3">
                                                    <div class="input-group input-group-merge input-group-alternative">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ni ni-square-pin"></i></span>
                                                        </div>
                                                        <input class="form-control" name="negara" id="negara" type="text" placeholder="Pilih Negara">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <div class="input-group input-group-merge input-group-alternative">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ni ni-map-big"></i> Detail</span>
                                                        </div>
                                                        <textarea name="detail" id="detail" cols="130" rows="10"></textarea>
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
                <div class="modal fade" id="infoModal<?= $buyer['id_inquiry'] ?>" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="infoModalLabel">Detail Permintaan</h5>
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
                                                        <input class="form-control-plaintext" disabled type="text" value="<?= $buyer['tanggal_input'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group mb-3">
                                                    <div class="input-group input-group-merge input-group-alternative">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                                        </div>
                                                        <input class="form-control-plaintext" disabled type="text" value="<?= $buyer['produk'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group mb-3">
                                                    <div class="input-group input-group-merge input-group-alternative">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ni ni-square-pin"></i></span>
                                                        </div>
                                                        <input class="form-control-plaintext" disabled type="text" value="<?= $buyer['negara'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <div class="input-group input-group-merge input-group-alternative">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ni ni-map-big"></i></span>
                                                        </div>
                                                        <!-- <input class="form-control-plaintext" disabled type="text" value="<?= $buyer['detail'] ?>"> -->
                                                        <textarea name="def" id="def" cols="130" rows="10"><?= $buyer['detail'] ?></textarea>
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
                <div class="modal fade" id="editModal<?= $buyer['id_inquiry'] ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-xl" role="document">
                        <div class="modal-content">
                            <form action="<?= base_url('backend/inquiry/edit') ?>" method="POST">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel">Edit Detail Permintaan</h5>
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
                                                            <input class="form-control" name="id" id="id" type="text" hidden value="<?= $buyer['id_inquiry'] ?>">
                                                            <input class="form-control" name="tanggal" id="tanggal" type="text" disabled value="<?= $buyer['tanggal_input'] ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group mb-3">
                                                        <div class="input-group input-group-merge input-group-alternative">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                                            </div>
                                                            <input class="form-control" name="produk" id="produk" type="text" value="<?= $buyer['produk'] ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group mb-3">
                                                        <div class="input-group input-group-merge input-group-alternative">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="ni ni-square-pin"></i></span>
                                                            </div>
                                                            <input class="form-control" name="negara" id="negara" type="text" value="<?= $buyer['negara'] ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <div class="input-group input-group-merge input-group-alternative">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="ni ni-map-big"></i></span>
                                                            </div>
                                                            <textarea name="detail" id="detail" cols="130" rows="10"><?= $buyer['detail'] ?></textarea>
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
                <div class="modal fade" id="deleteModal<?= $buyer['id_inquiry'] ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
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
                                <a id="btn-delete" class="btn btn-danger" href="<?= base_url('backend/inquiry/delete/' . $buyer['id_inquiry']) ?>">Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
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
            <?= $this->session->flashdata('message'); ?>
            <div class="row align-items-center">
                <div class="col">
                    <form method="POST" action="<?= base_url('backend/importir/search') ?>" class="navbar-search navbar-search-light form-inline mr-sm-3">
                        <div class="form-group mb-0">
                            <div class="input-group input-group-alternative input-group-merge">
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
                    <a href="#!" data-toggle="modal" data-target="#addModal" class=" btn btn-sm btn-primary"> <i class="ni ni-fat-add"></i> Tambah Pertanyaan / Topik</a>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table id="tabel_importir" class="table table-bordered table-striped" width="100%" cellspacing="0">
                <thead class="thead-dark text-primary">
                    <tr>
                        <th>Pertanyaan / Topik</th>
                        <th width="125px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pertanyaan as $question) : ?>
                        <tr>
                            <th><?= $question['nama_kategori'] ?></th>
                            <th width="125px">
                                <a class="badge badge-success" href="" data-toggle="modal" data-target="#infoModal<?= $question['id_kategori'] ?>"><i class="fas fa-info-circle"></i></a>
                                <a class="badge badge-danger" href="" data-toggle="modal" data-target="#deleteModal<?= $question['id_kategori'] ?>"><i class="fas fa-trash"></i></a>
                            </th>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <?= $this->pagination->create_links() ?>

    <!-- Modal Tambah -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <form action="<?= base_url('backend/pertanyaan/add') ?>" method="POST">
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
                                                <input class="form-control" name="topik" id="topik" type="text" placeholder="Masukkan Pertanyaan atau Topik" required>
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
                                                <input class="form-control" name="deskripsi" id="deskripsi" type="text" placeholder="Masukkan Deskripsi Topik" required>
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
    <?php foreach ($pertanyaan as $question) : ?>
        <div class="modal fade" id="infoModal<?= $question['id_kategori'] ?>" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal- modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="infoModalLabel">Detail Pertanyaan / Topik</h5>
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
                                                <input class="form-control-plaintext" disabled type="text" value="<?= $question['nama_kategori'] ?>">
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
                                                <textarea cols="125" rows="5"><?= $question['deskripsi'] ?></textarea>
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

    <!-- Modal Delete -->
    <?php foreach ($pertanyaan as $question) : ?>
        <div class="modal fade" id="deleteModal<?= $question['id_kategori'] ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
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
                        <a id="btn-delete" class="btn btn-danger" href="<?= base_url('backend/pertanyaan/delete/' . $question['id_kategori']) ?>">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
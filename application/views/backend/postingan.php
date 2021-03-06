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
                    <form method="POST" action="<?= base_url('backend/postingan/search') ?>" class="navbar-search navbar-search-light form-inline mr-sm-3">
                        <div class="form-group mb-0">
                            <div class="input-group input-group-alternative input-group-merge">
                                <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>" style="display: none;">
                                <input class="form-control" placeholder="Search" type="text" id="key" name="key">
                                <div class="input-group-prepend">
                                    <button class="input-group-text" type="submit"><i class="fas fa-search"></i></button>
                                    <a href="<?= base_url('backend/postingan') ?>" class="input-group-text"><i class="fas fa-sync-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table id="tabel_importir" class="table table-bordered table-striped" width="100%" cellspacing="0">
                <thead class="thead-dark text-primary">
                    <tr>
                        <th width="100px">Tanggapan</th>
                        <th width="125px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($postingan as $post) : ?>
                        <tr>
                            <th width="100px"><?= $post['postingan'] ?></th>
                            <th width="125px">
                                <a class="badge badge-success" href="" data-toggle="modal" data-target="#infoModal<?= $post['id_post'] ?>"><i class="fas fa-info-circle"></i></a>
                                <a class="badge badge-danger" href="" data-toggle="modal" data-target="#deleteModal<?= $post['id_post'] ?>"><i class="fas fa-trash"></i></a>
                            </th>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <?= $this->pagination->create_links() ?>

    <!-- Modal Info -->
    <?php foreach ($postingan as $post) : ?>
        <div class="modal fade" id="infoModal<?= $post['id_post'] ?>" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal- modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="infoModalLabel">Detail Postingan</h5>
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
                                                <input class="form-control-plaintext" disabled type="text" value="Diposting pada <?= $post['tanggal'] ?> pukul <?= $post['jam'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group mb-3">
                                            <div class="input-group input-group-merge input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                                </div>
                                                <input class="form-control-plaintext" disabled type="text" value="Oleh <?= $post['nama'] ?>">
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
                                                <input class="form-control-plaintext" disabled type="text" value="<?= $post['postingan'] ?>">
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
                                                <input class="form-control-plaintext" disabled type="text" value="Pada Topik <?= $post['nama_kategori'] ?>">
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
    <?php foreach ($postingan as $post) : ?>
        <div class="modal fade" id="deleteModal<?= $post['id_post'] ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
            <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                <div class="modal-content bg-gradient-danger">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Apa anda yakin?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">??</span>
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
                        <a id="btn-delete" class="btn btn-danger" href="<?= base_url('backend/postingan/delete/' . $post['id_post']) ?>">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
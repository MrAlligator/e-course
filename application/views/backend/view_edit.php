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
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="card-header border-0">
                <?php echo $this->session->flashdata('message'); ?>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                </div>
                                <input class="form-control" name="id" id="id" type="hidden" value="<?= $artikel['id_artikel'] ?>">
                                <input class="form-control" name="judul" id="judul" type="text" placeholder="Masukkan Judul" value="<?= $artikel['judul'] ?>"><?= form_error('judul', '<small class="text-danger pl-3">', '</small>') ?>
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
                                <input type="hidden" name="old_image" value="<?php echo $artikel['gambar'] ?>" />
                                <input type="file" name="gambar" id="gambar" class="form-control"><?= form_error('gambar', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Artikel</span>
                                </div>
                                <!-- <input type="text" class="form-control text-decoration-none" readonly placeholder="Artikel"> -->
                            </div>
                            <textarea name="detail" id="detail" cols="130" rows="20"><?= $artikel['isi'] ?></textarea><?= form_error('detail', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </form>
    </div>
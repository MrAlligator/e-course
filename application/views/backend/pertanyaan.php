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
                    <a href="#!" data-toggle="modal" data-target="#tanyaModal" class=" btn btn-sm btn-primary"> <i class="ni ni-fat-add"></i> Tambah Importir</a>
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
                                <a class="badge badge-warning" href="" data-toggle="modal" data-target="#editModal<?= $question['id_kategori'] ?>"><i class="fas fa-edit"></i></a>
                                <a class="badge badge-danger" href="" data-toggle="modal" data-target="#deleteModal<?= $question['id_kategori'] ?>"><i class="fas fa-trash"></i></a>
                            </th>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <?= $this->pagination->create_links() ?>
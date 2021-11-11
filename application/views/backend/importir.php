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
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">Page visits</h3>
                        </div>
                        <div class="col text-right">
                            <a href="#!" class="btn btn-sm btn-primary">See all</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="tabel_importir" class="table table-bordered table-striped" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="50px">No</th>
                                <th width="150px">Nama Perusahaan</th>
                                <th>Negara</th>
                                <th width="125px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php $i = 1;
                                foreach ($buyers as $buyer) : ?>
                                    <td width="50px"><?= ++$start; ?></td>
                                    <td width="150px"><?= $buyer['nama_perusahaan'] ?></a></td>
                                    <td><?= $buyer['negara'] ?></td>
                                    <td width="100px">
                                        <a class="badge badge-success" href="<?= base_url('frontend/buyers/detail/') . $buyer['id_importir'] ?>"><i class="fas fa-info-circle"></i></a>
                                        <a class="badge badge-warning" href="<?= base_url('frontend/buyers/detail/') . $buyer['id_importir'] ?>"><i class="fas fa-edit"></i></a>
                                        <a class="badge badge-danger" href="<?= base_url('frontend/buyers/detail/') . $buyer['id_importir'] ?>"><i class="fas fa-trash"></i></a>
                                    </td>
                            </tr>
                        <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?= $this->pagination->create_links() ?>
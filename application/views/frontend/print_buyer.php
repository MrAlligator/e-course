<div class="table-responsive">
    <h3>Data Importir</h3>
            <table border="0.5" class="table table-bordered table-striped" width="100%" cellspacing="0">
                <thead class="thead-dark text-primary">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Perusahaan</th>
                        <th scope="col">Produk</th>
                        <th scope="col">Negara</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                        foreach ($importir as $buyer) : ?>
                            <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $buyer->nama_perusahaan ?></a></td>
                            <td><?= $buyer->produk ?></td>
                            <td><?= $buyer->negara ?></td>
                            <td>Telp :<?= $buyer->telepon ?><br>
                                Fax : <?= $buyer->fax ?><br>
                                Email : <?= $buyer->email ?><br>
                                Website : <a href="https://<?= $buyer->website ?>"><?= $buyer->website ?></a><br>
                                Contact Person : <?= $buyer->contact_person ?><br></td>
                            </tr>
                        <?php endforeach;?>
                </tbody>
            </table>
        </div>
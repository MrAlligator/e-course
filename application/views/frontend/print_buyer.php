<!DOCTYPE html>
<html><head></head><body>
<div class="table-responsive">
            <table id="tabel_importir" class="table table-bordered table-striped" width="100%" cellspacing="0">
                <thead class="thead-dark text-primary">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Perusahaan</th>
                        <th scope="col">Produk</th>
                        <th scope="col">Negara</th>
                        <th scope="col">Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php $i = 1;
                        foreach ($importir as $buyer) : ?>
                            <td><?= $i++ ?></td>
                            <td><?= $buyer->nama_perusahaan ?></a></td>
                            <td><?= $buyer->produk ?></td>
                            <td><?= $buyer->negara ?></td>
                            <?php if (isset($_SESSION['email'])) { ?>
                            <td><a href="<?= base_url('frontend/buyers/detail/') . $buyer->id_importir ?>">Detail<a><br></td>
                            <?php } else { ?>
                            <td><a href="<?= base_url('home/membership') ?>">Detail<a></td>
                            <?php } ?>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
</body></html>
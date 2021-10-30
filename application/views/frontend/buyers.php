<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Data Importir</h2>
            <p>Data Importir menampilkan perusahaan importir dari seluruh dunia</p>
        </div>

        <table class="table table-bordered table-striped">
            <tr>
                <th width="50">No</th>	
                <th width="100" height="50">Kode Importir</th>	
                <th width="400">Nama Perusahaan</th>
                <th width="500">Permintaan</th>		
                <th width="100">Detail</th>
            </tr>
            <tr>
            <?php $i=1;foreach($buyers as $buyer):?>
                <td><?=$i++?></td>
                <td><?=$buyer->id_buyers?></td>
                <td><?=$buyer->nama_perusahaan?></a></td>
                <td><?=$buyer->produk?></td>
            <?php if (isset($_SESSION['email'])) { ?>
                <td><a href="<?= base_url('frontend/buyers/detail/').$buyer->id_buyers ?>">Selengkapnya<a></td>
            <?php }else{ ?>
                <td><a href="<?= base_url('home/membership') ?>">Selengkapnya<a></td>
            <?php } ?>
            </tr>
            <?php endforeach ?>
        </table>
        
    </div>
</section>
<section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Buyers Data</h2>
                    <p>Buyers data provide you the buyers from across the world, you might want to promote your product</p>
                </div>

                <div class="row">

<table>

    <tr>
    <th>
        No
    </th>
 <th>ID</th>
 <th>Tanggal</th>
 <th>Wanted</th>
 <th>Country</th>
 <th>Detail</th>
</tr>

<tr>
    <td>1</td>
    <td>I001</a></td>
    <td>23/10/21</td>
    <td>Black Pepper</td>
    <td>Egypt</td>
    <?php if (isset($_SESSION['email'])) { ?>
        <td><a href="#">See detail<a></td>
    <?php }else{ ?>
        <td><a href="<?= base_url('home/membership') ?>">See detail<a></td>
    <?php } ?>
</tr>
</table>

</div>

</div>
</section>
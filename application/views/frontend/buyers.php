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
 <th>Name</th>
 <th>Inquiry</th>
 <th>Detail</th>
</tr>

<tr>
    <td>1</td>
    <td>Samsung Electronics Indonesia</a></td>
    <td>Electronic goods</td>
    <?php if (isset($_SESSION['email'])) { ?>
        <td><a href="<?= base_url('frontend/buyers/detail') ?>">See detail<a></td>
    <?php }else{ ?>
        <td><a href="<?= base_url('home/membership') ?>">See detail<a></td>
    <?php } ?>
</tr>
</table>

</div>

</div>
</section>
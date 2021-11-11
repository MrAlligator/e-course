<!-- ======= About Us Section ======= -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    function previewFile(input) {
        var file = $("input[type=file]").get(0).files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function() {
                $("#buktitf").attr("src", reader.result);
            }
            reader.readAsDataURL(file);
        }
    }
</script>
<section id="why-us" class="why-us section-bg">
    <div class="container-fluid" data-aos="fade-up">

        <div class="section-title">
            <h2>Menjadi Anggota Premium</h2>
        </div>

        <div class="row">
            <div class="col-lg-12 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
                <div class="content">

                    <div class="row">
                        <div class="col-lg-8">


                            <div class="accordion-list">
                                <ul>
                                    <li>
                                        <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#accordion-list-3">Apa keuntungan menjadi anggota premium ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                            <p>1. Mendapatkan detail data importir dari seluruh dunia</a> </p>
                                            <p>2. Mendapatkan detail data permintaan perusahaan importir</a> </p>
                                            <p>3. Pelatihan Ekspor dan Impor</p>
                                            <p>4. Berdiskusi melalui forum</p>
                                        </div>
                                    <li>
                                        <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#accordion-list-2">Bagaimana cara menjadi member premium ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                            <p>1. Mendaftar, anda dapat melakukan pendaftaran <a href="<?= base_url('auth/register') ?>">disini</a> </p>
                                            <p>2. Melakukan Pembayaran</p>
                                            <p>3. Mengunggah Bukti Transfer</p>
                                            <p>4. Nikmati Keuntungannya</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-lg-4">
                            <form action="<?= base_url('frontend/membership/upload') ?>" method="post" enctype="multipart/form-data">
                                <h5 class="text-center">Upload bukti transfer anda disini</h5>
                                <div class="d-grid gap-2">
                                    <img id="buktitf" height="200px" src="<?= base_url('assets/img/no-image.png') ?>" class="img-thumbnail" alt="Buktitransfer">
                                    <input type="file" accept="image/*" onchange="previewFile(this);" class="form-control" name="buktitf" id="buktitf"><?= form_error('buktitf', '<small class="text-danger pl-3">', '</small>') ?>
                                    <input hidden type="text" class="form-control" name="id_user" id="id_user" value="<?= $user['id_user'] ?>">
                                    <button type="submit" class="btn btn-primary btn-block">Upload Bukti Transfer</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
</section><!-- End About Us Section -->
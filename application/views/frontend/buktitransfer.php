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
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Daftar Membership Berbayar</h2>
        </div>

        <div class="row">
            <div class="col-lg d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
                <div class="content">
                    <p></p>
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="" alt="">
                        </div>
                        <div class="col-lg-8">
                            <p>Tata cara untuk mendaftar sebagai member <strong>Premium</strong></p>
                            <ul>
                                <li>fafsaf</li>
                                <li>safasfsaf</li>
                            </ul>

                            <form action="" method="post">
                                <div class="d-grid gap-2">
                                    <input type="file" accept="image/*" onchange="previewFile(this);" class="form-control" name="buktitf" id="buktitf">
                                    <input hidden type="text" class="form-control" name="id_user" id="id_user" value="<?= $user['id_user'] ?>">
                                    <button type="submit" class="btn btn-primary">Upload Bukti Transfer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section><!-- End About Us Section -->
    <!-- ======= Hero Section ======= -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<section id="hero" class="d-flex align-items-center">

<div class="container">
    <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1>Ganti Password</h1>
        <h2>untuk email <?=$this->session->userdata('reset_email')?></h2>

<form action="<?= base_url('auth/changePassword') ?>" method="post">
    <div class="row">
        <div class="form-group col-md-8">
        <?php echo $this->session->flashdata('message'); ?>
            <div class="d-grid gap-2">
                <div class="input-group">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password . . ."><?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                    <span id="show_pass" class="input-group-text"><i id="pass_icon" class="bi bi-eye-fill"></i></span>
                </div>
                <div class="input-group">
                    <input type="password" class="form-control" name="konf-password" id="konf-password" placeholder="Masukkan Konfirmasi Password . . ."> <?= form_error('konf-password', '<small class="text-danger pl-3">', '</small>') ?>
                <span id="show_pass_konf" class="input-group-text"><i id="pass_konf_icon" class="bi bi-eye-fill"></i></span>
            </div><br>
            <button type="submit" class="btn-get-started">Ganti Password</button>
            </div><br>
            <div class="text-center">
                <h6><a href="<?= base_url('auth') ?>"><strong> Masuk</strong></a><a class="text-white"> | </a><a href="<?= base_url('home/membership') ?>"><strong> Daftar</strong></a></h6>
            </div>
        </div>
    </div>
</form>
    </div>
    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
    <img src="<?= base_url() ?>/assets/img/logo-putih.png" class="img-fluid animated" alt="">
    </div>

    </div>
</section><!-- End Hero -->

<script>
    $(document).ready(function(){
        $('#show_pass').click(function(){
            if('password' == $('#password').attr('type')){
                $('#pass_icon').attr("class", "bi bi-eye-slash-fill");
                $('#password').attr('type', 'text');
            }else{
                $('#pass_icon').attr("class", "bi bi-eye-fill");
                $('#password').attr('type', 'password');
            }
        });
        $('#show_pass_konf').click(function() {
            if ('password' == $('#konf-password').attr('type')) {
                $('#pass_konf_icon').attr("class", "bi bi-eye-slash-fill");
                $('#konf-password').attr('type', 'text');
            } else {
                $('#pass_konf_icon').attr("class", "bi bi-eye-fill");
                $('#konf-password').attr('type', 'password');
            }
        });
    });
</script>
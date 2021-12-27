    <!-- ======= Hero Section ======= -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<section id="hero" class="d-flex align-items-center">

<div class="container">
    <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1>Selamat Datang</h1>
        <h2>di Website Komunitas Ekspor Indonesia</h2>

<form action="<?= base_url('auth/lupa_pass') ?>" method="post">
    <div class="row">
        <div class="form-group col-md-8">
        <?php echo $this->session->flashdata('message'); ?>
            <div class="d-grid gap-2">
                <input type="email" name="email" class="form-control" id="email" placeholder="Input Your Email Here"><?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                <button type="submit" class="btn-get-started">Reset Password</button>
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
    });
</script>
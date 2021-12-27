<!-- Buyer Modal-->
<div class="modal" id="buyerKonf" tabindex="-1">
    <div class="modal-dialog modal-danger modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4 class="text-center">Ingin Mengakses Data Importir / Buyer?</h4>
                <h4 class="text-center">Silakan Masuk / Daftar Terlebih Dahulu</h4><br>
                <div class="text-center form-group">
                    <a href="<?= base_url('home/membership') ?>" class="btn btn-primary">Daftar</a>
                    <a href="<?= base_url('auth') ?>" class="btn btn-success">Masuk</a>
                </div>
            </div>
            <div class="modal-footer">
                <p></p>
            </div>
        </div>
    </div>
</div>
<!-- Inquiri Modal-->
<div class="modal" id="inquiKonf" tabindex="-1">
    <div class="modal-dialog modal-danger modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4 class="text-center">Ingin Mengakses Data Permintaan / Inquiry?</h4>
                <h4 class="text-center">Silakan Masuk / Daftar Terlebih Dahulu</h4><br>
                <div class="text-center form-group">
                    <a href="<?= base_url('home/membership') ?>" class="btn btn-primary">Daftar</a>
                    <a href="<?= base_url('auth') ?>" class="btn btn-success">Masuk</a>
                </div>
            </div>
            <div class="modal-footer">
                <p></p>
            </div>
        </div>
    </div>
</div>
<!-- Kalkulator Modal-->
<div class="modal" id="kalkuKonf" tabindex="-1">
    <div class="modal-dialog modal-danger modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4 class="text-center">Ingin Mengakses Kalkulator Harga Ekspor?</h4>
                <h4 class="text-center">Silakan Masuk / Daftar Terlebih Dahulu</h4><br>
                <div class="text-center form-group">
                    <a href="<?= base_url('home/membership') ?>" class="btn btn-primary">Daftar</a>
                    <a href="<?= base_url('auth') ?>" class="btn btn-success">Masuk</a>
                </div>
            </div>
            <div class="modal-footer">
                <p></p>
            </div>
        </div>
    </div>
</div>

<!-- Vendor JS Files -->
<script src="<?= base_url() ?>/assets/vendor/aos/aos.js"></script>
<script src="<?= base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?= base_url() ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url() ?>/assets/vendor/php-email-form/validate.js"></script>
<script src="<?= base_url() ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= base_url() ?>/assets/vendor/waypoints/noframework.waypoints.js"></script>

<!-- Template Main JS File -->
<script src="<?= base_url() ?>/assets/js/main.js"></script>
<script src="<?= base_url() ?>/assets/js/plugins/jquery/jquery.js"></script>
<script src="<?= base_url() ?>/assets/js/plugins/jquery/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Tambahan -->
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 3000);
</script>

</body>

</html>
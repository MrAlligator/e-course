<!-- Buyer Modal-->
<div class="modal" id="buyerKonf" tabindex="-1">
    <div class="modal-dialog modal-danger modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <h3 class="text-center">Ingin Mengakses Data Pada Importir / Buyer?</h3>
                <div class="text-center form-group">
                    <a href="<?= base_url('home/membership') ?>" class="btn btn-primary">Daftar Terlebih dahulu</a>
                </div>
            </div>
        </div>
        <div class="modal-footer">
        </div>
    </div>
</div>

<!-- Inquiri Modal-->
<div class="modal" id="inquiKonf" tabindex="-1">
    <div class="modal-dialog modal-danger modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <h3 class="text-center">Ingin Mengakses Data Pada Permintaan / Inquiry?</h3>
                <div class="text-center form-group">
                    <a href="<?= base_url('home/membership') ?>" class="btn btn-primary">Daftar Terlebih dahulu</a>
                </div>
            </div>
        </div>
        <div class="modal-footer">
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
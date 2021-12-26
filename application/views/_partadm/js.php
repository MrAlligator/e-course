<!-- Argon Scripts -->
<!-- Core -->
<script src="<?= base_url() ?>/adminast/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url() ?>/adminast/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>/adminast/vendor/js-cookie/js.cookie.js"></script>
<script src="<?= base_url() ?>/adminast/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="<?= base_url() ?>/adminast/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<!-- Optional JS -->
<script src="<?= base_url() ?>/adminast/vendor/chart.js/dist/Chart.min.js"></script>
<script src="<?= base_url() ?>/adminast/vendor/chart.js/dist/Chart.extension.js"></script>
<!-- Argon JS -->
<script src="<?= base_url() ?>/adminast/js/argon.js?v=1.2.0"></script>
<!-- TinyMCE JS -->
<script src="<?= base_url() ?>/adminast/js/tinymce/tinymce.min.js"></script>
<script src="<?= base_url() ?>/adminast/js/tinymce/plugins/table/plugin.min.js"></script>
<script src="<?= base_url() ?>/adminast/js/tinymce/plugins/paste/plugin.min.js"></script>
<script src="<?= base_url() ?>/adminast/js/tinymce/plugins/spellchecker/plugin.min.js"></script>
<script>
    tinymce.init({
        selector: '#detail, #def, #editdetail'
    });
</script>
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
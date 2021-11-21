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
<script>
    let dropdown = $('#locality-dropdown');

    dropdown.empty();

    dropdown.append('<option selected="true" disabled>Choose State/Province</option>');
    dropdown.prop('selectedIndex', 0);

    const url = '<?= base_url('adminast/json/countries.json') ?>';

    // Populate dropdown with list of provinces
    $.getJSON(url, function(data) {
        $.each(data, function(key, entry) {
            dropdown.append($('<option></option>').attr('value', entry.code).text(entry.name));
        })
    });
</script>
</body>

</html>
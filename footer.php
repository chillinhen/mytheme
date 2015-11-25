<!-- footer -->
<footer class="footer" role="contentinfo">
    <?php
            get_template_part('partials/button','back');
            ?>
</footer>
<!-- /footer -->

</div>
<!-- /wrapper -->
<div class="button contact">
    <a href="mailto:a.bruders@trauer-aachen.de?subject=<?php _e("Kontaktanfrage über www.trauer-aachen.de", "html5blank");?>">
        <?php _e("Kontakt", "html5blank"); ?>
    </a>
</div>

<?php wp_footer(); ?>

<!-- analytics -->
<script>
    (function (f, i, r, e, s, h, l) {
        i['GoogleAnalyticsObject'] = s;
        f[s] = f[s] || function () {
            (f[s].q = f[s].q || []).push(arguments)
        }, f[s].l = 1 * new Date();
        h = i.createElement(r),
                l = i.getElementsByTagName(r)[0];
        h.async = 1;
        h.src = e;
        l.parentNode.insertBefore(h, l)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
    ga('send', 'pageview');
</script>

</body>
</html>

</div>
<!-- footer -->
<footer class="footer" role="contentinfo">
    <div class="container">
        <span class="copyright">©2015 Andrea Bruders trauer-aachen.de</span> <a class="impressum" href="<?php echo home_url(); ?>/impressum"><?php _e("Impressum", "myTheme"); ?></a>
        <div class="scroll-to-top screen-layout"> </div><!-- .scroll-to-top -->
    </div>
</footer>
<div id="bt-kontakt"><a class="kontakt" href="<?php echo home_url(); ?>/kontakt"><?php _e("Kontakt", "myTheme"); ?></a></div>
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

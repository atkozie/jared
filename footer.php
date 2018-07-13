<!-- Footer -->
<footer>
    <div class="footer">
        <div class="container">
            <div id="footer-img">
                <a target="blank" href="https://www.facebook.com/adam.kozie"><img src="<?php bloginfo('template_url'); ?>/images/facebook.png"></a>
                <a target="blank" href="https://www.linkedin.com/in/adam-kozie/"><img src="<?php bloginfo('template_url'); ?>/images/linkedin.png"></a>
                <a target="blank" href="https://github.com/atkozie"><img src="<?php bloginfo('template_url'); ?>/images/github.png"></a>
                <a target="blank" href="contact"><img src="<?php bloginfo('template_url'); ?>/images/contact.png"></a>
            </div><!--end footer-img-->
            <div class="row text-center gray">
                
                <div class="footer-widget">
                    <?php if (dynamic_sidebar('footer-widget-1')) : else : ?>
                    <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->

                    <?php endif; ?>
                </div>
                
                <div class="footer-widget center">
                    <?php if (dynamic_sidebar('footer-widget-2')) : else : ?>
                    <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->

                    <?php endif; ?>
                </div>
                
                <div class="footer-widget">
                    <?php if (dynamic_sidebar('footer-widget-3')) : else : ?>
                    <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->

                    <?php endif; ?>
                </div>

                
            </div><!--end row-->
            <div class="row text-center gray">
            <p class="copy">&copy; <?php echo date("Y"); ?> Adam Kozie</p>
            </div><!--end row-->
        </div><!--end container-->
    </div><!--end footer-->

    <?php
        
    ?>

</footer>

<?php wp_footer(); ?>

</body>
</html>
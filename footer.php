<footer class="site-footer">

    <nav class="site-nav">
        <?php

        $args = array(
            'theme_location' => 'footer_menu'
        );

        ?>

        <?php wp_nav_menu($args); ?>
    </nav>

    <!-- This is the newsletter plugin to add globally -->
    <div class="newsletter-section">
        <?php echo do_shortcode('[newsletter]'); ?>
    </div>

    <p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>
</footer>

</div><!-- container -->

<?php wp_footer(); ?>

</body>

</html>
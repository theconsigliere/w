<footer class="footer">
    <div class='footer-branding container'>
        <a href='<?php echo get_home_url(); ?>'>
            <div class='logo'>
                <?php get_template_part('warwick-logo'); ?>
            </div>
        </a>

        <nav>
            <?php wp_nav_menu(array('theme_location' => 'footer-menu')); ?>
        </nav>

    </div>


    <section class="riangle">
        <p><span>Warwick Event Services all rights reserved <?php echo date('Y'); ?> Website designed by <strong><a
                        href="https://www.dirty-martini.com/" target="_blank">Dirty Martini Marketing</a></p>
    </section>

</footer>
<?php wp_footer(); ?>
</body>

</html>
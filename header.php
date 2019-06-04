<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110577987-1"></script>
    <script src="https://player.vimeo.com/api/player.js"></script>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="header" class="header">
        <div class='site-branding container'>
            <a href='<?php echo get_home_url(); ?>'>
                <div class='logo'>
                    <?php get_template_part('warwick-logo'); ?>
                </div>
            </a>


            <nav>
                <?php wp_nav_menu(array('theme_location' => 'nav-bar')); ?>
            </nav>
            <div class="switch">
                <input type="checkbox" id='toggle-mode' name="toggle">
                <label for="toggle"><i></i></label>
            </div>

        </div>
    </header>
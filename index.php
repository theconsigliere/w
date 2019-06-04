<?php get_header(); ?>
<!-- container -->
<div class="page">

    <div class="preloader">
        <?php get_template_part('warwick-logo'); ?>
    </div>


    <!-- <section class='sidebar'>
        <div class='sidebar-nav'>

            <a href=<?php get_site_url() ?>'#one' class='selected'></a>
            <a href=<?php get_site_url() ?>'#two'></a>
            <a href=<?php get_site_url() ?>'#three'></a>
            <a href=<?php get_site_url() ?>'#four'></a>
            <a href=<?php get_site_url() ?>'#five'></a>



        </div>
    </section> -->
    <!-- site-content -->
    <div class="site-content">

        <div class='hero' data-client='firsthero' id='one'>
            <!-- our hero video component -->
            <?php get_template_part('video'); ?>
        </div>

        <div class='hero' data-client='secondhero' id='two'>
            <?php echo wp_get_attachment_image(73, 'full'); ?>

            <div class="inner-box">
                <div class='hero-text'>
                    <h1>Some Call It <br>Stardust</h1>
                    <h3>We Call It Business Rock ‘n’ Roll</h3>
                    <div class="underline-wrapper">
                        <div class='underline'></div>
                    </div>
                    <p>Giving your event that special something that only comes with oodles of technical expertise,
                        creative flair, event production
                        know-how and cutting-edge technology, coupled with a passion to delight every client.
                        This defines the ethos of Warwick Event Services.
                    </p>
                    <button>Order Now ></button>
                </div>
            </div>

        </div>

        <div class='hero' data-client='thirdhero' id='three'>
            <?php echo wp_get_attachment_image(31, 'full'); ?>
            <div class="inner-box">
                <div class='hero-text'>
                    <h1>Conference</h1>
                    <h3>We deliver the full service solution</h3>
                    <div class="underline-wrapper">
                        <div class='underline'></div>
                    </div>
                    <p>Warwick Event Services has delivered innovative and
                        exciting solutions to help our clients deliver memorable
                        events, no matter the location or the size.</p>
                    <button>Order Now ></button>
                </div>
            </div>
        </div>

        <div class='hero' data-client='fourthhero' id='four'>
            <?php echo wp_get_attachment_image(80, 'full'); ?>
            <div class="inner-box">
                <div class='hero-text'>
                    <h1>Exhibition</h1>
                    <h3>We deliver the full service solution</h3>
                    <div class="underline-wrapper">
                        <div class='underline'></div>
                    </div>
                    <p>Warwick Event Services has delivered innovative and
                        exciting solutions to help our clients deliver memorable
                        events, no matter the location or the size.</p>
                    <button>Order Now ></button>
                </div>
            </div>
        </div>

        <div class='client-hero' data-client='fifthhero' id='five'>
            <!-- <img class="w" src="<?php bloginfo('template_directory'); ?>/img/w.svg" border="0" alt=""> -->
            <div class="w">
                <svg id="Group_5" data-name="Group 5" xmlns="http://www.w3.org/2000/svg" width="548.239"
                    height="582.217" viewBox="0 0 548.239 582.217">
                    <path id="Path_223" data-name="Path 223"
                        d="M388.1,0,322.55,265.08,245.817,0H130.764L54.313,263.971,0,41.082V582.217H108.531l79.74-262.392,79.778,262.392H392.141L548.239,0Z"
                        fill="#b2c924" />
                </svg>
            </div>
            <div class='container'>
                <div class='client-text'>
                    <h1 class='white'>Our Clients</h1>
                    <p class='white'>For more than 30 years We have delivered innovative and exciting solutions to help
                        our clients
                        deliver memorable events</p>
                    <div class='client-list'>

                        <a href="https://visitbelfast.com/" target='_blank'><img
                                src="<?php bloginfo('template_directory'); ?>/img/vb.png" border="0" alt=""></a>
                        <a href="http://www.dodsgroup.com/" target='_blank'><img
                                src="<?php bloginfo('template_directory'); ?>/img/dods.png" border="0" alt=""></a>
                        <a href="https://www.exeter.ac.uk/" target='_blank'><img
                                src="<?php bloginfo('template_directory'); ?>/img/ex.png" border="0" alt=""></a>
                        <a href="https://www.flybe.com/" target='_blank'><img
                                src="<?php bloginfo('template_directory'); ?>/img/fly.png" border="0" alt=""></a>
                    </div>
                    <div class='client-list'>
                        <a href="https://www.exeterguild.org/" target='_blank'><img
                                src="<?php bloginfo('template_directory'); ?>/img/stu.png" border="0" alt=""></a>
                        <a href="https://www.hsbc.co.uk/" target='_blank'><img
                                src="<?php bloginfo('template_directory'); ?>/img/hsbc.png" border="0" alt=""></a>
                        <a href="http://www.mtv.co.uk/" target='_blank'><img
                                src="<?php bloginfo('template_directory'); ?>/img/mtv.png" border="0" alt=""></a>
                        <a href="https://www.ssearena.co.uk/" target='_blank'><img
                                src="<?php bloginfo('template_directory'); ?>/img/sse.png" border="0" alt=""></a>
                    </div>
                </div>
            </div>
        </div>



        <?php get_template_part('contactsection'); ?>

        <?php get_footer(); ?>

    </div>
    <!-- /site-content -->

</div>
<!-- /page -->
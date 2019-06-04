<?php
/**
* Template Name: gallery
*
* @package WordPress
* 
* 
*/
?>
<?php get_header(); ?>
<!-- container -->
<div class="page">
	<div class='page-content'>


	<div class='page-header'>
    <?php echo wp_get_attachment_image(32, 'full'); ?>
			<div class='container'>
				<div class='header-text'>
					<h1>Our Gallery</h1>
					<div class='underline'></div>
			
				</div>
			</div>
	</div>

    <section class='container mtb flex'>
        <div>
        <h2>See the Amazing Events<br>We have carried out</h2>
        <div class='underline'></div>
        <h3>At Warwick Event Services we love what we do</h3>
        </div>

        <div class='w-image'>
        <img src="<?php bloginfo('template_directory'); ?>/img/warwick-w.svg" alt="">
        </div> 

    </section>



    <section class='gallery container'>
    
    <?php 

    $images = get_field('gallery');

    if( $images ): ?>
        <div id="slider" class="flexslider">
            <ul class="slides">
                <?php foreach( $images as $image ): ?>
                    <li>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <!-- <p><?php echo $image['caption']; ?></p> -->
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        
    <?php endif; ?>
        
    </section>


	</div>
</div>
<!-- /container -->
<?php get_footer(); ?>
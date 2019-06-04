<?php
/**
* Template Name: Default page
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
	<?php
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('
			<p id="breadcrumbs">','</p>');
		}
		?></div>

    <article class="page container">

	<?php if (have_posts()) :
   while (have_posts()) :
      the_post();
         the_content();
   endwhile;
endif; ?>
</article>
	</div>
</div>
<!-- /container -->
<?php get_footer(); ?>
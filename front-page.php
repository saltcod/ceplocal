<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package ceplocal
 * @since ceplocal 1.0
 */

get_header(); 
?>

<div class="group"><h1 class="entry-title">Welcome</h1></div>

<?php get_sidebar(); ?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'page' ); ?>

	<?php endwhile; // end of the loop. ?>

</div><!-- #content .site-content -->

<h3 class="section-title">Serving Members from across Newfoundland and Labrador</h3>
	<img src="<?php echo get_template_directory_uri();?>/images/representing-750.png" alt="">

<h3 class="section-title">Quick Access</h3>
	<div class="quick-access">
		<a href="#"><img src="<?php echo get_template_directory_uri();?>/images/button-bulletins.png" alt=""></a>
		<a href="#"><img src="<?php echo get_template_directory_uri();?>/images/button-bylaws.png" alt=""></a>
		<a href="#"><img class="last" src="<?php echo get_template_directory_uri();?>/images/button-collective-agreements.png" alt=""></a>
	</div>
 

</div><!-- #primary .content-area -->

<?php get_footer(); ?>

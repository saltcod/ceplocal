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

get_header(); ?>

		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'ceplocal' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
 
	</header><!-- .entry-header -->

 	<div id="content">
 		<div class="left"><h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique euismod justo, dictum convallis nisi venenatis at. Nullam id nisi libero.</h2> </div>
 		<div class="right">
 			<p>Nunc nunc augue, suscipit vel ultricies eu, varius a turpis. Praesent ac sapien in nulla hendrerit varius id in est. Morbi sit amet egestas lacus. Nunc volutpat lobortis eros at vestibulum. Vivamus arcu odio, aliquet id eleifend vitae, molestie nec neque. Mauris mauris odio, auctor ac malesuada in, aliquet in dui. In sed pretium felis.</p>
 			
 			<img src="<?php echo get_template_directory_uri();?>/images/telecomm.gif">

 			<p>Integer nec libero nunc. Aliquam placerat tempus dolor non tincidunt. Phasellus blandit metus arcu, quis dignissim felis. Nam nulla eros, egestas ut mattis sit amet, pulvinar eget est. Curabitur ornare, urna et congue facilisis, nisi dolor laoreet mi, id condimentum mi quam eget velit. Nam eget aliquam libero. Ut porta dui eu massa interdum luctus. Quisque ac ultricies tellus. In hac habitasse platea dictumst. Maecenas dapibus rhoncus felis, nec pharetra lorem consequat vel. Quisque suscipit sollicitudin interdum.</p>
 			<p>Aliquam placerat tempus dolor non tincidunt. <a href="#">Phasellus blandit metus</a> arcu, quis dignissim felis. Nam nulla eros, egestas ut mattis sit amet, pulvinar eget est. Curabitur ornare, urna et congue facilisis, nisi dolor laoreet mi, id condimentum mi quam eget velit. Nam eget aliquam libero. Ut porta dui eu massa interdum luctus. Quisque ac ultricies tellus. In hac habitasse platea dictumst. Maecenas dapibus rhoncus felis, nec pharetra lorem consequat vel. Quisque suscipit sollicitudin interdum. In hac habitasse platea dictumst.</p>
 		</div>
 		
 	</div>
 </article><!-- #post-<?php the_ID(); ?> -->



			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>




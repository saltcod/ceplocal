<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package ceplocal
 * @since ceplocal 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php if( !is_front_page() ): ?>
		<header class="entry-header group">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header><!-- .entry-header -->
	 <?php endif; ?>

	<div class="entry-content group">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'ceplocal' ), 'after' => '</div>' ) ); ?>
		<?php edit_post_link( __( 'Edit', 'ceplocal' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->

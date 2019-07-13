<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cyberize
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('post-item card'); ?>>

	<figure class="featured-image-box card-img-top">
		
		<?php cyberize_post_thumbnail(); ?>
		
	</figure>

	<div class="entry-content card-body">

		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
				cyberize_posted_on();
				cyberize_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>


		<?php
			the_excerpt();
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer card-footer">
		<?php cyberize_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

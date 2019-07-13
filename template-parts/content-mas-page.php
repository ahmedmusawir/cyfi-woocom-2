<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cyberize
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('col-sm-12 col-md-10 col-lg-10 mx-auto'); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title text-center text-capitalize display-1 d-none">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<figure class="featured-img-holder">
		<?php cyberize_post_thumbnail(); ?>
	</figure>

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'moose-framework-2' ),
				'after'  => '</div>',
			) );
		?>

		<!--====================================================
		=            THE IS THE THRIVE LEADBOX AREA            =
		=====================================================-->
		
		<section class="leadbox mt-5 mb-5">

			<?php 

				$leadbox = get_field('mas_post_lead_shortcode');
				// echo $leadbox;
				if ($leadbox) {
					echo do_shortcode( $leadbox ); 

				} else {
					echo do_shortcode( '[thrive_leads id="5362"]' );
				}


			?>
			
		</section>
		
		<!--====  End of THE IS THE THRIVE LEADBOX AREA  ====-->
		
		

		

	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'moose-framework-2' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->

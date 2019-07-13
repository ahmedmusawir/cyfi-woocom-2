<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cyberize
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-single'); ?>>
	<section class="post-cyberize">
		<header class="entry-header">

			<style type="text/css">
				
				.entry-header {
					background: url("<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>") no-repeat center center fixed;

					  -webkit-background-size: cover;

					  -moz-background-size: cover;

					  -o-background-size: cover;

					  background-size: cover;								
				}

			</style>
			<article class="header-content d-flex flex-column">
				
				<main class="my-auto mx-auto text-center">
					<?php
					if ( is_singular() ) :
						the_title( '<h1 class="entry-title mx-auto">', '</h1>' );
						// the_title( '<h1 class="entry-title text-center">', '</h1>' );
					else :
						the_title( '<h2 class="entry-title mx-auto"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;

					if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta text-center">
						<?php
							cyberize_posted_on();
							cyberize_posted_by();
					 		cyberize_entry_footer();
						?>
					</div><!-- .entry-meta -->
					<?php
					endif; ?>

				</main>

			</article>
		</header><!-- .entry-header -->


		<div class="entry-content container">
			<div class="row">
				<div class="col-sm-8 col-md-8 col-lg-7 col-xl-6 mx-auto">
					<?php
						the_content();

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;						
					?>					
				</div>
			</div>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
		</footer><!-- .entry-footer -->
	</section>
</article><!-- #post-<?php the_ID(); ?> -->





































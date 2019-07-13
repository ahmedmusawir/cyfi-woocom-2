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
	<section class="post-gulfcoast">

		<div class="entry-content container">

			<!--<h1 class="blog-index-title col-sm-6 col-md-3 col-lg-3 text-center">
				<?php //the_field('blog_index_title', 'option') ?>
				BLOG POST
			</h1>
			<div class="long-underline"></div>-->

			<div class="row">

				<div class="col-sm-12 col-md-12 col-lg-9 gc-col-top-overlap">

					<figure class="featured-img-holder">
						<?php cyberize_post_thumbnail(); ?>
					</figure>

					<main class="">
						<!-- CATEGORY -->
						<!-- <h5 class="post-category"><?php // cyberize_entry_footer(); ?></h5> -->
						<?php
						if ( is_singular() ) :
							the_title( '<h1 class="entry-title mx-auto">', '</h1>' );
							// the_title( '<h1 class="entry-title text-center">', '</h1>' );
						else :
							the_title( '<h2 class="entry-title mx-auto"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
						endif;

						if ( 'post' === get_post_type() ) : ?>
						<div class="entry-meta pl-2 mb-5">
							<?php
								cyberize_posted_by();
								cyberize_posted_on();
							?>
						</div><!-- .entry-meta -->
						<?php
						endif; ?>

					</main>


					<?php
						the_content();


						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>
				</div>
				<aside id="sidebar" class="col-sm-12 col-md-12 col-lg-3">

					<?php get_sidebar();  ?>

				</aside>
			</div>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
		</footer><!-- .entry-footer -->
	</section>
</article><!-- #post-<?php the_ID(); ?> -->

<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cyberize
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>



		<div class="entry-content">

			<footer class="entry-footer card-footer d-none">
				<?php //cyberize_entry_footer(); ?>

				<div class="entry-meta">
					<?php
						cyberize_posted_on();
					?>
				</div><!-- .entry-meta -->
			</footer><!-- .entry-footer -->

			<?php if (has_post_thumbnail()) : ?>

				<div class="row">
				<div class="col-md-5">
					<figure class="featured-image-box">

						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('thumbnail'); ?>
						</a>

					</figure>

				</div>
				<div class="col-md-7">
					<!-- TITLE -->
					<?php
					if ( is_singular() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
					else :
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;

					?>

					<div class="entry-meta">
						<?php
							// cyberize_posted_on();
							cyberize_posted_by();
							cyberize_posted_on();
						?>
					</div><!-- .entry-meta -->

					<div class="pr-3">
						<?php
						// <!-- CONTENT -->
							the_excerpt();
						?>
					</div>

					<hr>

					<div class="gc-post-item-footer">
						<?php cyberize_entry_footer(); ?>
					</div>

				</div>
			</div>

			<?php else : ?>

				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
				endif;

				?>
				<div class="entry-meta">
					<?php
						cyberize_posted_by();
					?>
				</div><!-- .entry-meta -->

				<div class="pr-3 pt-3 pb-3">
					<?php
					// <!-- CONTENT -->
						the_excerpt();
					?>
				</div>

			<?php endif; ?>

		</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->

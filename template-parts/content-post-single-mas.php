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
	<section class="post-mas container">
		<header class="entry-header row">

			
			<article class="header-content col-sm-12 col-md-10 col-lg-10 mx-auto">
				
				<figure class="featured-img-holder">
					<?php cyberize_post_thumbnail(); ?>
				</figure>
				
				<main class="">
					<!-- CATEGORY -->
					<h5 class="post-category"><?php cyberize_entry_footer(); ?></h5>
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
							echo '<span class="divider p-2">|</span>';
							cyberize_posted_on();
						?>
					</div><!-- .entry-meta -->
					<?php
					endif; ?>

				</main>

			</article>

		</header><!-- .entry-header -->


		<div class="entry-content container">
			<div class="row">
				<!-- <div class="col-sm-8 col-md-8 col-lg-7 col-xl-6 mx-auto"> -->
				<div class="col-sm-12 col-md-10 col-lg-10 mx-auto">
					<?php
						the_content();

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
		
					
					<?php	

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




































<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cyberize
 */

?>
<!-- TOP HEADER BLOCK STYLE  -->
<section class="garage-blog-page-header">
	<div class="header-content-holder">

		<article class="header-content container">
			
			<div class="row">
				
				<div class="col-sm-12 col-md-5">

					<div class="title-box-holder">
						<article class="title-box">
							<a class="btn btn-primary btn-sm" href="javascript:history.back()">
								<i class="fa fa-chevron-circle-left" aria-hidden="true"></i>Back
							</a>
							<h1 class="title display-5">Blog</h1>
						</article>
					</div>
					
				</div>
				<div class="col-sm-12 col-md-7">

					<article class="form-box">
						<?php echo do_shortcode( '[gravityform id="9" title="true" description="true"]' ); ?>
					</article>
					
				</div>

			</div>

		</article>
		
	</div>
</section>

<!-- MAIN BODY STYLE -->
<article id="post-<?php the_ID(); ?>" <?php post_class('post-single'); ?>>
	<section class="post-garage">

		
		<div class="entry-content container">

			<div class="row">

				<div class="col-sm-12 col-md-12 col-lg-8">

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
								// cyberize_posted_by();
								// echo '<span class="divider p-2">/</span>';
								// cyberize_posted_on();
								// echo '<span class="divider p-2">/</span>';
								// cyberize_entry_footer();
							?>
						</div><!-- .entry-meta -->
						<?php
						endif; 

							the_content();

						?>

					</main>

					<hr class="mt-5">

					<section class="pagination-holder text-center mt-5">
						
						<div class="pagination-content">
							<?php previous_post('%', 'Prev', 'no'); ?> 
							<?php // previous_post('&laquo; &laquo; %', 'Prev', 'no'); ?> 
	
							<?php next_post('%', 'Next', 'no'); ?>
							<?php // next_post('% &raquo; &raquo; ', 'Next', 'no'); ?>							
						</div>		

					</section>

					<hr class="mt-5">

					<?php
						// the_content();
						echo do_shortcode( '[Sassy_Social_Share title="Sharing is Caring"]' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;						
					?>	


				</div>
				<aside class="col-sm-12 col-md-12 col-lg-4">

					<?php get_sidebar();  ?>

				</aside>
			</div>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
		</footer><!-- .entry-footer -->
	</section>
</article><!-- #post-<?php the_ID(); ?> -->




































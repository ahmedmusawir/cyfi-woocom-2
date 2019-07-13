<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Moose_Framework_2
 */

get_header(); ?>

	<div id="page-bizmobile" class="content-area">
		<!-- <div class="row"> -->
			<main id="main" class="site-main">

				<section class="container">

					<h1 class="archive-index-title col-sm-6 col-md-3 col-lg-3 text-center">
						<?php //the_field('blog_index_title', 'option') ?>
						<?php the_field('page_headline'); ?>
					</h1>
					<div class="long-underline"></div>	

					<div class="row">
			

						<div class="col-sm-12 col-md-12 col-lg-9">


							<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', 'bizmobile-page' );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							endwhile; // End of the loop.
							?>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-3">

							<?php get_sidebar(); ?>
							
						</div>	

					</div> <!-- End Row -->	

				</section> <!-- End Container -->	

			</main><!-- #main -->
			
		<!-- </div> END ROW -->
	</div><!-- #primary -->

<!--====================================================
=            THE IS THE THRIVE LEADBOX AREA            =
=====================================================-->

<section class="leadbox">

	<div class="container">

		<?php 

			// $leadbox = get_field('mas_post_lead_shortcode');

			// if ($leadbox) {
			// 	echo do_shortcode( $leadbox ); 

			// } else {
			// 	echo do_shortcode( '[thrive_leads id="5486"]' );
			// }

		?>

		<?php if (function_exists('tve_leads_form_display')) { tve_leads_form_display(0, 5486); } ?>

		
	</div>
	
</section>

<!--====  End of THE IS THE THRIVE LEADBOX AREA  ====-->


<?php
get_footer();

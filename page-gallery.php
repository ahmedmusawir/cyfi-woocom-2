<?php
/**
 *
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

<!-- TOP HEADER BLOCK STYLE  -->
<section class="garage-gallery-header">
	<div class="header-content-holder">

		<article class="header-content container">
			
			<div class="row">
				
				<div class="col-sm-12 col-md-5">

					<div class="title-box-holder">
						<article class="title-box">
							<!-- <a class="btn btn-primary btn-sm" href="javascript:history.back()"><-Back</a> -->
							<h1 class="title display-5">Gallery</h1>
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

<div id="page-garage" class="content-area container mt-5 pt-5 pb-5">
	<div class="row">
		<main id="main" class="site-main col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
		
	</div> <!-- END ROW -->
</div><!-- #primary -->

<!-- FOOTER CTA SECTION -->
<section id="footer-garage-cta" class="">
	<div class="container">
		<h5 class="text-content mx-auto text-center">
			To learn more about our garage transformation services and products, or to schedule a <strong>FREE, NO OBLIGATION</strong> consultation please <a href="/contact/">CLICK HERE</a>
		</h5>
	</div>
</section>
<!-- FOOTER CTA SECTION ENDS-->

<?php
get_footer();

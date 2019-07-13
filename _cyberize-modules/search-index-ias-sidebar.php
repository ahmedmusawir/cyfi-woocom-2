<?php
/**
 *
 * MODULE: Search Index IAS w Sidebar
 */
?>
<style type="text/css">
	#general-page-header {
		width: 100vw;
		height: 200px;
		background-color: black;
		background-image: url('<?php the_field('general_page_header_image', 'option') ?>');
		background-size: cover;
		background-position: top center;
	}
</style>

<section id="general-page-header" class="d-flex justify-content-center align-items-center">
	<!-- <img class="img-fluid" src="/wp-content/uploads/2018/02/general-page-header-2400x300.jpg"> -->
	<h1 class="page-title"><?php wp_title(''); ?></h1>
</section>

<section class="search-index-ias">

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="container">

				<div class="row">

					<div class="col-sm-12 col-md-12 col-lg-9">

						<main id="main" class="site-main">

							<?php
							if ( have_posts() ) : ?>

								<header class="page-header">
									<h4 class="search-type"><?php
										/* translators: %s: search query. */
										printf( esc_html__( 'Search Results for: %s', 'moose-framework-2' ), '<span>' . get_search_query() . '</span>' );
									?></h4>
								</header><!-- .page-header -->

								<div class="row">
									
								<?php
								/* Start the Loop */
								while ( have_posts() ) : the_post();

									/**
									 * Run the loop for the search to output the results.
									 * If you want to overload this in a child theme then include a file
									 * called content-search.php and that will be used instead.
									 */
										?>
										<div class="col-12 col-sm-6 col-md-6 col-lg-6">
											<?php
											get_template_part( 'template-parts/content', 'post-item-ias' );	

											?>
										</div>

										<?php

										endwhile;

										?>
									</div>
									<div class="row">

										<div class="post-nav-holder text-center mx-auto">
											
											<?php 
												   // the_posts_navigation();

												   the_posts_navigation([
													   'prev_text'=>'<i class="fa fa-chevron-circle-left fa-2x" aria-hidden="true"></i>',
													   'next_text'=>'<i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i>',
													]);
											?>
											
										</div>
										
									</div>
									
									<?php

							else :

								get_template_part( 'template-parts/content', 'none' );

							endif; ?>

						</main><!-- #main -->

					</div>

					<div class="col-sm-12 col-md-12 col-lg-3">

						<?php get_sidebar(); ?>

					</div>

				</div> <!-- end row -->

			</section> <!-- End Container -->

		</main>

	</div> <!-- End Primary -->


</section>

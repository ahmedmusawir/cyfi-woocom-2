<?php
/**
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

get_header(); ?>
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

<section id="general-page-header">
	<!-- <img class="img-fluid" src="/wp-content/uploads/2018/02/general-page-header-2400x300.jpg"> -->
</section>
<section id="portfolio-main-page" class="container">

	<div id="primary" class="content-area">
	
		<main id="main" class="site-main" role="main">

			<article class="portfolio-nav text-center">

				<div class="mx-auto">
					<?php wp_nav_menu( array( 'theme_location' => 'portfolio' ) ); ?>
				</div>			

			</article>
			<article class="featured-content-block">
				
				<h1 class="title text-center">Our Featured Projects</h1>

				<div class="row">


					<?php 
					
					$counter = 0;
					$item_count = 0;

					$args = array(
						'post_type' => 'portfolio',
						'tax_query' => array(
							array(
								'taxonomy' => 'portfolio-item',
								'field' => 'slug',
								'terms' => 'featured',	
							),
						),
						'posts_per_page' => 4,
					);	
					
					$front_page_post_items = new WP_Query($args);		
					
					if ( $front_page_post_items->have_posts() ) :
				
						/* Start the Loop */
						while ( $front_page_post_items->have_posts() ) : $front_page_post_items->the_post(); ?>


						<div class="col-sm-12 col-md-6 col-lg-6">
							
							<main class="featured-item">

		            			<a class="article-image" href="#" data-featherlight="#featured-single-<?php echo the_ID(); ?>">

									<!-- <img class="img-responsive" src="/wp-content/uploads/2018/01/pizza-6.jpg" alt=""> -->
                					<?php the_post_thumbnail('featured-size', array('class' => 'img-responsive animated zoomIn')); ?>


		            			</a>

					            <div class="btn-holder text-center">
					                <a class="btn btn-secondary btn-sm" href="#" data-featherlight="#featured-single-<?php echo the_ID(); ?>" style="">
					                    Click To View
					                </a>
					            </div>    

								<!-- PORTFOLIO SINGLE DESCRIPTION POP UP BOX -->

								<section id="PORTFOLIO-POPUP" class="row d-none">

									<div class="portfolio-single-popup" id="featured-single-<?php echo the_ID(); ?>">
										
										<!-- <figure class="col-sm-8 col-md-8 col-lg-8"> -->
										<figure class="">

											<article class="left-content">

												<header id="header" class="">

													<img class="img-responsive float-right" src="/wp-content/uploads/2018/01/just-moose-head-100x80.png" alt="">

													<h2 class="title">
														<?php the_field('portfolio_title'); ?>
													</h2>
													<h4 class="subtitle">
														<?php the_field('portfolio_subtitle'); ?>
													</h4>
													<div class="btn-holder">
														<a class="btn btn-primary btn-lg" href="/request-quote/">REQUEST QUOTE</a>
													</div>
									
												</header><!-- /header -->

												<main>

													<figure>
														
														<img class="img-responsive center-block" src="<?php the_field('portfolio_large_image_1'); ?>" alt="">
														<!-- <img class="img-responsive center-block" src="/wp-content/uploads/2018/01/metro-1.jpg" alt=""> -->
														
													</figure>
													<figure>
														
														<img class="img-responsive center-block" src="<?php the_field('portfolio_large_image_2'); ?>" alt="">
														<!-- <img class="img-responsive center-block" src="/wp-content/uploads/2018/01/metro-2.jpg" alt=""> -->
														
													</figure>
													<figure>
														
														<img class="img-responsive center-block" src="<?php the_field('portfolio_large_image_3'); ?>" alt="">
														<!-- <img class="img-responsive center-block" src="/wp-content/uploads/2018/01/metro-6.jpg" alt=""> -->
														
													</figure>
													<figure>
														
														<img class="img-responsive center-block" src="<?php the_field('portfolio_large_image_4'); ?>" alt="">
														<!-- <img class="img-responsive center-block" src="/wp-content/uploads/2018/01/metro-4.jpg" alt=""> -->
														
													</figure>
													
												</main>
												
											</article>
											
										</figure>
										<!-- <figure class="col-sm-4 col-md-4 col-lg-4"> -->
										<figure class="">

											<article class="right-content">

												<div class="content">
													
													<h5 class="title">
														PROJECT BY:
													</h5>
													<p>
														<?php the_field('portfolio_project_by'); ?>
													</p>
													<hr>

													<h5 class="title">
														PROJECT GENRE:
													</h5>
													<p>
														<?php the_field('portfolio_project_genere'); ?>
													</p>
													<hr>

													<h5 class="title">
														<b>PROJECT DETAILS:</b>
													</h5>
													
													<?php the_field('portfolio_details'); ?>				
												
												</div>
												<hr>
									
												<figure class="icon-block">
													
													<img class="img-responsive" src="/wp-content/uploads/2018/01/html-css-js-icons-final-450x70.png" alt="">
													
												</figure>
													
												
											</article>
											
										</figure>		

									</div>
									
								</section>	

								<!-- END PORTFOLIO SINGLE DESCRIPTION POP UP BOX -->			                       						
												
							</main>

						</div>

					<?php 
			
					endwhile;
			
					else :
			
						get_template_part( 'template-parts/content', 'none' );
			
					endif; 

						wp_reset_postdata();

					?>					

				</div> <!-- End Row -->				
				
			</article>



 

		</main><!-- #main -->

	</div><!-- #primary -->
	
</section> <!-- End Container -->	

<?php
get_footer();

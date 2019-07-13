<?php
/**
 * 
 * MODULE: Search Index Biz Mobile w Sidebar
 */
?>
<section class="search-index-garage">

	<div id="primary" class="content-area mt-5 pt-5">
		<main id="main" class="site-main">

			<section class="container">

				<h1 class="archive-index-title col-sm-6 col-md-3 col-lg-3 text-center">
					<?php //the_field('blog_index_title', 'option') ?>
					SEARCH INDEX
				</h1>
				<div class="long-underline"></div>	

				<div class="row">

					<div class="col-sm-12 col-md-12 col-lg-8">

						<main id="main" class="site-main">

							<?php
							if ( have_posts() ) : ?>

								<header class="page-header">
									<h4 class="search-type"><?php
										/* translators: %s: search query. */
										printf( esc_html__( 'Search Results for: %s', 'moose-framework-2' ), '<span>' . get_search_query() . '</span>' );
									?></h4>
								</header><!-- .page-header -->

								<?php
								/* Start the Loop */
								while ( have_posts() ) : the_post();

									/**
									 * Run the loop for the search to output the results.
									 * If you want to overload this in a child theme then include a file
									 * called content-search.php and that will be used instead.
									 */
									get_template_part( 'template-parts/content', 'post-item-garage' );

								endwhile;

								?>

								<!-- <div class="post-nav-holder"> -->
									<?php // the_posts_navigation(); ?>
								<!-- </div> -->


								<?php

							else :

								get_template_part( 'template-parts/content', 'none' );

							endif; ?>

						</main><!-- #main -->

					</div>
					
					<div class="col-sm-12 col-md-12 col-lg-4">

						<?php get_sidebar(); ?>
						
					</div>	

				</div> <!-- end row -->		

			</section> <!-- End Container -->	

		</main>
		
	</div> <!-- End Primary -->		


</section>	

<?php
/**
 *
 * MODULE: Search Index Gulf Coast w Sidebar
 */
?>
<section class="search-index-gulfcoast">

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="block-after-header text-center">
				<h1><?php the_field('search_index_title', 'option') ?></h1>
			</div>

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

								<?php
								/* Start the Loop */
								while ( have_posts() ) : the_post();

									/**
									 * Run the loop for the search to output the results.
									 * If you want to overload this in a child theme then include a file
									 * called content-search.php and that will be used instead.
									 */
									get_template_part( 'template-parts/content', 'post-item-gulfcoast' );

								endwhile;

								?>

								<div class="post-nav-holder">
									<?php the_posts_navigation(); ?>
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

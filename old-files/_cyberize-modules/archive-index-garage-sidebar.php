<?php 
/**
 *
 * MODULE: Archive Index Garage w Sidebar
 *
 */
?>

<section class="archive-index-garage">

	<div id="primary" class="content-area">
		<main id="main" class="site-main pt-5">

			<section class="container">

				<h1 class="archive-index-title col-sm-6 col-md-3 col-lg-3 text-center">
					<?php //the_field('blog_index_title', 'option') ?>
					ARCHIVE INDEX
				</h1>
				<div class="long-underline"></div>	

				<div class="row">
		

					<div class="col-sm-12 col-md-12 col-lg-8">

						<?php
						if ( have_posts() ) : ?>

							<header class="page-header">
									<?php
										the_archive_title( '<h4 class="archive-type">', '</h4>' );
										//the_archive_description( '<div class="archive-description">', '</div>' );
									?>
								<!-- <div class="long-underline"></div>	 -->

							</header><!-- .page-header -->

							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'post-item-garage' );

							endwhile;

							// the_posts_navigation();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif; ?>

					</div>
					<div class="col-sm-12 col-md-12 col-lg-4">

						<?php get_sidebar(); ?>
						
					</div>

				</div> <!-- End Row -->

			</section> <!-- End Container -->	

		</main>	

	</div> <!-- end primary -->

</section>
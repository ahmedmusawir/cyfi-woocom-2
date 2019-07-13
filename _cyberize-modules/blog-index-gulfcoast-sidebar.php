<?php
/**
 *
 * MODULE: Blog Index Biz Mobile
 *
 */
?>

<main id="" class="blog-index-block-gulfcoast">

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<!-- Blue block under the header with content -->
			<div class="block-after-header text-center">
				<h1><?php the_field('blog_index_title', 'option') ?></h1>
			</div>

			<section class="container">

				<div class="row">

					<div class="col-sm-12 col-md-12 col-lg-9">

						<article class="post-item-container" >

							<?php
								if ( have_posts() ) :

									if ( is_home() && ! is_front_page() ) : ?>
										<header>
											<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
										</header>

									<?php
									endif;
									?>
									<div class="">
									<?php
									/* Start the Loop */
									while ( have_posts() ) : the_post();

										/*
										 * Include the Post-Format-specific template for the content.
										 * If you want to override this in a child theme, then include a file
										 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
										 */
										get_template_part( 'template-parts/content', 'post-item-gulfcoast' );

									endwhile;

									?>
									</div>
									<div class="post-nav-holder col-12"><?php the_posts_navigation(); ?></div>
									<?php

								else :

									get_template_part( 'template-parts/content', 'none' );

								endif;
							?>

						</article>

					</div> <!-- 9 COLS END -->

					<div class="col-sm-12 col-md-12 col-lg-3">

						<?php get_sidebar(); ?>

					</div> <!-- 3 COLS END -->

				</div> <!-- ROW END -->



			</section>

		</main><!-- #main -->
	</div><!-- #primary -->


</main>

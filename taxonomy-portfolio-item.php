<?php
/**
 * The template for displaying archive pages.
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

<section class="container">

	<article class="portfolio-nav text-center">

		<div class="mx-auto">
			<?php wp_nav_menu( array( 'theme_location' => 'portfolio' ) ); ?>
		</div>			

	</article>
	<main class="tax-portfolio-item" role="main">

		<?php
			if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
						// the_archive_title( '<h1 class="page-title">', '</h1>' );
						// the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
				</header><!-- .page-header -->

				<div class="item-list row">
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'portfolio' );

					endwhile;

					?>
				</div>
				<div class="post-nav-holder col-12"><?php the_posts_navigation(); ?></div>
				<?php

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

		</div> <!-- MASONRY GRID -->

	</main><!-- #main -->
	<!-- </div>#primary -->
	
</section> <!-- End Container -->	

<?php
get_footer();

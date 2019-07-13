<?php 
/**
 *
 * MODULE: Blog Index Cyberize
 *
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

<section id="general-page-header">
	<!-- <img class="img-fluid" src="/wp-content/uploads/2018/02/general-page-header-2400x300.jpg"> -->
</section>

<main id="" class="blog-index-block-cyberize">

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<h1 class="display-3 text-center pt-5">Our Stories</h1>	

			<section class="container">

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
							<div class="card-columns">
							<?php 	
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'post-item-cyberize' );

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
				
			</section>



		</main><!-- #main -->
	</div><!-- #primary -->
	

</main>
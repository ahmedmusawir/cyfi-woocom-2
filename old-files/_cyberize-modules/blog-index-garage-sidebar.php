<?php 
/**
 *
 * MODULE: Blog Index Biz Mobile
 *
 */
?>

<!-- TOP HEADER BLOCK STYLE  -->
<section class="garage-blog-index-header">
	<div class="header-content-holder">

		<article class="header-content container">
			
			<div class="row">
				
				<div class="col-sm-12 col-md-5">

					<div class="title-box-holder">
						<article class="title-box">
							<!-- <a class="btn btn-primary btn-sm" href="javascript:history.back()"><-Back</a> -->
							<h1 class="title display-5">Blog</h1>
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
<main id="" class="blog-index-block-garage">

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="container">

				<div class="row">

					<div class="col-sm-12 col-md-12 col-lg-8">
					
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
										get_template_part( 'template-parts/content', 'post-item-garage' );


									endwhile;

									?>
									</div>

									
									
									<!-- ORIGINAL NAVIGATION -->
									<!-- <div class="post-nav-holder col-12"><?php //the_posts_navigation(); ?></div> -->
									
									<?php

								else :

									get_template_part( 'template-parts/content', 'none' );

								endif; 
							?>				

						</article>

					</div> <!-- 9 COLS END -->

					<div class="col-sm-12 col-md-12 col-lg-4">

						<?php  get_sidebar(); ?>
						
					</div> <!-- 3 COLS END -->
				
				</div> <!-- ROW END -->

				
				
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->
	

</main>
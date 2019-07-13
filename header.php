<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cyberize
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

<!--==============================
=            favicons            =
===============================-->
<link rel="icon" type="image/png" sizes="32x32" href="/wp-content/uploads/2018/02/Moose-32.png">

<!--===========================================
=            CUSTOM ANALYTICS TAGS - HEAD     =
============================================-->

<!--====  Base Tag  ====-->

<?php the_field('before_ending_head_tag_default', 'option'); ?>

<!--====  Custom Conversion Tag  ====-->


<?php the_field('before_ending_head_tag'); ?>

<!--====  End of CUSTOM ANALYTICS TAGS  ====-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--======================================================
=            CUSTOM ANALYTICS TAGS - BODY TOP            =
=======================================================-->

<!--====  Base Tag  ====-->

<?php the_field('after_top_body_tag_default', 'option'); ?>

<!--====  Custom Conversion Tag  ====-->

<?php the_field('after_top_body_tag'); ?>

<!--====  End of CUSTOM ANALYTICS TAGS - BODY TOP  ====-->

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cyberize' ); ?></a>

	<header id="header-ias" class="site-header">

		<section id="top-bar" class="d-flex flex-row-reverse">

			<ul class="list-inline social-links">

				<?php if( get_field('top_bar_facebook_link', 'options') ): ?>
				   	<li class="list-inline-item">
				   		<a class="social-icon" target="_blank" href="<?php the_field('top_bar_facebook_link', 'options') ?>">
				   			<!-- <i class="fa fa-facebook-square" aria-hidden="true"></i> -->
				   			<i class="fab fa-facebook-square"></i>
					   	</a>
					</li>
				<?php endif; ?>
				<?php if( get_field('top_bar_instagram_link', 'options') ): ?>
				   	<li class="list-inline-item">
				   		<a class="social-icon" target="_blank" href="<?php the_field('top_bar_instagram_link', 'options') ?>">
			   				<!-- <i class="fa fa-instagram" aria-hidden="true"></i> -->
			   				<i class="fab fa-instagram"></i>
					   	</a>
					</li>
				<?php endif; ?>
				<?php if( get_field('top_bar_pinterest_link', 'options') ): ?>
				   	<li class="list-inline-item">
				   		<a class="social-icon" target="_blank" href="<?php the_field('top_bar_pinterest_link', 'options') ?>">
			   				<!-- <i class="fa fa-pinterest" aria-hidden="true"></i> -->
			   				<i class="fab fa-pinterest"></i>
					   	</a>
					</li>
				<?php endif; ?>
				<?php if( get_field('top_bar_linkedin_link', 'options') ): ?>
				   	<li class="list-inline-item">
				   		<a class="social-icon" target="_blank" href="<?php the_field('top_bar_linkedin_link', 'options') ?>">
			   				<!-- <i class="fa fa-linkedin" aria-hidden="true"></i> -->
			   				<i class="fab fa-linkedin"></i>
					   	</a>
					</li>
				<?php endif; ?>
				<?php if( get_field('top_bar_twitter_link', 'options') ): ?>
				   	<li class="list-inline-item">
				   		<a class="social-icon" target="_blank" href="<?php the_field('top_bar_twitter_link', 'options') ?>">
			   				<!-- <i class="fa fa-twitter" aria-hidden="true"></i> -->
			   				<i class="fab fa-twitter"></i>
					   	</a>
					</li>
				<?php endif; ?>
				<?php if( get_field('top_bar_youtube_link', 'options') ): ?>
				   	<li class="list-inline-item">
				   		<a class="social-icon" target="_blank" href="<?php the_field('top_bar_youtube_link', 'options') ?>">
			   				<!-- <i class="fa fa-youtube-play" aria-hidden="true"></i> -->
			   				<i class="fab fa-youtube"></i>
					   	</a>
					</li>
				<?php endif; ?>
				
			</ul>

			<h5  class="top-bar-text text-center"><i class="fa fa-phone" aria-hidden="true"></i> <?php the_field('top_bar_text', 'options') ?></h5>

		</section>

		<!-- Moose_Framework_2 NAVIGATION GOES HERE -->
		<nav class="navbar navbar-expand-xl fixed-top">
			<div class="container-fluid">
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img class="logo img-fluid" src="<?php the_field('site_logo', 'option') ?>">
				</a>

				<button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbar-content">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1', // Defined when registering the menu
						'menu_id'        => 'primary-menu',
						'container'      => false,
						'depth'          => 2,
						'menu_class'     => 'navbar-nav ml-auto  pt-lg-5 pt-xl-0',
						'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
						'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback
					) );
					?>
				</div>
			</div>
		</nav>

		<!-- Moose_Framework_2 NAVIGATION ENDS HERE -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">

<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package cyberize
 */

get_header();
?>

<div id="ias-404" class="content-area">
	<main id="main" class="site-main container">

		<div class="page-content text-center">

			<img src="/wp-content/uploads/2019/07/broken-bulb-icon.png">
			<h1><a href="/">404</a></h1>
			<p>
				It looks like you didn’t find what you were looking for. Please check the proper spelling and capitalization.
			</p>
			<a class="btn btn-primary btn-lg" href="/">Go to Home Page</a>

			<!-- <div class="social mt-5 col-md-6 col-sm-6 col-6 mx-auto"> -->
				<?php // echo do_shortcode( '[Sassy_Social_Share title=""]' );  ?>
			<!-- </div> -->

		</div><!-- .page-content -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();

<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Moose_Framework_2
 */

?>
	</div><!-- #content -->

	<!-- MAIN FOOTER -->
	<footer id="footer-gulfcoast" class="site-footer">

		<div class="footer-testimonial d-none">
			<div class="container">
				<div class="row">
			    	<div class="col-12 col-sm-12 col-md-4 col-lg-4">
						<h5>Ak Ryan</h5>
						<small>Single Family home in 2017 in Rogers Park, Ankorage, AK</small>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				  	</div>
					<div class="col-12 col-sm-12 col-md-4 col-lg-4">
						<span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>
						<h5>Ak Ryan</h5>
						<small>Single Family home in 2017 in Rogers Park, Ankorage, AK</small>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				  	</div>
					<div class="col-12 col-sm-12 col-md-4 col-lg-4">
						<span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>
						<h5>Ak Ryan</h5>
						<small>Single Family home in 2017 in Rogers Park, Ankorage, AK</small>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				  	</div>
			  	</div>
			</div>
		</div>

		<div class="container">
			<div class="copyright">
				<div class="">
					<div class="copy-right-text">
						<?php the_field('theme_footer_text', 'option') ?>
					</div>

					<!--<a class="float-right" target="_blank" href="<?php echo esc_url( __( 'https://cyberizegroup.com/', 'moose-framework-2' ) ); ?>"><?php
						printf( esc_html__( 'Premium support & maintenance by %s', 'moose-framework-2' ), 'CyberizeFramework' );
					?></a>-->
				</div>
			</div>
			<div class="gc-social-icons-inline">
				<ul>
					<li><img src="<?php echo get_template_directory_uri() . '/assets/img/045-facebook.svg' ?>"></li>
					<li><img src="<?php echo get_template_directory_uri() . '/assets/img/013-twitter-1.svg' ?>"></li>
					<li><img src="<?php echo get_template_directory_uri() . '/assets/img/034-instagram.svg' ?>"></li>
					<li><img src="<?php echo get_template_directory_uri() . '/assets/img/coldwell_banker_logo_screenshot.png' ?>"></li>
				</ul>
			</div>
		</div> <!-- END WIDGET WRAPPER -->

		<!-- START FOOTER BOTTOM -->
		<div class="gc-footer-bottom">
			<div class="container">
				<?php the_field('theme_footer_bottom_text', 'option') ?>
			</div>
		</div>
		<!-- END FOOTER BOTTOM -->


		<!--==============================================================================
		=            THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH            =
		===============================================================================-->

		<div style="color: black"><strong>Current template:</strong>
			<?php echo get_current_template( true ); ?>
		</div>

		<!-- ====  End of THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH  ==== -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!--===========================================
=            CUSTOM ANALYTICS TAGS - FOOTER     =
============================================-->

	<?php the_field('before_bottom_body_tag_default', 'option'); ?>

	<?php the_field('before_bottom_body_tag'); ?>

<!--====  End of CUSTOM ANALYTICS TAGS  ====-->

</body>
</html>

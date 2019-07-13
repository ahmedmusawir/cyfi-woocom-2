<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Moose_Framework_2
 */

get_header(); ?>

<!-- <h1>This is private training index</h1> -->
<section id="BLOCK1">
					
	<?php get_template_part( '_cyberize-modules/archive-index-private-training' ); ?>
	<?php //get_template_part( '_mfw-modules/archive-index-block-with-sidebar-mfw-001' ); ?>
	
</section>

<?php
// get_sidebar();
get_footer();

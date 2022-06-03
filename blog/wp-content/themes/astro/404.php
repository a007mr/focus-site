<?php

	/**
	 * ERROR 404 TEMPLATE
	 */

	get_header();

?>

	<section class="posts postindex wrapper">
		<div class="graybar"><i class="fa fa-info"></i> <?php esc_html_e('The page you requested could not be found.', 'astro'); ?></div>
		<hr>
	</section>

<?php get_footer(); ?>

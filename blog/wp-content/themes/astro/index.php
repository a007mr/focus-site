<?php 

	/**
	 * INDEX TEMPLATE
	 */

	get_header();

?>

	<?php get_template_part('layouts/blog_profile'); ?>
	<?php get_template_part('layouts/blog_cover'); ?>

	<section class="posts postindex wrapper">

		<?php get_template_part('layouts/navigation_responsive'); ?>
		<?php get_template_part('layouts/postlist'); ?>
		<?php get_template_part('layouts/search_responsive'); ?>

	</section>

<?php get_footer(); ?>

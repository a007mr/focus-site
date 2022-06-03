<?php

	/**
	 * CATEGORY TEMPLATE
	 */

	get_header();

?>

	<?php get_template_part('layouts/blog_profile'); ?>

	<section class="posts postindex wrapper">

		<?php get_template_part('layouts/navigation_responsive'); ?>

		<div class="notification">
			<span class="ntitle"><?php esc_html_e('Category', 'astro'); ?></span><span class="message"><?php single_cat_title(); ?></span>
			<a href="<?php echo esc_url(home_url('/')); ?>"><i class="fa fa-times"></i></a>
		</div>

		<?php get_template_part('layouts/postlist'); ?>

	</section>

<?php get_footer(); ?>

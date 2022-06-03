<?php

	/**
	 * TAG TEMPLATE
	 */

	get_header();

?>

	<?php get_template_part('layouts/blog_profile'); ?>

	<section class="posts postindex wrapper">

		<?php get_template_part('layouts/navigation_responsive'); ?>

		<div class="notification">
			<span class="ntitle"><?php esc_html_e('Tag', 'astro'); ?></span><span class="message"><?php single_tag_title(); ?></span>
			<a href="<?php echo esc_url(home_url('/')); ?>"><i class="fa fa-times"></i></a>
		</div>

		<?php get_template_part('layouts/postlist'); ?>

	</section>

<?php get_footer(); ?>

<?php

	/**
	 * ARCHIVE TEMPLATE
	 */

	get_header();

?>

	<?php get_template_part('layouts/blog_profile'); ?>

	<section class="posts postindex wrapper">

		<?php get_template_part('layouts/navigation_responsive'); ?>

		<div class="notification">
			<span class="ntitle"><?php esc_html_e('Archive', 'astro'); ?></span>
			<?php if(is_day()){ ?>
				<span class="message"><?php esc_html_e('Archive for', 'astro'); ?> <?php the_time('F jS, Y'); ?></span>
			<?php }elseif(is_month()){ ?>
				<span class="message"><?php esc_html_e('Archive for', 'astro'); ?> <?php the_time('F, Y'); ?></span>
			<?php }elseif(is_year()){ ?>
				<span class="message"><?php esc_html_e('Archive for', 'astro'); ?> <?php the_time('Y'); ?></span>
			<?php } ?>
			<a href="<?php echo esc_url(home_url('/')); ?>"><i class="fa fa-times"></i></a>
		</div>

		<?php get_template_part('layouts/postlist'); ?>

	</section>

<?php get_footer(); ?>

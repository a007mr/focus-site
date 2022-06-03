<?php

	/**
	 * CUSTOM PAGE TEMPLATE
	 */

	get_header();

?>

	<?php if(have_posts()) : ?>

		<?php while(have_posts()) : the_post(); ?>

			<?php get_template_part('layouts/post_cover'); ?>
			<?php get_template_part('layouts/profile_author_side'); ?>

			<section class="posts wrapper">

				<article id="post-<?php the_ID(); ?>" <?php post_class(astro_get_post_class()); ?>>

					<?php get_template_part('layouts/post_header'); ?>

					<section class="postbody">
						<?php the_content(); ?>
						<?php wp_link_pages(); ?>
					</section>

					<?php get_template_part('layouts/post_footer'); ?>

					<?php get_template_part('layouts/profile_author'); ?>

					<div class="comments">
						<div class="comment_block">
							<?php comments_template('', true); ?>
						</div>
						<a href="javascript:;" class="readmore smallbutton blue"><i class="fa fa-comments"></i><?php esc_html_e('View Comments', 'astro'); ?> (<?php echo esc_html(get_comments_number()); ?>) ...</a>
					</div>

				</article>

				<?php get_template_part('layouts/navigation_responsive'); ?>

			</section>

			<a href="javascript:;" class="backtotop"><i class="fa fa-chevron-up"></i></a>

		<?php endwhile; ?>

	<?php else : ?>

		<div class="graybar"><i class="fa fa-info"></i> <?php esc_html_e('Nothing has been posted like that yet', 'astro'); ?></div>

	<?php endif;  ?>

<?php get_footer(); ?>

<?php

	/*
		Template Name: Archives
	*/
	
	get_header(); 

?>

	<?php if(have_posts()) : ?>

		<?php while(have_posts()) : the_post(); ?>

			<?php get_template_part('layouts/post_cover'); ?>
			<?php get_template_part('layouts/post_flowbar'); ?>
			<?php get_template_part('layouts/profile_author_side'); ?>

			<section class="posts wrapper">

				<article id="post-<?php the_ID(); ?>" <?php post_class(astro_get_post_class()); ?>>
				
					<?php get_template_part('layouts/post_header'); ?>

					<section class="postbody">
						<?php the_content(); ?>
						<h2><?php esc_html_e('Recent Articles', 'astro'); ?></h2>
						<ol><?php wp_get_archives('type=postbypost&limit=5'); ?></ol>
						<h2><?php esc_html_e('Archives by Month', 'astro'); ?>:</h2>
						<ul><?php wp_get_archives('type=monthly'); ?></ul>
						<h2><?php esc_html_e('Archives by Category', 'astro'); ?>:</h2>
						<ul>
							<?php wp_list_categories('title_li='); ?>
						</ul>
						<?php wp_link_pages(); ?>
					</section>

					<footer>
						<ul class="share left">
							<a href="http://twitter.com/share?text=<?php the_title(); ?>&amp;url=<?php echo esc_url(get_permalink()); ?>" onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;" class="smallbutton lightgray"><i class="fa fa-twitter"></i>Twitter</a>
							<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url(get_permalink()); ?>" onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;" class="smallbutton lightgray"><i class="fa fa-facebook"></i>Facebook</a>
						</ul>
						<ul class="tags right">
							<?php echo get_the_tag_list('<li class="smallbutton solidgray">', '</li><li class="smallbutton solidgray">', '</li>'); ?>
						</ul>
					</footer>

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

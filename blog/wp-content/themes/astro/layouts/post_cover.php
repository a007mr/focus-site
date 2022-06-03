<?php

	/**
	 * POST - COVER
	 */

	if(has_post_thumbnail($post->ID)){

?>

	<div id="cover" class="cover post tag-developer-workflow featured">
		<div class="background" style="background-image: url('<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false, ''); echo esc_url($src[0]); ?>');"></div>
		<header class="wrapper">
			<h2>
				<?php
					$category = get_the_category();
					if($category){
						echo '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->name.'</a>';
					}
				?>
			</h2>
			<h1 id="posttitle"><?php the_title(); ?></h1>
			<span class="meta">
				<?php esc_html_e('Posted', 'astro'); ?> <span class="postauthor"><?php esc_html_e('by', 'astro'); ?> <a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )); ?>"><?php the_author(); ?></a></span>
				<?php esc_html_e('on', 'astro'); ?> <i class="fa fa-clock-o"></i> <time datetime="<?php the_time('Y-m-d'); ?>"><?php ecko_date_format(); ?></time>.
			</span>
		</header>
	</div>

<?php } ?>

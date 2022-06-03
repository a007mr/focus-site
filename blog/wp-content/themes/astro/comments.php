<?php

	/**
	 * COMMENTS
	 */

	if('comments.php' == basename($_SERVER['SCRIPT_FILENAME'])){
		die(esc_html__('Please do not load this page directly.', 'astro'));
	}

	if(post_password_required()){
		return;
	}

?>

	<?php if(have_comments()): ?>

		<div class="graybar viewcomments">
			<i class="fa fa-comments"></i><span class="commenttext"><?php esc_html_e('Comments', 'astro'); ?></span>
		</div>

		<div class="commentwrap">
			<?php wp_list_comments('type=comment&callback=astro_comment_format'); ?>
		</div>

		<?php previous_comments_link(); ?>
		<?php next_comments_link(); ?>

	 <?php else: ?>

		<?php if(comments_open()): ?>
			<div class="graybar">
				<i class="fa fa-comments"></i><?php esc_html_e('There are no comments', 'astro'); ?>.
			</div>
		<?php endif; ?>

	<?php endif; ?>

	<?php
		if(comments_open()){
			$args = array(
				'id_form' => 'commentform',
				'id_submit' => 'submit',
				'title_reply' => '',
				'title_reply_to' => '<div class="graybar"><i class="fa fa-comments-o"></i>' . esc_html__('Leave a Reply to', 'astro') . ' %s' . '</div>',
				'cancel_reply_link' => esc_html__('Cancel Reply', 'astro'),
				'label_submit' => esc_html__('Post Comment', 'astro'),
				'comment_field' => '<textarea placeholder="' . esc_attr__('Add your comment here', 'astro') . '..." name="comment" class="commentbody" id="comment" rows="5" tabindex="4"></textarea>',
				'comment_notes_after' => '',
				'comment_notes_before' => '',
				'fields' => apply_filters('comment_form_default_fields', array(
					'author' =>
						'<input type="text" placeholder="' . esc_attr__('Name', 'astro') . ' ' . ($req ?  '(' . esc_attr__('Required', 'astro') . ')' : '') . '" name="author" id="author" value="' . esc_attr($comment_author) . '" size="22" tabindex="1" ' . ($req ? "aria-required='true'" : '') . ' />',
					'email' =>
						'<input type="text" placeholder="' . esc_attr__('Email', 'astro') . ' ' . ($req ? '(' . esc_attr__('Required', 'astro') . ')' : '') . '" name="email" id="email" value="' . esc_attr($comment_author_email) . '" size="22" tabindex="1" ' . ($req ? "aria-required='true'" : '') . ' />',
					'url' =>
						'<input type="text" placeholder="' . esc_attr__('Website URL', 'astro') . '" name="url" id="url" value="' . esc_attr($comment_author_url) . '" size="22" tabindex="1" />'
					)
				)

			);
			comment_form($args);
		}
	?>

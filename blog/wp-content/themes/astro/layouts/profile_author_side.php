<?php

    /**
     * PROFILE - AUTHOR (SIDE)
     */


?>

    <div class="profile side author <?php if(has_post_thumbnail()) echo 'featured'; ?>">
        <img src="//0.gravatar.com/avatar/<?php echo esc_attr(md5(get_the_author_meta('user_email'))); ?>?s=96" class="profileimage" alt="<?php the_author(); ?>">
        <h4><?php the_author(); ?></h4>
        <ul class="smallsocial">
            <?php if(get_the_author_meta('twitter') != ''){ ?><li><a href="<?php echo esc_url(get_the_author_meta('twitter')); ?>" class="smallsocialbutton twitter" target="_blank"><i class="fa fa-twitter"></i></a></li><?php } ?>
            <?php if(get_the_author_meta('facebook') != ''){ ?><li><a href="<?php echo esc_url(get_the_author_meta('facebook')); ?>" class="smallsocialbutton facebook" target="_blank"><i class="fa fa-facebook"></i></a></li><?php } ?>
            <?php if(get_the_author_meta('github') != ''){ ?><li><a href="<?php echo esc_url(get_the_author_meta('github')); ?>" class="smallsocialbutton github" target="_blank"><i class="fa fa-github"></i></a></li><?php } ?>
            <?php if(get_the_author_meta('instagram') != ''){ ?><li><a href="<?php echo esc_url(get_the_author_meta('instagram')); ?>" class="smallsocialbutton instagram" target="_blank"><i class="fa fa-instagram"></i></a></li><?php } ?>
            <li><a href="<?php bloginfo('rss2_url'); ?>" class="smallsocialbutton rss" target="_blank"><i class="fa fa-rss"></i></a></li>
        </ul>
        <p class="authorbio"><?php echo strip_tags(get_the_author_meta('description')); ?></p>
        <hr>
        <strong><?php esc_html_e('LATEST POSTS', 'astro'); ?></strong>
        <?php echo astro_get_related_author_posts(); ?>
    </div>

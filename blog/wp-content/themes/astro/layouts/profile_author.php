<?php

    /**
     * PROFILE - AUTHOR
     */


?>

    <div class="postprofile bottom">
        <img src="https://0.gravatar.com/avatar/<?php echo esc_attr(md5(get_the_author_meta('user_email'))); ?>?s=96" class="author" alt="<?php the_author(); ?>"/>
        <div class="info">
            <h4><?php the_author(); ?></h4>
            <a href="<?php esc_url(the_author_meta('url')); ?>" target="_blank"><?php esc_url(the_author_meta('url')); ?></a>
            <p><?php echo strip_tags(get_the_author_meta('description')); ?></p>
            <ul class="social">
                <?php if(get_the_author_meta('twitter') != ''){ ?><li><a href="<?php echo esc_html(get_the_author_meta('twitter')); ?>" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a></li><?php } ?>
                <?php if(get_the_author_meta('facebook') != ''){ ?><li><a href="<?php echo esc_html(get_the_author_meta('facebook')); ?>" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a></li><?php } ?>
                <?php if(get_the_author_meta('github') != ''){ ?><li><a href="<?php echo esc_html(get_the_author_meta('github')); ?>" class="github" target="_blank"><i class="fa fa-github-alt"></i></a></li><?php } ?>
                <?php if(get_the_author_meta('youtube') != ''){ ?><li><a href="<?php echo esc_html(get_the_author_meta('youtube')); ?>" class="youtube" target="_blank"><i class="fa fa-youtube"></i></a></li><?php } ?>
                <?php if(get_the_author_meta('dribbble') != ''){ ?><li><a href="<?php echo esc_html(get_the_author_meta('dribbble')); ?>" class="dribbble" target="_blank"><i class="fa fa-dribbble"></i></a></li><?php } ?>
                <?php if(get_the_author_meta('google-plus') != ''){ ?><li><a href="<?php echo esc_html(get_the_author_meta('google-plus')); ?>" class="googleplus" target="_blank"><i class="fa fa-google-plus"></i></a></li><?php } ?>
                <?php if(get_the_author_meta('instagram') != ''){ ?><li><a href="<?php echo esc_html(get_the_author_meta('instagram')); ?>" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a></li><?php } ?>
                <?php if(get_the_author_meta('linkedin') != ''){ ?><li><a href="<?php echo esc_html(get_the_author_meta('linkedin')); ?>" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li> <?php } ?>
                <?php if(get_the_author_meta('pinterest') != ''){ ?><li><a href="<?php echo esc_html(get_the_author_meta('pinterest')); ?>" class="pinterest" target="_blank"><i class="fa fa-pinterest"></i></a></li><?php } ?>
                <?php if(get_the_author_meta('reddit') != ''){ ?><li><a href="<?php echo esc_html(get_the_author_meta('reddit')); ?>" class="reddit" target="_blank"><i class="fa fa-reddit"></i></a></li><?php } ?>
                <?php if(get_the_author_meta('skype') != ''){ ?><li><a href="<?php echo esc_html(get_the_author_meta('skype')); ?>" class="skype" target="_blank"><i class="fa fa-skype"></i></a></li><?php } ?>
                <?php if(get_the_author_meta('tumblr') != ''){ ?><li><a href="<?php echo esc_html(get_the_author_meta('tumblr')); ?>" class="tumblr" target="_blank"><i class="fa fa-tumblr"></i></a></li><?php } ?>
                <?php if(get_the_author_meta('vine') != ''){ ?><li><a href="<?php echo esc_html(get_the_author_meta('vine')); ?>" class="vine" target="_blank"><i class="fa fa-vine"></i></a></li><?php } ?>
                <?php if(get_the_author_meta('vk') != ''){ ?><li><a href="<?php echo esc_html(get_the_author_meta('vk')); ?>" class="vk" target="_blank"><i class="fa fa-vk"></i></a></li><?php } ?>
                <?php if(get_the_author_meta('flickr') != ''){ ?><li><a href="<?php echo esc_html(get_the_author_meta('flickr')); ?>" class="flickr" target="_blank"><i class="fa fa-flickr"></i></a></li><?php } ?>
                <?php if(get_the_author_meta('stack-overflow') != ''){ ?><li><a href="<?php echo esc_html(get_the_author_meta('stack-overflow')); ?>" class="stackoverflow" target="_blank"><i class="fa fa-stack-overflow"></i></a></li> <?php } ?>
                <?php if(get_the_author_meta('twitch') != ''){ ?><li><a href="<?php echo esc_html(get_the_author_meta('twitch')); ?>" class="twitch" target="_blank"><i class="fa fa-twitch"></i></a></li><?php } ?>
                <?php if(get_the_author_meta('vimeo') != ''){ ?><li><a href="<?php echo esc_html(get_the_author_meta('vimeo')); ?>" class="vimeo" target="_blank"><i class="fa fa-vimeo"></i></a></li><?php } ?>
                <?php if(get_the_author_meta('weibo') != ''){ ?><li><a href="<?php echo esc_html(get_the_author_meta('weibo')); ?>" class="weibo" target="_blank"><i class="fa fa-weibo"></i></a></li><?php } ?>
                <?php if(get_the_author_meta('soundcloud') != ''){ ?><li><a href="<?php echo esc_html(get_the_author_meta('soundcloud')); ?>" class="soundcloud" target="_blank"><i class="fa fa-soundcloud"></i></a></li><?php } ?>
                <li><a href="<?php esc_url(bloginfo('rss2_url')); ?>" class="rss" target="_blank"><i class="fa fa-rss"></i></a></li>
            </ul>
        </div>
    </div>

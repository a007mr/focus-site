<?php

    /**
     * BLOG - TITLE
     */


?>

    <header class="title">
        <?php if(get_theme_mod('general_blog_logo_image') != ""){ ?>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="image"><img src="<?php echo esc_url(get_theme_mod('general_blog_logo_image')); ?>" alt="user"></a>
        <?php }else{ ?>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="icon"><i class="fa <?php echo esc_attr(get_theme_mod('general_blog_logo', 'fa-bookmark-o')); ?> fa-lg"></i><span><?php bloginfo('name'); ?></span></a>
        <?php } ?>
    </header>

<?php

    /**
     * BLOG - PROFILE
     */


?>

    <div class="profile <?php if(is_home() && get_theme_mod('indexfeature_enable_feature_header')){ echo 'featured'; } ?>">
        <?php if(get_theme_mod('general_blog_image') != ""){ ?>
            <img src="<?php echo esc_url(get_theme_mod('general_blog_image')); ?>" class="profileimage" alt="user">
        <?php } ?>
        <h4><?php bloginfo('name'); ?></h4>
        <p><?php echo esc_html(get_theme_mod('general_blog_description')); ?></p>
        <hr>
        <div class="profile-sidebar">
            <?php
                if(is_active_sidebar('sidebar-page')){
                    dynamic_sidebar('sidebar-page');
                }
            ?>
        </div>
    </div>

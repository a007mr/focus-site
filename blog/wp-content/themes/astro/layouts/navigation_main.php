<?php

    /**
     * NAVIGATION - MAIN
     */

    $class = "";

    if((is_single() || is_page()) && (has_post_thumbnail() == 'false')){
        $class .= "featured";
    }

    if(is_front_page() && !is_paged() && get_theme_mod('indexfeature_enable_feature_header')){
        $class .= "featured";
    }

?>

    <nav class="mainnav <?php echo esc_attr($class); ?>">
        <a id="top"></a>
        <div class="navwrap">
            <?php wp_nav_menu(array('depth' => 2, 'theme_location' => 'primary', 'container' => false)); ?>
            <div class="toggle"><i class="fa fa-bars"></i></div>
        </div>
    </nav>

<?php

    /**
     * NAVIGATION - RESPONSIVE
     */


?>

    <div class="inlinemenu">
        <div class="graybar">
            <div class="left"><i class="fa fa-bars"></i><?php esc_html_e('Navigation', 'astro'); ?></div>
            <div class="right"><i class="fa fa-chevron-down"></i></div>
        </div>
        <?php wp_nav_menu(array('depth' => 2, 'theme_location' => 'primary', 'container' => false)); ?>
    </div>

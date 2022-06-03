<?php

    /**
     * PAGINATION
     */

    if($wp_query->max_num_pages > 1){

?>

    <div class="pagination">
        <?php next_posts_link('<span>' . esc_html__('Older Posts', 'astro') . '</span><i class="fa fa-chevron-right"></i>'); ?>
        <?php previous_posts_link('<i class="fa fa-chevron-left"></i><span>' . esc_html__('Newer Posts', 'astro') . '</span>'); ?>
    </div>

<?php } ?>

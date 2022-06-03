<?php

    /**
     * BLOG - COVER
     */

    if(get_theme_mod('indexfeature_enable_feature_header') && is_home() && !is_paged()){

?>

    <div id="cover" class="cover post indexfeature featured">
        <div class="background" style="background-image: url('<?php echo esc_url(get_theme_mod('indexfeature_image')); ?>');"></div>
        <header class="wrapper">
            <?php if(get_theme_mod('indexfeature_logo') != ""){ ?>
                <img src="<?php echo esc_url(get_theme_mod('indexfeature_logo')); ?>" class="profileimage" alt="user">
            <?php }else{ ?>
                <h1 id="posttitle"><?php bloginfo('name'); ?></h1>
            <?php } ?>
            <p><?php echo esc_html(get_theme_mod('indexfeature_description')); ?></p>
        </header>
    </div>

<?php } ?>

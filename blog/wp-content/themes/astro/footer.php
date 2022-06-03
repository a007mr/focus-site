<?php

    /**
     * FOOTER TEMPLATE
     */


?>

    <footer class="wrapper">
        <div class="footer-sidebar">
            <div class="footer-widget widget-1">
                <?php
                    if(is_active_sidebar('footer-sidebar-1')){
                        dynamic_sidebar('footer-sidebar-1');
                    }
                ?>
            </div>
            <div class="footer-widget widget-2">
                <?php
                    if(is_active_sidebar('footer-sidebar-2')){
                        dynamic_sidebar('footer-sidebar-2');
                    }
                ?>
            </div>
        </div>
        <?php if(is_active_sidebar('footer-sidebar-2')){ ?>
        <hr class="thinhr">
        <?php } ?>
        <?php get_search_form(); ?>
        <?php get_template_part('layouts/copyright'); ?>
    </footer>

    <?php wp_footer(); ?>

	<script type="text/javascript" src="https://keplerleads.com/init.js"></script>
	<script type="text/javascript">
		Kepler.init({id: 2194});
	</script>
</body>
</html>

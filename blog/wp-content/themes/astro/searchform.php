<?php

    /**
     * SEARCH
     */


?>

    <div class="postsearch">
        <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
            <input type="text" value="" name="s" class="query" placeholder="<?php esc_attr_e('Search the blog', 'astro'); ?>..."/>
            <input class="smallbutton blue submit" type="submit" value="Search"/>
        </form>
    </div>

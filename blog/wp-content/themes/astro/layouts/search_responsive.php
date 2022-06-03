<?php

    /**
     * SEARCH - RESPONSIVE
     */


?>

    <div class="search">
        <div class="searchbar">
            <form role="search" method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
                <input type="text" value="" name="s" id="s" class="query" placeholder="<?php esc_attr_e('Search', 'astro'); ?>..."/>
            </form>
        </div>
        <a class="searchopen" href="#"><i class="fa fa-search"></i></a>
    </div>

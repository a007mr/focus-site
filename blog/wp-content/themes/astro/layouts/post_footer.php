<?php

    /**
     * POST - FOOTER
     */


?>

    <footer>
        <ul class="share left">
            <li><a href="http://twitter.com/share?text=<?php echo urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')); ?>&amp;url=<?php echo esc_url(get_permalink()); ?>" onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;" class="smallbutton lightgray"><i class="fa fa-twitter"></i>Twitter</a></li>
            <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url(get_permalink()); ?>" onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;" class="smallbutton lightgray"><i class="fa fa-facebook"></i>Facebook</a></li>
            <li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="window.open(this.href, 'google-plus-share', 'width=490,height=530');return false;" class="smallbutton lightgray"><i class="fa fa-google-plus"></i>Google+</a></li>
        </ul>
        <ul class="tags right">
            <?php echo get_the_tag_list('<li class="smallbutton solidgray">', '</li><li class="smallbutton solidgray">', '</li>'); ?>
        </ul>
    </footer>

<?php

    /**
     * POSTLIST
     */

    if(have_posts()) :

?>

    <?php while(have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(astro_get_post_class()); ?>>
            <header>
                <div class="feature"><span><?php esc_html_e('Featured', 'astro'); ?></span><i class="fa fa-bookmark fa-lg"></i></div>
                <h2>
                    <?php
                        $category = get_the_category();
                        if($category){
                            echo '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->name.'</a>';
                        }
                    ?>
                </h2>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <span>
                    <?php esc_html_e('Posted', 'astro'); ?> <span class="postauthor"><?php esc_html_e('by', 'astro'); ?><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )); ?>"><img class="smallprofile profileimage" src="//0.gravatar.com/avatar/<?php echo esc_attr(md5(get_the_author_meta('user_email'))); ?>?s=32" alt="user"><?php the_author(); ?></a></span> <?php esc_html_e('on', 'astro'); ?> <i class="fa fa-clock-o"></i><a href="<?php the_permalink(); ?>"><?php ecko_date_format(); ?></a>.
                </span>
                <p><?php echo ecko_truncate_by_words(get_the_excerpt(), 340, '...'); ?></p>
            </header>
        </article>

    <?php endwhile; ?>

    <?php get_template_part('layouts/pagination'); ?>

<?php else : ?>

    <div class="graybar"><i class="fa fa-info"></i> <?php esc_html_e('Nothing has been posted like that yet', 'astro'); ?></div>

<?php endif; ?>

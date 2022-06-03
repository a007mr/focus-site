<?php

    /**
     *
     * 	ASTRO THEME
     *
     * 	@author EckoThemes <support@ecko.me>
     * 	@version 4.5.0
     * 	@link https://ecko.me
     *
     */


    /*-----------------------------------------------------------------------------------*/
    /* CONFIGURATION
    /*-----------------------------------------------------------------------------------*/

    /*
     *	THEME INFO
     */
    define('ECKO_THEME', true);
    define('ECKO_THEME_ID', 'astro');
    define('ECKO_THEME_NAME', 'Astro');
    define('ECKO_THEME_VERSION', '4.5.0');
    define('ECKO_THEME_WIDTH', '760');
    define('ECKO_DATE_FORMAT', 'F jS, Y');
    define('ECKO_DEMO', false);

    /*
     *	TYPOGRAPHY
     */
    DEFINE('ECKO_FONT_BODY_FAMILY', "Open Sans");
    DEFINE('ECKO_FONT_BODY_WEIGHT', "400,600,700");
    DEFINE('ECKO_FONT_BODY_SELECTOR', ".body, footer, .grid p.left, .grid p.right, .grid p, .grid p:nth-of-type(1), .index h2, .index h2, .profile p, .postprofile p, p, .posts article section ul li, .posts article section ol li, .profile h4, header span, header span time, .smallbutton, .comment_block .user .number, .comment_block .user h5, .comment_block .user .status, .comment_block .comment-reply-link, #respond input[type=\"text\"], #respond #submit, .commentbody, a, .posts article section h3, .posts article section h4, .posts article section h5, strong, em, input:not([type=submit]):not([type=file]), .graybar, .search .searchbar input, .postsearch .query, .mainnav .menu a, .menu-header ul ul a, .menu-footer, .menu-footer ul ul li, .cover header h2 a, .cover header h2 span, .posts article header h2 a, .posts article header time, .posts article section > p:first-child, .posts article section .container strong, .posts article section .container p, .profile .tweet, #cancel-comment-reply-link, .posts article section h3, .posts article section h4, .posts article section h5, .notification .ntitle, .notification .message, .index h1, .index h2, .menu-header");
    DEFINE('ECKO_FONT_HEADER_FAMILY', "Domine");
    DEFINE('ECKO_FONT_HEADER_WEIGHT', "400");
    DEFINE('ECKO_FONT_HEADER_SELECTOR', ".comment_block .user h4, h1, h1 a, h2, h2 a, h3, h3 a, h4, h4 a, blockquote, .gallery-caption, q, cite, .cover header h1 a, .cover header h1");

    /*
     *	WIDGETS
     */
    define('ECKO_WIDGET_ADVERTISMENT', false);
    define('ECKO_WIDGET_AUTHOR_PROFILE', false);
    define('ECKO_WIDGET_BLOG_INFO', false);
    define('ECKO_WIDGET_LATEST_POSTS', false);
    define('ECKO_WIDGET_NAVIGATION', false);
    define('ECKO_WIDGET_RANDOM_POSTS', false);
    define('ECKO_WIDGET_RELATED_POSTS', false);
    define('ECKO_WIDGET_SHARE', false);
    define('ECKO_WIDGET_SOCIAL_AUTHOR', false);
    define('ECKO_WIDGET_SOCIAL_BLOG', false);
    define('ECKO_WIDGET_SUBSCRIPTION', false);
    define('ECKO_WIDGET_TWITTER', false);


    /*-----------------------------------------------------------------------------------*/
    /* FRAMEWORK
    /*-----------------------------------------------------------------------------------*/

    require_once get_template_directory() . '/inc/eckoframework/eckoframework.php';


    /*-----------------------------------------------------------------------------------*/
    /* THEME SETUP
    /*-----------------------------------------------------------------------------------*/

    if(!function_exists('astro_theme_setup')){
        function astro_theme_setup(){
            register_nav_menus(
                array(
                    'primary' => esc_html__('Primary Menu', 'astro')
                )
            );
        }
    }
    add_action('after_setup_theme', 'astro_theme_setup');


    /*-----------------------------------------------------------------------------------*/
    /* ENQUE STYLES AND SCRIPTS
    /*-----------------------------------------------------------------------------------*/

    if(!function_exists('astro_load_scripts')){
        function astro_load_scripts(){
            if(!is_admin()){
                // JAVASCRIPT VARS
                wp_localize_script('ecko_js', 'ecko_theme_vars', array(
                    'general_autoload_comments' => esc_js(get_theme_mod('comments_auto_load', 'false')),
                    'general_disable_syntax_highlighter' => esc_js(get_theme_mod('general_disable_syntax_highlighter', 'false'))
                ));
            }
        }
    }
    add_action('wp_enqueue_scripts', 'astro_load_scripts');


    /*-----------------------------------------------------------------------------------*/
    /* REGISTER THEME RECOMMENDED PLUGINS
    /*-----------------------------------------------------------------------------------*/

    if(!function_exists('astro_register_plugins')){
        function astro_register_plugins(){
            $ecko_plugins = ecko_default_plugins();
            array_push($ecko_plugins, array());
            tgmpa($ecko_plugins);
        }
    }
    add_action('tgmpa_register', 'astro_register_plugins');


    /*-----------------------------------------------------------------------------------*/
    /* REGISTER SIDEBARS
    /*-----------------------------------------------------------------------------------*/

    if(!function_exists('astro_widgets_init')){
        function astro_widgets_init(){
            register_sidebar(array(
                'name' => 'Footer Widget One',
                'id' => 'footer-sidebar-1',
                'description' => 'Appears in the footer area.',
                'before_widget' => '<aside id="%1$s">',
                'after_widget' => '</aside>',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>',
            ));
            register_sidebar(array(
                'name' => 'Footer Widget Two',
                'id' => 'footer-sidebar-2',
                'description' => 'Appears in the footer area.',
                'before_widget' => '<aside id="%1$s">',
                'after_widget' => '</aside>',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>',
            ));
        }
    }
    add_action('widgets_init', 'astro_widgets_init');


    /*-----------------------------------------------------------------------------------*/
    /* GET POST CSS CLASS
    /*-----------------------------------------------------------------------------------*/

    if(!function_exists('astro_get_post_class')){
        function astro_get_post_class(){
            global $post;
            $class = "";
            if(has_post_thumbnail($post->ID)){
                $class .= 'featured';
            }
            return $class;
        }
    }


    /*-----------------------------------------------------------------------------------*/
    /* PAGINATION
    /*-----------------------------------------------------------------------------------*/

    if(!function_exists('astro_posts_link_left_attributes')){
        function astro_posts_link_left_attributes(){
            return 'class="readmore smallbutton lightgray right"';
        }
    }
    add_filter('next_posts_link_attributes', 'astro_posts_link_left_attributes');

    if(!function_exists('astro_posts_link_right_attributes')){
        function astro_posts_link_right_attributes(){
            return 'class="readmore smallbutton lightgray left"';
        }
    }
    add_filter('previous_posts_link_attributes', 'astro_posts_link_right_attributes');


    /*-----------------------------------------------------------------------------------*/
    /* COMMENT FORMATTING
    /*-----------------------------------------------------------------------------------*/

    if(!function_exists('astro_comment_format')){
        function astro_comment_format($comment, $args, $depth){
            $GLOBALS['comment'] = $comment;
            ?>
                <li id="comment-<?php echo esc_attr(comment_ID()); ?>" <?php comment_class("usercomment"); ?>>
                    <div class="user">
                        <img src="https://0.gravatar.com/avatar/<?php echo esc_attr(md5($comment->comment_author_email)); ?>?s=96" class="avatar" alt="user">
                        <div class="userinfo">
                            <h4>
                                <span class="status"><?php esc_html_e('AUTHOR', 'astro'); ?></span>
                                <a href="<?php comment_author_url(); ?>"><?php comment_author(); ?></a>
                            </h4>
                            <h5><?php esc_html_e('Posted on', 'astro'); ?> <span><?php comment_time(); ?> <?php comment_date(); ?></span>.</h5>
                            <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
                        </div>
                    </div>
                    <div class="body">
                        <?php comment_text(); ?>
                        <?php if($comment->comment_approved == '0'){ ?>
                            <em><?php esc_html_e('Your comment is awaiting moderation', 'astro'); ?>.</em>
                        <?php } ?>
                    </div>
            <?php
        }
    }


    /*-----------------------------------------------------------------------------------*/
    /* AUTHOR RELATED POSTS
    /*-----------------------------------------------------------------------------------*/

    if(!function_exists('astro_get_related_author_posts')){
        function astro_get_related_author_posts(){
            global $authordata, $post;
            $authors_posts = get_posts(array('author' => $authordata->ID, 'post__not_in' => array($post->ID), 'posts_per_page' => 2));
            $output = '';
            foreach($authors_posts as $authors_post){
                $output .= '<p class="tweet"><a href="' . get_permalink($authors_post->ID) . '">' . apply_filters('the_title', $authors_post->post_title, $authors_post->ID) . '</a><span> ' . date('dS F, Y', strtotime($authors_post->post_date)) . '</span></p>';
            }
            return $output;
        }
    }


    /*-----------------------------------------------------------------------------------*/
    /* THEME CUSTOMIZER SETTINGS
    /*-----------------------------------------------------------------------------------*/

    function astro_customize_register($wp_customize){

        /*
         * BLOG SECTION
         */
        $wp_customize->add_section('general_section',
            array(
                'title' => 'General',
                'description' => 'This section contains options for all pages.',
                'priority' => 30,
            )
        );

        $wp_customize->add_setting('general_blog_logo_image',
        array(
            'sanitize_callback' => 'ecko_sanitize_file_upload'
        ));
        $wp_customize->add_control(
            new WP_Customize_Image_Control($wp_customize, 'general_blog_logo_image',
                array(
                    'label' => 'Blog Title Image (Top Left)',
                    'section' => 'branding_section',
                    'settings' => 'general_blog_logo_image'
                )
            )
        );

        $wp_customize->add_setting('general_blog_logo_image_retina',
        array(
            'sanitize_callback' => 'ecko_sanitize_file_upload'
        ));
        $wp_customize->add_control(
            new WP_Customize_Image_Control($wp_customize, 'general_blog_logo_image_retina',
                array(
                    'label' => 'Blog Title Image (Retina - @2x file name)',
                    'section' => 'branding_section',
                    'settings' => 'general_blog_logo_image_retina'
                )
            )
        );

        $wp_customize->add_setting('general_blog_logo',
        array(
            'sanitize_callback' => 'ecko_sanitize_text'
        ));
        $wp_customize->add_control('general_blog_logo',
            array(
                'label' => 'Blog Title Icon (FontAwesome)',
                'section' => 'branding_section',
                'type' => 'text',
            )
        );


        /*
         * INDEX SECTION
         */
        $wp_customize->add_section('index_section',
            array(
                'title' => 'Index',
                'description' => 'This section contains options for the index page.',
                'priority' => 31,
            )
        );

        $wp_customize->add_setting('index_hide_blogprofile',
        array(
            'sanitize_callback' => 'ecko_sanitize_checkbox'
        ));
        $wp_customize->add_control('index_hide_blogprofile',
            array(
                'type' => 'checkbox',
                'label' => 'Hide Blog Profile',
                'section' => 'index_section',
            )
        );

        $wp_customize->add_setting('index_hide_search',
        array(
            'sanitize_callback' => 'ecko_sanitize_checkbox'
        ));
        $wp_customize->add_control('index_hide_search',
            array(
                'type' => 'checkbox',
                'label' => 'Hide Search',
                'section' => 'index_section',
            )
        );

        $wp_customize->add_setting('index_hide_catagories',
        array(
            'sanitize_callback' => 'ecko_sanitize_checkbox'
        ));
        $wp_customize->add_control('index_hide_catagories',
            array(
                'type' => 'checkbox',
                'label' => 'Hide Post Categories',
                'section' => 'index_section',
            )
        );

        $wp_customize->add_setting('index_hide_author',
        array(
            'sanitize_callback' => 'ecko_sanitize_checkbox'
        ));
        $wp_customize->add_control('index_hide_author',
            array(
                'type' => 'checkbox',
                'label' => 'Hide Post Author',
                'section' => 'index_section',
            )
        );

        $wp_customize->add_setting('index_hide_excerpt',
        array(
            'sanitize_callback' => 'ecko_sanitize_checkbox'
        ));
        $wp_customize->add_control('index_hide_excerpt',
            array(
                'type' => 'checkbox',
                'label' => 'Hide Post Excerpt',
                'section' => 'index_section',
            )
        );


        /*
         * INDEX FEATURED HEADER
         */
        $wp_customize->add_section('indexfeature_section',
            array(
                'title' => 'Index Feature',
                'description' => 'This section contains options for the optional feature image header on the index page.',
                'priority' => 31,
            )
        );

        $wp_customize->add_setting('indexfeature_enable_feature_header',
        array(
            'sanitize_callback' => 'ecko_sanitize_checkbox'
        ));
        $wp_customize->add_control('indexfeature_enable_feature_header',
            array(
                'type' => 'checkbox',
                'label' => 'Enable Feature Header (Index Page)',
                'section' => 'indexfeature_section',
            )
        );

        $wp_customize->add_setting('indexfeature_image',
        array(
            'sanitize_callback' => 'ecko_sanitize_file_upload'
        ));
        $wp_customize->add_control(
            new WP_Customize_Image_Control($wp_customize, 'indexfeature_image',
                array(
                    'label' => 'Index Feature Background Image',
                    'section' => 'indexfeature_section',
                    'settings' => 'indexfeature_image'
                )
            )
        );

        $wp_customize->add_setting('indexfeature_logo',
        array(
            'sanitize_callback' => 'ecko_sanitize_file_upload'
        ));
        $wp_customize->add_control(
            new WP_Customize_Image_Control($wp_customize, 'indexfeature_logo',
                array(
                    'label' => 'Index Feature Logo',
                    'section' => 'indexfeature_section',
                    'settings' => 'indexfeature_logo'
                )
            )
        );

        $wp_customize->add_setting('indexfeature_description',
        array(
            'sanitize_callback' => 'ecko_sanitize_text'
        ));
        $wp_customize->add_control('indexfeature_description',
            array(
                'label' => 'Index Feature Description',
                'section' => 'indexfeature_section',
                'type' => 'textarea',
            )
        );

        $wp_customize->add_setting('indexfeature_opacity', array(
            'default' => '0.6',
            'sanitize_callback' => 'ecko_sanitize_opacity_select'
        ));
        $wp_customize->add_control('indexfeature_opacity', array(
            'settings' => 'indexfeature_opacity',
            'label'   => 'Index Feature Image Opacity',
            'default' => '0.6',
            'section' => 'indexfeature_section',
            'type'  => 'select',
            'choices'  => array(
                '0.1' => '10%',
                '0.2' => '20%',
                '0.3' => '30%',
                '0.4' => '40%',
                '0.5' => '50%',
                '0.6' => '60%',
                '0.7' => '70%',
                '0.8' => '80%',
                '0.9' => '90%',
                '1.0' => '100%'
            ),
        ));


        /*
         * POST SECTION
         */
        $wp_customize->add_section('post_section',
            array(
                'title' => 'Post Page',
                'description' => 'This section contains options for the post page.',
                'priority' => 32,
            )
        );

        $wp_customize->add_setting('post_hide_sideuserprofile',
        array(
            'sanitize_callback' => 'ecko_sanitize_checkbox'
        ));
        $wp_customize->add_control('post_hide_sideuserprofile',
            array(
                'type' => 'checkbox',
                'label' => 'Hide Side User Profile',
                'section' => 'post_section',
            )
        );

        $wp_customize->add_setting('post_hide_bottomuserprofile',
        array(
            'sanitize_callback' => 'ecko_sanitize_checkbox'
        ));
        $wp_customize->add_control('post_hide_bottomuserprofile',
            array(
                'type' => 'checkbox',
                'label' => 'Hide Bottom User Profile',
                'section' => 'post_section',
            )
        );

        $wp_customize->add_setting('post_hide_sociallinks',
        array(
            'sanitize_callback' => 'ecko_sanitize_checkbox'
        ));
        $wp_customize->add_control('post_hide_sociallinks',
            array(
                'type' => 'checkbox',
                'label' => 'Hide Social Links',
                'section' => 'post_section',
            )
        );

        $wp_customize->add_setting('post_hide_sharelinks',
        array(
            'sanitize_callback' => 'ecko_sanitize_checkbox'
        ));
        $wp_customize->add_control('post_hide_sharelinks',
            array(
                'type' => 'checkbox',
                'label' => 'Hide Share Links',
                'section' => 'post_section',
            )
        );

        $wp_customize->add_setting('post_hide_catagory',
        array(
            'sanitize_callback' => 'ecko_sanitize_checkbox'
        ));
        $wp_customize->add_control('post_hide_catagory',
            array(
                'type' => 'checkbox',
                'label' => 'Hide Post Catagory',
                'section' => 'post_section',
            )
        );

        $wp_customize->add_setting('post_hide_author',
        array(
            'sanitize_callback' => 'ecko_sanitize_checkbox'
        ));
        $wp_customize->add_control('post_hide_author',
            array(
                'type' => 'checkbox',
                'label' => 'Hide Post Author',
                'section' => 'post_section',
            )
        );


        /*
         * FEATURED SECTION
         */
        $wp_customize->add_section('featured_section',
            array(
                'title' => 'Featured Post/Page',
                'description' => 'This section contains options for the featured post/page section.',
                'priority' => 33,
            )
        );

        $wp_customize->add_setting('featured_image_opacity', array(
            'default' => '0.5',
            'sanitize_callback' => 'ecko_sanitize_opacity_select'
        ));
        $wp_customize->add_control('featured_image_opacity', array(
            'settings' => 'featured_image_opacity',
            'label' => 'Featured Image Opacity',
            'default' => '0.6',
            'section' => 'featured_section',
            'type' => 'select',
            'choices' => array(
                '0.1' => '10%',
                '0.2' => '20%',
                '0.3' => '30%',
                '0.4' => '40%',
                '0.5' => '50%',
                '0.6' => '60%',
                '0.7' => '70%',
                '0.8' => '80%',
                '0.9' => '90%',
                '1.0' => '100%',
            ),
        ));

        $wp_customize->add_setting('featured_hide_userprofile',
        array(
            'sanitize_callback' => 'ecko_sanitize_checkbox'
        ));
        $wp_customize->add_control('featured_hide_userprofile',
            array(
                'type' => 'checkbox',
                'label' => 'Hide User Profile',
                'section' => 'featured_section',
            )
        );


        /*
         * FEATURE SECTION
         */
        $wp_customize->add_section('articleflow_section',
            array(
                'title' => 'Article Flow Bar',
                'description' => 'This section contains options for the article flow bar found on the post page.',
                'priority' => 34,
            )
        );

        $wp_customize->add_setting('articleflow_hide_bar',
        array(
            'sanitize_callback' => 'ecko_sanitize_checkbox'
        ));
        $wp_customize->add_control('articleflow_hide_bar',
            array(
                'type' => 'checkbox',
                'label' => 'Hide Flow Bar',
                'section' => 'articleflow_section',
            )
        );

        $wp_customize->add_setting('articleflow_hide_current_header',
        array(
            'sanitize_callback' => 'ecko_sanitize_checkbox'
        ));
        $wp_customize->add_control('articleflow_hide_current_header',
            array(
                'type' => 'checkbox',
                'label' => 'Hide Current Header',
                'section' => 'articleflow_section',
            )
        );

        $wp_customize->add_setting('articleflow_hide_post_header',
        array(
            'sanitize_callback' => 'ecko_sanitize_checkbox'
        ));
        $wp_customize->add_control('articleflow_hide_post_header',
            array(
                'type' => 'checkbox',
                'label' => 'Hide Post Header',
                'section' => 'articleflow_section',
            )
        );


        /*
         * PAGE SECTION
         */
        $wp_customize->add_section('page_section',
            array(
                'title' => 'Custom Page',
                'description' => 'This section contains options for the custom pages.',
                'priority' => 35,
            )
        );

        $wp_customize->add_setting('page_show_authorprofile',
        array(
            'sanitize_callback' => 'ecko_sanitize_checkbox'
        ));
        $wp_customize->add_control('page_show_authorprofile',
            array(
                'type' => 'checkbox',
                'label' => 'Show Author Profile',
                'section' => 'page_section',
            )
        );

        $wp_customize->add_setting('page_show_comments',
        array(
            'sanitize_callback' => 'ecko_sanitize_checkbox'
        ));
        $wp_customize->add_control('page_show_comments',
            array(
                'type' => 'checkbox',
                'label' => 'Show Comments',
                'section' => 'page_section',
            )
        );

        $wp_customize->add_setting('page_show_meta',
        array(
            'sanitize_callback' => 'ecko_sanitize_checkbox'
        ));
        $wp_customize->add_control('page_show_meta',
            array(
                'type' => 'checkbox',
                'label' => 'Show Meta Info',
                'section' => 'page_section',
            )
        );

        $wp_customize->add_setting('page_show_social_share',
        array(
            'sanitize_callback' => 'ecko_sanitize_checkbox'
        ));
        $wp_customize->add_control('page_show_social_share',
            array(
                'type' => 'checkbox',
                'label' => 'Show Social Share',
                'section' => 'page_section',
            )
        );

        /*
         * SIDE PROFILE SECTION
         */
        $wp_customize->add_section('sideprofile_section',
            array(
                'title' => 'Author Side Profile',
                'description' => 'This section contains options for the author side profile found on post pages.',
                'priority' => 36,
            )
        );

        $wp_customize->add_setting('sideprofile_hide_author_avatar',
        array(
            'sanitize_callback' => 'ecko_sanitize_checkbox'
        ));
        $wp_customize->add_control('sideprofile_hide_author_avatar',
            array(
                'type' => 'checkbox',
                'label' => 'Hide Author Avatar',
                'section' => 'sideprofile_section',
            )
        );

        $wp_customize->add_setting('sideprofile_hide_author_bio',
        array(
            'sanitize_callback' => 'ecko_sanitize_checkbox'
        ));
        $wp_customize->add_control('sideprofile_hide_author_bio',
            array(
                'type' => 'checkbox',
                'label' => 'Hide Author Bio',
                'section' => 'sideprofile_section',
            )
        );

        $wp_customize->add_setting('sideprofile_hide_social',
        array(
            'sanitize_callback' => 'ecko_sanitize_checkbox'
        ));
        $wp_customize->add_control('sideprofile_hide_social',
            array(
                'type' => 'checkbox',
                'label' => 'Hide Social Links',
                'section' => 'sideprofile_section',
            )
        );

        $wp_customize->add_setting('sideprofile_hide_latest_posts',
        array(
            'sanitize_callback' => 'ecko_sanitize_checkbox'
        ));
        $wp_customize->add_control('sideprofile_hide_latest_posts',
            array(
                'type' => 'checkbox',
                'label' => 'Hide Latest Posts',
                'section' => 'sideprofile_section',
            )
        );


        $wp_customize->add_setting('sideprofile_hide_bottom_rule',
        array(
            'sanitize_callback' => 'ecko_sanitize_checkbox'
        ));
        $wp_customize->add_control('sideprofile_hide_bottom_rule',
            array(
                'type' => 'checkbox',
                'label' => 'Hide Bottom Rule',
                'section' => 'sideprofile_section',
            )
        );


        /*
         * NAVIGATION SECTION
         */
         $wp_customize->add_section('navigation_section',
             array(
                 'title' => 'Navigation',
                 'description' => 'This section contains options for the navigation.',
                 'priority' => 36,
             )
         );

        $wp_customize->add_setting('navigation_always_show',
        array(
            'sanitize_callback' => 'ecko_sanitize_checkbox'
        ));
        $wp_customize->add_control('navigation_always_show',
            array(
                'type' => 'checkbox',
                'label' => 'Always Show Navigation',
                'section' => 'navigation_section',
            )
        );


        /*
         * COLORS SECTION
         */

        $wp_customize->add_setting('color_accent_light',
            array(
                'default' => '#5498dc',
                'sanitize_callback' => 'sanitize_hex_color'
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'color_accent_light',
                array(
                    'label'      => 'Color Accent Light',
                    'section'    => 'colors',
                    'settings'   => 'color_accent_light'
                )
            )
        );

        $wp_customize->add_setting('color_selection',
            array(
                'default' => '#2d75a2',
                'sanitize_callback' => 'sanitize_hex_color'
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'color_selection',
                array(
                    'label'      => 'Selection Color',
                    'section'    => 'colors',
                    'settings'   => 'color_selection'
                )
            )
        );

    }
    add_action('customize_register', 'astro_customize_register');


    function astro_customize_css(){
        ?>
             <style type="text/css">

                <?php // INDEX ?>
                <?php if(get_theme_mod('index_hide_blogprofile')){ ?>
                    .home .profile{ display: none; }
                <?php } ?>
                <?php if(get_theme_mod('index_hide_search')){ ?>
                    .home .search{ display: none; }
                <?php } ?>
                <?php if(get_theme_mod('index_hide_author')){ ?>
                    .home .post .postauthor{ display: none; }
                <?php } ?>
                <?php if(get_theme_mod('index_hide_catagories')){ ?>
                    .home .post header h2{ display: none; }
                    .posts article.featured .feature{ display: none; }
                    .postindex .post header h1{ margin-top: 0; }
                <?php } ?>
                <?php if(get_theme_mod('index_hide_excerpt')){ ?>
                    .home .posts article header p{ display: none; }
                <?php } ?>

                <?php // POST PAGE ?>
                <?php if(get_theme_mod('post_hide_sideuserprofile')){ ?>
                    .single-post .profile.side{ display: none; }
                <?php } ?>
                <?php if(get_theme_mod('post_hide_bottomuserprofile')){ ?>
                    .single-post .postprofile.bottom{ display: none; }
                <?php } ?>
                <?php if(get_theme_mod('post_hide_sociallinks')){ ?>
                    .single-post .postprofile .social, .single-post .profile .smallsocial{ display: none; }
                <?php } ?>
                <?php if(get_theme_mod('post_hide_sharelinks')){ ?>
                    .single-post .share{ display: none; }
                <?php } ?>
                <?php if(get_theme_mod('post_hide_catagory')){ ?>
                    .single-post .post h2{ display: none; }
                <?php } ?>
                <?php if(get_theme_mod('post_hide_author')){ ?>
                    .single-post .post .postauthor{ display: none; }
                <?php } ?>

                <?php // CUSTOM PAGE ?>
                <?php if(get_theme_mod('page_show_authorprofile')){ ?>
                    body.page .profile { display: block; }
                    body.page .postprofile { display: block; }
                <?php } ?>
                <?php if(get_theme_mod('page_show_comments')){ ?>
                    body.page .comments{ display: block; }
                <?php } ?>
                <?php if(get_theme_mod('page_show_meta')){ ?>
                    body.page .posts article header .meta{ display: block; }
                    body.page .cover header .meta{ display: block; }
                <?php } ?>
                <?php if(get_theme_mod('page_show_social_share')){ ?>
                    body.page .posts article footer ul.share { display: block; }
                <?php } ?>

                <?php // NAVIGATION ?>
                <?php if(get_theme_mod('navigation_always_show')){ ?>
                    .menu-header{ display: block; opacity: 1; }
                    .navwrap ul{ display: block; opacity: 1; }
                    .mainnav .menu{ opacity: 1 !important; }
                <?php } ?>

                <?php // FLOWBAR ?>
                <?php if(get_theme_mod('articleflow_hide_bar')){ ?>
                    .index{ display: none !important; }
                <?php } ?>
                <?php if(get_theme_mod('articleflow_hide_current_header')){ ?>
                    .index .left{ display: none !important; }
                <?php } ?>
                <?php if(get_theme_mod('articleflow_hide_post_header')){ ?>
                    .index .right{ display: none; }
                <?php } ?>

                <?php // FEATURED IMAGE ?>
                <?php if(get_theme_mod('featured_image_opacity')){ ?>
                    .cover .background{ opacity: <?php echo esc_html(get_theme_mod('featured_image_opacity')); ?>; }
                <?php } ?>
                <?php if(get_theme_mod('featured_hide_userprofile')){ ?>
                    .profile.featured{ display: none; }
                <?php } ?>

                <?php // SIDE PROFILE ?>
                <?php if(get_theme_mod('sideprofile_hide_author_bio')){ ?>
                    .profile.author .authorbio{ display: none; }
                <?php } ?>
                <?php if(get_theme_mod('sideprofile_hide_social')){ ?>
                    .profile.author .smallsocial{ display: none; }
                <?php } ?>
                <?php if(get_theme_mod('sideprofile_hide_latest_posts')){ ?>
                    .profile.author .tweet, .profile.author strong{ display: none; }
                <?php } ?>
                <?php if(get_theme_mod('sideprofile_hide_bottom_rule')){ ?>
                    .profile.author hr{ display: none; }
                <?php } ?>
                <?php if(get_theme_mod('sideprofile_hide_author_avatar')){ ?>
                    .profile.author .profileimage{ display: none; }
                <?php } ?>

                <?php // INDEX FEATURE ?>
                <?php if(get_theme_mod('indexfeature_opacity')){ ?>
                    body.home .cover .background{ opacity: <?php echo esc_html(get_theme_mod('indexfeature_opacity')); ?>; }
                <?php } ?>

                <?php // COLORS ?>
                <?php if(get_theme_mod('color_enable_custom')){ ?>
                    .smallbutton.blue{ border: 2px solid <?php echo esc_html(get_theme_mod('color_accent')); ?>; background: <?php echo esc_html(get_theme_mod('color_accent')); ?>; }
                    .smallbutton.lightgray:hover{ border: 2px solid <?php echo esc_html(get_theme_mod('color_accent')); ?>; background: <?php echo esc_html(get_theme_mod('color_accent')); ?>; }
                    #respond #submit{ border: 2px solid <?php echo esc_html(get_theme_mod('color_accent')); ?>; background: <?php echo esc_html(get_theme_mod('color_accent')); ?>; }
                    a{ color: <?php echo esc_html(get_theme_mod('color_accent')); ?>; }
                    a:hover{ color: <?php echo esc_html(get_theme_mod('color_accent_dark')); ?>; }
                    .posts article header h1 a:hover{ color: <?php echo esc_html(get_theme_mod('color_accent')); ?>; }
                    footer a{ color:<?php echo get_theme_mod('color_accent_light'); ?>; }
                    .posts article header time{ color: <?php echo esc_html(get_theme_mod('color_accent')); ?>; }
                    .profile p a { color: <?php echo esc_html(get_theme_mod('color_accent_dark')); ?>; }
                    .search .searchopen:hover{ background: <?php echo esc_html(get_theme_mod('color_accent')); ?>; border-color: <?php echo esc_html(get_theme_mod('color_accent')); ?>; }
                    .title a:hover{ background: <?php echo esc_html(get_theme_mod('color_accent')); ?>; color:#fff; }
                    .notification { background: <?php echo esc_html(get_theme_mod('color_accent')); ?>; }
                    .notification a{ background: <?php echo esc_html(get_theme_mod('color_accent_dark')); ?>; }
                    .notification .ntitle { color: #fff; border-right: 2px solid <?php echo esc_html(get_theme_mod('color_accent_dark')); ?>; }
                    .menu-header li:hover > a, .menu-header ul ul :hover > a { color: <?php echo esc_html(get_theme_mod('color_accent_dark')); ?>; }
                    .pace .pace-progress { background: <?php echo esc_html(get_theme_mod('color_accent')); ?>; }
                    input:not([type=submit]):not([type=file]):active, input:not([type=submit]):not([type=file]):focus{ border: 2px solid <?php echo esc_html(get_theme_mod('color_accent')); ?>; }
                    #respond input[type=text]:focus, .commentbody:focus{ border-color: <?php echo esc_html(get_theme_mod('color_accent')); ?>; }
                    .comment_block .user .status { background: <?php echo esc_html(get_theme_mod('color_accent_dark')); ?>; }
                    ::-moz-selection { background: <?php echo esc_html(get_theme_mod('color_selection')); ?>; }
                    ::selection { background: <?php echo esc_html(get_theme_mod('color_selection')); ?>; }
                <?php } ?>

                <?php // COPYRIGHT ?>
                <?php if(get_theme_mod('copyright_hide_disclaimer')){ ?>
                    .copyright{ display: none !important; }
                <?php } ?>
                <?php if(get_theme_mod('copyright_hide_wordpress')){ ?>
                    .copyright .wordpress{ display: none !important; }
                <?php } ?>
                <?php if(get_theme_mod('copyright_hide_ecko')){ ?>
                    .copyright .ecko{ display: none !important; }
                <?php } ?>

             </style>
        <?php
    }

    add_action('wp_head', 'astro_customize_css');

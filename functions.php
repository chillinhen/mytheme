<?php
//ACF Theme Options
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'position' => '63.3',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}
add_action('after_setup_theme', 'myTheme_setup');

function myTheme_setup() {
    // Adding Translation Option
    load_theme_textdomain('myTheme', get_stylesheet_directory_uri() . '/languages');
    
    add_theme_support('title-tag');

    add_image_size('thumbnail-size', 550, '', true);
    add_image_size('thumbnail-blog', 705, 285, array( 'center', 'center'));
    add_image_size('teaser-pic', 83, 135, true);
    add_image_size('addon-pic', 124, 202, true);
    // deregister parent script and load modernizer per cdn
    add_action('wp_enqueue_scripts', 'register_modernizr');

    function register_modernizr() {
        wp_deregister_script('modernizr', get_template_directory_uri() . '/library/js/modernizr.full.min.js');
        wp_enqueue_script('modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js', array('jquery'), '1.2', true);
    }
    
    //replace deprecated wp_title
function filter_title_part($title) {
    $name = get_bloginfo('name');
    global $post;
    $title = get_the_title();
    $parent = get_the_title($post->post_parent);
    return array($name, $parent, $title);
}

function my_document_title_separator($sep) {
    // change separator for singular blog post
    if (is_singular(array('post', 'page'))) {
        $sep = '|';
    }

    return $sep;
}

add_filter('document_title_separator', 'my_document_title_separator', 10);

    //init styles
    if (!function_exists("my_styles")) {
        if (!is_admin()) {

            function my_styles() {
                wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

                wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/stylesheets/bootstrap.min.css', 'style', '1.0', 'screen');

                wp_enqueue_style('googleFonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,400italic,600italic,700,700italic', 'style', '1.0', 'screen');

                wp_register_style('fontawesome', '//netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', 'style', '4.4.0', 'screen');
                wp_enqueue_style('fontawesome');
                wp_enqueue_style('myTheme', get_stylesheet_directory_uri() . '/stylesheets/screen.min.css', 'style', '1.0', 'screen', array('bootstrap'));
                 wp_enqueue_style('print', get_stylesheet_directory_uri() . '/stylesheets/print.css', 'style', '1.0', 'print', array('bootstrap, myTheme'));
            }

        }
    }
    add_action('wp_enqueue_scripts', 'my_styles');

    //init styles
    if (!function_exists("my_scripts")) {
        if (!is_admin()) {

            function my_scripts() {
                wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.2', true);
                wp_enqueue_script('scripts', get_stylesheet_directory_uri() . '/js/scripts.min.js', array('jquery', 'bootstrap'), '1.2', true);
                if (!(wp_is_mobile())) {
                   wp_enqueue_script('scroll', get_stylesheet_directory_uri() . '/js/scroll.min.js', array('scripts'), '1.2', true); 
                }
            }

        }
    }
    add_action('wp_enqueue_scripts', 'my_scripts');
    
        // init conditional scripts
    function conditonal_enqueue_scripts() {

        wp_enqueue_script('html5shiv', 'https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js');
        wp_script_add_data('html5shiv', 'conditional', 'lt IE 7');
    }

    add_action('wp_enqueue_scripts', 'conditonal_enqueue_scripts');
    
    function mv_browser_body_class($classes) {
        global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
        if($is_lynx) $classes[] = 'lynx';
        elseif($is_gecko) $classes[] = 'gecko';
        elseif($is_opera) $classes[] = 'opera';
        elseif($is_NS4) $classes[] = 'ns4';
        elseif($is_safari) $classes[] = 'safari';
        elseif($is_chrome) $classes[] = 'chrome';
        elseif($is_IE) {
                $classes[] = 'ie';
                if(preg_match('/MSIE ([0-9]+)([a-zA-Z0-9.]+)/', $_SERVER['HTTP_USER_AGENT'], $browser_version))
                $classes[] = 'ie'.$browser_version[1];
        } else $classes[] = 'unknown';
        if($is_iphone) $classes[] = 'iphone';
        if ( stristr( $_SERVER['HTTP_USER_AGENT'],"mac") ) {
                 $classes[] = 'osx';
           } elseif ( stristr( $_SERVER['HTTP_USER_AGENT'],"linux") ) {
                 $classes[] = 'linux';
           } elseif ( stristr( $_SERVER['HTTP_USER_AGENT'],"windows") ) {
                 $classes[] = 'windows';
           }
        return $classes;
}
    add_filter('body_class','mv_browser_body_class');
    
    // Customize more Link
    remove_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
    add_filter('excerpt_more', 'more_link'); // Add 'View Article' button instead of [...] for Excerpts
    function more_link($more) {
        global $post;
        return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('Mehr', 'myTheme') . '</a>';
    }

    
    //remove parent theme functions
    remove_filter('show_admin_bar', 'remove_admin_bar');
    remove_action('init', 'create_post_type_html5');
    
    
}

?>

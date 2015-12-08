<?php

add_action('after_setup_theme', 'myTheme_setup');

function myTheme_setup() {
    // Adding Translation Option
    load_theme_textdomain('myTheme', get_stylesheet_directory_uri() . '/languages');

    // deregister parent script and load modernizer per cdn
    add_action('wp_enqueue_scripts', 'register_modernizr');

    function register_modernizr() {
        wp_deregister_script('modernizr', get_template_directory_uri() . '/library/js/modernizr.full.min.js');
        wp_enqueue_script('modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js', array('jquery'), '1.2', true);
    }

    //init styles
    if (!function_exists("my_styles")) {
        if (!is_admin()) {

            function my_styles() {
                wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

                wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/stylesheets/bootstrap.css', 'style', '1.0', 'screen');

                wp_enqueue_style('googleFonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,400italic,600italic,700,700italic', 'style', '1.0', 'screen');

                wp_register_style('fontawesome', '//netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', 'style', '4.4.0', 'screen');
                wp_enqueue_style('fontawesome');
                wp_enqueue_style('myTheme', get_stylesheet_directory_uri() . '/stylesheets/screen.css', 'style', '1.0', 'screen', array('bootstrap'));
            }

        }
    }
    add_action('wp_enqueue_scripts', 'my_styles');

    //init styles
    if (!function_exists("my_scripts")) {
        if (!is_admin()) {

            function my_scripts() {
                wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.js', array('jquery'), '1.2', true);
                wp_enqueue_script('scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery', 'bootstrap'), '1.2', true);
            }

        }
    }
    add_action('wp_enqueue_scripts', 'my_scripts');
    
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
}

?>
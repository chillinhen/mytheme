<?php

add_action('after_setup_theme', 'myTheme_setup');

function myTheme_setup() {

    //later
    #add_image_size( 'wpbs-bg', 1024, 506, true);
    #add_image_size( 'wpbs-header-thumb', 512, 300, true);
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

                wp_enqueue_style('googleFonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,400italic,600italic,700,700italic', 'style', '1.0', 'screen');

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
    
}


?>
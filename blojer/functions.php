<?php

// Requiring Theme Customizer
require get_template_directory() . '/inc/customizer.php'; 

// Requiring Comment walker class
require get_template_directory() . '/inc/comment-walker.php'; 


// Including stylesheet and script files
function load_scripts()
{
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/main.css', "1.0.0", true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'load_scripts');

// Main configuration function
function learnwp_config()
{

    // Registering our menus
    register_nav_menus(
        array(
            'my_main_menu' => __('Main Menu', 'learnwp'),
            'footer_menu' => __('Footer Menu', 'learnwp')
        )
    );

    add_theme_support('custom-header', array(
        'height' => 225,
        'width' => 1920
    ));
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('video', 'image'));
    add_theme_support('title-tag');
    add_theme_support('custom-logo', array(
        'height' => 110,
        'width' => 200
    ));
}
add_action('after_setup_theme', 'learnwp_config', 0);

// Registering our sidebars
add_action('widgets_init', 'learnwp_sidebars');

function learnwp_sidebars()
{
    register_sidebar(
        array(
            'name' => __('Home Page Sidebar', 'learnwp'),
            'id' => 'sidebar-1',
            'description' => __('This is the Home Page Sidebar. You can add your widgets here. ', 'learnwp'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
}
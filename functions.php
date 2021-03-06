<?php

function awesome_script_enqueue() {

    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/awesome.css', array(), '1.0.0', 'all');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/awesome.js', array(), '1.0.0', true);
    wp_enqueue_script( 'jquery-masonry' );
}

add_action('wp_enqueue_scripts', 'awesome_script_enqueue');

// Activate Menus
function awesome_theme_setup(){
    add_theme_support('menus');
    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');
}

// Theme Supports
add_action('init', 'awesome_theme_setup');
// add_theme_support('custom-background');
// add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('aside','image','video'));

// Sidebar Functions
function awesome_widget_setup() {
    register_sidebar(
        array(
            'name' => 'Sidebar',
            'id'   => 'sidebar-1',
            'class'=> 'custom',
            'description' => 'Standard Sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h1 class="widge-title">',
            'after_title'   => '</h1>',
        )
    );
}
add_action('widgets_init','awesome_widget_setup');
apply_filters( 'get_the_date', $the_date, $format );

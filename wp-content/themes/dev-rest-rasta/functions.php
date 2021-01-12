<!-- function.php -->
<?php

function devrest_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'TOP NAVBAR');
    register_nav_menu('footer', 'FOOTER NAVBAR');
}

function devrest_assets()
{
    wp_register_style('Dev_Rest', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('Dev_Rest');
}

function devrest_init(){
    register_post_type('recipes', [
        'label' => 'Recipes',
        'public' => true,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-carrot',
        'supports' => ['title', 'editor', 'thumbnail'],
        //'show_in_reste' => true,
        'has_archive' => true,
    ]);
}


add_action('init', 'devrest_init');
add_action('after_setup_theme', 'devrest_supports');

?>
<?php

function devrest_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('html5');
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
        'supports' => ['title', 'thumbnail'],
        //'show_in_reste' => true,
        'has_archive' => true,
    ]);
    register_taxonomy('category-recipe', 'recipes', [
        'labels' => [
            'name' => 'Category'
        ],
        'show_in_rest' => false,
        'hierarchical' => true,
        'show_admin_column' => true,
    ]);
}


function add_links_themenu()
{
    add_menu_page( 'the_menu', 'The Menu', 'edit_posts', 'post.php?post=107&action=edit&classic-editor', '', 'dashicons-book-alt', 8 );
    add_menu_page( 'restaurant_infos', 'Restaurant infos', 'edit_posts', 'post.php?post=224&action=edit&classic-editor', '', 'dashicons-store', 9 );
}


add_action('init', 'devrest_init');
add_action('after_setup_theme', 'devrest_supports');
add_action('wp_enqueue_scripts', 'devrest_assets');
add_action('admin_menu', 'add_links_themenu');




?>


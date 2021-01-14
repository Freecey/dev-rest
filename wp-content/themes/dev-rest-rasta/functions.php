<?php

function devrest_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('html5');
    register_nav_menu('header', 'TOP NAVBAR');
    register_nav_menu('footer', 'FOOTER NAVBAR');
    // register_nav_menu('archive-recipes', 'recipes-menu');

    add_image_size('recipe-thumbnail', 350, 215, true);
}

function devrest_assets()
{
    wp_register_style('Dev_Rest', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('Dev_Rest');
}

function devrest_init()
{
    register_post_type('recipes', [
        'label' => 'Recipes',
        'public' => true,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-carrot',
        'supports' => ['title', 'editor', 'thumbnail'],
        //'show_in_rest' => true,
        'has_archive' => true,
    ]);
    register_taxonomy('category-recipe', 'recipes', [
        'labels' => [
            'name' => 'Recipe Categories',
            'singular_name' => 'Recipe Category',
            'search_items' => 'Search Recipe Categories',
            'all_items' => 'All Recipes',
            'edit_item' => 'Edit Recipe Category',
            'view_item' => 'View Recipe Category',
            'update_item' => 'Update Recipe Category',
            'add_new_item' => 'Add New Recipe Category',
        ],
        'show_in_rest' => false,
        'hierarchical' => true,
        'show_admin_column' => true,
        'public' => true,
    ]);

    register_post_type('admin', [
        'label' => 'Admin',
        'public' => true,
        'menu_position' => 3,
        'menu_icon' => 'dashicons-edit-large',
        'supports' => ['title', 'editor'],
        //'show_in_rest' => true,
    ]);
}

function custom_excerpt_length()
{
    return 20;
}


//filter to add/remove setting > post-type editor
if (is_admin()) {
    add_filter('wp_editor_settings', function ($settings) {
        $current_screen = get_current_screen();
        $post_types = array('recipes');
        if (!$current_screen || !in_array($current_screen->post_type, $post_types, true)) {
            return $settings;
        }
        $settings['media_buttons'] = false;
        return $settings;
    });
}

// filter to change the placeholder > input-title > Custom p-type
if (is_admin()) {
    add_filter('enter_title_here', function ($input) {
        if ('recipes' === get_post_type()) {
            return 'Add the recipe title here';
        } else {
            return $input;
        }
    });
}

add_action('init', 'devrest_init');
add_action('after_setup_theme', 'devrest_supports');
add_action('wp_enqueue_scripts', 'devrest_assets');
add_filter('excerpt_length', 'custom_excerpt_length', 999);

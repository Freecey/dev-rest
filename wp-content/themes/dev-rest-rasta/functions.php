<?php

$GOOGLEAPIKEY = 'AIzaSyA47vijiVRgmG0KOlrFxU98bR66HCWIa-Q'; //${{ secrets.GOOGLEAPI }}

function devrest_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('html5');
    register_nav_menu('header', 'TOP NAVBAR');
    register_nav_menu('footer', 'FOOTER NAVBAR');
    add_image_size('archive-recipe-img', 665, 350, true);
    add_image_size('single-recipe-img', 765, 350, true);
    add_image_size('step-recipe-img', 650, 275, true);
    add_image_size('latest-recipes-img', 260, 200, true);
    add_image_size('rest700', 700, 700, true);
    add_image_size('ourmenu280', 280, 280, true);
    add_image_size('top-banner-img', 1850, 800, true);
    add_image_size('frontimg', 810, 820, true);
    add_image_size('reservation-img', 1060, 940, true);
}

function devrest_assets()
{
    wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css');
    wp_register_style('Dev_Rest', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('normalize');
    wp_enqueue_style('Dev_Rest');
    if (is_singular('restaurants')) {
        wp_enqueue_script('google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyA47vijiVRgmG0KOlrFxU98bR66HCWIa-Q', array(), '3', true);
        wp_enqueue_script('map', get_template_directory_uri() . '/js/map.js', array('google-map', 'jquery'), '0.1', true);
    };
    if (is_front_page()) {
        wp_enqueue_script('Popper_min', get_template_directory_uri() . '/js/popper.min.js', array(), '0.1', true);
        wp_enqueue_script('BS_min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '0.1', true);
    };
}

function devrest_init()
{
    register_post_type('recipes', [
        'label' => 'Recipes',
        'public' => true,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-carrot',
        'supports' => ['title', 'thumbnail'],
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
        'has_archive' => true,
    ]);
    register_post_type('restaurants', [
        'label' => 'Our Franchise',
        'public' => true,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-admin-multisite',
        'supports' => ['title', 'thumbnail'],
        //'show_in_reste' => true,
        'has_archive' => true,
    ]);
    register_post_type('recipe_banner', [
        'label' => 'Recipe Banner',
        'public' => true,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-admin-multisite',
        'supports' => ['title', 'thumbnail'],
        //'show_in_reste' => true,
        'has_archive' => true,
    ]);
}

function archive_custom_excerpt($text)
{
    $text = strip_shortcodes($text);
    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]>', $text);
    $excerpt_length = apply_filters('excerpt_length', 20);
    $excerpt_more = apply_filters('excerpt_more', ' ' . '...');
    return wp_trim_words($text, $excerpt_length, $excerpt_more);
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

function add_links_themenu()
{
    add_menu_page('the_menu', 'The Menu', 'edit_posts', 'post.php?post=107&action=edit&classic-editor', '', 'dashicons-book-alt', 4);
    add_menu_page('recipe_banner', 'Recipe Banner', 'edit_posts', 'post.php?post=504&action=edit&classic-editor', '', 'dashicons-carrot', 5);
    add_menu_page('restaurant_infos', 'Restaurant infos', 'edit_posts', 'post.php?post=224&action=edit&classic-editor', '', 'dashicons-store', 9);
    add_menu_page('homepage', 'Home Page', 'edit_posts', 'post.php?post=336&action=edit&classic-editor', '', 'dashicons-admin-home', 9);
    add_menu_page('navbar', 'Navbar', 'edit_posts', 'nav-menus.php', '', 'dashicons-menu-alt', 9);
    remove_menu_page('edit.php');
    remove_menu_page('edit-comments.php');
    remove_submenu_page('edit.php?post_type=restaurants', 'post-new.php?post_type=restaurants');
    if (!(current_user_can('administrator'))) {
        remove_menu_page('themes.php');
        remove_menu_page('wpcf7');
        remove_menu_page('acf-field-group');
        remove_menu_page('plugins.php');
        remove_menu_page('edit.php?post_type=acf-field-group');
        remove_menu_page('edit.php?post_type=page');
        remove_submenu_page('index.php', 'update-core.php');
        remove_menu_page('tools.php');
    }
}

function plt_hide_wp_mail_smtp_menus() {
    if (!(current_user_can('administrator'))) {
	remove_menu_page('wp-mail-smtp');
	remove_submenu_page('wp-mail-smtp', 'wp-mail-smtp');
	remove_submenu_page('wp-mail-smtp', 'wp-mail-smtp-logs');
    remove_submenu_page('wp-mail-smtp', 'wp-mail-smtp-about');
    }
}

function my_acf_google_map_api($api)
{
    $api['key'] = 'AIzaSyA47vijiVRgmG0KOlrFxU98bR66HCWIa-Q';
    return $api;
}

function my_acf_init()
{
    acf_update_setting('google_api_key', 'AIzaSyA47vijiVRgmG0KOlrFxU98bR66HCWIa-Q');
}

function my_register_fields()
{
    include_once('acf-image-crop / acf-image-crop.php');
}
 
function hide_editor() {
    // $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    // if( !isset( $post_id ) ) return;
 
    // $template_file = get_post_meta($post_id, '_wp_page_template', true);
     
    // if($template_file == 'submit.php'){ // edit the template name
        remove_post_type_support('page', 'editor');
    // }
}

add_action('init', 'devrest_init');
add_action('after_setup_theme', 'devrest_supports');
add_action('wp_enqueue_scripts', 'devrest_assets');
add_action('admin_menu', 'add_links_themenu');
add_action('admin_menu', 'plt_hide_wp_mail_smtp_menus', 2147483647);
add_action('acf / register_fields', 'my_register_fields');
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
add_action('acf/init', 'my_acf_init');
add_action( 'admin_init', 'hide_editor' );

// filter to change class of the navbar menu

function item_nav($classes)
{
    $classes[] = "item-nav";
    return $classes;
}

add_filter('nav_menu_css_class', 'item_nav');



/*Contact form 7 remove span*/
add_filter('wpcf7_form_elements', function ($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    $content = str_replace('<br />', '', $content);

    return $content;
});

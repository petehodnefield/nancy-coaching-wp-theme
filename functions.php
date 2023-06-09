<?php
function nancy_files()
{
    wp_enqueue_style('styles_main', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('styles_extra', get_theme_file_uri('/build/index.css'));
    wp_enqueue_style('styles_new', get_theme_file_uri('/build/monga-index.css'));
    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
    wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('custom-google-fonts', '////fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800');
}

add_action('wp_enqueue_scripts', 'nancy_files');

function nancy_features()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'nancy_features');

function nancy_adjust_queries($query)
{
    if (!is_admin() and is_post_type_archive('event') and $query->is_main_query()) {
        $query->set();
    }
}

add_action('pre_get_posts', 'nancy_adjust_queries');

<?php

function alioffers_files()
{
  wp_enqueue_script('alioffers_main_js', get_theme_file_uri('./build/index.js'), NULL, '1.0', true);
  wp_enqueue_style('alioffers_main_styles', get_theme_file_uri('./build/index.css'));
}

add_action('wp_enqueue_scripts', 'alioffers_files');

function alioffers_post_types()
{
  register_post_type('deal', array(
    'supports' => array('title', 'editor'),
    'rewrite' => array(
      'slug' => 'deals'
    ),
    'public' => true,
    'show_in_rest' => true,
    'labels' => array(
      'name' => 'Deals',
      'add_new_item' => 'Add New Deal',
      'edit_item' => 'Edit Deal',
      'singular_name' => 'Deal'
    ),
    'menu_icon' => 'dashicons-plus',
    'menu_position' => 5
  ));
}

add_action('init', 'alioffers_post_types');

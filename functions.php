<?php

function alioffers_files()
{
  wp_enqueue_script('alioffers_main_js', get_theme_file_uri('./build/index.js'), NULL, '1.0', true);
  wp_enqueue_style('alioffers_main_styles', get_theme_file_uri('./build/style.css'));
}

add_action('wp_enqueue_scripts', 'alioffers_files');

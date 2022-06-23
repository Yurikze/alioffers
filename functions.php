<?php

function alioffers_files()
{
  wp_enqueue_style('alioffers_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'alioffers_files');

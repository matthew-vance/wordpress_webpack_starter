<?php

function webpackstarter_setup() {

  add_theme_support( 'title-tag' );

}

add_action( 'after_setup_theme', 'webpackstarter_setup' );

function webpackstarter_script_enqueue() {

  wp_enqueue_style('styles', get_template_directory_uri() . '/dist/bundle.css', false, 0.1, 'all');
  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/dist/bundle.js', false, 0.1, true);

}

add_action( 'wp_enqueue_scripts', 'webpackstarter_script_enqueue');

?>
<?php

// FUNCOES DO TEMA
function melhor_adiciona_recursos_tema()
{
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'melhor_adiciona_recursos_tema');


// SCRIPTS
function melhor_scripts()
{
  wp_enqueue_style('critital', get_template_directory_uri() . '/css/critical.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'melhor_scripts');


// BOOTSTRAP NAVWALKER
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


// REGISTRA MENU
function melhor_registra_menu()
{
  register_nav_menus(array(
    'main-menu' => __('Menu Principal', 'melhor'),
  ));
}
add_action('after_setup_theme', 'melhor_registra_menu');
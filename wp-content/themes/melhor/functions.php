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
  wp_enqueue_style('critical', get_template_directory_uri() . '/css/critical.css', array(), '1.0', 'all');
  wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array(), '5.0.2', true);
  wp_enqueue_script('actions', get_template_directory_uri() . '/js/scripts.min.js', array('jquery', 'owl'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'melhor_scripts');


// BOOTSTRAP NAVWALKER
function register_navwalker()
{
  require_once get_template_directory() . '/class-wp-bootrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');


// REGISTRA MENU
function melhor_registra_menu()
{
  register_nav_menus(array(
    'main-menu' => __('Menu Principal', 'melhor'),
    'footer-menu' => __('Menu Footer', 'melhor'),
    'social-menu' => __('Menu Social', 'melhor'),
  ));
}
add_action('after_setup_theme', 'melhor_registra_menu');


// POST TYPE PRODUTOS
function melhor_post_type_produtos()
{
  $nomeSingular = 'Produto';
  $nomePlural = 'Produtos';
  $description = $nomeSingular . ' da Melhor';

  $labels = array(
    'name' => $nomePlural,
    'singular_name' => $nomeSingular,
    'add_new_item' => "Adicionar novo " . $nomeSingular,
    'edit_item' => 'Editar ' . $nomeSingular,
  );

  $supports = array(
    'title',
    'editor',
    'thumbnail'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'description' => $description,
    'menu_icon' => 'dashicons-admin-tools',
    'show_in_rest' => true,
    'supports' => $supports,
  );

  register_post_type('produtos', $args);
}
add_action('init', 'melhor_post_type_produtos');


// POST TYPE PECAS
function melhor_post_type_pecas()
{
  $nomeSingular = 'Peça';
  $nomePlural = 'Peças';
  $description = $nomeSingular . ' da Melhor';

  $labels = array(
    'name' => $nomePlural,
    'singular_name' => $nomeSingular,
    'add_new_item' => "Adicionar novo " . $nomeSingular,
    'edit_item' => 'Editar ' . $nomeSingular,
  );

  $supports = array(
    'title',
    'editor',
    'thumbnail'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'description' => $description,
    'menu_icon' => 'dashicons-admin-generic',
    'show_in_rest' => true,
    'supports' => $supports,
    'taxonomies' => array('post_tag')
  );

  register_post_type('pecas', $args);
}
add_action('init', 'melhor_post_type_pecas');

// Remover o block-library/style.css
function wpassist_remove_block_library_css()
{
  wp_dequeue_style('wp-block-library');
}
add_action('wp_enqueue_scripts', 'wpassist_remove_block_library_css');

/**
 * Disable the emoji's
 */
function disable_emojis()
{
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

  // Remove from TinyMCE
  add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
}
add_action('init', 'disable_emojis');

/**
 * Filter out the tinymce emoji plugin.
 */
function disable_emojis_tinymce($plugins)
{
  if (is_array($plugins)) {
    return array_diff($plugins, array('wpemoji'));
  } else {
    return array();
  }
}

<?php 

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Função para desabilitar o editor de blocos
add_filter('use_block_editor_for_post', '__return_false', 10);

//Função para alterar o CSS da página logim
function my_custom_login_stylesheet() {
  wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/style.css' );
}
add_action( 'login_enqueue_scripts', 'my_custom_login_stylesheet' );
/*Função que altera a URL, trocando pelo endereço do seu site*/
function my_login_logo_url() {
  return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );
/*Função que adiciona o nome do seu site, no momento que o mouse passa por cima da logo*/
function my_login_logo_url_title() {
return 'GoClasses - Voltar para Home';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

// Registrando novos post-types

function goclasses_post_types() {
  register_post_type('materia', array(
    // 'capability_type' => 'materia',
    // 'map_meta_cap' => true,
    // 'show_in_rest' => true,
    'supports' => array('title'),
    // 'rewrite' => array('slug' => 'materias'),
    // 'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Matérias',
      'add_new_item' => 'Adicionar Nova Matéria',
      'edit_item' => 'Editar Matéria',
      'all_items' => 'Todas Matérias',
      'singular_name' => 'Matéria'
    ), 
    'menu_icon' => 'dashicons-edit-page'
  ));
}

add_action('init', 'goclasses_post_types');
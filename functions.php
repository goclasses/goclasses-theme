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
    'supports' => array('title'),
    'rewrite' => array('slug' => 'materias'),
    'has_archive' => true,
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

  register_post_type('artigo', array(
    'supports' => array('title', 'editor'),
    'rewrite' => array('slug' => 'artigos'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Artigos',
      'add_new_item' => 'Adicionar Novo Artigo',
      'edit_item' => 'Editar Artigo',
      'all_items' => 'Todos Artigos',
      'singular_name' => 'Artigo'
    ), 
    'menu_icon' => 'dashicons-text-page'
  ));

  register_post_type('plano_ensino', array(
    'supports' => array('title'),
    'rewrite' => array('slug' => 'planos_ensino'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Planos de Ensino',
      'add_new_item' => 'Adicionar Novo Plano de Ensino',
      'edit_item' => 'Editar Plano de Ensino',
      'all_items' => 'Todos Planos de Ensino',
      'singular_name' => 'Plano de Ensino'
    ),
    'menu_icon' => 'dashicons-analytics'
  ));

  register_post_type('video_aula', array(
    'supports' => array('title', 'excerpt'),
    'rewrite' => array('slug' => 'video_aula'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Vídeo Aulas',
      'add_new_item' => 'Adicionar Nova Vídeo Aula',
      'edit_item' => 'Editar Vídeo Aula',
      'all_items' => 'Todas Vídeo Aulas',
      'singular_name' => 'Vídeo Aula'
    ),
    'menu_icon' => 'dashicons-video-alt3'
  ));

  register_post_type('material', array(
    'supports' => array('title', 'editor'),
    'rewrite' => array('slug' => 'materiais_didaticos'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Materiais Didáticos',
      'add_new_item' => 'Adicionar Novo Material',
      'edit_item' => 'Editar Material',
      'all_items' => 'Todos Materiais',
      'singular_name' => 'Material'
    ),
    'menu_icon' => 'dashicons-book-alt'
  ));

  register_post_type('avaliacao', array(
    'supports' => array('title'),
    'rewrite' => array('slug' => 'avaliacoes'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Avaliações',
      'add_new_item' => 'Adicionar Nova Avaliação',
      'edit_item' => 'Editar Avaliação',
      'all_items' => 'Todas Avaliações',
      'singular_name' => 'Avaliação'
    ),
    'menu_icon' => 'dashicons-list-view'
  ));
}

add_action('init', 'goclasses_post_types');

// Removendo prefixo dos títulos do archive
add_filter( 'get_the_archive_title', function ($title) {    
  if ( is_category() ) {    
          $title = single_cat_title( '', false );    
      } elseif ( is_tag() ) {    
          $title = single_tag_title( '', false );    
      } elseif ( is_author() ) {    
          $title = '<span class="vcard">' . get_the_author() . '</span>' ;    
      } elseif ( is_tax() ) { //for custom post types
          $title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
      } elseif (is_post_type_archive()) {
          $title = post_type_archive_title( '', false );
      }
  return $title;    
});
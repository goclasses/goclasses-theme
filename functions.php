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
    'capability_type' => 'materia',
    'map_meta_cap' => true,
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

  register_post_type('material_de_apoio', array(
    'capability_type' => 'material_de_apoio',
    'map_meta_cap' => true,
    'supports' => array('title'),
    'rewrite' => array('slug' => 'material_de_apoio'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Materiais de Apoio',
      'add_new_item' => 'Adicionar Novo Material de Apoio',
      'edit_item' => 'Editar Material de Apoio',
      'all_items' => 'Todos Materiais de Apoio',
      'singular_name' => 'Material de Apoio'
    ), 
    'taxonomies' => array('category'),
    'menu_icon' => 'dashicons-text-page'
  ));

  register_post_type('documento', array(
    'capability_type' => 'documento',
    'map_meta_cap' => true,
    'supports' => array('title'),
    'rewrite' => array('slug' => 'documentos'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Documentos',
      'add_new_item' => 'Adicionar Novo Documento',
      'edit_item' => 'Editar Documento',
      'all_items' => 'Todos Documentos',
      'singular_name' => 'Documento'
    ),
    'taxonomies' => array('category'),
    'menu_icon' => 'dashicons-analytics'
  ));

  register_post_type('video_aula', array(
    'capability_type' => 'video_aula',
    'map_meta_cap' => true,
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
    'taxonomies' => array('category'),
    'menu_icon' => 'dashicons-video-alt3'
  ));

  register_post_type('material', array(
    'capability_type' => 'material',
    'map_meta_cap' => true,
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
    'taxonomies' => array('category'),
    'menu_icon' => 'dashicons-book-alt'
  ));

  register_post_type('avaliacao', array(
    'capability_type' => 'avaliacao',
    'map_meta_cap' => true,
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
    'taxonomies' => array('category'),
    'menu_icon' => 'dashicons-list-view'
  ));

  register_post_type('projeto', array(
    'capability_type' => 'projeto',
    'map_meta_cap' => true,
    'supports' => array('title', 'editor'),
    'rewrite' => array('slug' => 'projetos'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Projetos',
      'add_new_item' => 'Adicionar Novo Projeto',
      'edit_item' => 'Editar Projeto',
      'all_items' => 'Todos Projetos',
      'singular_name' => 'Projeto'
    ),
    'menu_icon' => 'dashicons-portfolio'
  ));

  register_post_type('projeto_giani', array(
    'capability_type' => 'projeto_giani',
    'map_meta_cap' => true,
    'supports' => array('title', 'editor'),
    'rewrite' => array('slug' => 'projetos_giani'),
    'has_archive' => false,
    'public' => true,
    'labels' => array(
      'name' => 'Projetos da Giani',
      'add_new_item' => 'Adicionar Novo Projeto da Giani',
      'edit_item' => 'Editar Projeto da Giani',
      'all_items' => 'Todos Projetos da Giani',
      'singular_name' => 'Projeto da Giani'
    ),
    'menu_icon' => 'dashicons-welcome-learn-more'
  ));
  
  register_post_type('aluno_destaque', array(
    'capability_type' => 'aluno_destaque',
    'map_meta_cap' => true,
    'supports' => array('title', 'editor'),
    'rewrite' => array('slug' => 'alunos_destaque'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Alunos Destaques',
      'add_new_item' => 'Adicionar Novo Aluno Destaque',
      'edit_item' => 'Editar Aluno Destaque',
      'all_items' => 'Todos Alunos Destaque',
      'singular_name' => 'Aluno Destaque'
    ),
    'taxonomies' => array('category'),
    'menu_icon' => 'dashicons-groups'
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

// Use GD instead of Imagick.
function cb_child_use_gd_editor($array) {
  return array( 'WP_Image_Editor_GD' );
}
add_filter( 'wp_image_editors', 'cb_child_use_gd_editor' );

// Adiconando os arquivos CSS
function goclasses_css(){
  // Folhas de estilo principais
	wp_enqueue_style('goclasses-normalize', get_template_directory_uri() . '/css/normalize.css');
	wp_enqueue_style('goclasses-reset', get_template_directory_uri() . '/css/reset.css');
	wp_enqueue_style('goclasses-grid', get_template_directory_uri() . '/css/grid.css');
  wp_enqueue_style('goclasses-style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('goclasses-inicio', get_template_directory_uri() . '/css/inicio.css');
  wp_enqueue_style('goclasses-quemsomos', get_template_directory_uri() . '/css/quemsomos.css');
  wp_enqueue_style('goclasses-projetos', get_template_directory_uri() . '/css/projetos.css');
  wp_enqueue_style('goclasses-material', get_template_directory_uri() . '/css/material.css');
  wp_enqueue_style('goclasses-contato', get_template_directory_uri() . '/css/contato.css');
  wp_enqueue_style('goclasses-index', get_template_directory_uri() . '/css/index.css');
  wp_enqueue_style('goclasses-archive', get_template_directory_uri() . '/css/archive.css');
  wp_enqueue_style('goclasses-single', get_template_directory_uri() . '/css/single.css');
  wp_enqueue_style('goclasses-author', get_template_directory_uri() . '/css/author.css');
  wp_enqueue_style('goclasses-giani', get_template_directory_uri() . '/css/giani.css');
  wp_enqueue_style('goclasses-search', get_template_directory_uri() . '/css/search.css');
  // Folha de estilo Font Awesome para ícones
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'goclasses_css');

// Desabilitar a barra de usuário para todos os usuários, inclusive usuários admin.
show_admin_bar(false);

/**
* Redirecionar usuário para o site após login bem sucedido.
* Desenvolvido por Sergio Ronei - https://altosite.com.br
**/
function my_login_redirect( $redirect_to, $request, $user ) {
  //o trecho abaixo verifica se existe algum usuário a ser checado
  global $user;
  if ( isset( $user->roles ) && is_array( $user->roles ) ) {
    //checa se o usuário é admin. Se positivo, leva o admin para o painel de administração.
    if ( in_array( 'administrator', $user->roles ) ) {
      //se for qualquer outro tipo de usuário, leva para a home do site.
      return home_url();
    } else {
      return home_url();
    }
  } else {
    return home_url();
  }
}
add_filter( 'login_redirect', 'my_login_redirect', 10, 3 );

//Removendo itens do WP
function remove_wp_items( $wp_admin_bar ) {
    $wp_admin_bar->remove_node( 'wp-logo' );
    $wp_admin_bar->remove_node( 'comments' );
}
add_action( 'admin_bar_menu', 'remove_wp_items', 999 );

function remove_menu_items(){
  $user = wp_get_current_user();
  $allowed_roles = array('administrator', 'editor');
  if( !array_intersect($allowed_roles, $user->roles ) ) {
    remove_menu_page( 'index.php' );
  }
}
add_action( 'admin_menu', 'remove_menu_items', 999 );


// Adicionando Nome E Sobrenome em signup
add_action( 'register_form', 'myplugin_register_form' );
function myplugin_register_form() {

    $first_name = ( ! empty( $_POST['first_name'] ) ) ? trim( $_POST['first_name'] ) : '';
    $last_name = ( ! empty( $_POST['last_name'] ) ) ? trim( $_POST['last_name'] ) : '';

        ?>
        <p>
            <label for="first_name"><?php _e( 'Nome', 'mydomain' ) ?><br />
                <input type="text" name="first_name" id="first_name" class="input" value="<?php echo esc_attr( wp_unslash( $first_name ) ); ?>" size="25" /></label>
        </p>

        <p>
            <label for="last_name"><?php _e( 'Sobrenome', 'mydomain' ) ?><br />
                <input type="text" name="last_name" id="last_name" class="input" value="<?php echo esc_attr( wp_unslash( $last_name ) ); ?>" size="25" /></label>
        </p>

        <?php
    }

    //2. Add validation. In this case, we make sure first_name is required.
    add_filter( 'registration_errors', 'myplugin_registration_errors', 10, 3 );
    function myplugin_registration_errors( $errors, $sanitized_user_login, $user_email ) {

        if ( empty( $_POST['first_name'] ) || ! empty( $_POST['first_name'] ) && trim( $_POST['first_name'] ) == '' ) {
            $errors->add( 'first_name_error', __( '<strong>Erro</strong>: Deve incluir um Nome.', 'mydomain' ) );
        }
        if ( empty( $_POST['last_name'] ) || ! empty( $_POST['last_name'] ) && trim( $_POST['first_name'] ) == '' ) {
            $errors->add( 'last_name_error', __( '<strong>Erro</strong>: Deve incluir um Sobrenome.', 'mydomain' ) );
        }
        return $errors;
    }

    //3. Finally, save our extra registration user meta.
    add_action( 'user_register', 'myplugin_user_register' );
    function myplugin_user_register( $user_id ) {
        if ( ! empty( $_POST['first_name'] ) ) {
            update_user_meta( $user_id, 'first_name', trim( $_POST['first_name'] ) );
            update_user_meta( $user_id, 'last_name', trim( $_POST['last_name'] ) );
        }
    }

//Registro apenas para email da utfpr
function is_valid_email_domain($login, $email, $errors ){
  $valid_email_domains = array("alunos.utfpr.edu.br","utfpr.edu.br");// whitelist email domain lists
  $valid = false;
  foreach( $valid_email_domains as $d ){
  $d_length = strlen( $d );
  $current_email_domain = strtolower( substr( $email, -($d_length), $d_length));
  if( $current_email_domain == strtolower($d) ){
  $valid = true;
  break;
  }
  }
  // if invalid, return error message
  if( $valid === false ){
  $errors->add('domain_whitelist_error',__( '<strong>Erro</strong>: Apenas registro para email educacional da UTFPR' ));
  }
 }
 add_action('register_post', 'is_valid_email_domain',10,3 );
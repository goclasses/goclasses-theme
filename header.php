<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>

  <!-- JS -->
  <script>document.documentElement.classList.add("js");</script>

</head>

<body>
  <header class="wrapper">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <div class="logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_nome_azul.svg" alt=""></a></div>
      <ul class="links">
          <li><a href="/quemsomos">Quem Somos</a></li>
          <li>
            <a href="<?php echo get_post_type_archive_link('materia'); ?>" class="desktop-link">Disciplinas</a>
            <input type="checkbox" id="show-materiais">
            <label for="show-materiais">Disciplinas</label>
            <ul>
              <?php
                $headerMaterias = new WP_Query(array(
                  'post_type' => 'materia'
                ));

                while($headerMaterias->have_posts()) {
                  $headerMaterias->the_post(); ?>

                  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

                <?php }
              ?>
      
            </ul>
          </li>
          <li><a href="/contato">Contato</a></li>
          <?php if(is_user_logged_in()) { ?>
            <li>
              <a class="desktop-link" href="<?php
                $user = wp_get_current_user();
                echo home_url() . '/author/' . $user->user_login;
              ?>"><?php echo $user->display_name; ?></a>
              <input type="checkbox" id="show-user">
              <label for="show-user"><?php echo $user->display_name; ?></label>
              <ul class="login-ul">
                <li><a href="<?php 
                  $allowed_roles = array('administrator');
                  if( !array_intersect($allowed_roles, $user->roles ) ) {
                    echo admin_url() . 'edit.php?post_type=projeto';
                  } else {
                    echo admin_url();
                  }
                ?>">DashBoard</a></li>
                <li><a href="<?php echo wp_logout_url(); ?>">Sair</a></li>
              </ul>
            </li>
          <?php } else{ ?>
            <li><a href="/login">Entrar</a></li>
          <?php } ?>
          
        </ul>
      </div>
      <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
      <form action="<?php echo home_url( '/' ); ?>" class="search-box" method="get">
        <input type="text" placeholder="Digite algo para pesquisar..." required value="<?php echo get_search_query(); ?>" name="s">
        <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
      </form>
    </nav>
  </header>

  <?php //var_dump($user); ?>
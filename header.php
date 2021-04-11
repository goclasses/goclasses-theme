<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>

  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/grid.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/inicio.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/quemsomos.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/projetos.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/material.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contato.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contato.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/index.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/archive-materia.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

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
      <div class="logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_nome.svg" alt=""></a></div>
      <ul class="links">
          <li><a href="/quemsomos">Quem Somos</a></li>
          <li><a href="/projetos">Projetos</a></li>
          <li>
            <a href="<?php echo get_post_type_archive_link('materia'); ?>" class="desktop-link">Materiais Didáticos</a>
            <input type="checkbox" id="show-materiais">
            <label for="show-materiais">Materiais Didáticos</label>
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
          <li><a href="/blog">Blog</a></li>    
          <li><a href="/login">Entrar</a></li>      
        </ul>
      </div>
      <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
      <form action="#" class="search-box">
        <input type="text" placeholder="Digite algo para pesquisar..." required>
        <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
      </form>
    </nav>
</header>
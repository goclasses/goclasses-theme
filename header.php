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
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/author.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- JS -->
  <script>document.documentElement.classList.add("js");</script>

</head>

  <header class="header">
      <div class="logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_nome.svg" alt="Logo GoClasses"></a></div>
      <nav class="navegacao_header">
        <ul>
          <li class="current-menu-item"><a href="/quemsomos">Quem Somos</a></li>
          <li><a href="/projetos">Projetos</a></li>
          <li class="parent">
            <a href="#">Materiais didáticos</a>
            <ul>
              <li><a href="#">Linguagem de Programação Estruturada</a></li>
              <li><a href="#">Comunicação de Dados</a></li>
              <li><a href="#">Programação Paralela e Distribuída</a></li>
            </ul>
          </li>
          <li><a href="/contato">Contato</a></li>
          <li><a href="#">Entrar</a></li>
        </ul>
      </nav>
      <input type="checkbox" name="bc2" id="bc2">
      <label for="bc2" class="search-icon">
        <i class="fa fa-search fa-flip-horizontal"></i>
        <i class="fa fa-close"></i>
      </label>
      <div class="search-box">
        <form class="form-search">
          <input type="search" placeholder="Pesquisar" class="search" required>
          <input type="submit" value="IR" class="sub">
        </form>
      </div>
  </header>

<body>
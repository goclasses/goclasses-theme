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

  <!-- JS -->
  <script>document.documentElement.classList.add("js");</script>

</head>

  <header class="header">
    <div class="container">
      <div class="logo grid-2"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_nome.svg" alt="Logo GoClasses"></div>
      <nav class="grid-9">
        <ul>
          <li class="current-menu-item"><a href="#">Quem Somos</a></li>
          <li><a href="#">Projetos</a></li>
          <li><a href="#">Materiais didáticos</a></li>
          <li><a href="#">Contato</a></li>
          <li><a href="#">Entrar</a></li>
        </ul>
      </nav>
      <div class="lupa grid-1"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/lupa.svg" alt="Lupa"></a></div>
    </div>
  </header>

<body>
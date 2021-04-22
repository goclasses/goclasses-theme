<?php get_header(); ?>

<!-- Começa código da página -->

<div class="container single-post">

  <div class="grid-12">
    <div class="conteudo-single-post">
      <?php while ( have_posts() ) {
        the_post(); 
      ?>

        <h1><?php the_title(); ?></h1>
        <p class="info-single-post"><?php the_author_meta( 'nicename'); ?> - <?php the_date('d/m/Y'); ?></p>

        <div class="imagem-single-post"><img src="<?php 
          $value = get_field('imagem');
          if( $value ) {
            echo $value;
          } else {
            echo get_template_directory_uri() . '/img/imagem-pc.jpg';
          }
        ?>" alt="Post <?php the_title(); ?>"></div>

        <div class="single-post-content">
          <?php the_content(); ?>
        </div>

        <div class="links_arquivos">
          <?php
            $url_artigo = get_field('url_artigo');
            $arquivo_download = get_field('arquivo_download');

            if($url_artigo) {
              echo '<a href="' . $url_artigo . '" target="_blank" class="botao-red-cinza" id="arquivo_artigo">Abrir artigo</a>';
            }
            if($arquivo_download) {
              echo '<a href="' . $arquivo_download . '" target="_blank" class="botao-red-cinza">Dowload artigo</a>';
            }
          
          ?>
        </div>

      <?php } ?>
    </div>
  </div>

</div>

<!-- Fecha while -->

<?php get_footer(); ?>
<?php get_header(); ?>

<!-- Começa código da página -->

<div class="container single-post">

  <div class="grid-12">
    <div class="conteudo-single-post">
      <?php while ( have_posts() ) {
        the_post(); 
      ?>
        <?php

          if(get_current_user_id() == get_the_author_meta('id')) { ?>
            <a href="<? echo get_edit_post_link(); ?>" class="edit_button"><p>EDITAR</p></a>
          <?php }

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

      <?php } ?>
    </div>
  </div>

</div>

<!-- Fecha while -->

<?php get_footer(); ?>
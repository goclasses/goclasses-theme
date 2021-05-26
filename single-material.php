<?php get_header(); ?>

<!-- Começa código da página -->

<div class="container single-post">

  <div class="grid-12">
    <div class="conteudo-single-post">
      <?php while ( have_posts() ) {
        the_post(); 
      ?>

        <h1><?php the_title(); ?></h1>

        <div class="single-post-content">
          <?php the_content(); ?>
        </div>

      <?php } ?>

      <?php

          if(get_current_user_id() == get_the_author_meta('id')) { ?>
            <a href="<? echo get_edit_post_link(); ?>" class="edit_button">EDITAR</a>
          <?php }

        ?>
    </div>
  </div>

</div>

<!-- Fecha while -->

<?php get_footer(); ?>
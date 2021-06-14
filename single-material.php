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
          <?php if(get_field('material_anterior')) { ?>
            <a href="<?php the_field('material_anterior'); ?>" class="botao-red-cinza botao_materiais">Material Anterior</a>
          <?php } ?>
          <?php if(get_field('proximo_material')) { ?>
            <a href="<?php the_field('proximo_material'); ?>" class="botao-red-cinza botao_materiais">Próximo Material</a>
          <?php } ?>
        </div>

      <?php } ?>

      <?php if(get_current_user_id() == get_the_author_meta('id')) { ?>
        <a href="<?php echo get_edit_post_link(); ?>" class="edit_button">EDITAR</a>
      <?php } ?>
    </div>
  </div>

</div>

<!-- Fecha while -->

<?php get_footer(); ?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Começa código da página -->

<section class="cabecalho-perfil">
  <div class="perfil-info-principal">
    <div class="foto-perfil"></div>
    <h1><?php the_author_meta( 'nicename'); ?></h1>
  </div>
</section>

<!-- projetos postados -->
<div class="container projetos-perfil">

  <h2 class="grid-12">Projetos de <?php the_author_meta( 'nicename'); ?>:</h2>

  <div class="projeto-ind grid-4">
    <div class="imagem-projeto">
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/dino-game.jpg" alt="Projeto Dino"></a>
    </div>
    <div class="projeto-info">
      <h3>Dino Game</h3>
      <p class="info-projeto-ind"><?php the_author_meta( 'nicename'); ?> - 17/03/2021</p>
      <p class="sobre-projeto-ind">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
      <a href="#" class="botao-red-cinza">abrir</a>
    </div>
  </div>

  <div class="projeto-ind grid-4">
    <div class="imagem-projeto">
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/c-program.jpg" alt="Programação C"></a>
    </div>
    <div class="projeto-info">
      <h3>Programação C</h3>
      <p class="info-projeto-ind"><?php the_author_meta( 'nicename'); ?> - 16/03/2021</p>
      <p class="sobre-projeto-ind">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
      <a href="#" class="botao-red-cinza">abrir</a>
    </div>
  </div>

  <div class="projeto-ind grid-4">
    <div class="imagem-projeto">
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/hangman-game.jpg" alt="Jogo da Forca"></a>
    </div>
    <div class="projeto-info">
      <h3>Jogo da Forca</h3>
      <p class="info-projeto-ind"><?php the_author_meta( 'nicename'); ?> - 15/03/2021</p>
      <p class="sobre-projeto-ind">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
      <a href="#" class="botao-red-cinza">abrir</a>
    </div>
  </div>

</div>

<!-- Fecha while -->
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
<?php 
  // Template Name: Contato
  get_header(); 
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Começa código da página -->

<section class="cabecalho-contato">
  <div>
    <h1><?php the_title(); ?></h1>
  </div>
</section>

<section class="contato container">
  <form action="" id="form_contato" method="POST" class="contato_form grid-6 formphp">
      <label for="nome">Nome</label>
      <input type="text" id="nome" name="nome" required>
      <label for="disciplina">Disciplina</label>
      <input type="text" id="disciplina" name="disciplina" required>
      <label for="email">E-mail</label>
      <input type="email" id="email" name="email" required>
      <label for="mensagem">Mensagem</label>
      <textarea id="mensagem" name="mensagem" required></textarea>
      <button id="enviar" name="enviar" type="submit" class="botao-red-cinza">Enviar</button>
  </form>

  <div class="grid-6 contato-info">
    <h3>Horário de Atendimento</h3>
    <?php the_field('horario_de_atendimento', $contato); ?>

    <h3 class="siga">Siga nossas redes</h3>
    <div class="links-redes-contato">
          <div class="github-redes">
            <a href="<?php the_field('link_github', $contato); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/github.svg" alt="github logo"></a>
          </div>
          <div class="instagram-redes">
            <a href="<?php the_field('link_instagram', $contato); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" alt="instagram logo"></a>
          </div>
          <div class="facebook-redes">
            <a href="<?php the_field('link_facebook', $contato); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" alt="facebook logo"></a>
          </div>
    </div>

  </div>

</section>

<!-- Fecha while -->
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
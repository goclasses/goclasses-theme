<?php 
  // Template Name: Página Inicial
  get_header(); 
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	

<!-- Começa código da página -->

<section class="carrossel" data-slide="carrossel">
  <div class="noticia-1">
    <div class="container">
        <h2>GoClasses source code</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
        <a href="#" class="botao-red">saiba mais</a>
    </div>
  </div>
  <div class="noticia-2">
    <div class="container">
        <h2>GoClasses source code</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
        <a href="#" class="botao-red">saiba mais</a>
    </div>
  </div>
  <div class="noticia-3">
    <div class="container">
        <h2>GoClasses source code</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
        <a href="#" class="botao-red">saiba mais</a>
    </div>
  </div>
</section>






<!-- JavaScript -->
<script src="<?php echo get_template_directory_uri(); ?>/js/simple-slide.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>


<!-- Fecha while -->
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
<?php 
  // Template Name: Página Inicial
  get_header(); 
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Começa código da página -->

<!-- Carrossel Começa -->
<section class="carrossel" data-slide="carrossel">
  <div class="noticia-1">
    <div class="grid-12">
      <div class="container">
          <h2>GoClasses source code</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
          <a href="#" class="botao-red">saiba mais</a>
      </div>
    </div>
  </div>
  <div class="noticia-2">
    <div class="grid-12">
      <div class="container">
          <h2>GoClasses source code</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
          <a href="#" class="botao-red">saiba mais</a>
      </div>
    </div>
  </div>
  <div class="noticia-3">
    <div class="grid-12">
      <div class="container">
          <h2>GoClasses source code</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
          <a href="#" class="botao-red">saiba mais</a>
      </div>
    </div>
  </div>
</section>
<!-- Carrossel termina -->

<!-- Sobre o projeta começa -->
<section class="container sobre-inicio">
  <div class="grid-6">
    <div class="logo-sobre">
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo do site GoClasses">
    </div>
  </div>
  <div class="grid-5">
    <h2>O projeto...</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
</section>
<!-- Sobre o projeto termina -->

<!-- Materiais começa -->
<section class="materiais-inicio">
  <h2>MATERIAIS PARA AS DICIPLINAS DE...</h2>
  <div class="container materiais-3">
  <?php
    $homepageMaterias = new WP_Query(array(
      'posts_per_page' => 3,
      'post_type' => 'materia'
    ));

    while($homepageMaterias->have_posts()) {
      $homepageMaterias->the_post(); ?>

      <div class="grid-4">
        <div class="material-individual">  
          <div class="imagem-material">
            <a href="<?php the_permalink(); ?>">
              <img src="<?php 
                $value = get_field('icone_materia');
                if( $value ) {
                  echo $value;
                } else {
                  echo get_template_directory_uri() . '/img/caderno.svg';
                }
              ?>" alt="Ícone da Matéria <?php the_title(); ?>">
            </a>
          </div>
          <h3><?php the_title(); ?></h3>
          <a href="<?php the_permalink(); ?>" class="botao-red">Saiba mais</a>
        </div>
      </div>

    <?php }
  ?>
  </div>
</section>
<!-- Materiais termina -->

<!-- Ultimos projetos e posts começa -->
<section class="container ultimos">
  <div class="ultimos-posts grid-6">
    <h2>últimos posts</h2>

    <div class="ultimo-po-individual">
      <h3>post 1</h3>
      <p class="ultimo-post-ind-info">John Doe - 10/03/2021</p>
      <p class="ultimo-post-ind-desc">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
      </p>
      <a href="#" class="botao-red-cinza">leia mais</a>
    </div>

    <div class="ultimo-po-individual">
      <h3>post 2</h3>
      <p class="ultimo-post-ind-info">John Doe - 10/03/2021</p>
      <p class="ultimo-post-ind-desc">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
      </p>
      <a href="#" class="botao-red-cinza">leia mais</a>
    </div>

    <div class="ultimo-po-individual">
      <h3>post 3</h3>
      <p class="ultimo-post-ind-info">John Doe - 10/03/2021</p>
      <p class="ultimo-post-ind-desc">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
      </p>
      <a href="#" class="botao-red-cinza">leia mais</a>
    </div>

  </div>

  <div class="ultimos-projetos grid-6">
    <h2>últimos projetos</h2>

    <div class="ultimo-po-individual">
      <h3>projeto 1</h3>
      <p class="ultimo-post-ind-info">John Doe - 10/03/2021</p>
      <p class="ultimo-post-ind-desc">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
      </p>
      <a href="#" class="botao-red-cinza">leia mais</a>
    </div>

    <div class="ultimo-po-individual">
      <h3>projeto 2</h3>
      <p class="ultimo-post-ind-info">John Doe - 10/03/2021</p>
      <p class="ultimo-post-ind-desc">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
      </p>
      <a href="#" class="botao-red-cinza">leia mais</a>
    </div>

    <div class="ultimo-po-individual">
      <h3>projeto 3</h3>
      <p class="ultimo-post-ind-info">John Doe - 10/03/2021</p>
      <p class="ultimo-post-ind-desc">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
      </p>
      <a href="#" class="botao-red-cinza">leia mais</a>
    </div>

  </div>
</section>
<!-- Ultimos projetos e posts termina -->


<!-- JavaScript -->
<script src="<?php echo get_template_directory_uri(); ?>/js/simple-slide.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>


<!-- Fecha while -->
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
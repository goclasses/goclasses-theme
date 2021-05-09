<?php 
  // Template Name: Página Inicial
  get_header(); 
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Começa código da página -->

<!-- Carrossel Começa -->

<?php
  $homepageCarrossel = new WP_Query(array(
    'posts_per_page' => 3,
    'category_name' => 'destaque',
    'post_type' => array('post', 'artigo')
  ));
  $contador_style = 1;
  while($homepageCarrossel->have_posts()) {
    $homepageCarrossel->the_post(); 
?>

<style type="text/css">
  .noticia-<?php echo $contador_style; ?> {
    background: url("<?php 
      $value = get_field('imagem');
      if( $value ) {
        echo $value;
      } else {
        echo get_template_directory_uri() . '/img/imagem-pc.jpg';
      }  
    ?>") rgba(0, 0, 0, 0.4) no-repeat center;
    background-size: cover;
    background-blend-mode: multiply;
  }
</style>

<?php 
    $contador_style++;
  }
?>
<section class="carrossel" data-slide="carrossel">
  <?php
    $contador_carrossel = 1;
    while($homepageCarrossel->have_posts()) {
      $homepageCarrossel->the_post(); 
  ?>

    <div class="noticia-<?php echo $contador_carrossel; ?>">
      <div class="grid-12">
        <div class="container">
            <h2><?php echo mb_strimwidth(get_the_title(), 0, 45, '...'); ?></h2>
            <p><?php echo mb_strimwidth(get_the_content(), 0, 140, '...'); ?></p>
            <a href="<?php the_permalink(); ?>" class="botao-red">saiba mais</a>
        </div>
      </div>
    </div>

  <?php 
      $contador_carrossel++;
    } 
  ?>
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
    <?php the_field('o_projeto', $inicio); ?>
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

    <?php
    $homepagePosts = new WP_Query(array(
      'posts_per_page' => 3,
      'post_type' => 'post'
    ));

    while($homepagePosts->have_posts()) {
      $homepagePosts->the_post(); ?>

      <div class="ultimo-po-individual">
        <h3><?php the_title(); ?></h3>
        <p class="ultimo-post-ind-info"><?php the_author_meta( 'nicename'); ?> - <?php the_time('d/m/Y'); ?></p>
        <p class="ultimo-post-ind-desc">
          <?php echo wp_trim_words(get_the_content(), 12); ?>
        </p>
        <a href="<?php the_permalink(); ?>" class="botao-red-cinza">leia mais</a>
      </div>

    <?php } ?>

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
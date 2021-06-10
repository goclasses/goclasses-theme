<?php 
  // Template Name: Página Inicial
  get_header(); 
  $id_pagina = get_page_by_title('inicio');
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Começa código da página -->

<!-- Carrossel Começa -->
<section class="carrossel">
    <div class="noticia">
    <section class="container sobre-inicio">
      <div class="grid-8">
        <p>Goclasses é um portal Web para inserção e publicação de materiais didáticos.</p>
        <p>Os conteúdos são gratuitos e foram desenvolvidos no projeto de Recursos Educacionais Abertos da UTFPR.</p>
      </div>
      <div class="grid-4">
        <div class="logo-sobre">
          <img src="<?php echo get_template_directory_uri(); ?>/img/humanbrain.png" alt="Logo do site GoClasses">
        </div>
      </div>
    </section>
    </div>
</section>
<!-- Carrossel termina -->

<!-- Materiais começa -->
<section class="materiais-inicio">
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
        <p class="ultimo-post-ind-info"><?php the_time('d/m/Y'); ?></p>
        <p class="ultimo-post-ind-desc">
          <?php echo wp_trim_words(get_the_content(), 12); ?>
        </p>
        <a href="<?php the_permalink(); ?>" class="botao-red-cinza">leia mais</a>
      </div>

    <?php } ?>

  </div>

  <div class="ultimos-projetos grid-6">
    <h2>últimos projetos</h2>

    <?php
    $homepageProjetos = new WP_Query(array(
      'posts_per_page' => 3,
      'post_type' => 'projeto'
    ));

    while($homepageProjetos->have_posts()) {
      $homepageProjetos->the_post(); ?>

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
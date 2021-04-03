<?php 
  // Template Name: Contato
  get_header(); 
?>

<!-- Começa código da página -->

<section class="cabecalho-contato">
  <div>
    <h1>MATERIAIS PARA AS DICIPLINAS DE...</h1>
  </div>
</section>

<!-- Materiais começa -->
<section class="archive-materia">
  <div class="container materiais-3-archive">
  <?php
    $homepageMaterias = new WP_Query(array(
      'post_type' => 'materia'
    ));

    while($homepageMaterias->have_posts()) {
      $homepageMaterias->the_post(); ?>

      <div class="grid-4">
        <div class="material-individual-archive">  
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

<?php get_footer(); ?>
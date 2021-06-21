<?php 
  get_header(); 
?>

<!-- Começa código da página -->

<section class="cabecalho-contato">
  <div>
    <h1>MATERIAIS DIDÁTICOS</h1>
  </div>
</section>

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
                echo $value;
              ?>" alt="Imagem da Matéria <?php the_title(); ?>">
            </a>
          </div>
          <h3><?php the_title(); ?></h3>
        </div>
      </div>

    <?php }
  ?>
  </div>
</section>
<!-- Materiais termina -->

<?php get_footer(); ?>
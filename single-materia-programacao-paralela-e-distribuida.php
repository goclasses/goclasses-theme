<?php 
  get_header(); 
?>

  <!-- Carrossel Começa -->
  <section class="carrossel carrossel-ppd">
      <div class="noticia">
      <section class="container sobre-inicio">
        <div class="grid-7">
          <p>“Número de transistores em um chip vai dobrar a cada 18 meses”. Gordon Moore</p>
        </div>
        <div class="grid-5">
          <div class="logo-sobre">
            <img src="<?php echo get_template_directory_uri(); ?>/img/red2.png" alt="Logo do site GoClasses">
          </div>
        </div>
      </section>
      </div>
  </section>
  <!-- Carrossel termina -->

  <div class="post-types-container">
    <nav>
      <ul>
        <li><a href="<?php echo get_post_type_archive_link( 'artigo' ) . '?mat=' . get_post_field( 'post_name', get_post() ); ?>">Artigos</a></li>
        <li><a href="<?php echo get_post_type_archive_link( 'avaliacao' ) . '?mat=' . get_post_field( 'post_name', get_post() ); ?>">Avaliações</a></li>
        <li><a href="<?php echo get_post_type_archive_link( 'plano_ensino' ) . '?mat=' . get_post_field( 'post_name', get_post() ); ?>">Planos de Ensino</a></li>
      </ul>
    </nav>
  </div>

  <!-- post  -->
  <div class="container">
    <?php
      $archiveConteudo = new WP_Query(array(
        'post_type' => 'material',
        'category_name' => 'programacao_paralela_e_distribuida',
        'order' => 'ASC',
        'orderby' => 'title',
        'posts_per_page' => -1,
      ));
      if($archiveConteudo->have_posts()){
    
        while($archiveConteudo->have_posts()) {
          $archiveConteudo->the_post(); 
    ?>

      <div class="post-page">
        <div class="grid-12">
          <div class="info-index-material">
            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
          </div>
        </div>
      </div>
    <?php }} else { ?>
      <div class="imagem-sem-conteudo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/no-data-amico.svg" alt="">
      </div>
    <?php } ?>
  </div>

<?php get_footer(); ?> 
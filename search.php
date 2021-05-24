<?php get_header(); 

  $s=get_search_query();

  // Argumemtos para as pesquisas
  $args = array(
    's' =>$s
  );

  $args_materia = array(
    's' =>$s,
    'post_type' => 'materia',
    'posts_per_page' => 10
  );

  $args_material = array(
    's' =>$s,
    'post_type' => 'material',
    'posts_per_page' => 10
  );

  $args_artigo = array(
    's' =>$s,
    'post_type' => 'artigo',
    'posts_per_page' => 10
  );

  $args_plano_ensino = array(
    's' =>$s,
    'post_type' => 'plano_ensino',
    'posts_per_page' => 10
  );

  $args_video_aula = array(
    's' =>$s,
    'post_type' => 'video_aula',
    'posts_per_page' => 10
  );

  $args_avaliacao = array(
    's' =>$s,
    'post_type' => 'avaliacao',
    'posts_per_page' => 10
  );

  $args_projeto = array(
    's' =>$s,
    'post_type' => 'projeto',
    'posts_per_page' => 10
  );

?>

<section class="cabecalho-index"></section> 

<div class="container">
  <div class="grid-12 search-page-go">
    <?php
    // Query principal
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
      _e("<h2 style='font-weight:bold;color:#000'>Resultados de pesquisa para: ".get_query_var('s')."</h2>");
    }else{
    ?>
      <h2 style='font-weight:bold;color:#000'>Nada encontrado para: <?php echo $s; ?></h2>
      <div class="alert alert-info">
        <p>Desculpe não encontramos nada. Pesquise por alguma outra palavra chave.</p>
      </div>
      <div class="imagem-sem-conteudo">
				<img src="<?php echo get_template_directory_uri(); ?>/img/no-data-amico.svg" alt="">
			</div>
    <?php } ?>
  </div>
  <div class="todas-pesquisas">
    <!-- Materia -->  
    <?php
    $the_query = new WP_Query ($args_materia);
    if ($the_query->have_posts()) { 
      echo '<h3 class="grid-12">Matérias</h3>';
      while ($the_query->have_posts()) {
        $the_query->the_post();
    ?>

      <div class="links-search grid-12">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </div>

    <?php } } ?>

    <!-- projeto -->  
    <?php
    $the_query = new WP_Query ($args_projeto);
    if ($the_query->have_posts()) { 
      echo '<h3 class="grid-12">Projetos</h3>';
      while ($the_query->have_posts()) {
        $the_query->the_post();
    ?>

      <div class="links-search grid-12">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </div>

    <?php } } ?>

    <!-- Material -->  
    <?php
    $the_query = new WP_Query ($args_material);
    if ($the_query->have_posts()) { 
      echo '<h3 class="grid-12">Materiais</h3>';
      while ($the_query->have_posts()) {
        $the_query->the_post();
    ?>

      <div class="links-search grid-12">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </div>

    <?php } } ?>

    <!-- artigo -->  
    <?php
    $the_query = new WP_Query ($args_artigo);
    if ($the_query->have_posts()) { 
      echo '<h3 class="grid-12">Artigos</h3>';
      while ($the_query->have_posts()) {
        $the_query->the_post();
    ?>

      <div class="links-search grid-12">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </div>

    <?php } } ?>

    <!-- plano_ensino -->  
    <?php
    $the_query = new WP_Query ($args_plano_ensino);
    if ($the_query->have_posts()) { 
      echo '<h3 class="grid-12">Planos de Ensino</h3>';
      while ($the_query->have_posts()) {
        $the_query->the_post();
    ?>

      <div class="links-search grid-12">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </div>

    <?php } } ?>

    <!-- video_aula -->  
    <?php
    $the_query = new WP_Query ($args_video_aula);
    if ($the_query->have_posts()) { 
      echo '<h3 class="grid-12">Vídeo Aulas</h3>';
      while ($the_query->have_posts()) {
        $the_query->the_post();
    ?>

      <div class="links-search grid-12">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </div>

    <?php } } ?>

    <!-- avaliacao -->  
    <?php
    $the_query = new WP_Query ($args_avaliacao);
    if ($the_query->have_posts()) { 
      echo '<h3 class="grid-12">Avaliações</h3>';
      while ($the_query->have_posts()) {
        $the_query->the_post();
    ?>

      <div class="links-search grid-12">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </div>

    <?php } } ?>

  </div>
</div>
<?php get_footer(); ?>
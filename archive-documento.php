<?php get_header(); ?>

<!-- Começa código da página -->

  <!-- Carrossel Começa -->
  <section class="carrossel carrossel-projetos">
      <div class="noticia">
      <section class="container sobre-inicio">
        <div class="grid-7">
          <h1>Documentos <?php
						if(htmlspecialchars($_GET["mat"]) == 'comunicacao-de-dados') echo 'CDD';
						if(htmlspecialchars($_GET["mat"]) == 'linguagem-de-programacao-estruturada') echo 'LPE';
						if(htmlspecialchars($_GET["mat"]) == 'programacao-paralela-e-distribuida') echo 'PPD';
					?></h1>
          <p>Documentos como nota de avaliações, planos de aula e de ensino.</p>
        </div>
        <div class="grid-5">
          <div class="logo-sobre">
            <img src="<?php echo get_template_directory_uri(); ?>/img/banner-docs.png" alt="Logo do site GoClasses">
          </div>
        </div>
      </section>
      </div>
  </section>
  <!-- Carrossel termina -->

	<div class="post-types-container">
    <nav>
      <ul>
        <li><a href="<?php echo get_post_type_archive_link( 'material_de_apoio' ) . '?mat=' . htmlspecialchars($_GET["mat"]); ?>">Material de Apoio</a></li>
        <li><a href="<?php echo get_post_type_archive_link( 'exercicio' ) . '?mat=' . htmlspecialchars($_GET["mat"]); ?>">Exercícios</a></li>
        <li><a href="<?php echo get_post_type_archive_link( 'documento' ) . '?mat=' . htmlspecialchars($_GET["mat"]); ?>">Documentos</a></li>
        <li><a href="<?php echo get_post_type_archive_link( 'projeto' ) . '?mat=' . htmlspecialchars($_GET["mat"]); ?>">Projetos</a></li>
      </ul>
    </nav>
  </div>

<!-- post  -->
<div class="container">
	<?php
    $archiveConteudo = new WP_Query(array(
			'post_type' => is_archive() ? get_queried_object()->name : false,
      'category_name' => htmlspecialchars($_GET["mat"]),
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
          <a href="<?php
						if(get_field('url_artigo')) {
							the_field('url_artigo');
						}
						if(get_field('arquivo_download')) {
							the_field('arquivo_download');
						}
					?>" target="_blank"><h2><?php the_title(); ?></h2></a>
				</div>
			</div>
		</div>
	<?php }} else { ?>
		<div class="imagem-sem-conteudo">
			<img src="<?php echo get_template_directory_uri(); ?>/img/no-data-amico.svg" alt="">
		</div>
	<?php } ?>
</div>

<!-- Fecha while -->

<?php get_footer(); ?>
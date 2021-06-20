<?php get_header(); ?>

<!-- Começa código da página -->

    <!-- Carrossel Começa -->
		<section class="carrossel carrossel-projetos">
      <div class="noticia">
      <section class="container sobre-inicio">
        <div class="grid-7">
          <h1>Projetos <?php
						if(htmlspecialchars($_GET["mat"]) == 'comunicacao-de-dados') echo 'CDD';
						if(htmlspecialchars($_GET["mat"]) == 'linguagem-de-programacao-estruturada') echo 'LPE';
						if(htmlspecialchars($_GET["mat"]) == 'programacao-paralela-e-distribuida') echo 'PPD';
					?></h1>
          <p>Projetos desenvolvidos pelos alunos que se destacaram durante o semestre.</p>
        </div>
        <div class="grid-5">
          <div class="logo-sobre">
            <img src="<?php echo get_template_directory_uri(); ?>/img/banner-projetos.png" alt="Logo do site GoClasses">
          </div>
        </div>
      </section>
      </div>
  </section>
  <!-- Carrossel termina -->

  <div class="post-types-container post-types-container-typema content">
    <nav>
      <ul class="links">
        <li><a href="<?php echo get_post_type_archive_link( 'material_de_apoio' ) . '?mat=' . htmlspecialchars($_GET["mat"]); ?>">Material de Apoio</a>
          <ul class="login-ul">
            <li>
              <a href="<?php echo get_post_type_archive_link( 'material_de_apoio' ) . '?mat=' . htmlspecialchars($_GET["mat"]) . '&mattype=livros'; ?>">Livros ou Apostilas</a>
              <a href="<?php echo get_post_type_archive_link( 'material_de_apoio' ) . '?mat=' . htmlspecialchars($_GET["mat"]) . '&mattype=videos'; ?>">Vídeos ou Podcasts</a>
              <a href="<?php echo get_post_type_archive_link( 'material_de_apoio' ) . '?mat=' . htmlspecialchars($_GET["mat"]) . '&mattype=slides'; ?>">Slides</a>
              <a href="<?php echo get_post_type_archive_link( 'material_de_apoio' ) . '?mat=' . htmlspecialchars($_GET["mat"]) . '&mattype=projetos'; ?>">Projetos</a>
              <a href="<?php echo get_post_type_archive_link( 'material_de_apoio' ) . '?mat=' . htmlspecialchars($_GET["mat"]) . '&mattype=jogos'; ?>">Jogos</a>
            </li>
          </ul>
        </li>
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

<!-- Fecha while -->

<?php get_footer(); ?>
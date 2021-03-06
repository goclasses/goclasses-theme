<?php get_header(); ?>

<!-- Começa código da página -->

  <!-- Carrossel Começa -->
  <section class="carrossel carrossel-projetos">
      <div class="noticia">
      <section class="container sobre-inicio">
        <div class="grid-7">
          <h1>Material de Apoio <?php
						if(htmlspecialchars($_GET["mat"]) == 'comunicacao-de-dados') echo 'CDD';
						if(htmlspecialchars($_GET["mat"]) == 'linguagem-de-programacao-estruturada') echo 'LPE';
						if(htmlspecialchars($_GET["mat"]) == 'programacao-paralela-e-distribuida') echo 'PPD';
					?></h1>
          <p>Neste espaço você encontra os Materiais de Apoio para o estudo das disciplinas.</p>
        </div>
        <div class="grid-5">
          <div class="logo-sobre">
            <img src="<?php echo get_template_directory_uri(); ?>/img/banner-material-apoio.png" alt="Logo do site GoClasses">
          </div>
        </div>
      </section>
      </div>
  </section>
  <!-- Carrossel termina -->

  <div class="post-types-container">
    <nav>
      <ul>
        <li><a href="<?php echo get_post_type_archive_link( 'material_de_apoio' ) . '?mat=' . htmlspecialchars($_GET["mat"]); ?>">Material de Apoio</a>
        </li>
        <li><a href="<?php echo get_post_type_archive_link( 'exercicio' ) . '?mat=' . htmlspecialchars($_GET["mat"]); ?>">Exercícios</a></li>
        <li><a href="<?php echo get_post_type_archive_link( 'projeto' ) . '?mat=' . htmlspecialchars($_GET["mat"]); ?>">Projetos</a></li>
      </ul>
    </nav>
  </div>

	<div class="post-types-container-material-apoio">
    <nav>
      <ul>
				<li><a href="<?php echo get_post_type_archive_link( 'material_de_apoio' ) . '?mat=' . htmlspecialchars($_GET["mat"]) . '&mattype=livros'; ?>">Livros ou Apostilas</a></li>
				<li><a href="<?php echo get_post_type_archive_link( 'material_de_apoio' ) . '?mat=' . htmlspecialchars($_GET["mat"]) . '&mattype=videos'; ?>">Vídeos ou Podcasts</a></li>
				<li><a href="<?php echo get_post_type_archive_link( 'material_de_apoio' ) . '?mat=' . htmlspecialchars($_GET["mat"]) . '&mattype=slides'; ?>">Slides</a></li>
				<li><a href="<?php echo get_post_type_archive_link( 'material_de_apoio' ) . '?mat=' . htmlspecialchars($_GET["mat"]) . '&mattype=projetos'; ?>">Projetos</a></li>
				<li><a href="<?php echo get_post_type_archive_link( 'material_de_apoio' ) . '?mat=' . htmlspecialchars($_GET["mat"]) . '&mattype=jogos'; ?>">Jogos</a></li>
      </ul>
    </nav>
  </div>

							

<?php
	$archiveConteudo = new WP_Query(array(
		'post_type' => is_archive() ? get_queried_object()->name : false,
		'category_name' => htmlspecialchars($_GET["mat"]),
	));

	$archiveJogo = new WP_Query(array(
		'post_type' => is_archive() ? get_queried_object()->name : false,
		'tax_query' => array(
			'relation' => 'AND',
			array(
				'taxonomy' => 'category',
				'field' => 'slug',
				'terms' => array( htmlspecialchars($_GET["mat"]) ),
			),
			array(
				'taxonomy' => 'category',
				'field' => 'slug',
				'terms' => array( 'jogo' ),
			),
		),
		'order' => 'ASC',
		'orderby' => 'title',
		'posts_per_page' => -1,
	));

	$archiveSlide = new WP_Query(array(
		'post_type' => is_archive() ? get_queried_object()->name : false,
		'tax_query' => array(
			'relation' => 'AND',
			array(
				'taxonomy' => 'category',
				'field' => 'slug',
				'terms' => array( htmlspecialchars($_GET["mat"]) ),
			),
			array(
				'taxonomy' => 'category',
				'field' => 'slug',
				'terms' => array( 'slide' ),
			),
		),
		'order' => 'ASC',
		'orderby' => 'title',
		'posts_per_page' => -1,
	));

	$archiveLink = new WP_Query(array(
		'post_type' => is_archive() ? get_queried_object()->name : false,
		'tax_query' => array(
			'relation' => 'AND',
			array(
				'taxonomy' => 'category',
				'field' => 'slug',
				'terms' => array( htmlspecialchars($_GET["mat"]) ),
			),
			array(
				'taxonomy' => 'category',
				'field' => 'slug',
				'terms' => array( 'link' ),
			),
		),
		'order' => 'ASC',
		'orderby' => 'title',
		'posts_per_page' => -1,
	));

	$archiveProjeto = new WP_Query(array(
		'post_type' => is_archive() ? get_queried_object()->name : false,
		'tax_query' => array(
			'relation' => 'AND',
			array(
				'taxonomy' => 'category',
				'field' => 'slug',
				'terms' => array( htmlspecialchars($_GET["mat"]) ),
			),
			array(
				'taxonomy' => 'category',
				'field' => 'slug',
				'terms' => array( 'projeto' ),
			),
		),
		'order' => 'ASC',
		'orderby' => 'title',
		'posts_per_page' => -1,
	));

	$archiveLivroApostila = new WP_Query(array(
		'post_type' => is_archive() ? get_queried_object()->name : false,
		'tax_query' => array(
			'relation' => 'AND',
			array(
				'taxonomy' => 'category',
				'field' => 'slug',
				'terms' => array( htmlspecialchars($_GET["mat"]) ),
			),
			array(
				'taxonomy' => 'category',
				'field' => 'slug',
				'terms' => array( 'livro-ou-apostila' ),
			),
		),
		'order' => 'ASC',
		'orderby' => 'title',
		'posts_per_page' => -1,
	));

?>











<!-- post  -->
<div class="container">
	<?php	if($archiveConteudo->have_posts() && !htmlspecialchars($_GET["mattype"])){ ?>

			<?php
			if ($archiveSlide->have_posts()) { 
				echo '<h3 class="grid-12 titulo-apoio">Slides</h3>';
				while ($archiveSlide->have_posts()) {
					$archiveSlide->the_post();
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

			<?php } } ?>

			<?php
			if ($archiveProjeto->have_posts()) { 
				echo '<h3 class="grid-12 titulo-apoio">Projetos</h3>';
				while ($archiveProjeto->have_posts()) {
					$archiveProjeto->the_post();
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

			<?php } } ?>

			<?php
			if ($archiveJogo->have_posts()) { 
				echo '<h3 class="grid-12 titulo-apoio">Jogos</h3>';
				while ($archiveJogo->have_posts()) {
					$archiveJogo->the_post();
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

			<?php } } ?>

			<?php
			if ($archiveLivroApostila->have_posts()) { 
				echo '<h3 class="grid-12 titulo-apoio">Livros ou Apostilas</h3>';
				while ($archiveLivroApostila->have_posts()) {
					$archiveLivroApostila->the_post();
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

			<?php } } ?>

			<?php
			if ($archiveLink->have_posts()) { 
				echo '<h3 class="grid-12 titulo-apoio">Vídeos ou Podcasts</h3>';
				while ($archiveLink->have_posts()) {
					$archiveLink->the_post();
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

			<?php } } ?>

	<?php } else if (htmlspecialchars($_GET["mattype"])){ ?>
			







		<?php
			if ($archiveSlide->have_posts() && htmlspecialchars($_GET["mattype"]) == 'slides') { 
				echo '<h3 class="grid-12 titulo-apoio">Slides</h3>';
				while ($archiveSlide->have_posts()) {
					$archiveSlide->the_post();
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

			<?php } } else if (htmlspecialchars($_GET["mattype"]) == 'slides') { ?>

				<div class="imagem-sem-conteudo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/no-data-amico.svg" alt="">
				</div>

			<?php } ?>

			<?php
			if ($archiveProjeto->have_posts() && htmlspecialchars($_GET["mattype"]) == 'projetos') { 
				echo '<h3 class="grid-12 titulo-apoio">Projetos</h3>';
				while ($archiveProjeto->have_posts()) {
					$archiveProjeto->the_post();
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

			<?php } } else if (htmlspecialchars($_GET["mattype"]) == 'projetos') { ?>

				<div class="imagem-sem-conteudo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/no-data-amico.svg" alt="">
				</div>

			<?php } ?>

			<?php
			if ($archiveJogo->have_posts() && htmlspecialchars($_GET["mattype"]) == 'jogos') { 
				echo '<h3 class="grid-12 titulo-apoio">Jogos</h3>';
				while ($archiveJogo->have_posts()) {
					$archiveJogo->the_post();
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

			<?php } } else if (htmlspecialchars($_GET["mattype"]) == 'jogos') { ?>

				<div class="imagem-sem-conteudo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/no-data-amico.svg" alt="">
				</div>

			<?php } ?>

			<?php
			if ($archiveLivroApostila->have_posts() && htmlspecialchars($_GET["mattype"]) == 'livros') { 
				echo '<h3 class="grid-12 titulo-apoio">Livros ou Apostilas</h3>';
				while ($archiveLivroApostila->have_posts()) {
					$archiveLivroApostila->the_post();
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

			<?php } } else if (htmlspecialchars($_GET["mattype"]) == 'livros') { ?>

				<div class="imagem-sem-conteudo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/no-data-amico.svg" alt="">
				</div>

			<?php } ?>

			<?php
			if ($archiveLink->have_posts() && htmlspecialchars($_GET["mattype"]) == 'videos') { 
				echo '<h3 class="grid-12 titulo-apoio">Vídeos ou Podcasts</h3>';
				while ($archiveLink->have_posts()) {
					$archiveLink->the_post();
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

			<?php } } else if (htmlspecialchars($_GET["mattype"]) == 'videos') { ?>

				<div class="imagem-sem-conteudo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/no-data-amico.svg" alt="">
				</div>

			<?php } ?>









	<?php } else if (!$archiveConteudo->have_posts()){ ?>
		<div class="imagem-sem-conteudo">
			<img src="<?php echo get_template_directory_uri(); ?>/img/no-data-amico.svg" alt="">
		</div>
	<?php } ?>
</div>

<!-- Fecha while -->

<?php get_footer(); ?>
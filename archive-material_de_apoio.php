<?php get_header(); ?>

<!-- Começa código da página -->

<section class="cabecalho-index">
  <div>
		<h1>Material de Apoio</h1>
  </div>
</section> 

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
	<?php	if($archiveConteudo->have_posts()){ ?>

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
				echo '<h3 class="grid-12 titulo-apoio">Links</h3>';
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

	<?php } else { ?>
		<div class="imagem-sem-conteudo">
			<img src="<?php echo get_template_directory_uri(); ?>/img/no-data-amico.svg" alt="">
		</div>
	<?php } ?>
</div>

<!-- Fecha while -->

<?php get_footer(); ?>
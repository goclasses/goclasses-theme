<?php get_header(); ?>

<!-- Começa código da página -->

<section class="cabecalho-index">
  <div>
		<h1><?php 
			if(get_the_archive_title() == 'Arquivos') {
				echo 'blog';
			} else {
				the_archive_title();
			}
		?></h1>
  </div>
</section> 

<!-- post  -->
<div class="container">
	<?php
    $archiveConteudo = new WP_Query(array(
			'post_type' => is_archive() ? get_queried_object()->name : false,
      'category_name' => htmlspecialchars($_GET["mat"]),
    ));

    while($archiveConteudo->have_posts()) {
      $archiveConteudo->the_post(); 
	?>

		<div class="post-page">
			<div class="grid-4">
				<div class="imagem-index">
					<a href="<?php the_permalink(); ?>"><img src="<?php 
						$value = get_field('imagem');
						if( $value ) {
							echo $value;
						} else {
							echo get_template_directory_uri() . '/img/imagem-pc.jpg';
						}
					?>" alt="Post <?php the_title(); ?>"></a>
				</div>
			</div>
			<div class="grid-8">
				<div class="info-index">
					<h2><?php the_title(); ?></h2>
					<p class="info-index-ind"><?php the_author_meta( 'nicename'); ?> - <?php the_time('d/m/Y'); ?></p>
					<p class="sobre-index-ind"><?php echo wp_trim_words(get_the_content(), 30); ?></p>
					<a href="<?php the_permalink(); ?>" class="botao-red-cinza">abrir</a>
				</div>
			</div>
		</div>
	<?php } ?>
</div>

<!-- Fecha while -->

<?php get_footer(); ?>
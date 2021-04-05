<?php get_header(); ?>

<!-- Começa código da página -->

<section class="cabecalho-index">
  <div>
    <h1>blog glocasses</h1>
  </div>
</section> 

<!-- post  -->
<div class="container post-page">


	<?php while ( have_posts() ) {
		the_post(); 
	?>

		<div class="projeto-ind grid-4">
			<div class="imagem-projeto">
				<a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/imagem-pc.jpg" alt="Post <?php the_title(); ?>"></a>
			</div>
			<div class="projeto-info">
				<h3><?php the_title(); ?></h3>
				<p class="info-projeto-ind"><?php the_author_meta( 'nicename'); ?> - <?php the_date('d/m/Y'); ?></p>
				<p class="sobre-projeto-ind"><?php echo wp_trim_words(get_the_content(), 12); ?></p>
				<a href="<?php the_permalink(); ?>" class="botao-red-cinza">abrir</a>
			</div>
		</div>

	<?php } ?>


</div>

<!-- Fecha while -->

<?php get_footer(); ?>
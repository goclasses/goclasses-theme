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
	<?php while ( have_posts() ) {
		the_post(); 
	?>
		<div class="post-page">
			<div class="grid-4">
				<div class="imagem-video_aula">
					<a href="<?php the_field('url_video_aula'); ?>" target="_blank"><img src="<?php 
						$url = get_field('url_video_aula');
						preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);
						$youtube_id = $match[1];
						echo 'https://img.youtube.com/vi/' . $youtube_id . '/mqdefault.jpg'
					?>" alt="Post <?php the_title(); ?>"></a>
				</div>
			</div>
			<div class="grid-8">
				<div class="info-index">
					<h2><?php the_title(); ?></h2>
					<p class="sobre-index-ind"><?php echo get_the_excerpt(); ?></p>
					<a href="<?php the_field('url_video_aula'); ?>" target="_blank" class="botao-red-cinza">abrir</a>
				</div>
			</div>
		</div>
	<?php } ?>
</div>

<!-- Fecha while -->

<?php get_footer(); ?>
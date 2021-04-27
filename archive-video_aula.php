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
		if($archiveConteudo->have_posts()){
	
  	  while($archiveConteudo->have_posts()) {
    	  $archiveConteudo->the_post(); 
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
	<?php }} else { ?>
		<div class="imagem-sem-conteudo">
			<img src="<?php echo get_template_directory_uri(); ?>/img/no-data-amico.svg" alt="">
		</div>
	<?php } ?>
</div>

<!-- Fecha while -->

<?php get_footer(); ?>
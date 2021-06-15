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
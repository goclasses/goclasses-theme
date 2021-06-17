<?php get_header(); ?>

<!-- Começa código da página -->

    <!-- Carrossel Começa -->
		<section class="carrossel carrossel-projetos">
      <div class="noticia">
      <section class="container sobre-inicio">
        <div class="grid-7">
          <h1>Projetos</h1>
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
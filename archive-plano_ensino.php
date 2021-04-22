<?php get_header(); ?>

<!-- Começa código da página -->

<section class="cabecalho-index">
  <div>
    <h1>Planos de Ensino </h1>
  </div>
</section> 

<!-- post  -->
<div class="container">

	<div class="archive_plano_ensino">

		<?php
			$archiveConteudo = new WP_Query(array(
				'post_type' => is_archive() ? get_queried_object()->name : false,
				'category_name' => htmlspecialchars($_GET["mat"]),
			));

			while($archiveConteudo->have_posts()) {
				$archiveConteudo->the_post(); 
		?>

			<div class="grid-12">
				<div class="single_plano">
					<a href="<?php the_field('download_pdf'); ?>" target="_blank" class="botao_archive_plano"><?php the_title(); ?></a>
				</div>
			</div>

		<?php } ?>

	</div>

</div>

<!-- Fecha while -->

<?php get_footer(); ?>
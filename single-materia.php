<?php 
  get_header(); 
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="cabecalho">
        <div>
            <h1><?php the_title(); ?></h1>
        </div>
    </section>

    
    <section class="material">
        <div class="container part1">

            <div class="grid-4 espacamento">
                <a href="<?php echo get_post_type_archive_link( 'material' ) . '?mat=' . get_post_field( 'post_name', get_post() ); ?>">
                <div class="imagem-fundo">
                    <h6>MATERIAIS DIDATICOS</h6>
                    <div class="imagem-material">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/material/materiais.png" alt="">
                    </div>
                </div>
                </a>
            </div>

            <div class="grid-4 espacamento">
                <a href="<?php echo get_post_type_archive_link( 'artigo' ) . '?mat=' . get_post_field( 'post_name', get_post() ); ?>">
                <div class="imagem-fundo">
                    <h6>ARTIGOS E PUBLICAÇÕES</h6>
                    <div class="imagem-material">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/material/artigos.png" alt="">
                    </div>
                </div>
                </a>
            </div>

            <div class="grid-4 espacamento">
                <a href="<?php echo get_post_type_archive_link( 'avaliacao' ) . '?mat=' . get_post_field( 'post_name', get_post() ); ?>">
                <div class="imagem-fundo">
                    <h6>AVALIAÇÕES E SIMULADOS</h6>
                    <div class="imagem-material">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/material/avaliacao.png" alt="">
                    </div>
                </div>
                </a>
            </div>

        </div>

    </section>

    <section class="material">
        <div class="container part2">
            <?php if (get_the_title() != "Linguagem de Programação Estruturada") {?>
            <div class="grid-4 espacamento">
                <a href="<?php echo get_post_type_archive_link( 'video_aula' ) . '?mat=' . get_post_field( 'post_name', get_post() ); ?>">
                <div class="imagem-fundo">
                    <h6>VÍDEOAULA GRAVADAS</h6>
                    <div class="imagem-material">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/material/video.png" alt="">
                    </div>
                </div>
                </a>
            </div>
            <?php }?>
 
            <div class="grid-4 espacamento">
                <a href="<?php echo get_post_type_archive_link( 'plano_ensino' ) . '?mat=' . get_post_field( 'post_name', get_post() ); ?>">
                <div class="imagem-fundo">
                    <h6>PLANO DE ENSINO</h6>
                    <div class="imagem-material">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/material/plano.png" alt="">
                    </div> 
                </div>
                </a>
            </div>

        </div>

    </section>

<!-- Fecha while -->
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?> 
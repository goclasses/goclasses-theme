<?php 
  // Template Name: Página Quem Somos
  get_header(); 
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="cabecalho">
        <div>
            <h1>MATERIAS DIDÁTICOS</h1>
        </div>
    </section>

    
    <section class="material">
        <h1>Linguagem De Programação Estruturada</h2>
        <div class="container part1">

            <div class="grid-4 espacamento">
                <div class="imagem-fundo">
                    <h6>ARTIGOS E PUBLICAÇÕES</h6>
                    <div class="imagem-material">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/material/artigos.png" alt="">
                    </div> 
                    <h3>Links para artigos, livros, livros didático-pedagógicos, revistas, cadernos temáticos.</h3>
                </div>
            </div>

            <div class="grid-4 espacamento">
                <div class="imagem-fundo">
                    <h6>ASSUNTOS REVELANTES</h6>
                    <div class="imagem-material">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/material/assuntos.png" alt="">
                    </div> 
                    <h3>Notícias sobre, documentários, vídeos relacionados.</h3>
                </div>
            </div>

            <div class="grid-4 espacamento">
                <div class="imagem-fundo">
                    <h6>MATERIAIS DIDATICOS</h6>
                    <div class="imagem-material">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/material/materiais.png" alt="">
                    </div> 
                    <h3>Coleções contendo dicas, planos de aulas, materiais para campanhas</h3>
                </div>
            </div>

        </div>

    </section>

    <section class="material part2">
        <div class=container>
            <div class="grid-4 espacamento">
                <div class="imagem-fundo">
                    <h6>VÍDEOAULA GRAVADAS</h6>
                    <div class="imagem-material">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/material/video.png" alt="">
                    </div> 
                    <h3>Aulas gravadas, Google Meet gravados e vídeos relacionados</h3>
                </div>
            </div>
 
            <div class="grid-4 espacamento">
                <div class="imagem-fundo">
                    <h6>PLANO DE ENSINO</h6>
                    <div class="imagem-material">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/material/plano.png" alt="">
                    </div> 
                    <h3>Informações da disciplina, o plano de ensino e planejamento da aula.</h3>
                </div>
            </div>

            <div class="grid-4 espacamento">
                <div class="imagem-fundo">
                    <h6>AVALIAÇÕES E SIMULADOS</h6>
                    <div class="imagem-material">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/material/avaliacao.png" alt="">
                    </div> 
                    <h3>Provas antigas, simulados, exercicios, avaliações de outras universidades.</h3>
                </div>
            </div>

        </div>

    </section>
    



<!-- Fecha while -->
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?> 
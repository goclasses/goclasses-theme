<?php 
  // Template Name: Página Projetos
  get_header(); 
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="cabecalho">
        <div>
            <h1>PROJETOS</h1>
        </div>
    </section>

    
    <section class="cursos">
        <h1>O CONHECIMENTO É COMPARTILHAVEL</h2>
        <div class=container>
            <div class="grid-4 ">
                <div class="imagem-fundo">
                    <div class="imagem-material">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/projetos/icon-1.png" alt="">
                    </div> 
                
                    <h3>linguagem de programação estruturada</h3>
                    <a href="#" class="botao-red">Saiba mais</a>
                </div>
            </div>

            <div class="grid-4">
                <div class="imagem-fundo">
                    <div class="imagem-material">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/projetos/icon-2.png" alt="">
                    </div> 
                
                    <h3>comunicação de dados</h3>
                    <a href="#" class="botao-red ">Saiba mais</a>
                </div>
            </div>

            <div class="grid-4">
                <div class="imagem-fundo">
                    <div class="imagem-material">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/projetos/icon-3.png" alt="">
                    </div> 
                
                    <h3>programação paralela e distribuída</h3>
                    <a href="#" class="botao-red ">Saiba mais</a>
                </div>
            </div>
        </div>
    </section>
    



<!-- Fecha while -->
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?> 
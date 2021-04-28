<?php 
  // Template Name: Página Quem Somos
  get_header(); 
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="cabecalho">
        <div>
            <h1>QUEM SOMOS?</h1>
        </div>
    </section>

    <section class="container missao_sobre">
        <div class="grid-7 informativo">
            <p><?php the_field('sobre_nos', $QuemSomos); ?></p>
        </div>
        <div class="grid-3">
            <div class="icone_equipe">
                <img src="<?php echo get_template_directory_uri(); ?>/img/equipe-de-trabalho.svg" alt="Icone Equipe">
            </div>
        </div>
    </section>

    <section class="perfil_equipe">
        <div class="container">
            <div class="grid-12">
                <div class="ajuste_prof">
                    <img class="teste" src="<?php echo get_template_directory_uri(); ?>/img/perfil-Giani.png" alt="">
                    <h2>Giani Carla Ito</h2>
                    <h3>PROFESSORA</h3>
                        <div class="perfil_devs">
                            <a href="<?php the_field('linkedin_perfil0', $QuemSomos); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/QS/likedin2.png" alt=""></a>
                            <a href="<?php the_field('lattes_Perfil0', $QuemSomos); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/QS/lattes2.png"  alt=""></a>
                        </div>
                    <p>É professora do Curso de Ciência da Computação da UTFPR-SH e coordenadora do projeto Plataforma Web para Boas Práticas Globais na prevenção e combate à COVID-19</p>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="grid-3 perfil-1">
            <img class="teste"  src="<?php echo get_template_directory_uri(); ?>/img/perfil-rander.png" alt="">
                <h2>Rander Carneiro</h2>
                <h3>ALUNO</h3>
                <div class="perfil_devs">

                    <a href="<?php the_field('linkedin_perfil1', $QuemSomos); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/QS/likedin2.png" alt=""></a>

                    <a href="<?php the_field('lattes_perfil1', $QuemSomos); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/QS/lattes2.png"  alt=""></a>

                </div>
                <p>Graduando em Ciência da Computação na UTFPR – Santa Helena, entusiasta em educação, matemática e desenvolvimento web front-end.</p>
            </div>

            <div class="grid-3 perfil-2">
                <img class="teste" src="<?php echo get_template_directory_uri(); ?>/img/perfil-erick.png" alt="">
                <h2>Erick Oliveira dos Santos</h2>
                <h3>ALUNO</h3>
                <div class="perfil_devs">

                    <a href="<?php the_field('linkedin_perfil2', $QuemSomos); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/QS/likedin2.png" alt=""></a>

                    <a href="<?php the_field('lattes_Perfil2', $QuemSomos); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/QS/lattes2.png"  alt=""></a>
                    
                </div>
                <p>Graduando em Ciência da Computação na UTFPR – Santa Helena, entusiasta em educação, matemática e desenvolvimento web front-end.</p>
            </div>

            <div class="grid-3 perfil-3">
                <img class="teste"  src="<?php echo get_template_directory_uri(); ?>/img/perfil-renato.png" alt="">
                <h2>Renato Sardinha Lopes</h2>
                <h3>ALUNO</h3>
                <div class="perfil_devs">

                    <a href="<?php the_field('linkedin_perfi30', $QuemSomos); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/QS/likedin2.png" alt=""></a>

                    <a href="<?php the_field('lattes_Perfil3', $QuemSomos); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/QS/lattes2.png"  alt=""></a>
                    
                </div>
                <p>Graduando em Ciência da Computação na UTFPR – Santa Helena, entusiasta em educação, matemática e desenvolvimento web front-end.</p>
            </div>

            <div class="grid-3 perfil-4">
                <img class="teste"  src="<?php echo get_template_directory_uri(); ?>/img/perfil-jose.png" alt="">
                <h2>José Lohame Capinga</h2>
                <h3>ALUNO</h3>
                <div class="perfil_devs">

                    <a href="<?php the_field('linkedin_perfil4', $QuemSomos); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/QS/likedin2.png" alt=""></a>

                    <a href="<?php the_field('lattes_Perfil4', $QuemSomos); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/QS/lattes2.png"  alt=""></a>
                    
                </div>
                <p>Graduando em Ciência da Computação na UTFPR – Santa Helena, entusiasta em educação, matemática e desenvolvimento web front-end.</p>
            </div>
        </div>
    </section>

    <section class="campus">
        <div class="container">
            <div class="grid-5 foto-utf">
                <img class="teste" src="<?php echo get_template_directory_uri(); ?>/img/campus.png" alt="">
            </div>
            <div class="grid-7 info-utf">
                <h3>UM POUCO SOBRE A NOSSA UTFPR</h3>
                <p><?php the_field('sobre_utfpr', $QuemSomos); ?></p>
            </div>
        </div>
    </section>



<!-- Fecha while -->
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?> 
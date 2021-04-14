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
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Aliquam erat volutpat. Vestibulum erat nulla, ullamcorper nec, rutrum non, nonummy ac, erat. Duis condimentum augue id magna.</p>
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
                    <p>É professora do Curso de Ciência da Computação da UTFPR-SH e coordenadora do projeto Plataforma Web para Boas Práticas Globais na prevenção e combate à COVID-19</p>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="grid-3 perfil-1">
            <img class="teste"  src="<?php echo get_template_directory_uri(); ?>/img/perfil-rander.png" alt="">
                <h2>Rander Carneiro</h2>
                <h3>ALUNO</h3>
                <p>Graduando em Ciência da Computação na UTFPR – Santa Helena, entusiasta em educação, matemática e desenvolvimento web front-end.</p>
            </div>

            <div class="grid-3 perfil-2">
                <img class="teste" src="<?php echo get_template_directory_uri(); ?>/img/perfil-erick.png" alt="">
                <h2>Erick Oliveira dos Santos</h2>
                <h3>ALUNO</h3>
                <p>Graduando em Ciência da Computação na UTFPR – Santa Helena, entusiasta em educação, matemática e desenvolvimento web front-end.</p>
            </div>

            <div class="grid-3 perfil-3">
                <img class="teste"  src="<?php echo get_template_directory_uri(); ?>/img/perfil-renato.png" alt="">
                <h2>Renato Sardinha Lopes</h2>
                <h3>ALUNO</h3>
                <p>Graduando em Ciência da Computação na UTFPR – Santa Helena, entusiasta em educação, matemática e desenvolvimento web front-end.</p>
            </div>

            <div class="grid-3 perfil-4">
                <img class="teste"  src="<?php echo get_template_directory_uri(); ?>/img/perfil-jose.png" alt="">
                <h2>José Lohame Capinga</h2>
                <h3>ALUNO</h3>
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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
            </div>
        </div>
    </section>



<!-- Fecha while -->
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?> 
<?php 
  // Template Name: Página Quem Somos
  get_header(); 
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <!-- Carrossel Começa -->
  <section class="carrossel carrossel-projetos">
      <div class="noticia">
      <section class="container sobre-inicio">
        <div class="grid-7">
          <h1>Quem Somos</h1>
          <p>Somos do curso de ciência da computação da UTFPR Campus Santa Helena.</p>
        </div>
        <div class="grid-5">
          <div class="logo-sobre">
            <img src="<?php echo get_template_directory_uri(); ?>/img/banner-quemsomos.png" alt="Logo do site GoClasses">
          </div>
        </div>
      </section>
      </div>
  </section>
  <!-- Carrossel termina -->

    <section class="container missao_sobre">
        <div class="grid-12 informativo">
        <p>Somos uma equipe do projeto para Recursos Educacionais Abertos da UNIVERSIDADE TECNOLÓGICA FEDERAL DO PARANÁ.</p> 
        <p>A equipe é coordenada pela professora Giani Carla Ito com participação de acadêmicos do curso de ciência da computação.</p>
        <p>O aluno bolsista Erick Oliveira dos Santos foi o web designer e responsável pelo desenvolvimento do portal.</p>
        <p>Como voluntários ao projeto participaram os alunos Rander Carneiro da UTFPR-SH e José Capina da UTFPR-PG.</p>
        </div>
    </section>

    <section class="perfil_equipe">
        <div class="container">
            <div class="grid-12">
                <a href="<?php 
                    $user = get_user_by('slug','giito');
                    echo get_author_posts_url($user->ID); 
                ?>">
                    <div class="ajuste_prof">
                        <img class="teste" src="<?php echo get_template_directory_uri(); ?>/img/perfil-Giani.png" alt="">
                        <h2>Giani Carla Ito</h2>
                        <h3>PROFESSORA</h3>
                            <div class="perfil_devs">
                                <a href="<?php the_field('linkedin_perfil0', $QuemSomos); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/QS/likedin2.png" alt=""></a>
                                <a href="<?php the_field('lattes_perfil0', $QuemSomos); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/QS/lattes2.png"  alt=""></a>
                            </div>
                        <p>Professora do Curso de Ciência da Computação da UTFPR-SH e coordenadora do projeto Portal da Programação GoClasses.</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="container">

            <div class="grid-4 perfil-1">
                <img class="teste" src="<?php echo get_template_directory_uri(); ?>/img/perfil-erick.png" alt="">
                <h2>Erick Oliveira dos Santos</h2>
                <h3>ALUNO</h3>
                <div class="perfil_devs">

                <a href="<?php the_field('linkedin_perfil1', $QuemSomos); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/QS/likedin2.png" alt=""></a>

                <a href="<?php the_field('lattes_perfil1', $QuemSomos); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/QS/lattes2.png" alt=""></a>
                    
                </div>
                <p>Graduando em Ciência da Computação na UTFPR–SH. Aluno bolsista,   responsável pelo desenvolvimento do portal da programação GoClasses.</p>
            </div>

            <div class="grid-4 perfil-2">
                <img class="teste"  src="<?php echo get_template_directory_uri(); ?>/img/perfil-rander.png" alt="">
                <h2>Rander Carneiro</h2>
                <h3>ALUNO</h3>
                <div class="perfil_devs">

                    <a href="<?php the_field('linkedin_perfil2', $QuemSomos); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/QS/likedin2.png" alt=""></a>

                    <a href="<?php the_field('lattes_perfil2', $QuemSomos); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/QS/lattes2.png"  alt=""></a>

                </div>
                <p>Graduando em Ciência da Computação na UTFPR–SH. Aluno voluntário do projeto, colaborou com o design do portal.</p>
            </div>


            <div class="grid-4 perfil-4">
                <img class="teste"  src="<?php echo get_template_directory_uri(); ?>/img/perfil-jose.png" alt="">
                <h2>José Lohame Capinga</h2>
                <h3>ALUNO</h3>
                <div class="perfil_devs">

                <a href="<?php the_field('linkedin_perfil4', $QuemSomos); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/QS/likedin2.png" alt=""></a>

                <a href="<?php the_field('lattes_perfil4', $QuemSomos); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/QS/lattes2.png"  alt=""></a>
                    
                </div>
                <p>Graduando em Ciência da Computação na UTFPR–PG. Aluno voluntário do projeto colaborou com a inserção e elaboração do conteúdo do portal.</p>
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
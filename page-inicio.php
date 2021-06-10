<?php 
  // Template Name: Página Inicial
  get_header(); 
  $id_pagina = get_page_by_title('inicio');
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Começa código da página -->

<!-- Carrossel Começa -->
<section class="carrossel">
    <div class="noticia">
    <section class="container sobre-inicio">
      <div class="grid-8">
        <p>Goclasses é um portal Web para inserção e publicação de materiais didáticos.</p>
        <p>Os conteúdos são gratuitos e foram desenvolvidos no projeto de Recursos Educacionais Abertos da UTFPR.</p>
      </div>
      <div class="grid-4">
        <div class="logo-sobre">
          <img src="<?php echo get_template_directory_uri(); ?>/img/humanbrain.png" alt="Logo do site GoClasses">
        </div>
      </div>
    </section>
    </div>
</section>
<!-- Carrossel termina -->

<!-- Materiais começa -->
<section class="materiais-inicio">
  <div class="container materiais-3">
  <?php
    $homepageMaterias = new WP_Query(array(
      'posts_per_page' => 3,
      'post_type' => 'materia'
    ));

    while($homepageMaterias->have_posts()) {
      $homepageMaterias->the_post(); ?>

      <div class="grid-4">
        <div class="material-individual">  
          <div class="imagem-material">
            <a href="<?php the_permalink(); ?>">
              <img src="<?php 
                $value = get_field('icone_materia');
                echo $value;
              ?>" alt="Imagem da Matéria <?php the_title(); ?>">
            </a>
          </div>
          <h3><?php the_title(); ?></h3>
        </div>
      </div>

    <?php }
  ?>
  </div>
</section>
<!-- Materiais termina -->

<!-- Pessoas destaques -->
<section class="materiais-inicio pessoas-destaque-container">
  <h2>ALUNOS DESTAQUES</h2>
  <div class="container materiais-3">
    <div class="grid-4">
      <div class="pessoa-destaque">
        <div class="material-individual pessoa-destaque-box">
          <div class="pessoa-destaque-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/perfil-erick.png" alt="">
          </div>
          <p class="destaque-nome">Erick santos</p>
          <p class="destaque-disciplina">Linguagem de Programação Estruturada</p>
        </div>
      </div>
    </div>

    <div class="grid-4">
      <div class="pessoa-destaque">
        <div class="material-individual pessoa-destaque-box">  
          <div class="pessoa-destaque-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/perfil-Giani.png" alt="">
          </div>
          <p class="destaque-nome">Giani Carla Ito</p>
          <p class="destaque-disciplina">Comunicação de Dados</p>
        </div>
      </div>
    </div>

    <div class="grid-4">
      <div class="pessoa-destaque">
        <div class="material-individual pessoa-destaque-box">
          <div class="pessoa-destaque-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/perfil-rander.png" alt="">
            <p class="destaque-nome">Rander Carneiro</p>
            <p class="destaque-disciplina">Programação Paralela e Distribuída</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Pessoas destaques -->

<!-- JavaScript -->
<script src="<?php echo get_template_directory_uri(); ?>/js/simple-slide.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>


<!-- Fecha while -->
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
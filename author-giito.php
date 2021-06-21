
<?php 
  $id_pagina = get_page_by_title('giani');
  $instagram = get_field('instagram', $id_pagina);
  $facebook = get_field('facebook', $id_pagina);
  get_header(); 
?>

<!-- Começa código da página -->

<!-- Puxando o atual autor e suas info -->
<?php
  $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>

  <section class="cabecalho-giani"></section>

  <main class="pagina-giani">
    <div class="container">
      <div class="giani-info">
        <div class="grid-6">
          <h1><?php the_field('nome_completo', $id_pagina) ?></h1>    
          <p class="area-atuacao"><?php the_field('area_de_atuacao', $id_pagina); ?></p>
          <ul>
            <a href="mailto:<?php the_field('email', $id_pagina); ?>" target="_blank">
              <li>
                <div class="social_logo"><img src="<?php echo get_template_directory_uri(); ?>/img/info-email.png" alt=""></div>
                <p><?php the_field('email', $id_pagina); ?></p>
              </li>
            </a>
            <a href="<?php echo $instagram['link_instagram']; ?>" target="_blank">
              <li>
                <div class="social_logo"><img src="<?php echo get_template_directory_uri(); ?>/img/info-insta.png" alt=""></div>
                <p>@<?php echo $instagram['usuario_instagram']; ?></p>
              </li>
            </a>
            <a href="<?php echo $facebook['link_facebook']; ?>" target="_blank">
              <li>
                <div class="social_logo"><img src="<?php echo get_template_directory_uri(); ?>/img/info-facebook.png" alt=""></div>
                <p>/<?php echo $facebook['usuario_facebook']; ?></p>
              </li>
            </a>
            <a href="<?php the_field('lattes', $id_pagina); ?>" target="_blank">
              <li>
                <div class="social_logo"><img src="<?php echo get_template_directory_uri(); ?>/img/info-lattes.png" alt=""></div>
                <p>Lattes</p>
              </li>
            </a>
          </ul>
        </div>
        <div class="grid-6">
          <div class="imagem_giani">
            <img src="<?php the_field('foto_de_perfil', $id_pagina); ?>" alt="Foto Giani">
          </div>
        </div>
      </div>
      <div class="resumo_giani">
        <div class="grid-12">
          <p><?php the_field('resumo_sobre', $id_pagina); ?></p>
        </div>
      </div>
      <div class="carreira_giani">
        <h2>Carreira</h2>

        <?php
          $projetosGiani = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'projeto_giani'
          ));

          while($projetosGiani->have_posts()) {
            $projetosGiani->the_post(); 
        ?>

        <div class="grid-12">
          <div class="projetos_giani">
            <h3><?php the_title(); ?> (<?php the_field('ano_inicio_do_projeto') ?>-<?php the_field('ano_termino_do_projeto') ?>)</h3>
            <p class="area_projeto"><?php the_field('area_do_projeto') ?></p>
            <p class="descricao_projeto_giani"><?php the_content(); ?></p>
          </div>
        </div>

        <?php } ?>

      </div>
    </div>
  </main>
    
  </div>

<?php get_footer(); ?>
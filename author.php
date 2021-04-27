<?php get_header(); ?>

<!-- Começa código da página -->

<!-- Puxando o atual autor e suas info -->
<?php
  $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>

<!-- Style para foto de perfil -->
<style type="text/css">
  .foto-perfil {
    display: inline-block;
    height: 100px;
    width: 100px;
    background: url("<?php echo get_avatar_url( get_the_author_meta( 'ID')); ?>") no-repeat center;
    background-size: cover;
    border-radius: 50%;
  }
</style>

<!-- Cabeçalho como foto e nome do autor -->
<section class="cabecalho-perfil">
  <div class="perfil-info-principal">
    <div class="foto-perfil"></div>
    <h1><?php echo $curauth->first_name . ' ' . $curauth->last_name; ?></h1>
  </div>
</section>

<!-- Código para Query de projetos -->
<?php
  $projetosAutor = new WP_Query(array(
    'post_type' => 'projeto',
    'author' => $curauth->ID
  ));

  // Inicio do IF para verificação se o aluno tem projetos postados
  if($projetosAutor->have_posts()){
?>

  <!-- projetos postados -->
  <div class="container projetos-perfil"> 
    <h2 class="grid-12">Projetos de <?php echo $curauth->first_name . ' ' . $curauth->last_name; ?></h2>
  </div>

  <!-- Início de container para projetos -->
  <div class="container">

    <!-- While para loop de projetos postados -->
    <?php
      while($projetosAutor->have_posts()) {
        $projetosAutor->the_post(); 
    ?>

      <!-- Template posts --> 
      <div class="post-page">
        <div class="grid-4">
          <div class="imagem-index">
            <a href="<?php the_permalink(); ?>"><img src="<?php 
              $value = get_field('imagem');
              if( $value ) {
                echo $value;
              } else {
                echo get_template_directory_uri() . '/img/imagem-pc.jpg';
              }
            ?>" alt="Post <?php the_title(); ?>"></a>
          </div>
        </div>
        <div class="grid-8">
          <div class="info-index">
            <h2><?php the_title(); ?></h2>
            <p class="info-index-ind"><?php the_author_meta( 'nicename'); ?> - <?php the_time('d/m/Y'); ?></p>
            <p class="sobre-index-ind"><?php echo wp_trim_words(get_the_content(), 30); ?></p>
            <a href="<?php the_permalink(); ?>" class="botao-red-cinza">abrir</a>
          </div>
        </div>
      </div>

    <!-- Finalizando if e while de projetos postados -->
    <?php } } else { ?>
      <!-- Imagem para quando não há projetos postados -->
      <div class="imagem-sem-conteudo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/no-data-amico.svg" alt="">
      </div>
    <?php } ?>
    
  </div>

<?php get_footer(); ?>
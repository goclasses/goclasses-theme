<?php get_header(); ?>

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
          <h1>Giani Carla Ito</h1>    
          <p class="area-atuacao">Doutora em Computação Aplicada</p>
          <ul>
            <a href="mailto:gianiito@gmail.com" target="_blank">
              <li>
                <div class="social_logo"><img src="<?php echo get_template_directory_uri(); ?>/img/info-email.png" alt=""></div>
                <p>gianiito@utfpr.edu.br</p>
              </li>
            </a>
            <a href="#" target="_blank">
              <li>
                <div class="social_logo"><img src="<?php echo get_template_directory_uri(); ?>/img/info-insta.png" alt=""></div>
                <p>@itogiani</p>
              </li>
            </a>
            <a href="#" target="_blank">
              <li>
                <div class="social_logo"><img src="<?php echo get_template_directory_uri(); ?>/img/info-facebook.png" alt=""></div>
                <p>/giani.ito</p>
              </li>
            </a>
            <a href="#" target="_blank">
              <li>
                <div class="social_logo"><img src="<?php echo get_template_directory_uri(); ?>/img/info-lattes.png" alt=""></div>
                <p>Lattes</p>
              </li>
            </a>
          </ul>
        </div>
        <div class="grid-6">
          <div class="imagem_giani">
            <img src="<?php echo get_template_directory_uri(); ?>/img/giani.jpg" alt="Foto Giani">
          </div>
        </div>
      </div>
      <div class="resumo_giani">
        <div class="grid-12">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
      <div class="carreira_giani">
        <h2>Carreira</h2>
        <div class="grid-12">
          <div class="projetos_giani">
            <h3>Nome do Projeto (2020-2021)</h3>
            <p class="area_projeto">Área do Projeto</p>
            <p class="descricao_projeto_giani">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="projetos_giani">
            <h3>Nome do Projeto (2020-2021)</h3>
            <p class="area_projeto">Área do Projeto</p>
            <p class="descricao_projeto_giani">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="projetos_giani">
            <h3>Nome do Projeto (2020-2021)</h3>
            <p class="area_projeto">Área do Projeto</p>
            <p class="descricao_projeto_giani">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
    </div>
  </main>
    
  </div>

<?php get_footer(); ?>
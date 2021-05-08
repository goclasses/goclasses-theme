<?php $contato = get_page_by_title('contato'); ?>

<footer class="footer">
  <div class="footer-fundo">
    <div class="container">  

      <div class="logos-footer grid-4">
        <div class="goclasses-footer-logo">
          <a href="<? site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_nome.svg" alt="logo goclasses"></a>
        </div>
        <div class="utfpr-footer-logo">
          <a href="http://www.utfpr.edu.br/campus/santahelena" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/utfpr.png" alt="logo utfpr"></a>
        </div>
        <div class="byncsa-footer">
          <a href="https://creativecommons.org/licenses/by-nc-sa/3.0/br/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/by-nc-sa.svg" alt="by-nc-sa svg"></a>
        </div>
      </div>

      <div class="links-uteis grid-5">
        <h2>links úteis</h2>
        <div class="links-foooter">
                <?php the_field('link_util', $contato); ?>
        </div>
      </div>

      <div class="contato-footer grid-3">
        <h2>contato</h2>

        <p><?php the_field('email', $contato); ?></p>
        <p><?php the_field('telefone', $contato); ?></p>
        <p><?php the_field('localizacao', $contato); ?></p>

        <div class="links-redes-contato">
          <div class="github-redes">
            <a href="<?php the_field('link_github', $contato); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/github.svg" alt="github logo"></a>
          </div>
          <div class="instagram-redes">
            <a href="<?php the_field('link_instagram', $contato); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" alt="instagram logo"></a>
          </div>
          <div class="facebook-redes">
            <a href="<?php the_field('link_facebook', $contato); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" alt="facebook logo"></a>
          </div>
        </div>
      </div>

    </div>

  </div>

  <div class="copy">
    <div class="container">
      <p class="grid-12">GoClasses&copy;<?php echo date('Y'); ?> - Alguns direitos reservados.</p>
    </div>
  </div>

</footer>


  <?php wp_footer(); ?>
</body>
</html>
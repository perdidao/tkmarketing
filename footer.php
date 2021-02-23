    <footer class="footer">
      <section class="container footer__container">
        <div class="footer__inst">
          <figure class="footer__logo">
            <img src="<?php echo get_template_directory_uri() ?>/static/images/footer-logo.png" alt="<?php bloginfo('title') ?>">
          </figure>
          <div class="footer__contacts">
            <?php if (get_theme_mod('endereco')): ?>
            <p class="footer__text">
              <?php echo get_theme_mod('endereco'); ?>
            </p>
            <?php
              endif;
              if (get_theme_mod('telefone')):
            ?>
            <p class="footer__text">
              <?php echo get_theme_mod('telefone'); ?>
            </p>
            <?php
              endif;
              if (get_theme_mod('whats')):
            ?>
            <p class="footer__text">
              <?php echo get_theme_mod('whats'); ?> <span class="footer__small">whatsapp</span>
            </p>
            <?php endif; ?>
            <nav class="footer-social">
            <?php if (get_theme_mod('facebook_link')): ?>
              <a href="<?php echo get_theme_mod('facebook_link'); ?>" target="_blank" title="Curta nossa página no Facebook" class="footer-social__link"><i class="fab fa-facebook-square"></i></a>
            <?php
              endif;
              if (get_theme_mod('instagram_link')):
            ?>
              <a href="<?php echo get_theme_mod('instagram_link'); ?>" target="_blank" title="Siga-nos no Instagram" class="footer-social__link"><i class="fab fa-instagram"></i></a>
            <?php
              endif;
            ?>
            </nav>
          </div>
        </div>
        <div class="footer__navs">

          <nav class="footer__nav">

            <h2 class="footer__title">
              Método TK
            </h2>

            <ul class="footer__list">
            <?php
              wp_nav_menu([
                'theme_location' => 'method_nav',
                'container' => false,
                'echo' => true,
                'items_wrap' => '%3$s',
                'depth' => 0,
              ]);
            ?>
            </ul>

          </nav>

          <nav class="footer__nav">

            <h2 class="footer__title">
              Conteúdos
            </h2>

            <ul class="footer__list">
            <?php
              wp_nav_menu([
                'theme_location' => 'content_nav',
                'container' => false,
                'echo' => true,
                'items_wrap' => '%3$s',
                'depth' => 0,
              ]);
            ?>
            </ul>

          </nav>

          <div class="footer__partners-wrapper">

            <h2 class="footer__title">
              Parceiros
            </h2>

            <div class="footer__partners">

              <img src="<?php echo get_template_directory_uri() ?>/static/images/google-partner.png" alt="Google Partner" class="footer__partner">

              <img src="<?php echo get_template_directory_uri() ?>/static/images/moskit-afiliados.png" alt="Moskit Afiliados" class="footer__partner">

              <img src="<?php echo get_template_directory_uri() ?>/static/images/rd-partner.png" alt="RD Station Gold Partner" class="footer__partner">

              <img src="<?php echo get_template_directory_uri() ?>/static/images/facebook-partner.png" alt="Facebook Blueprint Certification" class="footer__partner">

            </div>

          </div>

        </div>
      </section>
    </footer>

    <section class="copyrights">
      <div class="container copyrights__container">
        <p class="copyrights__text">
          <?php bloginfo('title'); ?> © <?php echo Date('Y'); ?> | Todos os direitos reservados
        </p>
        <img src="<?php echo get_template_directory_uri() ?>/static/images/signature-logo.png" alt="<?php bloginfo('title'); ?>" class="copyrights__signature">
      </div>
    </section>

    <?php wp_footer(); ?>

    <!-- Livereload -->
    <script src="//localhost:35729/livereload.js"></script>
  </body>
</html>

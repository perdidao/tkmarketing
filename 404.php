<?php get_header(); ?>

<section class="page-header">
  <div class="container">
    <h1 class="page-header__title">
      Você parece perdido :/
    </h1>
  </div>
</section>

<main class="container">
  <p class="error-404">
    Parece que você clicou em algum link quebrado.<br>
    Você pode voltar para a <a href="<?php bloginfo('url'); ?>" title="Voltar para a página inicial">página inicial</a> ou dar uma olhada na nossa <a href="<?php bloginfo('url'); ?>/artigos" title="Ir para a sessão de artigos">sessão de artigos</a>.
  </p>
</main>

<?php get_footer(); ?>

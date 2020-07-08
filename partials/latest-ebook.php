<section class="latest-ebook">
  <?php
    query_posts([
      'post_type' => 'materiais',
      'posts_per_page' => 1
    ]);

    if(have_posts()):
      while(have_posts()):
        the_post();
  ?>
  <figure class="latest-ebook__image">
    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
  </figure>
  <div class="latest-ebook__info">
    <h2 class="latest-ebook__title"><?php the_title(); ?></h2>
    <div class="latest-ebook__description"><?php the_excerpt(); ?></div>
    <div class="latest-ebook__actions">
      <a href="<?php the_field('link'); ?>" target="_blank" title="Clique para baixar o e-book <?php the_title(); ?>" class="latest-ebook__download">
        Baixar
      </a>
      <a href="<?php bloginfo('url'); ?>/materiais" title="Veja todos os nossos e-books" class="latest-ebook__more">Outros materiais</a>
    </div>
  </div>
  <?php
      endwhile;
    endif;

    wp_reset_query();
  ?>
</section>

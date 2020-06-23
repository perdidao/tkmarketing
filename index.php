<?php

  get_header();

?>

<section class="page-header">
  <div class="container">
    <h1 class="page-header__title">
      Artigos
    </h1>
  </div>
</section>

<main class="posts__container container">

  <section class="posts">
    <?php

      if(get_posts()):

        while(have_posts()):

          the_post();
    ?>

    <article class="posts__item">

      <figure class="posts__thumb">
        <img src="<?php the_post_thumbnail_url('highlight'); ?>" alt="<?php the_title(); ?>">
      </figure>

      <div class="posts__info">

        <h2 class="posts__title">
          <?php the_title(); ?>
        </h2>

        <p class="posts__excerpt">
          <?php the_excerpt(); ?>
        </p>

        <a href="<?php the_permalink(); ?>" title="Continuar lendo sobre <?php the_title(); ?>" class="posts__read">Continuar lendo</a>

      </div>

    </article>

    <?php
      endwhile;
    ?>

    <?php

      echo paginate_links();

      else:

        echo '<p class="posts__blank">Nenhum post encontrado</p>';

      endif;

    ?>
  </section>

  <aside class="sidebar">
    Sidebar
  </aside>

</main>
<?php

  get_footer();

?>

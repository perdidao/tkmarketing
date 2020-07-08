<?php
  // Posts page
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

  <section class="posts content">
    <?php
      if(get_posts()):
        while(have_posts()):
          the_post();
    ?>

    <article class="posts__item">

      <figure class="posts__thumb">
        <a href="<?php the_permalink(); ?>" title="Continuar lendo sobre <?php the_title(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
      </figure>

      <div class="posts__info">

        <h2 class="posts__title">
          <a href="<?php the_permalink(); ?>" title="Continuar lendo sobre <?php the_title(); ?>"><?php the_title(); ?></a>
        </h2>

        <div class="posts__excerpt">
          <?php the_excerpt(); ?>
        </div>

        <a href="<?php the_permalink(); ?>" title="Continuar lendo sobre <?php the_title(); ?>" class="posts__read">Continuar lendo</a>

      </div>

    </article>

    <?php
      endwhile;
    ?>

    <section class="pagination">
      <?php echo paginate_links(); ?>
    </section>

    <?php
      else:
        echo '<p class="posts__blank">Nenhum post encontrado</p>';
      endif;
    ?>
  </section>

  <?php get_template_part('partials/sidebar') ?>

</main>
<?php
  get_footer();
?>

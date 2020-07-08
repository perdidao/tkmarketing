<?php
  /**
   * Template name: Páginas de conteúdo
   * @package tkmarketing
   */

  get_header();

  if(get_posts()):
    while(have_posts()):
      the_post();
?>

  <section class="page-header">
    <div class="container">
      <h1 class="page-header__title">
        <?php the_title(); ?>
      </h1>
    </div>
  </section>

  <main class="page__container container">
    <article class="content-description">
      <?php the_content(); ?>
    </article>

    <ul class="content-list">
      <?php
        query_posts([
          'post_type' => get_field('post-type'),
          'posts_per_page' => -1,
        ]);

        if(get_posts()):
          while(have_posts()):
            the_post();
      ?>
      <li class="content-item">
        <?php if (get_field('link')): ?>
        <figure class="content-item__image">
          <a href="<?php the_field('link'); ?>" title="<?php the_title(); ?>">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
          </a>
        </figure>
        <h3 class="content-item__title">
          <a href="<?php the_field('link'); ?>" title="<?php the_title(); ?>">
            <?php the_title(); ?>
          </a>
        </h3>
        <div class="content-item__excerpt">
          <?php the_excerpt(); ?>
        </div>
        <a href="<?php the_field('link'); ?>" target="_blank" class="content-item__link">
          Confira agora
        </a>
        <?php else : ?>
        <figure class="content-item__image">
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
          </a>
        </figure>
        <h3 class="content-item__title">
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_title(); ?>
          </a>
        </h3>
        <div class="content-item__excerpt">
          <?php the_excerpt(); ?>
        </div>
        <a href="<?php the_permalink(); ?>" target="_blank" class="content-item__link">
          Continuar lendo
        </a>
        <?php endif; ?>
      </li>
      <?php
          endwhile;
        endif;

        wp_reset_query();
      ?>
    </ul>
  </main>

<?php
    endwhile;
  endif;

  get_footer();
?>

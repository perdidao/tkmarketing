<section class="highlight">
  <div class="container highlight__container">

    <?php
      query_posts([
        'post_type' => 'post',
        'posts_per_page' => 1,
      ]);

      if (have_posts()) :
        while (have_posts()) :
          the_post();
    ?>

    <article class="highlight-post">

      <div class="highlight-post__info">

        <h2 class="highlight-post__title">
          <?php the_title(); ?>
        </h2>

        <p class="highlight-post__excerpt">
          <?php
            $full_excerpt = get_the_excerpt();
            $stripped_excerpt = strip_tags($full_excerpt);
            $cropped_excerpt = substr($stripped_excerpt, 0, 90) . '...';
            echo $cropped_excerpt;
          ?>
        </p>

        <a href="<?php the_permalink(); ?>" title="Continuar lendo sobre <?php the_title(); ?>" class="highlight-post__read">
          Continuar lendo
        </a>

      </div>

      <figure class="highlight-post__image">
        <a href="<?php the_permalink(); ?>" title="Continuar lendo sobre <?php the_title(); ?>">
          <img src="<?php the_post_thumbnail_url('highlight') ?>" alt="Imagem relacionada ao <?php the_title(); ?>">
        </a>
      </figure>

    </article>

    <?php
        endwhile;
      endif;
    ?>

    <ul class="highlight-social">

      <?php if (get_theme_mod('facebook_link')) : ?>
      <li class="highlight-social__item">
        <a href="<?php echo get_theme_mod('facebook_link'); ?>" class="highlight-social__link highlight-social__link--facebook">
          /tkmarketing
        </a>
      </li>
      <?php endif; ?>
      <?php if (get_theme_mod('instagram_link')) : ?>
      <li class="highlight-social__item">
        <a href="<?php echo get_theme_mod('instagram_link'); ?>" class="highlight-social__link highlight-social__link--instagram">
          @tkmarketingdigital
        </a>
      </li>
      <?php endif; ?>
      <?php if (get_theme_mod('linkedin_link')) : ?>
      <li class="highlight-social__item">
        <a href="<?php echo get_theme_mod('linkedin_link'); ?>" class="highlight-social__link highlight-social__link--linkedin">
          /tkmarketing
        </a>
      </li>
      <?php endif; ?>

    </ul>

  </div>
</section>
